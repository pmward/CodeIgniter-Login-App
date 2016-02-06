<?php
/**
 * Created by PhpStorm.
 * User: pward
 * Date: 12/12/15
 * Time: 3:16 PM
 */

class BraintreeClientToken extends CI_Controller {

//    public function __construct() {
//
//            parent::__construct();



    public function index() {

        $data['main_view'] = "client_token/index";

        $this->load->view('layouts/main', $data);
        //$this->load->view('home_view');

    }


    public function generate() {

         // $this->load->model('braintree_model');

        $data['environment']        = $this->input->post('clientToken-environment');
        $data['merchantId']         = $this->input->post('clientToken-merchantId');
        $data['publicKey']          = $this->input->post('clientToken-publicKey');
        $data['privateKey']         = $this->input->post('clientToken-privateKey');
        $params['merchantAccountId']  = $this->input->post('clientToken-merchantAcountId');
        $params['customerId']         = $this->input->post('clientToken-customerId');

        //echo "<pre>" . var_dump($params) . "</pre>";
        $this->session->set_userdata($data);

        $data['client_token'] = $this->braintree_model->generateToken($params);

        if(isset($data['client_token'])) {

            //store everyting in session
            $this->session->set_userdata($data);
            $this->session->set_flashdata('client_token_created', 'client token successfully created!');

            $data['main_view'] = "transaction/index";
            $this->load->view('layouts/main', $data);

        } else {

            redirect("BraintreeClienttoken/index");

        }






    }


}
