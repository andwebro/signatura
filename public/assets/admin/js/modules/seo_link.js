document.addEventListener("DOMContentLoaded", function() {

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('seo_edit_group')) {

        	document.querySelector('#google_link').classList.add('hidden');
        	document.querySelector('.seo_edit_group').classList.add('hidden');

  			let element = document.querySelector('#form_fields');
  			let btn = document.querySelector('#submit_btn');

  			element.classList.remove('hidden');
  			btn.classList.remove('hidden');
			element.classList.add('opacity-0', 'animate-fade-in');
			btn.classList.add('opacity-0', 'animate-fade-in');

			setTimeout(() => {
			    element.classList.remove('opacity-0');
			    btn.classList.remove('opacity-0');
			}, 200);

        }
    });

});