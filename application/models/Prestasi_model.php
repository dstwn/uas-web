<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_model extends CI_Model{
    public function getAll(){
        $query = $this->db->select("*")->from('prestasi')->order_by('id','DESC')->get();
        return $query->result();
    }
    public function simpan($data){
        $query = $this->db->insert("prestasi",$data);

        if($query){
            return true;
        } else{
            return false;
        }
    }
}
?>