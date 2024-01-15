document.addEventListener("DOMContentLoaded", function() { 
	document.addEventListener('click', function(event) {
		let elem = event.target;
		if(elem.id=="new_tag"){
		  const tagContainer = document.getElementById('add_new_tag_container');
		  if (elem.checked) {
		    tagContainer.style.display = 'block';
		  } else {
		    tagContainer.style.display = 'none';
		  }
		}
	})

});