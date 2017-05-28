<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 28.05.2017
 * Time: 21:38
 */

class Projects extends CI_Controller {


    public function index(){

        $data['main_view']="projects/index";

        $this->load->view('layout/main', $data);
    }
}



?>