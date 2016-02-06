
<div class="row">
      <div class="col-md-6">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Create a Client Token</h1>
          </div>
          <div class="panel-body">

              <p>This client token will be stored in session and used for the next step</p><br />

            <!--   check is client token & API crednetials is available, if not flash warning message-->
            <?php if($this->session->flashdata('client_token_created')): ?>

                <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('client_token_created'); ?>
                </div>

            <?php endif; ?>



            <?php if(!$this->session->userdata('client_token')): ?>

            <div class="alert alert-warning" role="alert">

                <?php echo "You must enter your API credentials or oAuth token before starting"; ?>

            </div>

            <?php endif; ?>



              <?php $attributes = array('id' => 'clientToken_form') ;?>

              <?php echo form_open('braintreeClientToken/generate', $attributes); ?>


                  <div class="form-group">

                  <?php echo form_label('environment'); ?>

                      <?php $data = array(
                          'name'          => 'clientToken-environment',
                          'value'         => 'sandbox',
                          'id'            => 'clientToken-environment',
                          'class'         => 'form-control input-sm',
                          'placeholder'   => 'live or sandbox?'
                      );
                        echo form_input($data);
                      ?>
                  </div>

                  <div class="form-group">

                  <?php //$attributes = array('class' => 'col-sm-3 control-label',); ?>

                  <?php echo form_label('merchantId'); ?>


                      <?php $data = array(
                          'name'          => 'clientToken-merchantId',
                          'value'         => $this->config->item('braintree_merchant_id'),
                          'id'            => 'clientToken-merchantId',
                          'class'         => 'form-control input-sm',
                          'placeholder'   => 'Do not confuse with merchantAcountId'
                      );
                      echo form_input($data); ?>

                  </div>

                  <div class="form-group">

                  <?php //$attributes = array('class' => 'col-sm-3 control-label',); ?>

                  <?php echo form_label('publicKey'); ?>

                      <?php $data = array(
                          'name'          => 'clientToken-publicKey',
                          'value'         => $this->config->item('braintree_public_key'),
                          'id'            => 'clientToken-publicKey',
                          'class'         => 'form-control input-sm',
                          'placeholder'   => 'Public API key'
                      );
                      echo form_input($data); ?>

                  </div>

                  <div class="form-group">

                  <?php //$attributes = array('class' => 'col-sm-3 control-label',); ?>

                  <?php echo form_label('privateKey'); ?>

                      <?php $data = array(
                          'name'          => 'clientToken-privateKey',
                          'value'         => $this->config->item('braintree_private_key'),
                          'id'            => 'clientToken-privateKey',
                          'class'         => 'form-control input-sm',
                          'placeholder'   => 'Private API key'
                      );
                      echo form_input($data); ?>

                  </div>


                  <div class="form-group">

                      <?php echo form_label('merchantAcountId'); ?>

                      <?php
                      //pull list of Braintree MIDs from my config file
                      $options =  $this->config->item('braintree_merchant_account_id'); ?>

                      <?php $js = array(
                           'id'         => 'clientToken-merchantAcountId',
                           'class'      => 'form-control input-sm'
                      );
                      echo form_dropdown('clientToken-merchantAcountId', $options, '', $js); ?>

                  </div>

                  <div class="form-group">

                  <?php echo form_label('customerId'); ?>

                      <?php $data = array(
                          'name'          => 'clientToken-customerId',
                          'id'            => 'clientToken-customerId',
                          'class'         => 'form-control input-sm',
                          'placeholder'   => 'Only required for Drop in UI vaulting'
                      );
                      echo form_input($data); ?>
                  </div>

                  <div class="form-group">

                      <?php $btn_data = array(
                          'name'    => 'submit',
                          'class'   => 'btn btn-primary pull-right',
                          'value'   => 'Create Client Token'
                      );

                      echo form_submit($btn_data); ?>

                  </div>

              <?php echo form_close(); ?>

          </div>
         </div>
     </div>
