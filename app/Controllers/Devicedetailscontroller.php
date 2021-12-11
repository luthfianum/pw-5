<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DeviceDetails;
use App\Models\Devices;

class Devicedetailscontroller extends BaseController
{
    protected $model;
    protected $db;

    public function __construct()
    {
        $this->model[0] = new DeviceDetails();
        $this->model[1] = new Devices();
    }

    public function index($id)
    {
        $data = [
            'data' => [
                'device' => $this->model[1]->find($id),
                'deviceDetail' => $this->model[0]->where('device_id', $id)->first(),
            ],
        ];
        return view('pages/deviceDetails', $data);
    }

    
}
