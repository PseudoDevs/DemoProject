<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class CrudUser extends BaseController
{

    public function addUser()
    {
        if ($this->request->getMethod() == 'post') {
            $user = new User();  

            $username = $_POST['username'];
            $email = $_POST['email'];
            $type = $_POST['type'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $confirm_password = $_POST['confirm_password'];

            if ($password != $confirm_password) {
                echo "Password and Confirm password is not match.";
                return;
            }
            
            $userData = array(
                'type' =>  $type,
                'gender'=>  $gender,
                'firstname'=>  $firstname,
                'lastname'=>  $lastname,
                'contactNumber' => $_POST['mobile'],
                'address'=>  $address,
                'birthday'=>  $birthday,
                'username' =>  $username,
                'password' =>  md5($password),
                'email' =>  $email
            );
            if ( $user->save($userData)) {
            //    return redirect()->To(base_url('admin/users'));
               echo "<script> location.href='/admin/users'; </script>";
            }
         }
         else{
            echo "<script> location.href='/admin/users'; </script>";
         }
    }
    public function loadUser($userid)
    {
        $user = new User();
        $hasData = $user->where('id',$userid)->first();
        if (!$hasData) {
            echo "<script> location.href='/admin/users'; </script>";
            return;
        }
        $data['users'] = $hasData;
        return view('users/edit', $data);
    }

    public function viewUser($citizen_slugs)
    {
        $user = new User();
        $hasData = $user->where('id',$citizen_slugs)->first();
        if (!$hasData) {
        //    return redirect()->To(base_url('admin/users'));
           echo "<script> location.href='/admin/users'; </script>";
           return;
        }
        $data['user'] = $hasData;
        return view('users/View', $data);
    }

    public function updateUser()
    {  
         if ($this->request->getMethod() == 'post') {
 
            $user = new User();
            $username = $_POST['username'];
            $email = $_POST['email'];
            $type = $_POST['type'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $confirm_password = $_POST['confirm_password'];
            
           
            if ($password != $confirm_password) {
                echo "Password and Confirm password is not match.";
                return;
            }
            if (empty($password) ||  empty($password)) {
                $userData = array(
                    'type' =>  $type,
                    'gender'=>  $gender,
                    'firstname'=>  $firstname,
                    'lastname'=>  $lastname,
                    'contactNumber' => $_POST['mobile'],
                    'address'=>  $address,
                    'birthday'=>  $birthday,
                    'username' =>  $username,
                    'email' =>  $email
                );
            }
            else{
                $userData = array(
                    'type' =>  $type,
                    'gender'=>  $gender,
                    'firstname'=>  $firstname,
                    'lastname'=>  $lastname,
                    'contactNumber' => $_POST['mobile'],
                    'address'=>  $address,
                    'birthday'=>  $birthday,
                    'username' =>  $username,
                    'password' =>  md5($password),
                    'email' =>  $email
                );
            }
           
            $id = $_POST['user_id'];
      
            if ($user->update($id,$userData)) {
                // return redirect()->To(base_url('admin/users'));
                echo "<script> location.href='/admin/users'; </script>";
            }
        
        }
        else{
            // return redirect()->To(base_url('admin/users'));
            echo "<script> location.href='/admin/users'; </script>";
        }
    }

    public function deleteUser($citizen_slugs)
    {
        $user = new User();
        if ($user->delete($citizen_slugs)) {
            // return redirect()->To('admin/users');
            echo "<script> location.href='/admin/users'; </script>";
        }
        echo "<script> location.href='/admin/users'; </script>";
    }
}
