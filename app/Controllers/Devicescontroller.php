<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Devices;

class Devicescontroller extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Devices();
    }

    public function index()
    {
        $data = [
            'data' => $this->model->findAll()
        ];
        return view('pages/devices', $data);
    }

    public function deviceToggleUpdate($id)
    {
        $old_data = $this->model->find($id);
        $new_data = [
            'device_status' => !$old_data['device_status']
        ];
        $this->model->update($id, $new_data);

        $data = [
            'data' => $this->model->findAll()
        ];

        return view('pages/devices', $data);
    }
}
