<h1>Classes</h1>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($class = $classes->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $class['class_id']; ?></td>
                    <td><?php echo $class['class']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
