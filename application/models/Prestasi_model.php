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

    public function edit($id){
        $query = $this->db->where("id",$id)->get("prestasi");
        if($query){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update($data,$id){
        $query = $this->db->update("prestasi",$data,$id);
        if($query){
            return true;
        }else {
            return false;
        }
    }
    public function hapus($id) {
        $this->db->where('id',$id);
        $this->db->delete('prestasi');
        // $query = $this->db->delete("prestasi",$id);
        // if($query){
        //     return true;
        // }else{
        //     return false;
        // }
    }
}
?>