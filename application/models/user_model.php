<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 19.05.2017
 * Time: 11:57
 */
class User_model extends CI_Model {

    public function get_users($user_id, $username){

        $this->db->where([
            'ID' => $user_id,
            'username' => $username

            ]);
        $query = $this->db->get('users');
        return $query->result();

        //$this->db->where('ID', $user_id);


        //$query = $this->db->query("SELECT * FROM users");

        //return $query->num_fields(); //počet stĺpcov v db localhost
        //return $query->num_rows(); //počet riadkov


   // $query = $this->db->get('users');
   // return $query->result();


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

    public function create_users($data){

        $this->db->insert('users', $data);

}


    public function update_users($data, $id){

        $this->db->where(['id'=> $id]);
        $this->db->update('users', $data);

    }


    public function delete_users($id){

        $this->db->where(['ID' => $id]);
        $this->db->delete('users');

    }

}




?>