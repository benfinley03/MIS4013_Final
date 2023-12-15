<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php");

$pageTitle = "Character Stats";

// Fetch characters and stats together
$statsAndCharacters = selectStatsWithCharacters();

// Output character and stats data in the view
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";

include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
