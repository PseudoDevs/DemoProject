<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class citizenView extends BaseController
{
    public function index()
    {
        return view('citizen/View');
    }
}
