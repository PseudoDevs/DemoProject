<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuaranteeLetter;

class CrudGuaranteeLetter extends BaseController
{
    public function addGuarantee()
    {
        if ($this->request->getMethod() == 'post') {
            $guaranteeLetter = new GuaranteeLetter();  
            $userData = array(
                'firstname'=>  $_POST['firstname'],
                'lastname'=> $_POST['lastname'],
                'gender'=>  $_POST['gender'],
                'contactNumber' => $_POST['contactNumber'],
                'birthday'=>  $_POST['birthday'],
                'amount' =>  $_POST['amount'],
                'diagnosis' =>  $_POST['diagnosis'],
                'hospital'=>  $_POST['hospital'],
                'educational'=>  $_POST['educational'],
                'school'=>  $_POST['school'],
                'district' =>   $_POST['district'],
                'barangay' =>   $_POST['barangay'],
            );
            if ( $guaranteeLetter->save($userData)) {
               echo "<script> location.href='/admin/guarantee-letter'; </script>";
            }
         }
         else{
            echo "<script> location.href='/admin/guarantee-letter'; </script>";
         }
    }
    public function loadGuarantee($guaranteeLetterId)
    {
        $guaranteeLetter = new GuaranteeLetter();  
        $hasData = $guaranteeLetter->where('id',$guaranteeLetterId)->first();
        if (!$hasData) {
            echo "<script> location.href='/admin/guarantee-letter'; </script>";
            return;
        }
        $data['guarantee'] = $hasData;
        $data['guarantee_id'] = $guaranteeLetterId;

        return view('guaranteeLetter/edit', $data);
    }

    public function viewGuarantee($guaranteeLetterId)
    {
        $guaranteeLetter = new GuaranteeLetter();  
        $hasData = $guaranteeLetter->where('id',$guaranteeLetterId)->first();
        if (!$hasData) {
        echo "<script> location.href='/admin/guarantee-letter'; </script>";
           return;
        }
        $data['guarantee'] = $hasData;
        return view('guaranteeLetter/View', $data);
    }

    public function updateGuarantee()
    {  
         if ($this->request->getMethod() == 'post') {

            $guaranteeLetter = new GuaranteeLetter();
            $id = $_POST['guarantee_id'];
            $userData = array(
                'firstname'=>  $_POST['firstname'],
                'lastname'=> $_POST['lastname'],
                'gender'=>  $_POST['gender'],
                'contactNumber' => $_POST['contactNumber'],
                'birthday'=>  $_POST['birthday'],
                'amount' =>  $_POST['amount'],
                'diagnosis' =>  $_POST['diagnosis'],
                'hospital'=>  $_POST['hospital'],
                'educational'=>  $_POST['educational'],
                'school'=>  $_POST['school'],
                'district' =>   $_POST['district'],
                'barangay' =>   $_POST['barangay'],
            );
            
            if ($guaranteeLetter->update($id,$userData)) {
                echo "<script> location.href='/admin/guarantee-letter'; </script>";
            }
        }
        else{
            echo "<script> location.href='/admin/guarantee-letter'; </script>";
        }
    }

    public function deleteGuarantee($guaranteeLetterId)
    {
        $guaranteeLetter = new GuaranteeLetter();
        if ($guaranteeLetter->delete($guaranteeLetterId)) {

            echo "<script> location.href='/admin/guarantee-letter'; </script>";
        }
        echo "<script> location.href='/admin/guarantee-letter'; </script>";
    }
}
