<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
		$this->load->model("user_model");
		$lista=$this->user_model->buscaTodos();
		$dados=array("usuario"=>$lista);
		$this->load->view('user/index',$dados);
	}
}
