<?php include('./config/db.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Write</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
  
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   
   
    <link href="./assets/css/style.css" rel="stylesheet" />
  
    <link href="./assets/css/custom.css" rel="stylesheet" />
  
    <link href="./assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

  </head>


  <body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          VOYAGE </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
         

          <?php    
            if($_SESSION['email']){
            echo '
            <li class="nav-item">
            <a href="#" class="nav-link"> 
                Decrire
            </a>
          </li>

            <li class="nav-item"  >
            <a href="./logout.php" class="nav-link"> 
               Logout   
            </a>
          </li>
          
          ';
            }
            else {
            echo '
            <li class="nav-item"  >
            <a href="./login-page.php" class="nav-link"> 
               Login  
            </a>
          </li>';
            }
    ?>


        </ul>
      </div>
    </div>
  </nav>

  