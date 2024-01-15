document.addEventListener("DOMContentLoaded", function() { 

  document.addEventListener('click', function(event) {
      if (event.target.classList.contains('fa-trash')) {
        var button = event.target.parentNode;
        if (button.classList.contains('js_delete')) {
          const confirm_text = button.dataset.confirm;
          const v_action = button.dataset.action;
          const parent_target = button.dataset.parent;

          if(window.confirm(confirm_text)){
              fetch(v_action, {
                  method: 'get',
              }).then((response) => {
                  return response.json()
              }).then((res) => {
                  if (res.status == 1) {
                      retrieve_list_html(parent_target);
                  }
              }).catch((error) => {
                  console.log(error)
              })            
          }


        }
      }
  });

  
  var addImageButton = document.getElementById("add-image-button");
  addImageButton.addEventListener("click", function() {

    var url = addImageButton.dataset.url;
    loadModalForm(url);
    
  });

});