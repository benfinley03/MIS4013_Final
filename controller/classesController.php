<?php
require_once("connection.php");
require_once("model/classesModel.php");
$pageTitle = "Classes";
include "Other/view-header.php";
$classes = selectClasses();
include "view/classesView.php";
include "Other/view-footer.php";
?>
