<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index()
    {
        $data['judul']= "Login dulu lekku";
        $this->load->view('register/index');
    }

}  
