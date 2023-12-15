<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/classesModel.php");
$pageTitle = "Classes";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";



if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertClass($_POST['class']))
      {
        echo '<div class="alert alert-success" role="alert">Class Added.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateClass($_POST['class'], $_POST['class_id']))
      {
        echo '<div class="alert alert-success" role="alert">Class Edited.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteClass($_POST['class_id'])) 
      {
        echo '<div class="alert alert-success" role="alert">Class Deleted.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}




$classes = selectClasses();
include "/home/benfinmi/repositories/MIS4013_Final/view/classesView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
