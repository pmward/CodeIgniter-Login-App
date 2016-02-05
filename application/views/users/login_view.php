<?php if($this->session->userdata('logged_in')): ?>

<h2>Logout</h2>


    <?php echo form_open('users/logout'); ?>


<p>
    <?php if($this->session->userdata('username')): ?>
    <?php echo "you are logged in as " . $this->session->userdata('username'); ?>

    <?php endif;?>
</p>


    <?php $data = array(

        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'logout'
    ); ?>

    <?php echo form_submit($data); ?>


    <?php echo form_close(); ?>


    <?php else: ?>


<h2>Login form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal') ;?>

    <?php if($this->session->flashdata('errors')): ?>

        <?php echo $this->session->flashdata('errors'); ?>

    <?php endif; ?>


<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">

    <?php echo form_label('Username'); ?>

    <?php $inputData = array(
        'name'          => 'username',
        'id'            => 'username',
        'class'         => 'form-control',
        'placeholder'   => 'Enter Username'
    );
    echo form_input($inputData); ?>

</div>


<div class="form-group">

    <?php echo form_label('Password'); ?>

    <?php $password_data = array(
        'name'          => 'password',
        'id'            => 'password',
        'class'         => 'form-control',
        'placeholder'   => 'Enter Password'
    );

    echo form_password($password_data); ?>

</div>


<div class="form-group">

    <?php echo form_label('Confirm Password'); ?>

    <?php $data = array(
        'name'          => 'confirm_password',
        // 'id'            => 'password',
        'class'         => 'form-control',
        'placeholder'   => 'Confirm Password'
    );

    echo form_password($data); ?>

</div>


<div class="form-group">

    <?php $btn_data = array(
        'name'    => 'submit',
        'class'   => 'btn btn-primary',
        'value'   => 'Login'
    );

    echo form_submit($btn_data); ?>

</div>


<?php echo form_close(); ?>


<?php endif; ?>
