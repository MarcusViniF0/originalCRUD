<?php
class User_model extends CI_model{
    public function buscaTodos(){
       return $this->db->get("usuario")->result_array();
    }

}