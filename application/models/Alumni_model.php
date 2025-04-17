<?php

class Alumni_model extends CI_Model {

    public function getAllAlumni()
    {
        return $this->db->get('alumni')->result_array();
    }

    public function tambahDataAlumni()
    {
        $data = [
            'nama_alumni' => $this->input->post('nama_alumni', true),
            'NIM' => $this->input->post('NIM', true),
            'tahun_lulus' => $this->input->post('tahun_lulus', true),
            'fakultas' => $this->input->post('fakultas', true),
            'jurusan' => $this->input->post('jurusan', true),
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        $this->db->insert('alumni', $data);
    }

    public function getAlumniByFakultas()
    {
        $this->db->select('fakultas, COUNT(*) as total');
        $this->db->group_by('fakultas');
        return $this->db->get('alumni')->result_array();
    }

    public function getJumlahByJurusan()
{
    $this->db->select('jurusan, COUNT(*) as total');
    $this->db->group_by('jurusan');
    $query = $this->db->get('alumni');

    return $query->result_array();
}





}
