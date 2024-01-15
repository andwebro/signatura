document.addEventListener("DOMContentLoaded", function() {

	const elements = document.querySelectorAll('.default_elems');

	elements.forEach(function(element) {
	  element.addEventListener('click', function() {

	  	if(!element.classList.contains("js_disabled")){

	  		let blog_id = element.getAttribute('data-owner-id');
	  		let category_id = element.getAttribute('data-cid');
	  		let url = '/admin/blog/set_default_category/'+blog_id+'/'+category_id;

			const options = {
			  method: "GET",
			  headers: {
			    "Content-Type": "application/json"
			  }
			};

			let alert_elem = document.getElementById('blog_to_category_alert');

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
			    let active_icon = element.getAttribute('data-active-icon');
			    let inactive_icon = element.getAttribute('data-inactive-icon');

			    let active_text = element.getAttribute('data-active-text');
			    let inactive_text = element.getAttribute('data-inactive-text');

				const defaultLinks = document.querySelectorAll("a.default_elems");
				const inactive_inner_html = '<i class="fas '+inactive_icon+'"> '+inactive_text+'</i>';
				const active_inner_html = '<i class="fas '+active_icon+'"> '+active_text+'</i>';

				defaultLinks.forEach(link => {
				  link.innerHTML = inactive_inner_html;
				  link.classList.remove("text-purple-500");
				});

				element.classList.add("text-purple-500");
				element.innerHTML = active_inner_html;

			  })
			  .catch(error => {
			  	alert(error);
			  });

	  	}


	  });
	});


    document.addEventListener('input', function(event) {
    	let element = event.target;
        if (element.classList.contains('category_toggle')) {
        	let cid = element.value;
        	let parent = element.getAttribute('data-parent');
        	let spinner = document.getElementById(element.id+'_spinner');
        	spinner.classList.remove('hidden');
        	
        	let url = '/admin/blog/';
			if (element.checked) {
				url += 'select_category/';
				
			} else {
				url += 'remove_category/';
			}

			url += parent+"/"+cid;

			const options = {
			  method: "GET",
			  headers: {
			    "Content-Type": "application/json"
			  }
			};

			let alert_elem = document.getElementById('blog_to_category_alert');

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