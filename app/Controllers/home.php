<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | Monitoring'
        ];
        echo view('layout/header', $data);
        echo "Sekarang anda di page home dari Monitoring APP";
        echo view('layout/footer');
    }
}
