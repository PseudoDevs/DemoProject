<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class citizenEdit extends BaseController
{
    public function index()
    {
        return view('citizen/Edit');
    }
}
