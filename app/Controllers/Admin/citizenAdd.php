<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class citizenAdd extends BaseController
{
    public function index()
    {
        return view('citizen/Add');
    }
}
