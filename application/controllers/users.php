<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 19.05.2017
 * Time: 12:01
 */

class Users extends CI_Controller {

public function show($user_id){

    //$this->load->model('user_model');


    $data['results'] = $this->user_model->get_users($user_id, 'Tibor');

    $this->load->view('user_view',$data);

   // foreach ($result as $object){
   //     echo $object->username . "<br>";
    //}


}


    public function insert (){

    $username = "peter";
    $password = "secret";

    $this->user_model->create_users([
       'username' => $username,
        'password' => $password


    ]);

    }


    public function update (){

        $id = 5;
        $username = "Liam";
        $password = "not so secret";

        $this->user_model->update_users([
            'username' => $username,
            'password' => $password


        ], $id);

    }

public function delete(){

        $id = 6;
        $this->user_model->delete_users($id);

}




}







?>