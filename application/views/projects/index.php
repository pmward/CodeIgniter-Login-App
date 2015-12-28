<H1>Projects</H1>

 <a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>projects/create">Create Project</a>

<table class='table table-hover'>




    <thead>
        <tr>
           <th>
               Project Name
           </th>
           <th>
               Project Body
           </th>
        </tr>
    </thead>
    <tbody>


        <?php foreach($projects as $project): ?>

            <tr>

            <?php echo "<td><a href='" . base_url() ."projects/display/" . $project->id . " '>" . $project->project_name . "</a></td>"; ?>
            <?php echo "<td>" . $project->project_body . "</td>"; ?>

            </tr>

        <?php endforeach; ?>

    </tbody>

</table>
