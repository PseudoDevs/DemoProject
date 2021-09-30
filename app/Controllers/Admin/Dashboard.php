<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Burial;
use App\Models\Assist;
use App\Models\Citizen;
use App\Models\User;
use CodeIgniter\Database\BaseBuilder;
use \DateTime; 

class Dashboard extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    { 
        $burial = new Burial();
        $assist = new Assist();
        $citizen = new Citizen();
        $user = new User();

        $Date = date('Y-m-d', strtotime(date('Y-m-d'). ' + 1 days'));
        $data['TotalCitizen'] = $citizen->countAllResults();
        $data['NewCitizen'] = $citizen->like('created_at',$Date)->countAllResults();
        $data['NewAssist'] = $assist->like('created_at',$Date)->countAllResults();
        $data['Admins'] = $user->where('type',1)->countAllResults();
        $data['Users'] = $user->where('type',2)->countAllResults();

        $builder = $this->db->table("tblassist");
		$builder->groupBy('assistance_type');
        $query = $builder->get()->getResult();

        $type = array();
        $countForEveryCategory = array();
        $color = array();
        foreach ($query as $assist) {
            $type[] = $assist->assistance_type;
            $countForEveryCategory[] = $builder->where('assistance_type', strval($assist->assistance_type))->countAllResults();
            $color[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }
   
        shuffle($color);
        $dataChart=array(
            "labels" => $type,
            "datasets" =>  array(
                array(
                 "data" => $countForEveryCategory, 
                 "backgroundColor" => $color, 
                 "hoverBackgroundColor" => array_reverse($color)
                )
            ),
        );

        // shuffle($color);
        $data['assistance_pie'] = $dataChart;
        $data['assistance_label'] = $type;
        $data['assistance_data'] =$countForEveryCategory;
        $data['assistance_color'] = $color;

        return view('Dashboard',$data);
    }

    public function assistanceData()
    {
        if ($this->request->getMethod() == 'post') {
                print_r($_POST);

        }
        else{
            $assist = new Assist();
            $builder = $this->db->table("tblassist");
		    $builder->groupBy('assistance_type');
            $query = $builder->get()->getResult();
            // $countForEveryCategory[] = $assist->where('assistance_type', "")->countAllResults();
            // echo $assist->where('assistance_type', "Burial")->countAllResults();

            $type = array();
            $countForEveryCategory = array();
            $color = array();
    
            foreach ($query as $assist) {
                $type[] = $assist->assistance_type;
                $countForEveryCategory[] = $builder->where('assistance_type', strval($assist->assistance_type))->countAllResults();
                $color[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            }
            $dataChart=array(
                "labels" => $type,
                "datasets" =>  array(
                    array(
                     "data" => $countForEveryCategory, 
                     "backgroundColor" => $color, 
                     "hoverBackgroundColor" => array_reverse($color)
                    )
                ),
            );
            echo json_encode($dataChart);
        }

      
        // echo "test";
    }

    public function assistanceBarChart()
    {
      
        $begin = new DateTime( $_GET['dateFrom'] );
        $end = new DateTime( $_GET['dateTo'] );

        $monthYear = array();
       $dataAssistance = array();
        // $sql = "SELECT * FROM tblassist WHERE assistance_type  = ? AND created_at >= ? AND created_at <= ?";
        $sql = "SELECT * FROM tblassist WWERE assistance_type '%?%'  AND created_at LIKE '%?%'";
        // $query = $this->db->query($sql, [$_GET['assistance_type'],  $_GET['dateFrom'],  $_GET['dateTo']])->getResult();
        // $count = 0;
        $builder = $this->db->table("tblassist");
     
        for($i = $begin; $i <= $end; $i->modify('+1 day')){
            if (in_array($i->format("F Y"), $monthYear)) {
                continue;
            }
           
            $dataAssistance[] = $builder->where('assistance_type', $_GET['assistance_type'])->like('created_at', $i->format("Y-m"), 'both')->countAllResults(); 
            // $query = $this->db->query($sql, [$_GET['assistance_type'],  $i->format("Y-m-d")])->getResult();
            $monthYear[] = $i->format("F Y");
            // $monthYear[] = $i->format("Y-m-d");
        }

        $data = array(
            "month" => $monthYear,
            "data_assistance" => $dataAssistance,

        );
        // print_r( $begin." ".$end);
        // print_r($query);
        print_r(json_encode($data));
    // print_r($data);
    }

}
