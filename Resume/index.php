<?php include_once "./base.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@800&family=Kanit:wght@200;400;700&family=Yesteryear&family=Cinzel:wght@700&family=Lato&family=Playfair+Display:wght@700&display=swap"
    rel="stylesheet">
  <!-- animated.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- wow.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/518f89d214.js" crossorigin="anonymous"></script>
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <!-- uikit -->
  <link rel="stylesheet" href="css/uikit.min.css" />
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- title-icon -->
  <link rel="icon" href="./img/title_icon.ico" type="image/x-icon" />
  <title>JHANG&ensp;YUE&ensp;KAI</title>
</head>

<body>
  <section id="header" class="col-12 p-0">
    <div class="main_img vh-100 col-12 p-0" style="background-image: url('./img/main_02.jpg');" id="main_img2"></div>

    <div class="main_img vh-100 col-12 p-0" style="background-image: url('./img/main_01.jpg'); " id="main_img1"></div>

    <nav class="navbar navbar-expand-lg flex-nowrap animate__animated animate__fadeInDown ">
      <div class="J_title col-sm-12 col-lg-1 col-xl-1 border border-white mb-0 text-center navbar-text h1 text-white">
        J.</div>
      <div class="container-fluid d-none d-lg-flex flex-nowrap justify-content-sm-end">
        <a class="nav-item nav-link text-left mr-3" id="about" href="#">ABOUT<div class="line " id="line1"></div></a>
        <a class="nav-item nav-link text-left mr-3" id="resume" href="#">RESUME<div class="line " id="line2"></div></a>
        <a class="nav-item nav-link text-left mr-3" id="portfolio" href="#">PORTFOLIO<div class="line " id="line4">
          </div></a>
        <a class="nav-item nav-link text-left mr-3" id="skills" href="#">SKILLS<div class="line " id="line3"></div></a>
        <a class="nav-item nav-link text-left mr-3" id="login" href="./login.php">LOGIN<div class="line " id="line5"></div></a>
      </div>
      </div>
    </nav>

    <div class="container-fluid d-flex d-md-none justify-content-center">
      <div class="btn btn-outline-light " data-toggle="collapse" href="#list" role="button" aria-expanded="false"
        aria-controls="list">
        <i class="fas fa-bars m-0 h1"></i>
      </div>
    </div>

    <div class="collapse container-fluid d-md-none" id="list">
      <a href="#" class="text-decoration-none">
        <div id="about2" class="col-12 d-flex align-items-center justify-content-center border-bottom border-white">
          <div class="text-white">ABOUT</div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div id="resume2" class="col-12 d-flex align-items-center justify-content-center border-bottom border-white">
          <div class="text-white">RESUME</div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div id="portfolio2" class="col-12 d-flex align-items-center justify-content-center border-bottom border-white">
          <div class="text-white">PORTFOLIO</div>
        </div>
      </a>
      <a href="#" class="text-decoration-none">
        <div id="skills2" class="col-12 d-flex align-items-center justify-content-center border-bottom border-white">
          <div class="text-white">SKILLS</div>
        </div>
      </a>
      <a href="./login.php" class="text-decoration-none">
        <div class="col-12 d-flex align-items-center justify-content-center border-bottom border-white">
          <div class="text-white">LOGIN</div>
        </div>
      </a>
    </div>

    <div class="h2 text-white m-0">
      <!-- 首頁英文姓名區 -->
      <?php include "front/home_enName.php"; ?>
    </div>

    <h1 class="centerText text-white">
      <div class="mainText">
        <span class="aText " id="aText">W</span><span class="aText" id="aText1">e</span><span class="aText"
          id="aText2">l</span><span class="aText" id="aText3">c</span><span class="aText" id="aText4">o</span><span
          class="aText" id="aText5">m</span><span class="aText" id="aText6">e</span><span class="aText" id="aText7">
        </span><span class="aText" id="aText8">T</span><span class="aText" id="aText9">o</span><span class="aText"
          id="aText10"> </span><span class="aText" id="aText11">M</span><span class="aText" id="aText12">y</span><span
          class="aText" id="aText13"> </span><span class="aText" id="aText14">P</span><span class="aText"
          id="aText15">a</span><span class="aText" id="aText16">g</span><span class="aText" id="aText17">e</span>
      </div>
    </h1>

    <div class="iconGroup m-0">
      <div class="row animate__animated animate__fadeInUp">
        <!-- 首頁連結區 -->
        <?php include "front/home_href.php"; ?>
      </div>
    </div>

    <div class="scrollDown">
      <div class="icon">
        <div class="arrow">
          <i class="fas fa-arrow-down h3 text-white animate__animated animate__fadeInDown animate__slow animate__infinite"
            id="icon1"></i>
        </div>
      </div>
    </div>

    <div class="controlPoint">
      <div class="point1 rounded-circle bg-white" id="point1" style="height: 15px; width: 15px"></div>
      <div class="point2 rounded-circle bg-white" id="point2" style="height: 15px; width: 15px"></div>
    </div>


    <div class="position_con text-white d-none d-sm-block">
      <div class="num text-white text-center"></div>
      <div class="position"></div>
      <div class="Num text-white">5</div>
    </div>

  </section>

  <section id="About" class="container col-12 p-0 m-0">
    <div class="container-fluid col-12 m-0 p-0 d-flex flex-wrap">
      <div class="title col-12 text-center pt-2 pb-2">About</div>

      <div class="img_container col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 m-0">
        <div class="left_img col-12 p-0"></div>
        <!-- 大頭貼區 -->
        <?php include "front/head_shot.php"; ?>

        <div class="img_background" style="width: 175px; height: 175px; z-index: 2;"></div>

        <div class="img_background2" style="z-index: 1;"></div>

        <div class="img_text_con text-white">
          <div class="img_text wow animate__animated animate__fadeInDown animate__delay-2s">Hello.</div>
          <div class="img_line"></div>
        </div>
        <!-- 關於我區 -->
        <?php include "./front/about.php"; ?>

      </div>

      <div class="right_content_line_con">
        <div class="right_content_line wow animate__animated animate__fadeInDown"></div>
      </div>

    </div>
    </div>
  </section>

  <section id="Resume" class="container col-12 p-0 m-0">
    <div class="title col-12 text-center pt-2 pb-2">Resume</div>

    <div class="container-fluid col-12 d-flex p-0">
      <div class="line_con">
        <div class="line wow animate__animated animate__fadeInDown"></div>
      </div>

      <div class="col-7"></div>

      <div class="content">
        <span id="item_ed" class="con_item">Education</span>

        <span id="item_wo" class="con_item">Work Experience</span>

        <span id="item_pe" class="con_item">Personal Development</span>
        <!-- 履歷區 -->
        <?php include "front/resume.php" ?>
      </div>

      <div class="item">
        <div id="Education" class="sort"><i class="fas fa-caret-right"></i> Education</div>
        <div id="WorkExperience" class="sort"><i class="fas fa-caret-right"></i> Work Experience</div>
        <div id="PersonalDevelopment" class="sort"><i class="fas fa-caret-right"></i> Personal Development</div>
      </div>

      <div class="img_con col-4">
        <div class="img d-none d-sm-none d-md-none d-lg-block"></div>
      </div>

      <div class="img_intr d-none d-sm-none d-md-none d-lg-block wow animate__animated animate__fadeInUp">
        <div class="mess_con">
          <span class="year">1907</span>
          <span class="article">-John Singer Sargent-</span>
        </div>
        <span class="name">The Fountain,Villa Torlonia, Frascati, Italy</span>
      </div>
    </div>
  </section>

  <section id="Portfolio" class="container col-12 d-none d-lg-block p-0 m-0">
    <div class="title col-12 text-center pt-2 pb-2">Portfolio</div>

    <div class="container-fluid col-12 d-flex p-0">
      <div class="left col-6 d-flex p-0">
        <div class="left_one_con col-6 d-none d-sm-none d-md-none d-lg-block p-0 ">
          <div class="left_one ">
          </div>
          <div class="img_intr d-none d-sm-none d-md-none d-lg-block">
            <div class="mess_con">
              <span class="year">1888</span>

              <span class="article">-John Singer Sargent-</span>
            </div>

            <span class="name">Morning Walk</span>
          </div>
        </div>

        <div class="left_two_container h-100 col-6 p-0 d-flex flex-wrap">
          <!-- 作品集區 1 -->
          <?php include "./front/portfolio_1.php" ?>

        </div>

      </div>

      <div class="right col-6 d-flex p-0">
        <div class="right_one_container h-100 col-6 p-0 d-flex flex-wrap">
          <!-- 作品集區 2 -->
          <?php include "./front/portfolio_2.php" ?>
        </div>

        <div class="right_two_container h-100 col-6 p-0 d-flex flex-wrap">
          <!-- 作品集區 3 -->
          <?php include "./front/portfolio_3.php" ?>
        </div>
      </div>

      <div class="line_one_con">
        <div class="line_one wow animate__animated animate__fadeInDown"></div>
      </div>
      <div class="line_two_con">
        <div class="line_two wow animate__animated animate__fadeInDown"></div>
      </div>
      <div class="line_three_con">
        <div class="line_three wow animate__animated animate__fadeInDown"></div>
      </div>
    </div>
  </section>

  <section id="Portfolio2" class="container col-12 d-flex flex-wrap d-lg-none p-0 m-0">
    <div class="title col-12 text-center pt-2 pb-2">Portfolio</div>
    <!-- 作品集區 4 -->
    <?php include "./front/portfolio_4.php" ?>
    <div class="line_two"></div>

    </div>
  </section>

  <section id="Skills" class="container col-12 p-0 m-0">
    <div class="title col-12 text-center pt-2 pb-2">Skills</div>

    <div id="Carousel" class="container-fluid col-12 d-flex">
      <?php include "./front/skills.php"; ?>
    </div>
  </section>

  <section id="BS">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
  </section>

  <section class="js">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="./js/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript" src="./js/js.js"></script>

  </section>
</body>

</html>