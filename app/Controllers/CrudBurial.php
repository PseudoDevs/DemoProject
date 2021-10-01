<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Burial;
use App\Models\Assist;
use App\Models\Citizen;

class CrudBurial extends BaseController
{
    public function index()
    {
        $burial = new Burial();
        $data['burials'] = $burial->orderBy('id', 'desc')->findAll();
        return view('burial/list',$data);
    }

    public function viewBurial($burialId)
    {
        $burial = new Burial();
        $hasData = $burial->where('id',$burialId)->first();
        if (!$hasData) {
            echo "<script> location.href='/admin/burial'; </script>";
           return;
        }

        $assist = new Assist();
        $data['assist'] = $assist->find($hasData['assist_id']);
     
        $citizen = new Citizen();
        $data['citizen'] = $citizen->find($hasData['citizen_id']);

        $data['burial'] = $hasData;
        return view('burial/View', $data);
    }

    public function loadBurial($burialId)
    {
        $burial = new Burial();
        $hasData = $burial->where('id',$burialId)->first();
        if (!$hasData) {
            echo "<script> location.href='/admin/burial'; </script>";
           return;
        }
        $data['burial'] = $hasData;
        return view('burial/edit', $data);
    }
    
    public function newBurial()
    {
        return view('burial/add');
    }
    public function addBurial()
    {
        if ($this->request->getMethod() == 'post') {
      
            $burial = new Burial();
            $burialData = array(
            'firstname' => $_POST['firstName'],
            'lastname'=> $_POST['lastName'],
            'dateOfDeath'=> $_POST['dateOfDeath'],
            'cemeteryAddress'=> $_POST['cemeteryAddress'],
            'district'=> $_POST['distrito'],
            'citizen_id'=> 0,
            'relationship'=> $_POST['relationship'],
            'reportedBy'=> $_POST['reportedBy'],
            'isWalkIn'=> $_POST['walkIn'],
            'barangay'=> $_POST['barangay']
        );
            if ($burial->save($burialData)) {
                echo "<script> location.href='/admin/burial'; </script>";
            }
         }
    }

    public function updateBurial()
    {  
         if ($this->request->getMethod() == 'post') {
            $burial = new Burial();
            $id = $_POST['burial_id'];
            $userData = array(
                'firstname' => $_POST['firstName'],
                'lastname'=> $_POST['lastName'],
                'dateOfDeath'=> $_POST['dateOfDeath'],
                'cemeteryAddress'=> $_POST['cemeteryAddress'],
                'district'=> $_POST['distrito'],
                'relationship'=> $_POST['relationship'],
                'barangay'=> $_POST['barangay']
            );
            if ($burial->update($id,$userData)) {
                echo "<script> location.href='/admin/burial'; </script>";
            }
        }
        else{
            echo "<script> location.href='/admin/burial'; </script>";
        }
    }

    public function deleteBurial($burialId)
    {
        $burial = new Burial();
        if ($burial->delete($burialId)) {
            echo "<script> location.href='/admin/burial'; </script>";
        }
        echo "<script> location.href='/admin/burial'; </script>";
    }
}
