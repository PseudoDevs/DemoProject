<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Educational;

class CrudEducational extends BaseController
{
    public function index()
    {
        $guarantee = new Educational();
        $data['guarantees'] = $guarantee->orderBy('id', 'desc')->findAll();
        return view('educational/list',$data);
    }
    public function guaranteeAdd()
    {
        return view('educational/add');
    }

    public function addGuarantee()
    {
        if ($this->request->getMethod() == 'post') {
            $guaranteeLetter = new Educational();  
            $userData = array(
                'firstname'=>  $_POST['firstname'],
                'lastname'=> $_POST['lastname'],
                'gender'=>  $_POST['gender'],
                'contactNumber' => $_POST['contactNumber'],
                'birthday'=>  $_POST['birthday'],
                'amount' =>  $_POST['amount'],
                'educational'=>  $_POST['educational'],
                'school'=>  $_POST['school'],
                'schoolname'=>  $_POST['schoolname'],
                'district' =>   $_POST['district'],
                'barangay' =>   $_POST['barangay'],
            );
            if ( $guaranteeLetter->save($userData)) {
               echo "<script> location.href='/admin/educational'; </script>";
            }
         }
         else{
            echo "<script> location.href='/admin/educational'; </script>";
         }
    }
    public function loadGuarantee($guaranteeLetterId)
    {
        $guaranteeLetter = new Educational();  
        $hasData = $guaranteeLetter->where('id',$guaranteeLetterId)->first();
        if (!$hasData) {
            echo "<script> location.href='/admin/guarantee-letter'; </script>";
            return;
        }
        $data['guarantee'] = $hasData;
        $data['guarantee_id'] = $guaranteeLetterId;

        return view('educational/edit', $data);
    }

    public function viewGuarantee($guaranteeLetterId)
    {
        $guaranteeLetter = new Educational();  
        $hasData = $guaranteeLetter->where('id',$guaranteeLetterId)->first();
        if (!$hasData) {
        echo "<script> location.href='/admin/guarantee-letter'; </script>";
           return;
        }
        $data['guarantee'] = $hasData;
        return view('educational/View', $data);
    }

    public function updateGuarantee()
    {  
         if ($this->request->getMethod() == 'post') {

            $guaranteeLetter = new Educational();
            $id = $_POST['guarantee_id'];
            $userData = array(
                'firstname'=>  $_POST['firstname'],
                'lastname'=> $_POST['lastname'],
                'gender'=>  $_POST['gender'],
                'contactNumber' => $_POST['contactNumber'],
                'birthday'=>  $_POST['birthday'],
                'amount' =>  $_POST['amount'],
                'educational'=>  $_POST['educational'],
                'school'=>  $_POST['school'],
                'schoolname'=>  $_POST['schoolname'],
                'district' =>   $_POST['district'],
                'barangay' =>   $_POST['barangay'],
            );
            
            if ($guaranteeLetter->update($id,$userData)) {
                echo "<script> location.href='/admin/educational'; </script>";
            }
        }
        else{
            echo "<script> location.href='/admin/educational'; </script>";
        }
    }

    public function deleteGuarantee($guaranteeLetterId)
    {
        $guaranteeLetter = new Educational();
        if ($guaranteeLetter->delete($guaranteeLetterId)) {
            echo "<script> location.href='/admin/educational'; </script>";
        }
        echo "<script> location.href='/admin/educational'; </script>";
    }
}
