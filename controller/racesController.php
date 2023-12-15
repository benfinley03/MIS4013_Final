<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/racesModel.php");
$pageTitle = "Races";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";
$races = selectRaces();
include "/home/benfinmi/repositories/MIS4013_Final/view/racesView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
