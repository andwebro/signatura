
jQuery(".parsedVideoWrapper .videoUrl").on("keyup paste", function() {
    var t = $(this).parents(".parsedVideoWrapper"),
        i = $(this).val(),
        n = parseVideo(i),
        a = "";
        //debug("Video change detected. Video data is", n)
        n.valid ? (
            t.find(".videoError").hide(), 
            t.find(".videoId").val(n.id), 
            t.find(".videoProvider").val(n.type),
            t.find(".v_id").html(n.id),
            t.find(".v_provider").html(n.type),
            t.find(".summary").show(), 
            t.find(".video_type_icon").removeClass("social_youtube").removeClass("social_vimeo").addClass("social_"+n.type),
            t.find(".videoValid").val(!0), "youtube" == n.type ? (a = "//img.youtube.com/vi/" + n.id + "/hqdefault.jpg", t.find(".previewUrl").val(a), t.find(".previewImage").attr("src", a), e.update()) : "vimeo" == n.type && jQuery.ajax({
                type: "GET",
                url: "//vimeo.com/api/v2/video/" + n.id + ".json",
                jsonp: "callback",
                timeout: 1e4,
                dataType: "jsonp",
                success: function(e) {
                    debug("Vimeo response:", e), a = e[0].thumbnail_large
                },
                error: function() {
                    debug("Vimeo fail response:"), a = "//img.youtube.com/vi/0/0.jpg"
                },
                complete: function() {
                    t.find(".previewUrl").val(a), t.find(".previewImage").attr("src", a).fadeIn()
                }
            })) : (t.find(".videoError").html("<i class='fa fa-warning'></i> Invalid video url").fadeIn(), t.find(".videoValid").val(!1), t.find(".videoId").val(""), t.find(".videoProvider").val(""), t.find(".previewUrl").val(""), t.find(".previewImage").val(""), e.update())
});

function validateUrl(e) {
    var t = e.find(".urlValidationError"),
        i = e.find("input"),
        n = i.val(),
        a = /^http([s]?):\/\/.*/;
    a.test(n) === !0 || 0 == n.length ? (t.hide(), debug("Url is valid")) : (t.html("Url is not valid!").fadeIn(), debug("Url is not valid"))
}

function parseVideo(e) {
    var t = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/,
        i = e.match(t);
    return i && 11 == i[2].length ? {
        valid: !0,
        type: "youtube",
        id: i[2]
    } : (t = /http(s)?:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/, i = e.match(t), i ? {
        valid: !0,
        type: "vimeo",
        id: i[3]
    } : {
        valid: !1
    })
}

function debug() {
    if (!("undefined" != typeof ENVIRONMENT && "production" != ENVIRONMENT || "undefined" != typeof APP_MODEL && 1615711 == APP_MODEL.meta.id)) return !1;
    for (var e = 0; e < arguments.length; e++) window.console && console.log(arguments[e])
}


document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = document.querySelectorAll('img[loading="lazy"]');

    lazyImages.forEach(function (image) {
        image.classList.remove('hidden');
    });

    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        document.querySelector('aside').classList.toggle('hidden');
    });
    
    const form = document.getElementById("ajax-form-validate");
    if(typeof form!=="undefined" && form !== null){
        attachSubmitEventToFormInline(form);
    }

    /** Load all listers on page */
    const lists_elements = document.querySelectorAll(".js_module_list");
    lists_elements.forEach(elem => { 
        
        //console.log($( elem ).prop("id"));
        retrieve_list_html($( elem ).prop("id"));
    });

    attachQuillEditorToTextareas();


    /** Load all datepickers on page */
    const date_elements = document.querySelectorAll(".datepicker");
    date_elements.forEach(elem => { 
        flatpickr(elem, {
          dateFormat: 'Y-m-d',
          static: true,
          allowInput: true,
          altInput: true,
          altFormat: 'Y-m-d',
          appendTo: document.body,
          theme: 'flatpickr bg-white rounded-lg shadow-md',
        });        
    });


    const intervalButtons = document.querySelectorAll(".and_date_interval");

    intervalButtons.forEach(function(button) {
        const startDateId = button.getAttribute("data-id_date_start");
        const endDateId = button.getAttribute("data-id_date_end");
        const intervalLabelId = button.getAttribute("data-id_interval");

        flatpickr(button, {
            mode: "range",
            dateFormat: "Y-m-d",
            onClose: function(selectedDates, dateStr, instance) {
                document.getElementById(startDateId).value = dateStr.split(" to ")[0];
                document.getElementById(endDateId).value = dateStr.split(" to ")[1];
                document.getElementById(intervalLabelId).textContent = dateStr;
            }
        });
    });

    document.addEventListener('submit', function(event) {
      const target = event.target;
      if (target && target.matches('#and_bulk_options_form')) {
        event.preventDefault();
        submitBulkOptionsForm(event);
      }
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('js_modal')) {
            const v_action = event.target.dataset.action;
            loadModalForm(v_action);
        }
        if (event.target.classList.contains('js_modal_iframe')) {
            const v_action = event.target.dataset.action;
            loadModalIframe(v_action);
        }
        if (event.target.classList.contains('ajx_pages')) {
            const v_action = event.target.dataset.action;
            const v_target = event.target.dataset.target;
            document.getElementById(v_target).setAttribute("data-action", v_action);
            retrieve_list_html(v_target);
        }
        if (event.target.classList.contains('ajax-form-submit')) {
            submitAjaxModalForm();
        }
        if (event.target.classList.contains('and_cb_selectors')) {
            toggleBulkEditor();
        }

    });

    const debounce = (func, delay) => {
      let inDebounce;
      return function() {
        const context = this;
        const args = arguments;
        clearTimeout(inDebounce);
        inDebounce = setTimeout(() => func.apply(context, args), delay);
      };
    };

    $( ".js_module_search" ).each(function( index ) {
        const v_action = $( this ).data("action");
        const v_target = $( this ).data("target")
        const v_form_id = $( this ).prop("id");

        const form_elements = document.querySelectorAll("#"+v_form_id + " input");
        form_elements.forEach(input => {

            input.addEventListener("input", debounce(async function() {
                try {
                    const form = new FormData(document.getElementById(v_form_id));
                    fetch(v_action, {
                        method: 'post',
                        body: form,
                    }).then((response) => {
                        return response.json()
                    }).then((res) => {
                        if (res.status === 201) {
                            retrieve_list_html(v_target);
                        }
                    }).catch((error) => {
                        console.log(error)
                    })

                } catch (error) {
                  console.error(error);
                }
            }, 500));


        });
    });


});

function toggleBulkEditor(){
  const checkboxes = document.querySelectorAll('.and_cb_selectors:checked');
  const ids = Array.from(checkboxes).map(checkbox => checkbox.value).join(',');
  const bulkOptionsInput = document.getElementById('and_bulk_options_ids');
  const bulkOptionsElement = document.getElementById('and_bulk_options');
  
  if (ids) {
    bulkOptionsInput.value = ids;
    bulkOptionsElement.style.display = 'block';
  } else {
    bulkOptionsInput.value = '';
    bulkOptionsElement.style.display = 'none';
  }    
}

function attachQuillEditorToTextareas() {
  var textareas = document.querySelectorAll('textarea.quill_editor');
  textareas.forEach(function(textarea) {
    var editorDiv = document.createElement('div');
    textarea.parentNode.insertBefore(editorDiv, textarea);
    textarea.style.display = 'none';

    var quill = new Quill(editorDiv, {
      modules: {
        toolbar: [
          [{ header: [1, 2, false] }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Enter text here...',
      theme: 'snow'
    });

    // Set the contents of the Quill editor to the contents of the original textarea
    quill.clipboard.dangerouslyPasteHTML(textarea.value);

    // Listen for changes to the Quill editor and update the contents of the original textarea
    quill.on('text-change', function(delta, oldDelta, source) {
      textarea.value = quill.root.innerHTML.trim();
    });
  });
}

function submitBulkOptionsForm(event) {
  event.preventDefault();

  const form = document.getElementById('and_bulk_options_form');
  const formData = new FormData(form);

  fetch(form.getAttribute('data-action'), {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
    },
    body: new URLSearchParams(formData).toString()
  })
  .then(response => {
    if (response.ok) {
      const parentElemId = form.getAttribute('data-parent');
      retrieve_list_html(parentElemId);
    }
  })
  .catch(error => console.error('Error:', error));
}


function retrieve_list_html(elem_id)
{
    const v_elem = document.getElementById(elem_id);
    const v_action = v_elem.dataset.action;
    const v_target = elem_id;
    v_elem.innerHTML="<center><img src='/assets/admin/img/ax-loader.gif' /></center>";

    fetch(v_action, {
        method: 'get',
    }).then((response) => {
        return response.text()
    }).then((res) => {
        v_elem.innerHTML = res;

        const toggle_elements = document.querySelectorAll(".js_ajax_toggle");
        toggle_elements.forEach(elem => { 

            const v_action = $( elem ).data("action");
            elem.onclick = function(){
                fetch(v_action, {
                    method: 'get',
                }).then((response) => {
                    return response.json()
                }).then((res) => {
                    if (res.status == 1) {
                        retrieve_list_html(v_target);
                    }
                }).catch((error) => {
                    console.log(error)
                })            
            }
        });

        const delete_elements = document.querySelectorAll(".js_ajax_delete");
        delete_elements.forEach(elem => { 

            const confirm_text = $( elem ).data("confirm");
            const v_action = $( elem ).data("action");
            const parent_target = $( elem ).data("parent_table");
            elem.onclick = function(){
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
        });


    }).catch((error) => {
        v_elem.innerHTML = "<div class='alert'>404</div>";
    })

}

async function loadModalIframe(url){
    var element =  document.getElementById('general-modal');
    if (typeof(element) == 'undefined' || element == null)
    {
        let modalElement = document.createElement("div");
        modalElement.id = "general-modal";
        modalElement.classList.add("fixed", "top-0", "left-0", "right-0", "z-50", "hidden", "w-full", "p-4", "overflow-x-hidden", "overflow-y-auto", "md:inset-0", "h-modal", "md:h-full");
        modalElement.innerHTML = `
        <div class="relative w-full h-full max-w-6xl md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 id="general-modal-title" class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                    </h3>
                </div>
                <div class="p-6 space-y-6" id="general-modal-body">
                <iframe src="`+url+`" width="100%" />
                </div>
                <div class="items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 text-center">
                    <button type="button" class="ajax-form-submit text-white bg-gradient-to-tl from-purple-700 to-pink-500 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                    <button type="button" class="close text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Cancel</button>            
                </div>
            </div>

        </div>

        <div class="modal-content">
          <span class="close">&times;</span>
          <div id="modal-body">
          </div>
        </div>
        `;
        document.body.appendChild(modalElement);
    }


    
    const $targetEl = document.getElementById('general-modal');

    const options = {
      closable: true,
    };

    const modal = new Modal($targetEl, options);
    modal.show();

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

async function loadModalForm(url) {
    var element =  document.getElementById('general-modal');
    if (typeof(element) == 'undefined' || element == null)
    {
        let modalElement = document.createElement("div");
        modalElement.id = "general-modal";
        modalElement.classList.add("fixed", "top-0", "left-0", "right-0", "z-50", "hidden", "w-full", "p-4", "overflow-x-hidden", "overflow-y-auto", "md:inset-0", "h-modal", "md:h-full");
        modalElement.innerHTML = `
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 id="general-modal-title" class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                    </h3>
                </div>
                <div class="p-6 space-y-6" id="general-modal-body"></div>
                <div class="items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 text-center">
                    <button type="button" class="ajax-form-submit text-white bg-gradient-to-tl from-purple-700 to-pink-500 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                    <button type="button" class="close text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Cancel</button>            
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

function attachSubmitEventToFormInline(form){
    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const es = document.querySelectorAll('.js_error');
        es.forEach((e) => {e.innerHTML = '';});

        let v_action = $(form).data('validate');
        let v_context = $(form).data('context');
        
        let v_alert = 'ajx-alert';
        if(v_context!="" && typeof v_context!=="undefined")
            v_alert = 'ajx-'+v_context+'-alert';

        const alert_elem = document.getElementById(v_alert);
        alert_elem.innerHTML = '';
        alert_elem.classList.remove("bg-red-100", "border", "border-red-400", "text-red-700", "bg-green-100", "border-green-400", "text-green-700");
        alert_elem.style.display = "none";

        fetch(v_action, {
          method: 'POST',
          body: new FormData(form)
        })
        .then((response) => {
            return response.json()
        })
        .then((res) => {
            if(res.status==0){
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
                form.submit();
            }
          
        })
        .catch(error => {
            console.log("Error");
          // handle any errors that occurred during the request here
        });

    });

}

function submitAjaxModalForm() {
    const es = document.querySelectorAll('.js_error');
    es.forEach((e) => {e.innerHTML = '';});

    let form = document.getElementById('ajax-form-modal');
    console.log(form);
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

    fetch(v_action, {
      method: 'POST',
      body: new FormData(form)
    })
    .then((response) => {
        return response.json()
    })
    .then((res) => {
        if(res.status==0){
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

            setTimeout(function(){ 
                retrieve_list_html(v_target); 
            }, 200)

        }
      
    })
    .catch(error => {
        console.log("Error");
      // handle any errors that occurred during the request here
    });

}