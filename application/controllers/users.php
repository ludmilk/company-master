<?php
/**
 * Created by PhpStorm.
 * User: Ľudmila
 * Date: 19.05.2017
 * Time: 12:01
 */

class Users extends CI_Controller {

//public function show($user_id){

    //$this->load->model('user_model');


    //$data['results'] = $this->user_model->get_users($user_id, 'Tibor');

   // $this->load->view('user_view',$data);

   // foreach ($result as $object){
   //     echo $object->username . "<br>";
    //}


//}


   /* public function insert (){

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

*/


   public function register(){


       $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
       $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
       $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
       $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
       $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]');

       if ($this->form_validation->run() == FALSE){

           $data['main_view'] = 'users/register_view';
           $this->load->view('layout/main',$data);

       } else {
           // redirect('http://google.com');
           if ($this->user_model->create_user()) {

               $this->session->set_flashdata('user_registered', 'Používateľ bol zaregistrovaný');
               redirect('home/index');

           } else {

           }

       }
   }

public function login(){

$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]'); 

if($this->form_validation->run() == FALSE) {

  $data = array(

    'errors' => validation_errors()
    );

  $this->session->set_flashdata($data);
  redirect('home');
}

else{
  $username = $this->input->post('username');
  $password = $this->input->post('password');

  $user_id = $this->user_model->login_user($username,$password);

  if($user_id) {
    $user_data = array(
      'user_id' => $user_id,
      'username' => $username,
      'logged_in' => true 


      );

    $this->session->set_userdata($user_data);

    $this->session->set_flashdata('login_success', 'Prihlaseny');


    //$data['main_view'] = "admin_view";

  //$this->load->view('layouts/main', $data);



    redirect('home/index');
  }
  else{


    $this->session->set_flashdata('login_failed', ' Neprihlaseny');
    redirect('home/index');
  }

}

// $this->input->post('username');


}



public function logout(){

  $this->session->sess_destroy();
  redirect('home/index');

}



}
?>