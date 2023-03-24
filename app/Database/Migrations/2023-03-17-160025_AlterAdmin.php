<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAdmin extends Migration
{
    public function up()
    {
        $fields = [
            'image' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ]
        ];
        $this->forge->addColumn('admin', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('admin', 'preferences');
    }
}
