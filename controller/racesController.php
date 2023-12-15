<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");
require_once("/home/benfinmi/repositories/MIS4013_Final/model/racesModel.php");
$pageTitle = "Races";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-header.php";



if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertRace($_POST['race']))
      {
        echo '<div class="alert alert-success" role="alert">Race Added.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateRace($_POST['race'], $_POST['race_id']))
      {
        echo '<div class="alert alert-success" role="alert">Race Edited.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteRace($_POST['race_id'])) 
      {
        echo '<div class="alert alert-success" role="alert">Race Deleted.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}



$races = selectRaces();
include "/home/benfinmi/repositories/MIS4013_Final/view/racesView.php";
include "/home/benfinmi/repositories/MIS4013_Final/Other/view-footer.php";
?>
