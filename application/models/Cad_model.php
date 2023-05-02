<?php
class Cad_model extends CI_model{
    public function salva($usu){
return $this->db->insert("cad_user",$usu);
}
public function logarUsuarios($email, $senha){
    $this->db->where("email", $email);
    $this->db->where("senha", $senha);
    $usuario = $this->db->get("cad_user")->row_array();
    return $usu;
}
}