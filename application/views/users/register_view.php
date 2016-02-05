
<h2>Register</h2>

<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal') ;?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>


<?php echo form_open('users/register', $attributes); ?>



<div class="form-group">

    <?php echo form_label('First Name'); ?>

    <?php $inputData = array(
        'name'          => 'first_name',
        //'id'            => 'username',
        'class'         => 'form-control',
        'placeholder'   => 'Enter first name'
    );
    echo form_input($inputData); ?>

</div>


<div class="form-group">

    <?php echo form_label('Last Name'); ?>

    <?php $inputData = array(
        'name'          => 'last_name',
        //'id'            => 'last_name',
        'class'         => 'form-control',
        'placeholder'   => 'Enter last name'
    );
    echo form_input($inputData); ?>

</div>

<div class="form-group">

    <?php echo form_label('Email'); ?>

    <?php $inputData = array(
        'name'          => 'email',
        //'id'            => 'username',
        'class'         => 'form-control',
        'placeholder'   => 'Enter email'
    );
    echo form_input($inputData); ?>

</div>


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
        'value'   => 'Register'
    );

    echo form_submit($btn_data); ?>

</div>


<?php echo form_close(); ?>
