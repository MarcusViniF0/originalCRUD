<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_usuario extends CI_Controller {

	public function novo()
	{
		$usu=array(
		"email"=>$this->input->post("email"),
		"senha"=>md5($this->input->post("senha"))
		);
		$this->load->model("cad_model");
		$this->cad_model->salva($usu);
		$this->load->view('login/novo');
	}
}
