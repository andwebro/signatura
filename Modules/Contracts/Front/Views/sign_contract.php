<?php $this->extend('signature/master_simple'); ?>
<?php $this->section('content'); ?>
<div class="m-10">
    <div style="margin:auto; width:80%; padding:50px; border:2px dashed #555; color:#111;">
    <center>
        <img src="/assets/sign/images/logo_evaremovebgpreview.png" />
    </center>
    <br />
    <form id="signContractForm">
        <?php foreach ($contract as $key => $value) { ?>
            <?php
            switch ($value->type) {
                case 'header':

                    $label = $value->label;

                    $open_tag = "<".$value->subtype.">";
                    $close_tag = "</".$value->subtype.">";
                    ?>
                    <?php echo $open_tag.$label.$close_tag;?>
                    <?php 
                    break;
                case 'paragraph':

                    $label = $value->label;

                    $open_tag = "<".$value->subtype.">";
                    $close_tag = "</".$value->subtype.">";
                    ?>
                    <?php echo $open_tag.$label.$close_tag;?>
                    <?php 
                    break;
                case 'date':
                    $label = $value->label;
                    ?>
                    <label><?php echo $label;?></label>
                    <input type="text" name="<?php echo $value->name;?>" class="<?php if(isset($value->className)) echo $value->className; ?>" />
                    <?php 
                    break;
                case 'radio-group':
                    $label = $value->label;
                    ?>
                    <label><?php echo $label;?></label>
                    <?php 
                    foreach ($value->values as $k => $v) 
                    {
                    ?>
                        <p><input type="radio" value="<?php echo $v->value;?>" name="<?php echo $value->name;?>" class="<?php if(isset($value->className)) echo $value->className; ?>" /><label><?php echo $v->label;?></label></p>
                    <?php 
                    }
                    break;
                case 'value':
                    ?>
                    <?php 
                    break;
                                
            } 
                ?>
        <?php }?>
        </form>
    </div>
    <div class="text-center w-full">
        <br />
        <div class="bg-blue-600 text-white p-4 m-auto" style="width:400px;">
            <input type="hidden" id="contract_id" value="<?php echo $row->unique_key;?>" />
            <a id="sign-form" href="#">Sign document <?php echo $row->signer_first_name;?> <?php echo $row->signer_last_name;?></a>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>