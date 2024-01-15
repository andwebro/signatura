<?php
namespace Modules\Ctr_templates\Front\Models;
use Andwebci\Common\BaseFrontModel;

class Ctr_templatesModel extends BaseFrontModel
{
    protected $table = "ctr_templates";
    protected $primaryKey = "id";
    protected $urlField = "unique_key";

    // Define the allowed fields in the model
    protected $allowedFields = ['name', 'unique_key', 'owner', 'json_content', 'html_content', 'created_at', 'deleted_at'];

    // Optionally, you can specify validation rules for the fields
    protected $validationRules = [
        'name'  => 'required',
        'owner' => 'required',
        'json_content' => 'required',
        'html_content' => 'required',
    ];

    public function getStructure($json_page){
        $placeholders = [];
        $fields = [];
        if(is_array($json_page)){
            foreach ($json_page as $key => $item) {
                // find patterns in labels
                preg_match_all('/{{(.*?)}}/', $item->label, $matches);
                if(isset($matches[1]) && is_array($matches[1])){
                    foreach ($matches[1] as $pattern) {
                        $placeholders[$pattern] = $pattern;
                    }
                }

                // find fields 
                if(in_array($item->type, array("radio-group", "text", "number", "select"))){
                    $fields[] = $item;
                }
            }
        }

        return ["placeholders"=>$placeholders, "fields"=>$fields];

    }
}