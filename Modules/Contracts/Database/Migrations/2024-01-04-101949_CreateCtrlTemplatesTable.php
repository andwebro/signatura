<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCtrlTemplatesTable extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collate' => 'utf8mb3_general_ci',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
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
        $this->forge->createTable('ctr_templates');        
    }

    public function down()
    {
        $this->forge->dropTable('ctr_templates');
    }
}
