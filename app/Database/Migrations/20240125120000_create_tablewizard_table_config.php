<?php
namespace Andwebci\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablewizardTableConfig extends Migration
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
            'table_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'field_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'field_type' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'group_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ordering' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tablewizard_table_config');
    }

    public function down()
    {
        $this->forge->dropTable('tablewizard_table_config');
    }
}
