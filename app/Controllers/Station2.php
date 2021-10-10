<?php

namespace App\Controllers;
use App\Models\DataModel2;

class Station2 extends BaseController
{
    protected $dataModel2;
    public function __construct()
    {
        $this->dataModel2 = new DataModel2();
    }
    public function dashboard()
	{
        $dashboard = new DataModel2();
        $data = [
            'chart' => $this->dataModel2->db->table('DataBanjir2')->get()->getResultArray(),
            'dashboard' => $dashboard->findAll()
        ];
        echo view('Station2/dashboard', $data);
	}
    public function chart()
	{
        $data = array(
            'chart' => $this->dataModel2->db->table('DataBanjir2')->limit(10)->orderBy('DateTime','DESC')->get()->getResultArray()
        );
        echo view('Station2/chart', $data);
	}
    public function field()
	{
        $field = $this->dataModel2->findAll();
        $data = [
            'chart' => $this->dataModel->db->table('DataBanjir2')->get()->getResultArray(),
            'field' => $field
        ];
        echo view('Station2/field', $data);
	}
    public function tables()
	{        
        $data = [
            'chart' => $this->dataModel2->db->table('DataBanjir2')->orderBy('Rain_Gauge','DESC')->get()->getResultArray(),
            'data' => $this->dataModel2->paginate(5, 'DB_Banjir'),
            'pager' => $this->dataModel2->pager
        ];
        echo view('Station2/tables', $data);
	}
    public function download()
	{        
        $tables = $this->dataModel2->findAll();
        $data = [
            'tables' => $tables
        ];
        echo view('Station2/download', $data);
	}
}
