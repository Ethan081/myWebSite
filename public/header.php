<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <title>
      <?php 
        if(isset($title)) {
          echo $title ; 
        } else {
          echo 'Nom non definie'; 
        }
      ?>
    </title>
    <script src="https://kit.fontawesome.com/70ece4c924.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    

  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/Logo-EZ.png" width="50" height="50" class="d-inline-block align-top" alt="">
          </a>
          <ul class="nav nav-pills">
              <li class="nav-item">
                <a class='nav-link' href="cv.php">C.V</a>
              </li>
              <li class="nav-item">
                <a class='nav-link' href="contact.php">Contact</a>
              </li>
          </ul>
        </nav>
    </header>