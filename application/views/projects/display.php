<div class="col-xs-9">
    <h1>Názov projektu: <?php echo $project_data->project_name; ?></h1>
    <p>Dátum vytvorenia:  <?php echo $project_data->date_created; ?> </p>
    <h3>Popis: </h3>
    <p><?php echo $project_data->project_body; ?></p>


</div>


<div class="col-xs-3 pull-right">

<ul class="list-group">
    <h4>Project Actions</h4>

    <li class="list-group-item"><a href="">Create Task </a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit">Edit project </a></li>
    <li class="list-group-item"><a href="">Delete project </a></li>

</ul>

</div>


