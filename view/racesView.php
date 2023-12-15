<h1>Races</h1>
<?php include "/home/benfinmi/repositories/MIS4013_Final/form/racesNew"; ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($race = $races->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $race['race_id']; ?></td>
                    <td><?php echo $race['race']; ?></td>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

