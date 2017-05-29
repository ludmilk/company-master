<h1>Projects </h1>


<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>projects/create">Vytvor projekt</a>

<table class="table table-hover">

    <thead>
        <tr>
            <th>
                Project name
            </th>
            <th>
                Project body
            </th>
        </tr>

    </thead>>
        <tbody>

            <?php foreach ($projects as $project): ?>
                <tr>
                    <?php echo "<td><a href='". base_url() ."projects/display". $project->id ."'>" . $project->project_name . "</a></td>"; ?>
                <?php echo "<td>" . $project->project_body . "</td>"; ?>
                </tr>
                <?php endforeach;?>
        </tbody>

</table>