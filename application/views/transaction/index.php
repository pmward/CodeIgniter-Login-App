
<div class="row">
  <div class="col-md-5">


<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title">Create a Transaction</h1>
  </div>

  <div class="panel-body">

      <?php if($this->session->flashdata('client_token_created')): ?>

          <div class="alert alert-success" role="alert">

          <?php echo $this->session->flashdata('client_token_created'); ?>

          </div>
      <?php endif; ?>

      <?php echo "<pre>"; ?>
      <?php echo print_r($_SESSION)  ?>
      <?php echo  "</pre>"; ?>


      <?php $attributes = array('id' => 'transaction_form') ;?>

      <?php echo form_open('braintreeTransaction/sale', $attributes); ?>

      <?php echo form_fieldset('<h3>General</h3>'); ?>

          <div class="form-group">

          <?php echo form_label('amount', '10.00', $attributes); ?>

              <?php $data = array(
                  'name'          => 'amount',
                  'value'         => '5.00',
                  'id'            => 'amount',
                  'class'         => 'form-control input-sm',
                  'placeholder'   => 'enter Transaction amount'
              );
                echo form_input($data);
              ?>
          </div>

          <div class="form-group">

          <?php //$attributes = array('class' => 'col-sm-3 control-label',); ?>

          <?php echo form_label('orderId'); ?>

              <?php $data = array(
                  'name'          => 'orderId',
                  'value'         => 'PMW',
                  'id'            => 'orderId',
                  'class'         => 'form-control input-sm',
                  'placeholder'   => 'enter an order ID'
              );
              echo form_input($data); ?>

          </div>

          <div class="form-group">

          <?php echo form_label('customerId'); ?>

              <?php $data = array(
                  'name'          => 'customerId',
                  // 'id'            => 'password',
                  'class'         => 'form-control input-sm',
                  'placeholder'   => 'Optional if vaulting'
              );
              echo form_input($data); ?>
          </div>

      <?php echo form_fieldset_close(); ?>


      <?php echo form_fieldset('<h3>Options</h3>'); ?>

          <div class="form-group">

             <div class="checkbox">
                 <label>

              <?php $data = array(
                  'name'       => 'storeInVaultOnSuccess',
                  'id'         => 'storeInVaultOnSuccess',
                  'value'      => TRUE,
                  'checked'    => FALSE
              );
              echo form_checkbox($data); ?>

                <strong>storeInVaultOnSuccess</strong></label>
             </div>
              <?php //$attributes = array('class' => 'col-sm-2 control-label'); ?>
              <?php //echo form_label('submitForSettlement', 'submitForSettlement'); ?>
          </div>

          <div class="form-group">

             <div class="checkbox">
                 <label>

              <?php $data = array(
                  'name'       => 'submitForSettlement',
                  'id'         => 'submitForSettlement',
                  'value'      => TRUE,
                  'checked'    => FALSE
              );
              echo form_checkbox($data); ?>

                <strong>submitForSettlement</strong></label>
             </div>
              <?php //$attributes = array('class' => 'col-sm-2 control-label'); ?>
              <?php //echo form_label('submitForSettlement', 'submitForSettlement'); ?>

          </div>

          <div class="form-group">

             <div class="checkbox">
                 <label>

              <?php $data = array(
                  'name'       => 'require_three_d_secure',
                  'id'         => 'require_three_d_secure',
                  'value'      => TRUE,
                  'checked'    => FALSE
              );
              echo form_checkbox($data); ?>

                <strong>require_three_d_secure</strong></label>
             </div>
              <?php //$attributes = array('class' => 'col-sm-2 control-label'); ?>
              <?php //echo form_label('submitForSettlement', 'submitForSettlement'); ?>
          </div>

      <?php echo form_fieldset_close(); ?>


      <?php echo form_fieldset('<h3>Shipping</h3>'); ?>

      <div class="form-group">

          <?php echo form_label('firstName'); ?>

          <?php $data = array(
              'name'          => 'shipping-firstName',
              'value'        => 'Dennis',
              'id'            => 'shipping-firstName',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'Shipping First Name'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('lastName'); ?>

          <?php $data = array(
              'name'          => 'shipping-lastName',
              'value'         => 'Bergkamp',
              'id'            => 'shipping-lastName',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'Shipping Last Name'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('company'); ?>

          <?php $data = array(
              'name'          => 'shipping-company',
              'value'         => 'The Arsenal',
              'id'            => 'shipping-company',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'Shipping address Company name'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('streetAddress'); ?>

          <?php $data = array(
              'name'          => 'shipping-streetAddress',
              'value'         => '50 Markham Court',
              'id'            => 'shipping-streetAddress',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'Shipping address first line'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('extendedAddress'); ?>

          <?php $data = array(
              'name'          => 'shipping-extendedAddress',
              'value'         => 'Flat 3B',
              'id'            => 'shipping-extendedAddress',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The extended shipping address information-such as apartment or suite number'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('locality'); ?>

          <?php $data = array(
              'name'          => 'shipping-locality',
              'value'         => 'Camberley',
              'id'            => 'shipping-locality',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The locality/City'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('region'); ?>

          <?php $data = array(
              'name'          => 'shipping-region',
              'value'         => 'Surrey',
              'id'            => 'shipping-region',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The state or province - for PayPal this must be the 2 letter abbreviation'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('postalCode'); ?>

          <?php $data = array(
              'name'          => 'shipping-postalCode',
              'value'         => 'GU15 3HJ',
              'id'            => 'shipping-postalCode',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The postalCode'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php
          //Later...i might want to create a contructor method which pulls country codes from DB.
          //These could be parsed into the view and looped thorugh
          echo form_label('countryCodeAlpha2'); ?>

          <?php $data = array(
              'name'          => 'shipping-countryCodeAlpha2',
              'value'         => 'GB',
              'id'            => 'shipping-countryCodeAlpha2',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The ISO 3166-1 alpha-2 country code'
          );
          echo form_input($data); ?>
      </div>

      <?php echo form_fieldset_close(); ?>

      <?php echo form_fieldset('<h2>Billing</h2>'); ?>

      <div class="form-group">

          <?php echo form_label('firstName'); ?>

          <?php $data = array(
              'name'          => 'billing-firstName',
              'value'        => 'Dennis',
              'id'            => 'billing-firstName',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'Billing first name'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('lastName'); ?>

          <?php $data = array(
              'name'          => 'billing-lastName',
              'value'         => 'Bergkamp',
              'id'            => 'billing-lastName',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'Billing last name'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('company'); ?>

          <?php $data = array(
              'name'          => 'billing-company',
              'value'         => 'The Arsenal',
              'id'            => 'billing-company',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'billing address Company name'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('streetAddress'); ?>

          <?php $data = array(
              'name'          => 'billing-streetAddress',
              'value'         => '50 Markham Court',
              'id'            => 'billing-streetAddress',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'billing address first line'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('extendedAddress'); ?>

          <?php $data = array(
              'name'          => 'billing-extendedAddress',
              'value'         => 'Flat 3B',
              'id'            => 'billing-extendedAddress',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The extended billing address information-such as apartment or suite number'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('locality'); ?>

          <?php $data = array(
              'name'          => 'billing-locality',
              'value'         => 'Camberley',
              'id'            => 'billing-locality',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The locality/City'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('region'); ?>

          <?php $data = array(
              'name'          => 'billing-region',
              'value'         => 'Surrey',
              'id'            => 'billing-region',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The state or province - for PayPal this must be the 2 letter abbreviation'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php echo form_label('postalCode'); ?>

          <?php $data = array(
              'name'          => 'billing-postalCode',
              'value'         => 'GU15 3HJ',
              'id'            => 'billing-postalCode',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The postalCode'
          );
          echo form_input($data); ?>
      </div>

      <div class="form-group">

          <?php
          //Later...i might want to create a contructor method which pulls country codes from DB.
          //These could be parsed into the view and looped thorugh
          echo form_label('countryCodeAlpha2'); ?>

          <?php $data = array(
              'name'          => 'billing-countryCodeAlpha2',
              'value'         => 'GB',
              'id'            => 'billing-countryCodeAlpha2',
              'class'         => 'form-control input-sm',
              'placeholder'   => 'The ISO 3166-1 alpha-2 country code'
          );
          echo form_input($data); ?>
      </div>

      <?php echo form_fieldset_close(); ?>


      <?php echo form_fieldset('<h3>Customer</h3>'); ?>

              <div class="form-group">

                  <?php echo form_label('firstName'); ?>

                  <?php $data = array(
                      'name'          => 'customer-firstName',
                      'value'        => 'Thiery',
                      'id'            => 'customer-firstName',
                      'class'         => 'form-control input-sm',
                      'placeholder'   => 'Customer First Name'
                  );
                  echo form_input($data); ?>
              </div>

              <div class="form-group">

                  <?php echo form_label('lastName'); ?>

                  <?php $data = array(
                      'name'          => 'customer-lastName',
                      'value'         => 'Henry',
                      'id'            => 'customer-lastName',
                      'class'         => 'form-control input-sm',
                      'placeholder'   => 'Customer Last Name'
                  );
                  echo form_input($data); ?>
              </div>

              <div class="form-group">

                  <?php echo form_label('company'); ?>

                  <?php $data = array(
                      'name'          => 'customer-company',
                      'value'         => 'Bits and Bobs ltd',
                      'id'            => 'customer-company',
                      'class'         => 'form-control input-sm',
                      'placeholder'   => 'Company name'
                  );
                  echo form_input($data); ?>
              </div>

              <div class="form-group">

                  <?php echo form_label('website'); ?>

                  <?php $data = array(
                      'name'          => 'customer-website',
                      'value'         => 'http://www.example.com',
                      'id'            => 'customer-website',
                      'class'         => 'form-control input-sm',
                      'placeholder'   => 'website'
                  );
                  echo form_input($data); ?>
              </div>

              <div class="form-group">

                  <?php echo form_label('email'); ?>

                  <?php $data = array(
                      'name'          => 'customer-email',
                      'value'         => 'joebloggs@gmail.com',
                      'id'            => 'customer-email',
                      'class'         => 'form-control input-sm',
                      'placeholder'   => 'Customer email'
                  );
                  echo form_input($data); ?>
              </div>

          <?php echo form_fieldset_close(); ?>




          <div class="form-group">

              <?php $btn_data = array(
                  'name'    => 'submit',
                  'class'   => 'btn btn-primary',
                  'value'   => 'submit'
              );

              echo form_submit($btn_data); ?>

          </div>


      <?php echo form_close(); ?>

  </div>
 </div>
  </div>
