<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/charactersModel.php");
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";
$pageTitle = "Character Stats";
$stats = selectStats();
$nameAndClass = selectCharacters();
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
