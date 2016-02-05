
<h2>Create Project</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal') ;?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>


<?php echo form_open('projects/create', $attributes); ?>


<div class="form-group">

    <?php echo form_label('Project Name'); ?>

    <?php $inputData = array(
        'name'          => 'project_name',
        //'id'            => 'username',
        'class'         => 'form-control',
        'placeholder'   => 'Enter project name'
    );
    echo form_input($inputData); ?>

</div>

<div class="form-group">

    <?php echo form_label('Project Description'); ?>

    <?php $inputData = array(
        'name'          => 'project_body',
        //'id'            => 'username',
        'class'         => 'form-control',
        'placeholder'   => 'Enter project name'
    );
    echo form_textarea($inputData); ?>

</div>


<div class="form-group">

    <?php $btn_data = array(
        'name'    => 'create',
        'class'   => 'btn btn-primary',
        'value'   => 'create'
    );

    echo form_submit($btn_data); ?>

</div>


<?php echo form_close(); ?>
