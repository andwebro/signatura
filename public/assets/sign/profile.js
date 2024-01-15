document.addEventListener("DOMContentLoaded", function () {
    const logoInput = document.getElementById("logo");
    const imagePreview = document.getElementById("imagePreview");
    const previewImage = document.getElementById("previewImage");
    const removeButton = document.getElementById("removeButton");
    const messageContainer = document.getElementById("messageContainer");
    const updateMessageContainer = document.getElementById("updateMessageContainer");
    

    // Display image preview on file selection
    logoInput.addEventListener("change", function () {
        const file = logoInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
                imagePreview.classList.remove("hidden");
                removeButton.classList.remove("hidden");
            };

            reader.readAsDataURL(file);
        }
    });

    // Remove image and hide preview
    removeButton.addEventListener("click", function () {
        logoInput.value = null;
        imagePreview.classList.add("hidden");
        removeButton.classList.add("hidden");
    });

    const logoForm = document.getElementById("logoForm");
    logoForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(logoForm);

        fetch('profile/uploadAvatar', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            // Handle the JSON response
            console.log(data);

            // Display thank you or error message with Font Awesome icon
            const iconClass = data.status ? 'text-green-500 fas fa-check-circle' : 'text-red-500 fas fa-times-circle';
            const messageClass = data.status ? 'bg-green-100 border-green-400' : 'bg-red-100 border-red-400';
            const messageText = data.status ? `Thank you! ${data.message}` : `Error: ${data.message}`;

            messageContainer.innerHTML = `
                <div class="${messageClass} border rounded-md p-3 flex items-center">
                    <i class="${iconClass} mr-2"></i>
                    <span>${messageText}</span>
                </div>
            `;                    
        })
        .catch(error => console.error('Error:', error));
    });

    const profileForm = document.getElementById("profileForm");
    profileForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(profileForm);
        const errorSpans = document.querySelectorAll(".error_helper");
        errorSpans.forEach(span => span.textContent = '');

        fetch('profile/update', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            // Handle the JSON response
            console.log(data);
            if (data.fields) {
                Object.entries(data.fields).forEach(([field, message]) => {
                    const errorSpan = document.getElementById(`${field}_helper`);
                    if (errorSpan) {
                        errorSpan.textContent = message;
                    }
                });
            }
            // Display thank you or error message with Font Awesome icon
            const iconClass = data.status ? 'text-green-500 fas fa-check-circle' : 'text-red-500 fas fa-times-circle';
            const messageClass = data.status ? 'bg-green-100 border-green-400' : 'bg-red-100 border-red-400';
            const messageText = data.status ? `Thank you! ${data.message}` : `Error: ${data.message}`;

            updateMessageContainer.innerHTML = `
                <div class="${messageClass} border rounded-md p-3 flex items-center">
                    <i class="${iconClass} mr-2"></i>
                    <span>${messageText}</span>
                </div>
            `;                    
        })
        .catch(error => console.error('Error:', error));
    });

});