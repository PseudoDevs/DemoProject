<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class citizenList extends BaseController
{
    public function index()
    {
        return view('citizen/List');
    }
}
