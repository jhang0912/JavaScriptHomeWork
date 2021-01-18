<?php include_once "base.php";?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="./css/admin.css">
  <title>Admin</title>
</head>
<body>
  <section id="Navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-brand">Admin Awesome</div>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link me-3" href="?do=Resume_about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3 " href="?do=Resume_introduction">Introduction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="?do=Resume_education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="?do=Resume_work_experience">Work Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="?do=Resume_personal_development">Personal Development</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=Resume_portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=Resume_skills">Skills</a>
            </li>
          </ul>
        </div>

        <div class="float-end"><a href="./api/logout.php" class="btn btn-outline-light text-decoration-none">LOGOUT</a></div>
      </div>
    </nav>
  </section>

  <saction id="Content">
    <div class="Content p-4">
      <div class="con container-fluid col-12 p-0 rounded shadow-sm d-flex flex-wrap justify-content-center align-item-center">
      <?php
          $do=(!empty($_GET['do']))?$_GET['do']:"Resume_about";
          $file="./backend/".$do.".php";
          if(file_exists($file)){
            include $file;
          }else{
            include "backend/Resume_about.php";
          }
			?>
      </div>
    </div>
  </saction>

  <section id="BS">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
  </section>
</body>

</html>