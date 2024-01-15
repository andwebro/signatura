<?php
namespace Modules\Profiles\Front\Models;
use Andwebci\Common\BaseFrontModel;

class ProfilesModel extends BaseFrontModel
{
    protected $table = "user_profiles";
    protected $primaryKey = "id";

    // Define the allowed fields in the model
    protected $allowedFields = [
        'user_id',
        'avatar', 
        'company_name',
        'reply_to_email' 
    ];

    

}