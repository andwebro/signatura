document.addEventListener("DOMContentLoaded", function() {
	document.addEventListener('click', function(event) {
        if (event.target.classList.contains('js_modal_chatgpt')) {
            const v_action = event.target.dataset.action;
            loadChatGPTModalForm(v_action);
        }
        if (event.target.classList.contains('js_chatgpt_generate')) {
            submitChatGPTGenerateForm();
        }
        if (event.target.classList.contains('copy_gpt_text')) {
            chatGPT_copyButton(event.target.getAttribute('data-rel'));
        }
        if (event.target.classList.contains('copy_gpt_image')) {
            chatGPT_copyImageButton(event.target.getAttribute('data-rel'));
        }




	});
});

async function loadChatGPTModalForm(url) {
    var element =  document.getElementById('general-modal');
    if (typeof(element) == 'undefined' || element == null)
    {
        let modalElement = document.createElement("div");
        modalElement.id = "general-modal";
        modalElement.classList.add("fixed", "top-0", "left-0", "right-0", "z-50", "hidden", "w-full", "p-4", "overflow-x-hidden", "overflow-y-auto", "md:inset-0", "h-modal", "md:h-full");
        modalElement.innerHTML = `
        <div class="relative w-full h-full max-w-10xl md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 id="general-modal-title" class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                    </h3>
                </div>
                <div class="p-6 space-y-6" id="general-modal-body"></div>
                <div class="items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 text-center">
                    <button type="button" class="close text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Close</button>
                </div>
            </div>

        </div>

        <div class="modal-content">
          <span class="close">&times;</span>
          <div id="modal-body"></div>
        </div>
        `;
        document.body.appendChild(modalElement);
    }


    // set the modal menu element
    const $targetEl = document.getElementById('general-modal');

    // options with default values
    const options = {
      backdrop: 'dynamic',
      backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
      closable: true,
    };

    const modal = new Modal($targetEl, options);

    // fetch the content and inject it into the modal
    try {
        let response = await fetch(url);
        let res = await response.json();
        document.getElementById('general-modal-title').innerHTML = res.title;
        document.getElementById('general-modal-body').innerHTML = res.data;
        modal.show();
    } catch (error) {
        //console.error(error);
    }

    // add the close button functionality
    let closeButtons = document.querySelectorAll(".close");
    closeButtons.forEach(elem => { 
        elem.addEventListener("click", () => {
            modal.hide();
            document.getElementById('general-modal-title').innerHTML = "";
            document.getElementById('general-modal-body').innerHTML = "";
        });
    });

    

}

function submitChatGPTGenerateForm() {
    const es = document.querySelectorAll('.js_error');
    es.forEach((e) => {e.innerHTML = '';});

    let form = document.getElementById('ajax-form-modal');
    let v_action = $(form).data('action');
    let v_context = $(form).data('context');
    let v_target = $(form).data('reload');

    let v_alert = 'ajx-alert';
    if(v_context!="" && typeof v_context!=="undefined")
        v_alert = 'ajx-'+v_context+'-alert';

    const alert_elem = document.getElementById(v_alert);
    alert_elem.innerHTML = '';
    alert_elem.classList.remove("bg-red-100", "border", "border-red-400", "text-red-700", "bg-green-100", "border-green-400", "text-green-700");
    alert_elem.style.display = "none";

    document.getElementById('chatgpt_form_box').style.display = 'none';
    document.getElementById('chat_result').innerHTML="<center><img src='/assets/admin/img/ax-loader.gif' /></center>";
    document.getElementById('chatgpt_results_box').style.display = '';

    fetch(v_action, {
      method: 'POST',
      body: new FormData(form)
    })
    .then((response) => {
        return response.json()
    })
    .then((res) => {
        if(res.status==0){
            document.getElementById('chatgpt_form_box').style.display = '';
            document.getElementById('chatgpt_results_box').style.display = 'none';
            if(res.message!=""){
                alert_elem.innerHTML = res.message;
                alert_elem.classList.add("bg-red-100", "border", "border-red-400", "text-red-700");
                alert_elem.style.display = "block";
                console.log(res);
                let fields = res.fields_status;
                for (const key in fields) {
                    let elem_string = "";
                    if(v_context!="")
                        elem_string += v_context + "_";
                    elem_string += key;
                    console.log("Elem: "+elem_string);
                    let h = document.getElementById('ajx-'+elem_string+'-error');
                    h.innerHTML = fields[key];
                }
            }

        }else{

            if(res.message!=""){
                alert_elem.innerHTML = res.message;
                alert_elem.classList.add("bg-green-100", "border", "border-green-400", "text-green-700");
                alert_elem.style.display = "block";
            }

			let result_html = "";
			for (let i = 0; i < res.result.length; i++) {
			  result_html += "<div>Suggestion. " + (i + 1) + "<textarea id='gpt_suggestion_"+i+"' class='w-full h-auto border-2 rounded-lg mt-4'>" + res.result[i] + "</textarea><a class='cursor-pointer p-1 m-1 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 copy_gpt_text' data-rel='gpt_suggestion_"+i+"'><i class='fas fa-copy'></i> Copy</a></div><hr>";
			}
            if(res.images.length>0){
                result_html += "<div class='flex'>";
                for (let i = 0; i < res.images.length; i++) {
                  result_html += "<div class='mr-4'><img src='"+res.images[i]+"' class='w-full h-auto'><a class='cursor-pointer p-1 m-1 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 copy_gpt_image' data-rel='"+res.images[i]+"'><i class='fas fa-copy'></i> Upload image</a></div>";
                }
                document.getElementById('chat_result').innerHTML = result_html;
                result_html += "</div>";
            }

            setTimeout(function(){ 
                
            }, 200)

        }
      
    })
    .catch(error => {
        console.log("Error");
      // handle any errors that occurred during the request here
    });

}

function chatGPT_copyImageButton(image_url){
    let form_data = new FormData();
    let owner = document.getElementById('chat_owner').value;
    let owner_id = document.getElementById('chat_owner_id').value;
    form_data.append("image", image_url);

    fetch("/admin/uploads/fetch_image/"+owner+"/"+owner_id, {
      method: 'POST',
      body: form_data
    })
    .then((response) => {
        return response.json()
    })
    .then((res) => {
        if(res.status==0){
            alert("An error occured!");
        }else{
            alert("Image fetched succesfully!");
        }
    });

}

function chatGPT_copyButton(textarea_id){
  const tempTextarea = document.getElementById(textarea_id);
  
  tempTextarea.select();
  document.execCommand('copy');
}