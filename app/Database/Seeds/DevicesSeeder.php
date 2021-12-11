<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DevicesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'device_name'       => 'CCTV',
                'device_brand'      => 'Dardi',
                'device_quantity'   => '2',
            ],
            [
                'device_name'       => 'Smart Lamp',
                'device_brand'      => 'Hilips',
                'device_quantity'   => '2',
            ]
        ];

        $this->db->table('devices')->insertBatch($data);
    }
}
