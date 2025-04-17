<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Alumni_model');
        $this->load->library('form_validation');
    }

        
    public function index()
    {
        $data['judul'] = "Data Alumni Lekku";
        $data['alumniByFakultas'] = $this->Alumni_model->getAlumniByFakultas();
        $data['alumniByJurusan'] = $this->Alumni_model->getJumlahByJurusan(); 

        $this->load->view('template/header', $data);
        $this->load->view('alumni/index', $data); 
        $this->load->view('template/footer');
    }

    public function detail()
    {
        $data['judul'] = "Data Alumni Lekku";
        $data['dataAlumni'] = $this->Alumni_model->getAllAlumni();
       

        $this->load->view('template/header', $data);
        $this->load->view('alumni/detail', $data); // Atau view yang kamu pakai untuk chart
        
    }




    
    

    public function tambah()
    {
        $data['judul'] = "CRUD dulu lekku";

        $this->form_validation->set_rules('nama_alumni', 'Nama', 'required');
        $this->form_validation->set_rules('NIM', 'NIM', 'required|exact_length[9]');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
        
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('template/header', $data);
            $this->load->view('alumni/tambah', $data);
            $this->load->view('template/footer');
        }else{
            $this->Alumni_model->tambahDataAlumni();
            redirect('alumni');
        }
    }

    


}  
