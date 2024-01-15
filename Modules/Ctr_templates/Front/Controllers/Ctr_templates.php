<?php
namespace Modules\Ctr_templates\Front\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\CodeIgniter;
use Modules\Ctr_templates\Front\Models\Ctr_templatesModel;
use CodeIgniter\API\ResponseTrait;

class Ctr_templates extends BaseController
{
    use ResponseTrait;
    private $module_name;
    private $model;
    private $config;
    protected $template_dir = 'Modules\Ctr_templates\Front\Views\\';

    public function __construct()
    {
        $this->module_name  = 'ctr_templates';
        $this->model = new Ctr_templatesModel();
        $this->config = config(\Modules\Ctr_templates\Config\Ctr_templatesConfig::class);
        //parent::__construct();
    }
    
    public function index()
    {
        $data = array();
        $data["mod_version"] = $this->config->version;

        $data["templates"] = $this->model->findAll();

        return view($this->template_dir.'templates.php', $data);
    }

    public function save_template()
    {
        $user = auth()->user();
        $id     = (int)$this->request->getPost('id');
        $name   = $this->request->getPost('name');
        $owner  = $user->id;
        $j_data = $this->request->getPost('j_data');
        $h_data = $this->request->getPost('h_data');

        $data = array(
            'name'         => $name, 
            'owner'        => $owner, 
            'json_content' => $j_data, 
            'html_content' => $h_data
        );
        if(!$id){
            $data["created_at"] = date("Y-m-d H:i:s");
            $uniqueKey = bin2hex(random_bytes(16));
            $uniqueKey = sprintf(
                '%s-%s-%s-%s-%s',
                substr($uniqueKey, 0, 8),
                substr($uniqueKey, 8, 4),
                substr($uniqueKey, 12, 4),
                substr($uniqueKey, 16, 4),
                substr($uniqueKey, 20, 12)
            );
            $data["unique_key"] = $uniqueKey;
    
        }


        try {
            if($id>0)
                $ok = $this->model->update($id, $data);
            else
                $ok = $this->model->insert($data, true);
        } catch (\Exception $e) {
            return $this->response->setJSON(['success' => false, 'error_message'=>$e->getMessage()]);
        }

        if(!$ok){
            return $this->response->setJSON(['success' => false, 'error_message'=>implode(", ", $this->model->errors())]);
        }else{
            return $this->response->setJSON(['success' => true]);
        }


    }

    public function form_act($id=null)
    {
        $data = array();

        if((int)$id>0){
            $data["id"] = $id;
            $data["row"] = $this->model->find($id);

        }

        and_add_js("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js");
        and_add_js("https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js");
        and_add_js("/assets/sign/form-builder/form-builder.min.js");
        and_add_js("/assets/sign/form-builder/form-render.min.js");
        and_add_js("/assets/sign/form-builder.js");


        return view($this->template_dir.'templates_edit', $data);
    }

}
?>