jQuery(function($) {
    $('#sign-form').click(function() {
        signContract();
    });
});

function signContract() {
    const form = document.getElementById('signContractForm');
    const formData = new FormData();
    const formElements = form.elements;

    for (let i = 0; i < formElements.length; i++) {
      const element = formElements[i];
    
      if ((element.type === 'checkbox' || element.type === 'radio') && !element.checked) {
        continue;
      }
    
      formData.append(element.name, element.value);
    }

    let contract_id = document.getElementById('contract_id').value;
    formData.append('contract_id', contract_id);

  
    fetch('/contracts/do_sign', {
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
        window.location.href = '/contracts/signed/'+contract_id;
      } else {
        alert(data.error_message || 'An unknown error occurred');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred while saving data');
    });
  }