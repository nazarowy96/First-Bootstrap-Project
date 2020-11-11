<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kawiarnia Miejska</title>
  <meta name="author" content="Mateusz Nazarowicz">
  <meta name="description" content="Projekt strony kawiarni wykonany w Bootstrapie">
  <meta name="keywords" content="bootstrap,cafe">
  <link rel="shortcut icon" href="coffee-solid.svg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
      <?php
        if(isset($_GET['p'])) {
            $page = $_GET['p'];
        } else {
            $page = 'main';
        }
      ?>
    <nav class="navbar sticky-top navbar-dark bg-dark d-md-none">
      <a class="navbar-brand" href="index.html"><img src="coffee-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item <?php if($page == 'main') {echo 'active';} ?>">
            <a class="nav-link" href="index.php">Strona główna <?php if($page == 'main') {echo '<span class="sr-only">(current)</span>';} ?></a>
          </li>
          <li class="nav-item <?php if($page == 'galeria') {echo 'active';} ?>">
            <a class="nav-link" href="index.php?p=galeria">Galeria <?php if($page == 'galeria') {echo '<span class="sr-only">(current)</span>';} ?></a>
          </li>
          <li class="nav-item <?php if($page == 'historia') {echo 'active';} ?>">
            <a class="nav-link" href="index.php?p=historia">Historia <?php if($page == 'historia') {echo '<span class="sr-only">(current)</span>';} ?></a>
          </li>
          <li class="nav-item <?php if($page == 'kontakt') {echo 'active';} ?>">
            <a class="nav-link" href="index.php?p=kontakt">Kontakt <?php if($page == 'kontakt') {echo '<span class="sr-only">(current)</span>';} ?></a>
          </li>
        </ul>
      </div>
    </nav>
      <div class="container">
          <div class="row justify-content-around header">
              <div class="col align-self-center">
                  <h1>Kawiarnia Miejska</h1>
              </div>
          </div>
          <div class="row">
            <div class="col-3 d-none d-md-block nav">
              <a href="index.php" <?php if ($page == 'main') {echo 'id="selected"';} ?>>Strona główna</a>
              <a href="index.php?p=galeria" <?php if ($page == 'galeria') {echo 'id="selected"';} ?>>Galeria</a>
              <a href="index.php?p=historia" <?php if ($page == 'historia') {echo 'id="selected"';} ?>>Historia</a>
              <a href="index.php?p=kontakt" <?php if ($page == 'kontakt') {echo 'id="selected"';} ?>>Kontakt</a>
            </div>
            <div class="col-12 col-md-9 col-lg-6 content">
              <?php
              if ($page == 'main') {
                  include ("main.php");
              } else if ($page == 'galeria') {
                  include ("galeria.php");
              } else if ($page == 'historia') {
                include ("historia.php");
            } else if ($page == 'kontakt') {
                include ("kontakt.php");
            }
              ?>
            </div>
            <div class="col-3 d-none d-lg-block aside">
              <img src="img/cafe2.jpg" alt="Cafe2">
              <img src="img/cafe1.jpg" alt="Cafe1">
            </div>
          </div>
          <div class="row">
            <div class="col footer">
              <a href="https://github.com/nazarowy96">Created and designed by Mateusz Nazarowicz. All right reserved. © 2020</a><br>
              <a href="https://pl.freepik.com/">Obrazy pobrane z - pl.freepik.com</a><br>
              <a href="https://getbootstrap.com/">Bootstrap</a>
            </div>
          </div>
      </div>
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>