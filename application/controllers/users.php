<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 19.05.2017
 * Time: 12:01
 */

class Users extends CI_Controller {

public function show(){

    //$this->load->model('user_model');


    $data['results'] = $this->user_model->get_users();



    $this->load->view('user_view',$data);

   // foreach ($result as $object){
   //     echo $object->username . "<br>";
    //}


}

}



?>