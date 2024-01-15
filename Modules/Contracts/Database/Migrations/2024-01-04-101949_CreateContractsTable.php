<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContractsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'unique_key' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collate' => 'utf8mb3_general_ci',
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collate' => 'utf8mb3_general_ci',
            ],
            'contract_content' => [
                'type' => 'LONGTEXT',
                'collate' => 'utf8mb3_general_ci',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'signed_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'withdrawn_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'contract_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'owner_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'signer_first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collate' => 'utf8mb3_general_ci',
            ],
            'signer_last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collate' => 'utf8mb3_general_ci',
            ],
            'signer_email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collate' => 'utf8mb3_general_ci',
            ],
            'signer_mobile' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collate' => 'utf8mb3_general_ci',
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'default' => null,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('contracts');        
    }

    public function down()
    {
        $this->forge->dropTable('contracts');
    }
}
