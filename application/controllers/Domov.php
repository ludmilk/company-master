<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domov extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('domov');
        $this->load->view('template/footer');
    }
}