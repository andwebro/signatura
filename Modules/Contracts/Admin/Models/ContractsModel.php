<?php
namespace Modules\contracts\Admin\Models;
use App\Libraries\Andweb\BaseAdminModel;

class ContractsModel extends BaseAdminModel
{
    protected $table      = 'contracts';
    protected $primaryKey = 'id';

    protected $allowedFields = ["name", "status"];

    protected $validationRules = [
        'name' => [
            'label' => 'Name',
            'rules' => 'required',
        ],
    ];

}