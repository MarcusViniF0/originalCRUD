<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function autenticar()
	{
		$this->load->model("cad_model");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$usu= $this->cad_model->logarUsuarios($email, $senha);
		if($usu){
			$this->session->set_userdata("usuario logado", $usu);
			$this->session->set_flashdata("success","Logado com sucesso!");
		}else{
			$this->session->set_flashdata("danger","Usuario ou senha invalidos!");
		}
		redirect('/');
	}
}
