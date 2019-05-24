<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->model('prestasi_model');

    }

    public function index(){
        $data = array(
            'title' => 'Data Prestasi',
            'data_prestasi' => $this->prestasi_model->getAll()
        );

        $this->load->view('data_prestasi',$data);
    }

    public function tambah(){
        $data = array(
            'title' => 'Tambah Prestasi'
        );
        $this->load->view('tambah_prestasi', $data);
    }

    public function simpan(){
        $data = array(
            'mahasiswa' => $this->input->post("mahasiswa"),
            'predikat' => $this->input->post("predikat"),
            'tingkat' => $this->input->post("tingkat"),
            'tahun' => $this->input->post("tahun"),
            'kegiatan' => $this->input->post("kegiatan")
        );
        $this->prestasi_model->simpan($data);
        
        $this->session->set_flashdata('notif','
        <div class="alert alert-success">
            <div class="alert-title">Berhasil</div>
            Prestasi berhasil ditambahkan.
        </div>
        ');
        redirect('prestasi/');
        
    }
    public function edit($id){
        $id = $this->uri->segment(3);
        $data = array(
            'title' => 'Edit Prestasi',
            'data_prestasi' => $this->prestasi_model->edit($id)
        );
        $this->load->view('item_handler',$data);
    }
    
    public function update(){
        $id['id'] = $this->input->post("id");
        $data = array (
            'mahasiswa' => $this->input->post("mahasiswa"),
            'predikat' => $this->input->post("predikat"),
            'tingkat' => $this->input->post("tingkat"),
            'tahun' => $this->input->post("tahun"),
            'kegiatan' => $this->input->post("kegiatan")
        );
        $this->prestasi_model->update($data, $id);
       
        $this->session->set_flashdata('notif','
        <div class="alert alert-success">
            <div class="alert-title">Berhasil</div>
            Prestasi berhasil diedit.
        </div>
        ');
        redirect('prestasi/');
    }
    public function hapus($id){

        $id = $this->uri->segment(3);
        $this->prestasi_model->hapus($id);

        
        $this->session->set_flashdata('notif','
        <div class="alert alert-danger">
            <div class="alert-title">Dihapus</div>
            Prestasi berhasil dihapus.
        </div>
        ');

        redirect('prestasi/');
    }
   

}

?>