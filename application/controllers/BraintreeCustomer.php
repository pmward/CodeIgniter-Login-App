<?php class BraintreeCustomer extends CI_Controller {

    public function index() {

        $data['main_view'] = "customer/index";

        $this->load->view('layouts/main', $data);

    }

}

?>
