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
//        parent::__construct();
//
//        if(!$this->session->userdata('client_token')) {
//
//            $config['braintree_environment'] = Braintree_Configuration::environment($this->input->post('clientToken-environment'));
//            $config['braintree_merchant_id'] = Braintree_Configuration::merchantId($this->input->post('clientToken-merchantId'));
//            $config['braintree_public_key'] = Braintree_Configuration::publicKey($this->input->post('clientToken-publicKey'));
//            $config['braintree_private_key'] = Braintree_Configuration::privateKey($this->input->post('clientToken-privateKey'));
//
//        }
//        // else {
//        //
//        //         $this->session->set_flashdata('client_token_not_created', 'a client token must be created before performing transaction processing');
//        //
//        //         redirect("BraintreeClienttoken/index");
//        //
//        //     }
//
//        }



    public function index() {

        $data['main_view'] = "client_token/index";

        $this->load->view('layouts/main', $data);
        $this->load->view('home_view');

    }


    public function generate() {

         // $this->load->model('braintree_model');

        //$params = array();
        //$data = array();
        $data['merchantAccountId'] = $this->input->post('clientToken-merchantAcountId');
        $data['customerId'] = $this->input->post('clientToken-customerId');

        //$data['merchantAccountId'] = $this->session->userdata('');
        // $data['merchantAccountId'] = $this->session->userdata('');
        // $data = array();
        // $data['customer_id'] = $this->input->post('customerId');
        // $data['merchant_account_id'] = $this->input->post('merchantAccountId');

        // 1) ensure this controller can take a merchantAcountId as the 3rd parmeter in URL and use it to generate token_name
        // 2) Store the client token in a session

        //echo "<pre>" . var_dump($params) . "</pre>";

        $data['client_token'] = $this->braintree_model->generateToken($data);

        if(isset($data['client_token'])) {

            $this->session->set_userdata($data);
            $this->session->set_flashdata('client_token_created', 'client token successfully created!');

            $data['main_view'] = "transaction/index";
            $this->load->view('layouts/main', $data);

        } else {

            redirect("BraintreeClienttoken/index");

        }






    }


}
