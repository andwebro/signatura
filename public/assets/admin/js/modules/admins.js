document.addEventListener("DOMContentLoaded", function() {

    document.addEventListener('input', function(event) {
    	let element = event.target;
        if (element.classList.contains('category_toggle')) {
        	let cid = element.value;
        	let parent = element.getAttribute('data-parent');
        	let spinner = document.getElementById(element.id+'_spinner');
        	spinner.classList.remove('hidden');
        	
        	let url = '/admin/admins/';
			if (element.checked) {
				url += 'select_group/';
				
			} else {
				url += 'remove_group/';
			}

			url += parent+"/"+cid;

			const options = {
			  method: "GET",
			  headers: {
			    "Content-Type": "application/json"
			  }
			};

			let alert_elem = document.getElementById('user_to_group_alert');

			fetch(url, options)
			  .then(response => {
			    if (!response.ok) {
			      throw new Error(`HTTP error ${response.status}`);
			    }
			    return response.json();
			  })
			  .then(data => {
			    alert_elem.innerHTML = data.message;
			    alert_elem.classList.remove("hidden");
			    setTimeout(function(){spinner.classList.add('hidden');}, 500);
			    setTimeout(function(){alert_elem.classList.add('hidden');}, 1000);
			  })
			  .catch(error => {
			    setTimeout(function(){spinner.classList.add('hidden');}, 500);
			  	alert(error);
			  });

        	
        }
    });

});