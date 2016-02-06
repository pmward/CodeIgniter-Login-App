<?php
class Braintree_model extends CI_Model {

//    public function getCredentials() {
//
////        Braintree_Configuration::environment('sandbox');
////        Braintree_Configuration::merchantId('w2d7snyv86b6m993');
////        Braintree_Configuration::publicKey('rm724h4nmjw6pg2n');
////        Braintree_Configuration::privateKey('87b54560036ce7f21ee95c866357341c');
//
//      Braintree_Configuration::environment($this->config->item('braintree_environment'));
//		Braintree_Configuration::merchantId($this->config->item('braintree_merchant_id'));
//		Braintree_Configuration::publicKey($this->config->item('braintree_public_key'));
//		Braintree_Configuration::privateKey($this->config->item('braintree_private_key'));
//
//    }


    public function generateToken($data) {

//        Braintree_Configuration::environment($this->config->item('braintree_environment'));
//        Braintree_Configuration::merchantId($this->config->item('braintree_merchant_id'));
//        Braintree_Configuration::publicKey($this->config->item('braintree_public_key'));
//        Braintree_Configuration::privateKey($this->config->item('braintree_private_key'));

//        //this worked fine with just cust id and MID sent in post, but need to be pulling values from session now
//        Braintree_Configuration::environment($this->input->post('clientToken-environment'));
//        Braintree_Configuration::merchantId($this->input->post('clientToken-merchantId'));
//        Braintree_Configuration::publicKey($this->input->post('clientToken-publicKey'));
//        Braintree_Configuration::privateKey($this->input->post('clientToken-privateKey'));

        Braintree_Configuration::environment($this->session->userdata('environment'));
        Braintree_Configuration::merchantId($this->session->userdata('merchantId'));
        Braintree_Configuration::publicKey($this->session->userdata('publicKey'));
        Braintree_Configuration::privateKey($this->session->userdata('privateKey'));

        //echo $data;
        $client_token = Braintree_ClientToken::generate($data);

        if($client_token) {

            return $client_token;

        } else {

            return false;
        }


    }


        public function createTransaction($data) {

//            Braintree_Configuration::environment($this->config->item('braintree_environment'));
//		    Braintree_Configuration::merchantId($this->config->item('braintree_merchant_id'));
//		    Braintree_Configuration::publicKey($this->config->item('braintree_public_key'));
//		    Braintree_Configuration::privateKey($this->config->item('braintree_private_key'));

            Braintree_Configuration::environment($this->session->userdata('environment'));
            Braintree_Configuration::merchantId($this->session->userdata('merchantId'));
            Braintree_Configuration::publicKey($this->session->userdata('publicKey'));
            Braintree_Configuration::privateKey($this->session->userdata('privateKey'));

            $transaction = Braintree_Transaction::sale($data);

            if($transaction) {

                return $transaction;

            } else {

            return false;

            }


        }

    public function refundTransaction($data) {

        $transaction = Braintree_Transaction::refund($transaction_id, $amount);

            if($transaction) {

                return $transaction;

            } else {

            return false;

            }


    }

    public function settleTransaction($transaction_id, $amount) {

        $transaction = Braintree_Transaction::submitForSettlement($transaction_id, $amount);

            if($transaction) {

                return $transaction;

            } else {

            return false;

            }

    }

    public function getTransaction($transaction_id) {

        Braintree_Configuration::environment($this->session->userdata('environment'));
        Braintree_Configuration::merchantId($this->session->userdata('merchantId'));
        Braintree_Configuration::publicKey($this->session->userdata('publicKey'));
        Braintree_Configuration::privateKey($this->session->userdata('privateKey'));

        $transaction = Braintree_Transaction::submitForSettlement($transaction_id);

            if($transaction) {

                return $transaction;

            } else {

            return false;

            }


    }


    public function voidTransaction() {

        $transaction = Braintree_Transaction::void($transaction_id);

            if($transaction) {

                return $transaction;

            } else {

            return false;

            }


    }

    public function searchTransactions() {

        $transactions = Braintree_Transaction::search($data);

        if($transactions) {

            return $transactions;

        } else {

            return false;

            }

    }




}

?>
