<div class="col-xs-9">
    <h1>Názov projektu: <?php echo $project_data->project_name; ?></h1>
    <p>Dátum vytvorenia:  <?php echo $project_data->date_created; ?> </p>
    <h3>Popis: </h3>
    <p><?php echo $project_data->project_body; ?></p>


</div>


<div class="col-xs-3 pull-right">

<ul class="list-group">
    <h4>Project Actions</h4>

    <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $project_data->id; ?>">Create Task </a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>">Edit project </a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>">Delete project </a></li>


</ul>

</div>


