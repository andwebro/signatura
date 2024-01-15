<?php

namespace Modules\Contracts\Front\Models;
use Andwebci\Common\BaseFrontModel;


class ContractPlaceholder extends BaseFrontModel
{
    protected $table = 'contract_placeholder';
    protected $primaryKey = 'id';
    protected $allowedFields = ['api_key', 'api_value', 'contract_id'];

}
