<?php

class Users extends CI_Controller {

  public function show($user_id) {

    // $this->load->model('user_model');

    $data['results'] = $this->user_model->get_users($user_id, 'suave');

    $this->load->view('user_view', $data);


    // foreach ($result as $object) {
    //
    //   echo $object->id;
    // }



  }

  public function login() {

      $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

      if($this->form_validation->run() == FALSE) {

          $data = array(

              'errors' => validation_errors()
          );

          $this->session->set_flashdata($data);
          redirect('home');

      }


}


}

?>
