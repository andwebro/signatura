<?php

namespace Modules\Contracts\Front\Models;

use Andwebci\Common\BaseFrontModel;

class ContractAuditTrail extends BaseFrontModel
{
    protected $table = 'contract_audit_trail';
    protected $primaryKey = 'id';
    protected $allowedFields = ['contract_id', 'event_name', 'event_date', 'ip', 'author_name'];

    protected $validationRules = [];
}
