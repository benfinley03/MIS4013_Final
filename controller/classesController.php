<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/classesModel.php");
$pageTitle = "Classes";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";
$classes = selectClasses();
include "/home/benfinmi/repositories/MIS4013_Final/view/classesView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
