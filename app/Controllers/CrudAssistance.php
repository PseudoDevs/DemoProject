<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Assist;
use App\Models\Burial;

class CrudAssistance extends BaseController
{
    public function index()
    {
        return view('citizen/AddAssist');
    }
    // public function addAssistForm($citizen_slugs)
    // {
    //     $citizen = new Citizen();
    //     $hasData = $citizen->where('slugs',$citizen_slugs)->first();
    //     if (!$hasData) {
    //         redirect('citizen/AddAssist');
    //      }
    //     $data['citizen_id'] = $hasData['id'];
    //     redirect('citizen/AddAssist');
    // }
    public function addAssist()
    {
        if ($this->request->getMethod() == 'post') {
            $assist = new Assist();
            if ($assist->save($_POST)) {
                if ($_POST['assistance_type'] == "Burial") {
                    $burial = new Burial();
                    $burialData = array(
                        'assist_id' => $assist->getInsertID(),
                        'firstname' => $_POST['firstName'],
                        'lastname'=> $_POST['lastName'],
                        'dateOfDeath'=> $_POST['dateOfDeath'],
                        'cemeteryAddress'=> $_POST['cemeteryAddress'],
                        'district'=> $_POST['distrito'],
                        'citizen_id'=> $_POST['citizen_id'],
                        'relationship'=> $_POST['relationship'],
                        'barangay'=> $_POST['barangay']
                    );
                    if ($burial->save($burialData)) {
                       echo "<script> location.href='/admin/citizen/view/".$_POST['citizen_slugs']."'; </script>";
                    }
                }
                echo "<script> location.href='/admin/citizen/view/".$_POST['citizen_slugs']."'; </script>";
            }
         }
         else{
            echo "<script> location.href='/'; </script>";
         }
    }
    public function deleteAssist($id,$citizen_slugs)
    {
        $assist = new Assist();
        if ($assist->delete($id)) {
            // return redirect()->To(base_url('admin/citizen/view/'.$citizen_slugs));
            echo "<script> location.href='/admin/citizen/view/".$citizen_slugs."'; </script>";
        }
    }
    public function receiveAssist($id,$citizen_slugs)
    {
        $assist = new Assist();
        $data = array(
            'received_at' => date('Y-m-d', strtotime("+1 day", strtotime(date('Y-m-d'))))
        );

        if ($assist->update($id,$data)) {
            // return redirect()->To(base_url('admin/citizen/view/'.$citizen_slugs));
            echo "<script> location.href='/admin/citizen/view/".$citizen_slugs."'; </script>";
        }
    }


    
}
