<?php
namespace Modules\Contracts\Api;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use Modules\Contracts\Front\Models\ContractsModel;
use Modules\Contracts\Front\Models\ContractPlaceholder;
use Modules\Contracts\Front\Models\ContractAuditTrail;

use Modules\Ctr_templates\Front\Models\Ctr_templatesModel;

use OpenApi\Annotations as OA;

class Contracts extends ResourceController
{
    use ResponseTrait;

    public function listContracts()
    {
        die;
        $model = new ContractsModel();
        $contracts = $model->findAll();
        return $this->respond($contracts);
    }


    public function details($id)
    {
        die;
        $model = new ContractsModel();
        $contract = $model->find($id);
        if ($contract === null) {
            return $this->failNotFound('Contract not found');
        }
        return $this->respond($contract);
    }

    public function createContract(){
        $model = new ContractsModel();
        $placeholder_model = new ContractPlaceholder();
        $audit_model = new ContractAuditTrail();

        $post = $this->request->getPost();

        if(isset($post["template_id"])){
            $template_id = $post["template_id"];
        }else{
            return $this->respond(["status"=>false, "error"=>"Template id is required"]);
        }

        if(isset($post["signers"][0])){
            $signer = $post["signers"][0];
        }else{
            return $this->respond(["status"=>false, "error"=>"Signers array is required to have one signee!"]);
        }

        $template_model = new Ctr_templatesModel();
        $template = $template_model->findByUrl($template_id);

        if(!$template){
            return $this->respond(["status"=>false, "error"=>"Template not found!"]);
        }

        $json_page = json_decode(json_decode($template->json_content));
        $structure = $template_model->getStructure($json_page);
        $placeholders = $structure["placeholders"];
        $fields = $structure["fields"];


        if(isset($post["placeholder_fields"])){
            $placeholder_errors = [];
            foreach ($post["placeholder_fields"] as $key => $holder) {
                if(!isset($placeholders[$holder['api_key']]))
                    $placeholder_errors[] = $holder['api_key'];
            }

            if(count($placeholder_errors)>0){
                return $this->respond(["status"=>false, "error"=>"Placeholders not found in the template: ".implode(",", $placeholder_errors)]);
            }
        }

        if(!$template){
            return $this->respond(["status"=>false, "error"=>"Template not found!"]);
        }


        $contract_data = array();
        $contract_data["template_id"]       = $template_id;
        $contract_data["title"]             = $template->name;
        $contract_data["contract_content"]  = $template->json_content;
        $contract_data["signer_first_name"] = $signer["first_name"];
        $contract_data["signer_last_name"]  = $signer["last_name"];
        $contract_data["signer_email"]      = $signer["email"];
        $contract_data["created_at"]        = date("Y-m-d H:i:s");

        $uniqueKey = bin2hex(random_bytes(16));
        $uniqueKey = sprintf(
            '%s-%s-%s-%s-%s',
            substr($uniqueKey, 0, 8),
            substr($uniqueKey, 8, 4),
            substr($uniqueKey, 12, 4),
            substr($uniqueKey, 16, 4),
            substr($uniqueKey, 20, 12)
        );
        $contract_data["unique_key"]       = $uniqueKey;

        $ok = $model->insert($contract_data);
        if(!$ok){
            return $this->respond(["status"=>false, "error"=>implode(", ", $model->errors()) ]);
        }

        $contractId = $model->insertID();

        if(isset($post["placeholder_fields"])){
            foreach ($post["placeholder_fields"] as $key => $holder) {
                $placeholderData = [
                    'api_key' => $holder['api_key'],
                    'api_value' => $holder['value'],
                    'contract_id' => $contractId,
                ];
                $placeholder_model->insert($placeholderData);
            };
        }

        $log = [];
        $log["contract_id"] = $contractId;
        $log["event_name"] = "Contract is sent to signer (Email)";
        $log["event_date"] = date("Y-m-d H:i:s");
        $log["ip"] = $_SERVER["REMOTE_ADDR"];
        $log["author_name"] = $contract_data["signer_first_name"]. " ".$contract_data["signer_last_name"];

        $audit_model->insert($log);

        $model->emailSend($contractId);

        $data = [
            "status"=>1, 
            "contract"=>array("status"=>"sent")
        ];
        //$logger->logRequest($this->request, $data);
        return $this->respond($data);

    }
}
