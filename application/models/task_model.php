<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 29.05.2017
 * Time: 23:23
 */

class Task_model extends CI_Model{


    public function get_task($task_id){

        $this->db->where('id', $task_id);
        $query = $this->db->get('tasks');

        return $query->row();

}

    public function create_task($data){

        $query = $this->db->insert('tasks', $data);
        return $query;

    }


    public function get_task_project_id($task_id){

        $this->db->where('id', $task_id);
        $query = $this->db->get('tasks');
        return $query->row()->id;

    }

    public function get_project_name($project_id){

        $this->db->where('id', $project_id);
        $query = $this->db->get('projects');
        return $query->row()->project_name;

    }

    public function get_task_project_data($task_id){

        $this->db->where('id', $task_id);
        $query = $this->db->get('tasks');
        return $query->row();

    }

}


?>