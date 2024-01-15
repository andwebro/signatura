<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'   => 1,
                'name' => 'Dashboard',
                'url' => '/admin/',
                'status' => 1,
                'ordering' => 0,
                'icon_class' => 'ni-app',
            ],
            [
                'id'   => 2,
                'name' => 'Utilizatori',
                'url' => '',
                'status' => 1,
                'ordering' => 80,
                'icon_class' => 'ni ni-badge',
            ],
            [
                'id'   => 3,
                'name' => 'Configurari',
                'url' => '',
                'status' => 1,
                'ordering' => 81,
                'icon_class' => 'ni ni-settings',
            ],
            [
                'id'   => 4,
                'name' => 'Logout',
                'url' => '/logout',
                'status' => 1,
                'ordering' => 99,
                'icon_class' => 'ni-button-power',
            ],
        ];

        // Using Query Builder to insert data
        $this->db->table('admin_menu')->insertBatch($data);

        $data = [
            [
                'cid'   => 2,
                'name' => 'Lista utilizatori',
                'url' => '/admin/admins',
                'status' => 1,
                'ordering' => 0,
            ],
            [
                'cid'   => 2,
                'name' => 'Grupuri utilizatori',
                'url' => '/admin/groups',
                'status' => 1,
                'ordering' => 0,
            ],
            [
                'cid'   => 3,
                'name' => 'Meniu admin',
                'url' => '/admin/admin_menus',
                'status' => 1,
                'ordering' => 0,
            ],

        ];

        // Using Query Builder to insert data
        $this->db->table('admin_submenu')->insertBatch($data);        
    }
}
