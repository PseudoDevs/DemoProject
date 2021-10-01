<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GuaranteeLetter;

class GuaranteeLetterController extends BaseController
{
    public function index()
    {
        $guarantee = new GuaranteeLetter();
        $data['guarantees'] = $guarantee->orderBy('id', 'desc')->findAll();
        return view('guaranteeLetter/list',$data);
    }
    public function guaranteeAdd()
    {
        return view('guaranteeLetter/add');
    }
}
