<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 28.05.2017
 * Time: 22:22
 */


class Project_model extends CI_Model{

    public function get_project($id){

    $query = $this->db->get('projects');
    $this->db->where('id' , $id);
    return $query->row();
    }


    public function get_projects(){

        $query = $this->db->get('projects');
        return $query->result();

    }

}

?>