<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $data['judul']= "Login dulu lekku";
        $this->load->view('login/index');
    }

}  
