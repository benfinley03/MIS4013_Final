<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/charactersModel.php");
$pageTitle = "Characters";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";
$characters = selectCharacters();
include "/home/benfinmi/repositories/MIS4013_Final/view/charactersView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
