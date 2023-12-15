<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/charactersModel.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php");

$pageTitle = "Character Stats";
$chars = selectCharacters();
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            $stats_char_id = $_POST['stats_char_id'];
            $hit_points = $_POST['hit_points'];
            $armor_class = $_POST['armor_class'];
            $strength = $_POST['strength'];
            $dexterity = $_POST['dexterity'];
            $constitution = $_POST['constitution'];
            $intelligence = $_POST['intelligence'];
            $wisdom = $_POST['wisdom'];
            $charisma = $_POST['charisma'];

            if (insertStats($stats_char_id, $hit_points, $armor_class, $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma)) {
                echo '<div class="alert alert-success" role="alert">Character Stats Added.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error</div>';
            }
            break;
        case "Edit":
            $stats_char_id = $_POST['stats_char_id'];
            $hit_points = $_POST['hit_points'];
            $armor_class = $_POST['armor_class'];
            $strength = $_POST['strength'];
            $dexterity = $_POST['dexterity'];
            $constitution = $_POST['constitution'];
            $intelligence = $_POST['intelligence'];
            $wisdom = $_POST['wisdom'];
            $charisma = $_POST['charisma'];

            if (updateStats($stats_char_id, $hit_points, $armor_class, $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma)) {
                echo '<div class="alert alert-success" role="alert">Character Stats Edited.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error</div>';
            }
            break;
        case "Delete":
            $character_id = $_POST['character_id'];

            if (deleteCharacter($character_id)) {
                echo '<div class="alert alert-success" role="alert">Character Deleted.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error</div>';
            }
            break;
    }
}

$statsAndCharacters = selectStatsWithCharacters();
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
