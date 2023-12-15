<?php
echo "<h1>Character Stats</h1>"; ?>
<?php include "/home/benfinmi/repositories/MIS4013_Final/form/statsNew.php"; ?>

<?php
// Assuming $statsAndCharacters is available from the controller
while ($row = $statsAndCharacters->fetch_assoc()) {
    $characterId = $row['character_id'];

    echo "<div class='card'>";
    echo "<div class='card-header'>";
    echo "<h2>{$row['name']}</h2>";
    echo "</div>";
    echo "<div class='card-body'>";
    echo "<p>Strength: {$row['strength']}</p>";
    echo "<p>Dexterity: {$row['dexterity']}</p>";
    echo "<p>Constitution: {$row['constitution']}</p>";
    echo "<p>Intelligence: {$row['intelligence']}</p>";
    echo "<p>Wisdom: {$row['wisdom']}</p>";
    echo "<p>Charisma: {$row['charisma']}</p>";
    echo <form method="post" action="">
    <input type="hidden" name="stats_id" value="<?php echo $stats['stats_id']; ?>">
    <input type="hidden" name="actionType" value="Delete">
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');">
        Delete Stats
    </button>
</form>

    echo "</div>";
    echo "</div>";
}


?>

