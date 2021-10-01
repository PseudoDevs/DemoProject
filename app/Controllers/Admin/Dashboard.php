<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Educational;
use App\Models\GuaranteeLetter;
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
     
    
        $assist = new Assist();
        $citizen = new Citizen();
        $user = new User();

        $Date = date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 days'));
        $data['TotalCitizen'] = $citizen->countAllResults();
        $data['NewCitizen'] = $citizen->like('created_at', $Date)->countAllResults();
        $data['NewAssist'] = $assist->like('created_at', $Date)->countAllResults();
        $data['Admins'] = $user->where('type', 1)->countAllResults();
        $data['Users'] = $user->where('type', 2)->countAllResults();

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
        $dataChart = array(
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
        $data['assistance_data'] = $countForEveryCategory;
        $data['assistance_color'] = $color;

        $dateFromMonth = date('Y-m-d', strtotime("-6 months", strtotime(date('Y-m-d'))));
        $dateToMonth = date('Y-m-d', strtotime("+1 day", strtotime(date('Y-m-d'))));

        $gBegin = new DateTime($dateFromMonth);
        $gEnd = new DateTime($dateToMonth);
        $monthGuarantee = array();
        $dataGuarantee = array();
        $builder = $this->db->table("tblguaranteeletter");

        for ($i = $gBegin; $i <= $gEnd; $i->modify('+1 day')) {
            if (in_array($i->format("F Y"), $monthGuarantee)) {
                continue;
            }
            $dataGuarantee[] = $builder->like('created_at', $i->format("Y-m"), 'both')->countAllResults();
            $monthGuarantee[] = $i->format("F Y");
        }

        $data['dataGuarantee'] = $dataGuarantee;
        $data['monthGuarantee'] = $monthGuarantee;

        $eBegin = new DateTime($dateFromMonth);
        $eEnd = new DateTime($dateToMonth);

        $monthEducational = array();
        $dataEducational  = array();
        $builder = $this->db->table("tbleducational");

        for ($i = $eBegin; $i <= $eEnd; $i->modify('+1 day')) {
            if (in_array($i->format("F Y"), $monthEducational)) {
                continue;
            }
            $dataEducational[] = $builder->like('created_at', $i->format("Y-m"), 'both')->countAllResults();
            $monthEducational[] = $i->format("F Y");
        }

        $data['dataEducational'] = $dataEducational;
        $data['monthEducational'] = $monthEducational;

        return view('Dashboard', $data);
    }

    public function assistanceData()
    {
        if ($this->request->getMethod() == 'post') {
            print_r($_POST);
        } else {
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
            $dataChart = array(
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

        $begin = new DateTime($_GET['dateFrom']);
        $end = new DateTime($_GET['dateTo']);

        $monthYear = array();
        $dataAssistance = array();
        $builder = $this->db->table("tblassist");

        for ($i = $begin; $i <= $end; $i->modify('+1 day')) {
            if (in_array($i->format("F Y"), $monthYear)) {
                continue;
            }

            $dataAssistance[] = $builder->where('assistance_type', $_GET['assistance_type'])->like('created_at', $i->format("Y-m"), 'both')->countAllResults();
            $monthYear[] = $i->format("F Y");
        }

        $data = array(
            "month" => $monthYear,
            "data_assistance" => $dataAssistance,

        );

        print_r(json_encode($data));
    }
    public function guaranteeBarChart()
    {

        $begin = new DateTime($_GET['dateFrom']);
        $end = new DateTime($_GET['dateTo']);

        $monthYear = array();
        $dataAssistance = array();
        $builder = $this->db->table("tblguaranteeletter");

        for ($i = $begin; $i <= $end; $i->modify('+1 day')) {
            if (in_array($i->format("F Y"), $monthYear)) {
                continue;
            }
            $dataAssistance[] = $builder->like('created_at', $i->format("Y-m"), 'both')->countAllResults();
            $monthYear[] = $i->format("F Y");
        }

        $data = array(
            "month" => $monthYear,
            "data_assistance" => $dataAssistance,

        );
        print_r(json_encode($data));
    }

    public function educationalBarChart()
    {

        $begin = new DateTime($_GET['dateFrom']);
        $end = new DateTime($_GET['dateTo']);

        $monthYear = array();
        $dataAssistance = array();
        $builder = $this->db->table("tbleducational");

        for ($i = $begin; $i <= $end; $i->modify('+1 day')) {
            if (in_array($i->format("F Y"), $monthYear)) {
                continue;
            }
            $dataAssistance[] = $builder->like('created_at', $i->format("Y-m"), 'both')->countAllResults();
            $monthYear[] = $i->format("F Y");
        }

        $data = array(
            "month" => $monthYear,
            "data_assistance" => $dataAssistance,

        );
        print_r(json_encode($data));
        // print_r($data);
    }
}
