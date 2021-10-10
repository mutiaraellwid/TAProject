<?php

namespace App\Controllers;
use App\Models\DataModel;

class Home extends BaseController
{    
	protected $dataModel;
    public function __construct()
    {
        $this->dataModel = new DataModel();
    }
	public function index()
	{
        $data = array(
            'chart' => $this->dataModel->db->table('databanjir')->limit(10)->orderBy('DateTime','DESC')->get()->getResultArray()
        );
        echo view('Home/home', $data);
	}
    public function about()
	{
		$data = array(
            'chart' => $this->dataModel->db->table('databanjir')->get()->getResultArray()
        );
        echo view('Home/about', $data);
	}
	public function test()
	{
        echo view('Home/test');
	}
}