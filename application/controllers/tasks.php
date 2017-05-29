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

}



?>