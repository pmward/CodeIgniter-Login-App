
<!--
<p class="bg-success">

    <?php if($this->session->flashdata('login_success')): ?>

    <?php echo $this->session->flashdata('login_success'); ?>

    <?php endif; ?>

    <?php if($this->session->flashdata('no_access')): ?>

    <?php echo $this->session->flashdata('no_access'); ?>

    <?php endif; ?>


     <?php if($this->session->flashdata('user_registered')): ?>

    <?php echo $this->session->flashdata('user_registered'); ?>

    <?php endif; ?>

</p>

<p class="bg-danger">

    <?php if($this->session->flashdata('login_failed')): ?>

    <?php echo $this->session->flashdata('login_failed'); ?>

<?php endif; ?>

</p>



<h1>Hello! This is My view</h1>
-->

<p class="bg-success">

    <?php if($this->session->flashdata('client_token_created')): ?>

    <?php echo $this->session->flashdata('client_token_created'); ?>

    <?php endif; ?>
<p/>



    <?php if(!$this->session->userdata('client_token')): ?>

    <div class="alert alert-warning" role="alert">

        <?php echo "You must enter your API credentials or oAuth token before starting"; ?>

    </div>

    <?php endif; ?>



