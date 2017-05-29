<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 29.05.2017
 * Time: 23:22
 */

class Tasks extends CI_Controller{

    public function display($task_id){

        $data['task'] = $this->task_model->get_task($task_id);
        $data['main_view'] = "tasks/display";

        $this->load->view('layout/main', $data);
    }



public function create($project_id){


    $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
    $this->form_validation->set_rules('task_body', 'Task popis', 'trim|required');

    if ($this->form_validation->run() == FALSE){
        $data ['main_view'] =  'tasks/create_task';
        $this->load->view('layout/main' , $data);

    } else {
        $data = array(
            'project_id' => $project_id,
            'task_name' => $this->input->post('task_name'),
            'task_body' => $this->input->post('task_body'),
            'due_date' => $this->input->post('due_date')
        );

        if ($this->project_model->create_project($data)){
            $this->session->set_flashdata('task_created', "Bol vytvorený");
            redirect('tasks/index');
        }
    }
}


    public function edit($task_id){


        $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
        $this->form_validation->set_rules('task_body', 'Task popis', 'trim|required');

        if ($this->form_validation->run() == FALSE){
            $data['project_id'] = $this->task_model->get_task_project_id($task_id);
            $data['project_name'] = $this->task_model->get_project_name($data['project_id']);
            $data['the_task'] = $this->task_model->get_task_project_data($task_id);

            $data ['main_view'] =  'tasks/edit_task';
            $this->load->view('layout/main' , $data);

        } else {
            $project_id = $this->task_model->get_task_project_id($task_id);

            $data = array(
                'project_id' => $project_id,
                'task_name' => $this->input->post('task_name'),
                'task_body' => $this->input->post('task_body'),
                'due_date' => $this->input->post('due_date')
            );

            if ($this->project_model->create_project($data)){
                $this->session->set_flashdata('task_created', "Bol vytvorený");
                redirect('projects/display');
            }
        }
    }





}


?>