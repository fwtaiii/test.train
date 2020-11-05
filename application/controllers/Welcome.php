<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('test');
		$this->load->view('navbar');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function insert()
	{
		$data = array(

			'tarin_id' => $this->input->post("tarin_id"),
			'node' => $this->input->post("node"),
		);
		$data1 = array(

			'station' => $this->input->post("station"),
			'outtime' => $this->input->post("outtime"),

		);
		$data2 = array(

			'to' => $this->input->post("to"),
			'out' => $this->input->post("out"),

		);
		$data3 = array(

			'tarin' => $this->input->post("tarin"),
			'ittime' => $this->input->post("ittime"),

		);
		$this->test->insert1($data);
		$this->test->insert2($data1);
		$this->test->insert3($data2);
		$this->test->insert4($data3);
		redirect('Welcome/index1');
	}

	public function index1()
	{
		$data['four']=$this->test->show();
		$this->load->view('show',$data);
	}
}
