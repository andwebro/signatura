<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContractPlaceholderTable extends Migration
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
            'api_key' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'api_value' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'contract_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('contract_placeholder');
    }

    public function down()
    {
        $this->forge->dropTable('contract_placeholder');
    }
}
