<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserGroupsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Super Admin',
                'alias' => 'superadmin',
                'description' => 'Complete control of the site.',
            ],
            [
                'title' => 'Admin',
                'alias' => 'admin',
                'description' => 'Day to day administrators of the site.',
            ],
            [
                'title' => 'User',
                'alias' => 'user',
                'description' => 'General users of the site.',
            ],
        ];

        // Using Query Builder to insert data
        $this->db->table('groups_users_list')->insertBatch($data);

    }
}
