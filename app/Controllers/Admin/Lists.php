<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Lists extends BaseController
{
    public function index()
    {
        return view('citizen/Lists');
    }
}
