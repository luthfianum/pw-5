<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Devices extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'              => 'INT',
                'auto_increment'    => true
            ],
            'device_name'       => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => false
            ],
            'device_brand'      => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => false
            ],
            'device_quantity'   => [
                'type'              => 'INT',
                'null'              => false,
                'default'           => 0
            ],
            'device_status'     => [
                'type'              => 'BOOLEAN',
                'null'              => false,
                'default'           => false
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('devices', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('devices');
    }
}
