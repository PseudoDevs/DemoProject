<?php

namespace App\Controllers;

use App\Models\User;
use App\Config\Services;

class Login extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        if($session->get('isUserLogin')){
            // return redirect()->To(base_url('admin/dashboard'));
            echo "<script> location.href='/admin/dashboard'; </script>";
        }
        return view('index');
    }
    public function signin()
    {
        if ($this->request->getMethod() == 'post') {
            $user = new User();  
            $username = $_POST['username'];
            $session = session();
            $session->start();
            $userInfo = $user->where('username', $username)->first();
            if (!$userInfo) {
               echo "Wrong Username Or Password";
               $session->setFlashdata('user_not_exist','Wrong Username Or Password');
               return redirect()->To(base_url());
            }
            else{    
        
                $password = md5($_POST['password']);
                if ($password != $userInfo['password']) {
                    $session->setFlashdata('user_not_exist','Wrong Password');
                    echo "Wrong Password";
                    return redirect()->To(base_url());
                }
                else{

                $fullname = $userInfo['firstname']." ".$userInfo['lastname'];
                $user_data = array(
                    'id' => $userInfo['id'],
                    'username' => $userInfo['username'],
                    'email' => $userInfo['email'],
                    'fullname' => $fullname,
                    'firstname' => $userInfo['firstname'],
                    'lastname' => $userInfo['lastname'],
                    'address' => $userInfo['address'],
                    'birthday' => $userInfo['birthday'],
                    'type' => $userInfo['type'],
                    'isUserLogin' => true
                );

                $session->set($user_data);
                echo "<script> location.href='/admin/dashboard'; </script>";
                // return header('Location: /admin/dashboard');
                // return redirect()->route('/admin/dashboard');
                // return url_to('/admin/dashboard');
                // echo url_to('Admin/Dashboard::index', 'home');
                }
            
            }
        
        }
        else{
            // return redirect()->To(base_url());
            echo "<script> location.href='/'; </script>";
        }
    }
    public function logout()
    {   
        $session = \Config\Services::session();
        $session->destroy();
        // return redirect()->To(base_url());
        echo "<script> location.href='/'; </script>";
    }
}
