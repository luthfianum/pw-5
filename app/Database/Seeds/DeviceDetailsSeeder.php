<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DeviceDetailsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'device_id'     => '1',
                'device_defect' => '0',
                'device_origin' => 'Indonesia',
            ],
            [
                'device_id'     => '1',
                'device_defect' => '0',
                'device_origin' => 'Indonesia',
            ],
            [
                'device_id'     => '2',
                'device_defect' => '0',
                'device_origin' => 'Indonesia',
            ],
            [
                'device_id'     => '2',
                'device_defect' => '0',
                'device_origin' => 'Indonesia',
            ]
        ];

        $this->db->table('device_details')->insertBatch($data);
    }
}
