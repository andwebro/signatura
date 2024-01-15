jQuery(function($) {
    var item_id = document.getElementById("template_id").value;
    var template_content = document.getElementById("fb-json-form").innerHTML;

    var $fbEditor = $(document.getElementById('fb-editor')),
      $formContainer = $(document.getElementById('fb-rendered-form')),
      fbOptions = {

        
        onSave: function() {

          $($formContainer).formRender({
            formData: formBuilder.formData
          });

          saveFormData(formBuilder.formData, $("#fb-rendered-form").html());
        }
      },

    formBuilder = $fbEditor.formBuilder(fbOptions);
    document.getElementById("saveTemplateData").addEventListener("click", () => formBuilder.actions.save());
    document.getElementById("appendPlaceholder").addEventListener("click", () => {

      var field = {
        type: 'paragraph',
        class: 'form-control',
        label: '{{place_holder}}'
      };
      var index = undefined;

      formBuilder.actions.addField(field, index);
    });

    if(item_id>0 && template_content!=""){
        setTimeout(() => {
            formBuilder.actions.setData(JSON.parse(template_content));
        }, 1000);
    }
      
    $('.edit-form', $formContainer).click(function() {
      $fbEditor.toggle();
      $formContainer.toggle();
    });
});

function saveFormData(j_data, h_data) {
    const formData = new FormData();
    formData.append('id', document.getElementById('template_id').value);
    formData.append('name', document.getElementById('template_name').value);
    formData.append('j_data', JSON.stringify(j_data));
    formData.append('h_data', h_data);
  
    fetch('/templates/save', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Failed to save data');
      }
      return response.json();
    })
    .then(data => {
      if (data.success) {
        window.location.href = '/templates';
      } else {
        alert(data.error_message || 'An unknown error occurred');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred while saving data');
    });
  }
  