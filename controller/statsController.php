<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
$pageTitle = "Character Stats";
$stats = selectStats($_GET[$cid]);
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
?>
