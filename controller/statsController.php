<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
$pageTitle = "Character Stats";
$characterId = isset($_POST['cid']) ? $_POST['cid'] : null;

$stats = selectStats($cid);
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
?>
