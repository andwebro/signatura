<?php
namespace Modules\ctr_templates\Admin\Models;
use App\Libraries\Andweb\BaseAdminModel;

class Ctr_templatesModel extends BaseAdminModel
{
    protected $table      = 'ctr_templates';
    protected $primaryKey = 'id';

    protected $allowedFields = ["name", "status"];

    protected $validationRules = [
        'name' => [
            'label' => 'Name',
            'rules' => 'required',
        ],
    ];

}