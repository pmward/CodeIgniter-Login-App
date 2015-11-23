
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
        'name'          => 'Password',
        'id'            => 'password',
        'class'         => 'form-control',
        'placeholder'   => 'Enter Password'
    );

    echo form_password($password_data); ?>

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
