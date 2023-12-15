<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/charactersModel.php");
$pageTitle = "Characters";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";
$characters = selectCharacters();
include "/home/benfinmi/repositories/MIS4013_Final/view/charactersView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";


if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            $name = $_POST['name'];
            $char_race_id = $_POST['char_race_id'];
            $char_class_id = $_POST['char_class_id'];
            $level = $_POST['level'];
            $alignment = $_POST['alignment'];
            $background = $_POST['background'];

            if (insertCharacter($name, $char_race_id, $char_class_id, $level, $alignment, $background)) {
                echo '<div class="alert alert-success" role="alert">Character Added.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error</div>';
            }
            break;
        case "Edit":
            $name = $_POST['name'];
            $char_race_id = $_POST['char_race_id'];
            $char_class_id = $_POST['char_class_id'];
            $level = $_POST['level'];
            $alignment = $_POST['alignment'];
            $background = $_POST['background'];
            $character_id = $_POST['character_id'];

            if (updateCharacter($name, $char_race_id, $char_class_id, $level, $alignment, $background, $character_id)) {
                echo '<div class="alert alert-success" role="alert">Character Edited.</div>';
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


?>


