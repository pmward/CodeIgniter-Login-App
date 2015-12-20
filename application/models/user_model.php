<?php

class User_model extends CI_Model {

    // public function get_users($user_id) {
    //
    //     $this->db->where([
    //         'id' => $user_id]);
    //
    //     $this->db->where('id', $user_id);
    //     $query = $this->db->get('users');
    //
    //     return $query->result();
    // }

    //   $query = $this->db->query("SELECT * FROM users");
    //   return $query->num_fields(); //this will give me the coloumn number
    //   return $query->num_rows(); //this will give me the rows count

      // $query = $this->db->get('users');
      // return $query->result();

    public function create_user() {

        $data = array(

            'first_name'  => $this->input->post('first_name'),
            'last_name'   => $this->input->post('last_name'),
            'username'    => $this->input->post('username'),
            'email'       => $this->input->post('email'),
            'password'    => $this->input->post('password')
        );

        $insert_data = $this->db->insert('users', $data);

        return $insert_data;

    }


      public function login_user($username, $password) {

          $this->db->where('username', $username);
          $this->db->where('password', $password);

          $result = $this->db->get('users');

          if($result->num_rows() == 1) {

              return $result->row(0)->id;

          } else {

              return false;
          }

      }







}



?>
