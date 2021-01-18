<?php
$portfolio=$Portfolio->q('SELECT * FROM `Resume_portfolio` WHERE `display` != 0 ORDER BY `display`');
?>
<div class="left_two_con  col-12 d-flex flex-wrap align-items-center p-0">
  <div class="left_two col-12 d-flex flex-wrap align-items-center p-0">

    <div class="title_one col-12 text-center p-0">
      <div>
        <i class="fas fa-angle-up"></i>
        <div>01</div>
      </div>
      <?php if(!empty($portfolio[0]['name'])){echo $portfolio[0]['name'];}else{echo "Portfolio Item";} ?>
      <div class="img_one mt-2">
        <?php if(!empty($portfolio[0]['img'])){echo "<img src='./img/{$portfolio[0]['img']}' class=''>";}?>
      </div>
      <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5">
        <?php if(!empty($portfolio[0]['text'])){echo $portfolio[0]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
      </div>
      <i class="fas fa-angle-down mt-4"></i>
    </div>
  </div>
</div>

<div class="left_two_con  col-12 d-flex flex-wrap align-items-center p-0">
  <div class="left_two col-12 d-flex flex-wrap align-items-center p-0">

    <div class="title_one col-12 text-center p-0">
      <div>
        <i class="fas fa-angle-up"></i>
        <div>04</div>
      </div>
      <?php if(!empty($portfolio[3]['name'])){echo $portfolio[3]['name'];}else{echo "Portfolio Item";} ?>
      <div class="img_one mt-2">
        <?php if(!empty($portfolio[3]['img'])){echo "<img src='./img/{$portfolio[3]['img']}' class=''>";}?>
      </div>
      <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5">
        <?php if(!empty($portfolio[3]['text'])){echo $portfolio[3]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
      </div>
      <i class="fas fa-angle-down mt-4"></i>
    </div>
  </div>
</div>