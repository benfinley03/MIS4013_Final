<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/statsModel.php");
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";
$pageTitle = "Character Stats";
$cid = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) : null;
$stats = selectStats($cid);
include "/home/benfinmi/repositories/MIS4013_Final/view/statsView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
