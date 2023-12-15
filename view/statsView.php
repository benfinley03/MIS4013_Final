<?php
echo "<h1>Character Stats</h1>";

// Assuming $statsAndCharacters is available from the controller
while ($row = $statsAndCharacters->fetch_assoc()) {
    $characterId = $row['character_id'];

    echo "<div class='card'>";
    echo "<div class='card-header'>";
    echo "<h2>{$row['name']}</h2>";
    echo "<p>Class: {$row['class']}</p>";
    echo "</div>";
    echo "<div class='card-body'>";
    echo "<p>Strength: {$row['strength']}</p>";
    echo "<p>Dexterity: {$row['dexterity']}</p>";
    echo "<p>Constitution: {$row['constitution']}</p>";
    echo "<p>Intelligence: {$row['intelligence']}</p>";
    echo "<p>Wisdom: {$row['wisdom']}</p>";
    echo "<p>Charisma: {$row['charisma']}</p>";
    echo "</div>";
    echo "</div>";
}

?>
