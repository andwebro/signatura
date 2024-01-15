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