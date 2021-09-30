<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Citizen;

class CitizenController extends BaseController
{
    public function index()
    {
        $citizen = new Citizen();
        $data['citizens'] = $citizen->findAll();
        return view('citizen/List', $data);
    }
    public function citizenAdd()
    {
        return view('citizen/Add');
    }
    
}
