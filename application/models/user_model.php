<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 19.05.2017
 * Time: 11:57
 */
class User_model extends CI_Model {

public function get_users(){


    $query = $this->db->get('users');
    return $query->result();

    //$config['username']="root";
    //$config['password']="";
    //$config['database']="planovanie";

    //$config['hostname']="localhost";
    //$config['username']="root_2";
    //$config['password']="";
    //$config['database']="planovanie_2";

    //$connection = $this->load->database($config);

    //$connection_2 = $this->load->database($config_2);
}
}




?>