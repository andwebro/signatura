<?php
namespace Modules\ctr_templates\Admin\Controllers;

use App\Libraries\Andweb\BaseAdminController;
use Modules\ctr_templates\Admin\Models\Ctr_templatesModel;
use CodeIgniter\API\ResponseTrait;

class Ctr_templates extends BaseAdminController
{
    use ResponseTrait;
    protected $template_dir = 'Modules\Ctr_templates\Admin\Views\\';

    public function __construct()
    {
        $this->module_name  = 'ctr_templates';
        $this->model = new Ctr_templatesModel();
        $this->config = config(\Modules\ctr_templates\Config\Ctr_templatesConfig::class);
        parent::__construct();
    }
    
    public function index()
    {
        $data = array();
        $data["mod_version"] = $this->config->version;

        $breadcrumbs = array(
            add_breadcrumb("Home", "/admin", "icon_desktop"),
            add_breadcrumb(lang('Ctr_templates.module_name'), "", "ni ni-tag"),
        );

        $data["breadcrumbs"] = $breadcrumbs;

        return view($this->template_dir.'ctr_templates', $data);
    }

}
?>