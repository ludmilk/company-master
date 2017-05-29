
<h2> Zmeň projekt</h2>
<?php $attributes = array('ID'=> 'edit_task_form', 'class'=>'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('tasks/edit/'. $this->uri->segment(3) .'', $attributes);?>

<div class="form-group">

    <?php echo form_label('Task Name');?>
    <?php
    $data = array(
        'class'=>'form-control',
        'name'=>'task_name',
        'value' => $the_task->task_name
    ); ?>

    <?php echo form_input($data);?>

</div>

<div class="form-group">

    <?php echo form_label('Popis');?>
    <?php
    $data = array(
        'class'=>'form-control',
        'name'=>'task_body',
        'value' => $the_task->task_body
    ); ?>

    <?php echo form_textarea($data);?>

</div>




<div class="form-group">

    <?php
    $data = array(
        'class'=>'form-control',
        'name'=>'due_date',
        'type' => 'date'
    ); ?>

    <?php echo form_input($data);?>

</div>


<!-- project sa menilo na task -->

</div>


<div class="form-group">


    <?php
    $data = array(
        'class'=>'btn btn-primary',
        'name'=>'submit',
        'value'=>'Zmeniť'
    );
    ?>

    <?php echo form_submit($data);?>

</div>


<?php echo form_close();?>
