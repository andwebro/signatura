<?php echo and_frm_start("/admin/contracts/update", "and_contracts");?>
<input type="hidden" name="id" value="<?php if(isset($id) && (int)$id>0) echo $id;?>">

<div class="shadow sm:overflow-hidden sm:rounded-md">
	<div class="bg-white px-4 py-5 sm:p-6">
		<div class="w-full">
			<?php echo and_frm_label(lang('Contracts.name'), "name");?>
			<?php $value = (isset($id) && isset($form->name))?$form->name:"";?>
			<?php echo and_frm_input("name", "", $value);?>
		</div>
		<div class="w-full mt-2">
			<?php $checked = (isset($id) && isset($form->status) && $form->status==1)?true:false;?>
			<?php echo and_frm_checkbox("status", "Active", $checked, array("explain"=>lang('Contracts.status_hint'))); ?>
		</div>
		<div class="w-full">
			<?php echo and_frm_alert();?>
		</div>

	</div>
</div>
</form>