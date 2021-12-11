<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DeviceDetails extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'              => 'INT',
                'auto_increment'    => true
            ],
            'device_id'       => [
                'type'              => 'INT',
                'null'              => false
            ],
            'device_defect'      => [
                'type'              => 'BOOLEAN',
                'null'              => false,
                'default'           => true
            ],
            'device_origin'   => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => false,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('device_id', 'devices', 'id');
        $this->forge->createTable('device_details', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('device_details');
    }
}
