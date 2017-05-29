<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 28.05.2017
 * Time: 21:38
  */

class Projects extends CI_Controller {

    public function __construct(){

        parent::__construct();

        if(!$this->session->userdata('logged_in')){
            $this->session->set_flashdata('no_access', 'Prepáč ale nie');
            redirect('home/index');
        }

    }


    public function index(){

        $data['projects'] = $this->project_model->get_projects();

        $data['main_view']="projects/index";
        $this->load->view('layout/main', $data);
    }


    public function display($project_id){

        $data['project_data'] = $this->project_model->get_project($project_id);

        $data['main_view']="projects/display";
        $this->load->view('layout/main', $data);

    }


    public function create(){


        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_body', 'Project popis', 'trim|required');

        if ($this->form_validation->run() == FALSE){
            $data ['main_view'] =  'projects/create_project';
            $this->load->view('layout/main' , $data);

        } else {
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body'),
            );

            if ($this->project_model->create_project($data)){
                $this->session->set_flashdata('project_created', "Tvoj projekt bol vytvorený");
                redirect('projects/index');
            }
        }
    }


    public function edit($project_id){

        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_body', 'Project popis', 'trim|required');

        if ($this->form_validation->run() == FALSE){
            $data['project_data'] = $this->project_model->get_projects_info($project_id);

            $data ['main_view'] =  'projects/edit_project';
            $this->load->view('layout/main' , $data);

        } else {
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body'),
            );

            if ($this->project_model->edit_project($project_id, $data)){
                $this->session->set_flashdata('project_updated', "Tvoj projekt bol zmenení");
                redirect('projects/index');
            }
        }

    }


    public function delete($project_id){

        $this->project_model->delete_project($project_id);
        $this->session->set_flashdata('project_deleted', "Tvoj projekt bol vymazaný");
        redirect('projects/index');

    }


}

?>