<?php

namespace App\Controllers;

use App\Models\monitoringModel;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Monitoring'
        ];
        echo view('layout/header', $data);
        echo view('monitoring/home');
        echo view('layout/footer');
    }
    public function device()
    {
        $monitoringModel = new monitoringModel();
        $monitoring = $monitoringModel->findAll();
        $data = [
            'title' => 'Device | Monitoring',
            'monitoring' => $monitoring
        ];
        echo view('layout/header', $data);
        echo view('monitoring/device');
        echo view('layout/footer');
    }
}
