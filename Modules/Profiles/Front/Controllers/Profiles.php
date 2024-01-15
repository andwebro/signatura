<?php
namespace Modules\Profiles\Front\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\CodeIgniter;
use Modules\Profiles\Front\Models\ProfilesModel;
use CodeIgniter\API\ResponseTrait;

class Profiles extends BaseController
{
    use ResponseTrait;
    protected $template_dir = 'Modules\Profiles\Front\Views\\';

    public function __construct()
    {
        $this->module_name  = 'profiles';
        $this->model = new ProfilesModel();
        $this->config = config(\Modules\Profiles\Config\ProfilesConfig::class);
    }
    
    public function index()
    {
        $user = auth()->user();
        $data = array();
        $data["mod_version"] = $this->config->version;
        $data["profile"] = $this->model->where('user_id', $user->id)->first();

        and_add_js("/assets/sign/profile.js");

        return view($this->template_dir.'my_profile.php', $data);
    }

    public function uploadAvatar()
    {
        $user = auth()->user();
        $response = [
            'status' => false,
            'message' => 'File validation message',
        ];

        // Validate the uploaded file
        $validationRules = [
            'logo' => 'uploaded[logo]|mime_in[logo,image/jpeg,image/png]|max_size[logo,2048]',
        ];

        if ($this->validate($validationRules)) {
            $file = $this->request->getFile('logo');

            $uploadPath = FCPATH . 'var/uploads/profile/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $newFileName = $file->getRandomName();
            $file->move($uploadPath, $newFileName);

            $userId = $user->id;

            $profile = $this->model->where('user_id', $userId)->first();

            if ($profile) {
                $profile->avatar = $newFileName;
                $this->model->update($profile->id, $profile);
            } else {
                $data = [
                    'user_id' => $userId,
                    'avatar' => $newFileName,
                ];
                $this->model->insert($data);
            }

            $response['status'] = true;
            $response['message'] = 'File uploaded successfully';
            $response['image_url'] = base_url("uploads/profile/{$newFileName}");
        }

        return $this->response->setJSON($response);
    }

    public function doUpdate(){
        $user = auth()->user();
        $userId = $user->id;
        $response = [
            'status' => false,
            'fields' => [],
            'message' => '',
        ];

        // Validate the uploaded file
        $validationRules = [
            'company_name' => 'required',
            'reply_to_email'=> 'required|valid_email'
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules);

        if (!$validation->run($this->request->getPost())) {
            $response['message'] = 'Form not valid';
            $response['fields']  = $validation->getErrors();
        }else{

            $profile = $this->model->where('user_id', $userId)->first();

            $profile_data = [];
            $profile_data["company_name"] = $this->request->getPost('company_name');
            $profile_data["reply_to_email"] = $this->request->getPost('reply_to_email');
            if ($profile) {
                $this->model->update($profile->id, $profile_data);
            } else {
                $profile_data["user_id"] = $userId;
                $this->model->insert($profile_data);
            }

            $response['status'] = true;
            $response['message'] = 'Profile updated successfully';
        }

        return $this->response->setJSON($response);
    }

}
?>