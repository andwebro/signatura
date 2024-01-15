<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContractAuditTrailTable extends Migration
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
            'contract_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'event_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'event_date' => [
                'type' => 'DATETIME',
            ],
            'ip' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'author_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('contract_audit_trail');
    }

    public function down()
    {
        $this->forge->dropTable('contract_audit_trail');
    }
}
