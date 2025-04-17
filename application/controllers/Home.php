<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model
        $this->load->model('Alumni_model');
    }

    public function index()
    {
        $dataAlumni = $this->Alumni_model->getAllAlumni(); // Sesuaikan method model-nya

        $data = [
            'judul'          => 'Home',
            'totalAlumni'    => count($dataAlumni),
            'jumlahFakultas' => count(array_unique(array_column($dataAlumni, 'fakultas'))),
            'jumlahJurusan'  => count(array_unique(array_column($dataAlumni, 'jurusan'))),
            'tahunTerbaru'   => max(array_column($dataAlumni, 'tahun_lulus'))
        ];

        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data); // kirim $data ke view
        $this->load->view('template/footer');
    }
}
