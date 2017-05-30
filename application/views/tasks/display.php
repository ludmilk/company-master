<h1>Task display view</h1>

<h1>Oslavy</h1>

<table class="table table-hover">

    <thead>
    <tr>
        <th>
            Meno
        </th>
        <th>
            Popis
        </th>
        <th>
            Dátum
        </th>
    </tr>

    </thead>>
    <tbody>

        <tr>
            <td>

            <div class="task-name">
                <?php echo $task->task_name; ?>
            </div>

            <div class="task-actions">
                <a href="<?php echo base_url(); ?>tasks/edit/<?php $task->id; ?>">Upraviť </a>
                <a href="<?php echo base_url(); ?>tasks/delete/<?php $task->project_id; ?>/<?php $task->id; ?>">Vymazať </a>
            </div>

            </td>";
            <td> <?php echo $task->task_body; ?></td>";
            <td> <?php echo $task->date_created; ?></td>";

        </tr>

    </tbody>

</table>