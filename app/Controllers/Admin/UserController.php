<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        $users = new User();
        $data['users'] = $users->findAll();
        return view('users/list',$data);
    }
    public function userAdd()
    {
        return view('users/add');
    }
}
