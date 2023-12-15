<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";
$pageTitle = "Character Stats";
$stats = selectStats();
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
