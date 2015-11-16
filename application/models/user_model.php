<?php

class User_model extends CI_Model {

    public function get_users() {

      $query = $this->db->query("SELECT * FROM users");
      return $query->num_fields(); //this will give me the coloumn number
      return $query->num_rows(); //this will give me the rows count


      // $query = $this->db->get('users');
      // return $query->result();



      // this is the manual way to create DB config - its better to autoload
      // by configuring the database.php config file and loading the CI database libary
      //
      //----------
      //$config['hostname'] = "localhost";
      // $config['hostname'] = "root";
      // $config['hostname'] = "root";
      // $config['hostname'] = "errand_db";
      //
      // $connection = $this->load->database($config);


    }



}



?>
