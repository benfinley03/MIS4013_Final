<?php
echo "<h1>Character Stats</h1>";

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
    echo "</div>";
    echo "</div>";
}

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-JFq4QqBEaayt2iGqDQsZTXB9tqPhkAUp3Pz+5PcEJ0tR3ZB/JmOrJSt5BO+dn+FZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2nFgA5om8IbbVdJzazt+JX6p0a4U9Bp" crossorigin="anonymous"></script>
