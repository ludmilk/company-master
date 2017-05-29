<h1>Projects </h1>


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
                    <?php echo "<td><a href='". base_url() ."projects/display'>" . $project->project_name . "</a></td>"; ?>
                <?php echo "<td>" . $project->project_body . "</td>"; ?>
                </tr>
                <?php endforeach;?>
        </tbody>

</table>