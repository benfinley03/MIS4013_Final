<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $pageTitle; ?></title>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2nFgA5om8IbbVdJzazt+JX6p0a4U9Bp" crossorigin="anonymous">


    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('dnd_background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
        
    .navbar-nav a {
      transition: color 0.3s ease;
    }

    @keyframes fadeOut {
      0% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(0.9); }
      100% { opacity: 0; transform: scale(0.5); }
    }

    body.navigating {
      animation: fadeOut 0.5s ease forwards;
    }
  </style>


    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">Final Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/index.php" onclick="navigateTo('index.php')">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/controller/classesController.php" onclick="navigateTo('classesController.php')">Classes</a></li>
                <li class="nav-item"><a class="nav-link" href="/controller/racesController.php" onclick="navigateTo('racesController.php')">Races</a></li>
                <li class="nav-item"><a class="nav-link" href="/controller/charactersController.php" onclick="navigateTo('charactersController.php')">Characters</a></li>                
                <li class="nav-item"><a class="nav-link" href="/controller/statsController.php" onclick="navigateTo('statsController.php')">Character Stats</a></li>

            </ul>
        </div>
    </div>
</nav>
