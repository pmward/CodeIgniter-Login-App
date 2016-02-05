<?php class BraintreeCustomer extends CI_Controller {

            public function __construct() {

            parent::__construct();
            // Your own constructor code

            if(!$this->session->userdata('client_token')) {

                $this->session->set_flashdata('no_client_token', 'Enter your API credentials or oAuth access token');

                redirect('BraintreeClientToken/index');

            }

        }

    public function index() {

        $data['main_view'] = "customer/index";

        $this->load->view('layouts/main', $data);

    }

}

?>
