<?php
namespace Modules\contracts\Admin\Controllers;

use App\Libraries\Andweb\BaseAdminController;
use Modules\contracts\Admin\Models\ContractsModel;
use CodeIgniter\API\ResponseTrait;

class Contracts extends BaseAdminController
{
    use ResponseTrait;
    protected $template_dir = 'Modules\Contracts\Admin\Views\\';

    public function __construct()
    {
        
        $this->module_name  = 'contracts';
        $this->model = new ContractsModel();
        $this->config = config(\Modules\contracts\Config\ContractsConfig::class);
        parent::__construct();
    }
    
    public function index()
    {
        $data = array();
        $data["mod_version"] = $this->config->version;

        $breadcrumbs = array(
            add_breadcrumb("Home", "/admin", "icon_desktop"),
            add_breadcrumb(lang('Contracts.module_name'), "", "ni ni-tag"),
        );

        $data["breadcrumbs"] = $breadcrumbs;

        return view($this->template_dir.'contracts', $data);
    }

}
?>