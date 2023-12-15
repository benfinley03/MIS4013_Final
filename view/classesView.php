<!-- Inside classesView.php -->

<h1>All Classes</h1>

<?php if ($moves->num_rows > 0) : ?>
    <ul>
        <?php while ($row = $moves->fetch_assoc()) : ?>
            <li><?php echo $row['class']; ?></li>
        <?php endwhile; ?>
    </ul>
<?php else : ?>
    <p>No classes available.</p>
<?php endif; ?>
