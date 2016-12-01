<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Crud extends CI_Controller {

	public function index()
	{
		$this->load->model("M_Crud");
		$TbBrg['TbBrg'] = $this->M_Crud->database();
		$this->load->view('crud',$TbBrg);
	}
}
