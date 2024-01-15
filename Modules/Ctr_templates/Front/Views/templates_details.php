<?php $this->extend('signature/master'); ?>
<?php $this->section('content'); ?>
<?php echo $this->include('signature/inc/account_menu'); ?>

<div class="w-full p-8 sm:w-3/4">
	<div class="w-full flex items-center flex-col sm:flex-row">
		<h1 class="text-2xl w-[100%] float-left text-left font-bold mb-4">
			<?php echo $row->name;?>
		</h1>
        
	</div>

</div>
</div>    
</div>
<?php $this->endSection(); ?>