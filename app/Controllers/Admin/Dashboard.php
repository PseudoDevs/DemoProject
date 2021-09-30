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

        shuffle($color);
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

        $count = 0;
        for($i = $begin; $i <= $end; $i->modify('+1 day')){
            if (in_array($i->format("F Y"), $monthYear)) {
                continue;
            }
            $monthYear[] = $i->format("F Y");
        }
    //   json_encode($monthYear);
    print_r($_GET);
    }

}
