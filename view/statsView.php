<h1>Character Stats</h1>

<?php while ($stat = $stats->fetch_assoc()) : ?>
    <div class="card mb-4">
        <div class="card-header">
            <h5><?php echo $stat['name']; ?> - <?php echo $stat['class']; ?></h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>Stats</h6>
                    <ul>
                        <li><strong>Strength:</strong> <?php echo $stat['strength']; ?></li>
                        <li><strong>Dexterity:</strong> <?php echo $stat['dexterity']; ?></li>
                        <li><strong>Constitution:</strong> <?php echo $stat['constitution']; ?></li>
                        <li><strong>Intelligence:</strong> <?php echo $stat['intelligence']; ?></li>
                        <li><strong>Wisdom:</strong> <?php echo $stat['wisdom']; ?></li>
                        <li><strong>Charisma:</strong> <?php echo $stat['charisma']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

