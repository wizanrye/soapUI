<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soap extends CI_Controller {

	function __construct(){
		parent::__construct();
		/*codes here*/
		$this->load->model('soap_model','soap');
	}
	
	public function index()
	{
		$this->load->view('soap');
	}

	public function convert1(){
		$a = $this->input->post('conv1');
		$b = $this->input->post('conv2');
		$data = $this->soap->convert($a,$b);
		echo json_encode($data);
		//$this->load->view('soap',$data);
		//redirect('soap',$data);
	}

	public function convert2(){
		$a = $this->input->post('conv12');
		$b = $this->input->post('conv22');
		$c = $this->input->post('conv32');
		$data = $this->soap->convert2($a,$b,$c);
		echo json_encode($data);
	}

	public function convert3(){
		$a = $this->input->post('conva');
		$b = $this->input->post('convb');
		$c = $this->input->post('convc');
		$d = $this->input->post('convd');
		$data = $this->soap->convert3($a,$b,$c,$d);
		echo json_encode($data);
	}

	/*public function convert2(){

	}*/
}
