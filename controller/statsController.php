<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/charactersModel.php");
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";

$pageTitle = "Character Stats";

// Assuming you have a function to fetch all characters
$characters = selectCharacters();

// Prepare the statement
$stmt = $conn->prepare("SELECT *
                        FROM stats
                        WHERE stats_char_id = ?");
$stmt->bind_param("i", $characterId);

// Loop through each character to fetch and display their stats
while ($character = $characters->fetch_assoc()) {
    $characterId = $character['character_id'];

    // Set the parameter value
    $stmt->bind_param("i", $characterId);

    // Execute the statement
    $stmt->execute();
    $stats = $stmt->get_result();

    include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
}

$stmt->close();
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
