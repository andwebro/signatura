<?php $this->extend('signature/master'); ?>
<?php $this->section('content'); ?>

<div class="w-full p-8">
	<div class="w-full">
		<h1 class="text-2xl w-[100%] text-left font-bold mb-4">
			Editare template
		</h1>
		<div class="w-[50%]">
			<input type="hidden" id="template_id" value="<?php if(isset($id)) echo $id;?>" />
			<label class="block text-gray-700 font-bold mb-2" for="template_name">
				Nume template
			</label>
			<input type="text" id="template_name" class="shadow border-blue-600 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php if(isset($id)) echo $row->name;?>" />

			<label class="block text-gray-700 font-bold mb-2" for="unique_key">
				ID
			</label>
			<input type="text" class="shadow border-gray-600 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" value="<?php if(isset($id)) echo $row->unique_key;?>" readonly />
			<br /><br />
			<a id="saveTemplateData" class="cursor-pointer group inline-flex items-center justify-center rounded-full py-2 px-4 text-base font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-blue-600 text-white hover:text-slate-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600">Salveaza</a>
			<br />
			<br />
			<a id="appendPlaceholder" data-label="Appended Field" class="cursor-pointer group inline-flex items-center justify-center rounded-full py-2 px-4 text-base font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-gray-600 text-white hover:text-slate-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600">Adauga placeholder</a>
			<br />
		</div>
		<div style="margin-top:10px; padding-top:10px; border-top:2px dashed #ccc;">
			<div id="fb-editor"></div>
		</div>
		<div id="fb-rendered-form" style="display:none;"></div>
		<textarea id="fb-json-form" style="display:none;"><?php if(isset($id)) echo $row->json_content;?></textarea>
	</div>

</div>

<?php $this->endSection(); ?>