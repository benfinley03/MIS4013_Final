<?php
//require_once("connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/classesModel.php");
$pageTitle = "Classes";
include "Other/view-header.php";
$classes = selectClasses();
include "view/classesView.php";
include "Other/view-footer.php";
?>
