<h1>Character Stats</h1>

<!-- Display Stats -->
<div class="stats">
    <?php while ($char = $nameAndClass->fetch_assoc()) : ?>
        <div class="card">
            <div class="card-header">
                <h2><?php echo $char['name']; ?></h2>
                <p><?php echo $char['class']; ?></p>
            </div>
            <div class="card-body">
                <?php while ($stat = $stats->fetch_assoc()) : ?>
                    <p>Character ID: <?php echo $stat['stats_char_id']; ?></p>
                    <p>Strength: <?php echo $stat['strength']; ?></p>
                    <p>Dexterity: <?php echo $stat['dexterity']; ?></p>
                    <p>Constitution: <?php echo $stat['constitution']; ?></p>
                    <p>Intelligence: <?php echo $stat['intelligence']; ?></p>
                    <p>Wisdom: <?php echo $stat['wisdom']; ?></p>
                    <p>Charisma: <?php echo $stat['charisma']; ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</div>
