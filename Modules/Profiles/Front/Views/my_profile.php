<?php $this->extend('signature/master'); ?>
<?php $this->section('content'); ?>
<?php echo $this->include('signature/inc/account_menu'); ?>
<?php
?>

<div class="w-full p-8 sm:w-3/4">
    <div class="items-center w-full justify-center">
        <h1 class="text-2xl text-slate-700 text-center font-semibold mb-4">
            Edit profile
        </h1>
        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Upload Company Logo</h2>
            <form id="logoForm" method="POST">
                <div id="messageContainer"></div>
                <div class="mb-4">
                    <label for="logo" class="block text-sm font-medium text-gray-600">Select Logo</label>
                    <input type="file" id="logo" name="logo" accept="image/*" class="mt-1 p-2 border rounded-md">
                </div>

                <div id="imagePreview" class="mb-4 <?php if($profile->avatar=="") echo "hidden"; ?>">
                    <label class="block text-sm font-medium text-gray-600">Preview</label>
                    <img id="previewImage" class="mt-2 max-w-full h-auto rounded-md" <?php if($profile->avatar!="") { ?> src="<?php echo base_url("/var/uploads/profile/{$profile->avatar}"); ?>" <?php } ?>>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    Upload
                </button>

                <button type="button" id="removeButton"
                    class="ml-2 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 hidden">
                    Remove
                </button>
            </form>
        </div>
        
        <div class="mt-4 max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Account information</h2>
            <div id="updateMessageContainer"></div>
            <form id="profileForm">
                <div class="mt-4">
                    <label for="companyName" class="block text-sm font-medium text-gray-600">Company Name</label>
                    <input type="text" id="company_name" name="company_name" value="<?php echo $profile->company_name;?>" class="mt-1 p-2 border rounded-md w-full">
                    <span id="company_name_helper" class="error_helper"></span>
                </div>

                <div class="mt-4">
                    <label for="replyToEmail" class="block text-sm font-medium text-gray-600">Reply to Email</label>
                    <input type="email" id="reply_to_email" name="reply_to_email" value="<?php echo $profile->reply_to_email;?>" class="mt-1 p-2 border rounded-md w-full">
                    <span id="reply_to_email_helper" class="error_helper"></span>
                </div>
                <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    Save
                </button>
            </form>
        </div>
</div>
</div>
<?php $this->endSection(); ?>