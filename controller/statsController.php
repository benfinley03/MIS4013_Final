<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
$pageTitle = "Character Stats";
$cid = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) : null;
$stats = selectStats($_GET['id']);
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
?>
