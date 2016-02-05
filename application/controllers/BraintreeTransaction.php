<?php

class BraintreeTransaction extends CI_Controller {

    public function index() {

		$data['main_view'] = "transaction/index";
	  	$this->load->view('layouts/main', $data);

	}

    public function sale()

    {

        /* get a client token by calling client token model call
        | or retrieve the client token from Session
        | although perhaps payment method nonce should always be available by this point,
        |
        |-
        */
        //Store POST variables in an Array for the Braintree sale call. use CI input method

        //$this->load->model('Braintree');

        $nonce = 'fake-valid-nonce';

        $data = array(
            'amount' => $this->input->post('amount'),
	  	    'orderId' => $this->input->post('orderId') . time(),
            'paymentMethodNonce' => $nonce,
            'options' => array(
                'submitForSettlement' => $this->input->post('submitForSettlement'),
	            'storeInVaultOnSuccess' => $this->input->post('storeInVaultOnSuccess'),
	            'three_d_secure' => array(
                    'required' => $this->input->post('require_three_d_secure')
                ),
                'paypal' => array(
                    'customField' => $this->input->post('paypal-customField'),
                    'description' => $this->input->post('paypal-description')
                ),
            ),
            'shipping' => array(
                'firstName' => $this->input->post('shipping-firstName'),
                'lastName' => $this->input->post('shipping-lastName'),
                'company' => $this->input->post('shipping-company'),
                'streetAddress' => $this->input->post('shipping-streetAddress'),
                'extendedAddress' => $this->input->post('shipping-extendedAddress'),
                'locality' => $this->input->post('shipping-locality'),
                'region' => $this->input->post('shipping-region'),
                'postalCode' => $this->input->post('shipping-postalCode'),
                'countryCodeAlpha2' => $this->input->post('shipping-countryCodeAlpha2'),
            ),
            'billing' => array(
                'firstName' => $this->input->post('billing-firstName'),
                'lastName' => $this->input->post('billing-lastName'),
                'company' => $this->input->post('billing-company'),
                'streetAddress' => $this->input->post('billing-streetAddress'),
                'extendedAddress' => $this->input->post('billing-extendedAddress'),
                'locality' => $this->input->post('billing-locality'),
                'region' => $this->input->post('billing-region'),
                'postalCode' => $this->input->post('billing-postalCode'),
                'countryCodeAlpha2' => $this->input->post('billing-countryCodeAlpha2'),
            ),
            'customer' => array(
                'firstName' => $this->input->post('customer-firstName'),
                'lastName' => $this->input->post('customer-lastName'),
                'company' => $this->input->post('customer-company'),
                'phone' => $this->input->post('customer-phone'),
                'fax' => $this->input->post('customer-fax'),
                'website' => $this->input->post('customer-website'),
                'email' => $this->input->post('customer-email'),
            ),
        );
//        $nonce = "";
//        //echo var_dump($_POST);
//        $nonce = $_POST["payment_method_nonce"];

        $data['result'] = $this->braintree_model->createTransaction($data);

        $data['main_view'] = "transaction/index";
        //$data['main_view'] = "transaction/result";
        $this->load->view('layouts/main', $data);
        $this->load->view('transaction/result', $data);
        $this->load->view('includes/footer');

        //
        //     echo "Transaction.sale success!" . "<br />";
        //     echo "<pre>";
        //     var_dump($result->transaction);
        //     echo "</pre>";
        //
        // } else {
        //
        //     print_r("transaction.sale call failed, validation errors: \n");
        //     print_r($result->errors->deepAll());
        //
        //
        // }

    }


    public function void($transaction_id)
    {
        $result = $this->braintree_model->voidTransaction($data);
    }


    public function submitForSettlement($transaction_id)
    {
        $result = $this->braintree_model->settleTransaction($data);
    }


    public function refund()
    {
        $result = $this->braintree_model->refundTransaction($data);
    }


    public function find($transaction_id)
    {
        $result = $this->braintree_model->getTransaction($transaction_id);
    }

    public function search()
    {
        $result = $this->braintree_model->searchTransactions($data);
    }

}

?>
