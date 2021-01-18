<?php
$about=$About->find(['display'=>'1']);
$introduction=$Introduction->find(['display'=>'1']);
?>
<div class="img_name_con">
  <div class="img_name text-white wow animate__animated animate__fadeInUp animate__delay-2s"><?=$about['en_name']?>
  </div>
</div>

</div>

<div
  class="right_content col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 m-0 d-flex flex-wrap justify-content-center align-items-center">
  <div class="con container col-12 p-5">
    <span class="intr text-white border-bottom">INTRODUCTION</span>

    <div class="intr_content text-white">
      <?=$introduction['text']?>
    </div>

    <div class="icon">
      <i class="fas fa-caret-right text-white"><span> Gender : <?=$about['gender']?></span></i><br>
      <i class="fas fa-caret-right text-white"><span> Age : <?=$about['age']?></span></i><br>
      <i class="fas fa-caret-right text-white"><span> Email : <?=$about['email']?></span></i><br>
      <i class="fas fa-caret-right text-white"><span> City : <?=$about['city']?></span></i><br>
    </div>

    <div class="iconGroup2 d-flex mt-2">
      <div><a href="<?=$about['facebook']?>" target="blank"><i
            class="fab fa-facebook-square text-white pr-3 h4"></i></a></div>
      <div><a href="<?=$about['github']?>" target="blank"><i class="fab fa-github-square text-white pr-3 h4"></i></a>
      </div>
      <div><a href="<?=$about['artstation']?>" target="blank"><i class="fab fa-artstation text-white h4"></i></a></div>
    </div>