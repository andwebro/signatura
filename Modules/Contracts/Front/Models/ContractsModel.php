<?php
namespace Modules\Contracts\Front\Models;
use Andwebci\Common\BaseFrontModel;

class ContractsModel extends BaseFrontModel
{
    protected $table = "contracts";
    protected $primaryKey = "id";
    protected $urlField = "unique_key";

    // Define the allowed fields in the model
    protected $allowedFields = [
        'unique_key', 
        'title', 
        'template_id', 
        'created_at', 'signed_at', 'withdrawn_at', 
        'contract_content', 
        'owner_id', 
        'signer_first_name', 'signer_last_name', 'signer_email', 'signer_mobile', 
        'status', 'deleted_at'
    ];

    // Optionally, you can specify validation rules for the fields
    protected $validationRules = [
        'title' => 'required',
        'contract_content' => 'required',
    ];
    
    public function emailSend($id){

        $data = $this->find($id);
        if(!$data->signer_email)
            return false;

        $email = \Config\Services::email();

        if(!isset($data->id))
            return false;

        $data->sign_url = base_url("/contracts/sign/".$data->unique_key);

        $message = view('Modules\Contracts\Front\Views\email_sign_contract.php', array("data"=>$data));

        $email->initialize(['debug' => true]);
        $email->setFrom('noreply@appsweb.ro', 'Signatura');
        $email->setTo($data->signer_email);
        $email->setSubject('Your '.$data->title.' is ready to sign');
        $email->setMessage($message);

        if($email->send()){
            return true;
        }else{
            echo $email->printDebugger();
            return false;
        }
    }

}