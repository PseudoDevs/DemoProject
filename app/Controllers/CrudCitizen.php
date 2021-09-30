<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Citizen;
use App\Models\Assist;

class CrudCitizen extends BaseController
{
    public function index()
    {
        return view('citizen/Edit');
    }

    public function loadCitizen($citizen_slugs)
    {
        $citizen = new Citizen();
        $hasData = $citizen->where('id',$citizen_slugs)->first();
        if (!$hasData) {
            echo "<script> location.href='/admin/citizen'; </script>";
            return;
        }
        $data['citizen'] = $citizen->where('id',$citizen_slugs)->first();
         return view('citizen/Edit', $data);
    }

    public function addCitizen()
    {   
        //print_r($_POST);
       if ($this->request->getMethod() == 'post') {
            $newCitizen = new Citizen();
           // $data = array();
            if ($newCitizen->save($_POST)) {
            //    echo ;
            //    return redirect()->To(base_url('admin/citizen'));
               echo "<script> location.href='/admin/citizen'; </script>";
            }
        }
        else{
            echo "<script> location.href='/admin/citizen'; </script>";
        }
       
    }   
    
    public function viewCitizen($citizen_slugs)
    {
        $citizen = new Citizen();
        $hasData = $citizen->where('id',$citizen_slugs)->first();
        if (!$hasData) {
            //redirect('citizen/View', 'refresh');
            // return redirect()->To(base_url('admin/citizen'));
            echo "<script> location.href='/admin/citizen'; </script>";
            return;
        }
        $data['citizen'] = $hasData;
        $data['citizen_slugs'] = $citizen_slugs;
     
        $citizen_id =$data['citizen']['id'];
        $assist = new Assist();
        $data['assists'] = $assist->where('citizen_id', $citizen_id)->orderBy('id', 'desc')->findAll();
        $data['citizen_slugs'] = $citizen_slugs;
        // print_r($data['assists']);
        return view('citizen/View',$data);

    }
    
    public function updateCitizen()
    {  
         if ($this->request->getMethod() == 'post') {
            $citizen = new Citizen();
        
            $id = $_POST['citizen_id'];
            $citizen->update($id,$_POST);
            if ($citizen->update($id,$_POST)) {
                // return redirect()->To(base_url('admin/citizen'));
                echo "<script> location.href='/admin/citizen'; </script>";
            }
        }
    }

    public function deleteCitizen($citizen_slugs)
    {
        $citizen = new Citizen();
        $hasData = $citizen->where('id',$citizen_slugs)->first();
        if (!$hasData) {
            // return view('citizen/View', $data);
            echo "<script> location.href='/admin/citizen'; </script>";
        }
        $id = $hasData['id'];
        $assist = new Assist();
        $assistData = $assist->where('citizen_id', $id)->delete();
        if ($assistData && $citizen->delete($id)) {
        //    return redirect()->To(base_url('admin/citizen'));
        //    return redirect()->back();
        echo "<script> location.href='/admin/citizen'; </script>";
        }
     
    }
}
