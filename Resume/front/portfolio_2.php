<?php
$portfolio=$Portfolio->q('SELECT * FROM `Resume_portfolio` WHERE `display` != 0 ORDER BY `display`');
?>
<div class="right_two_con  col-12 d-flex flex-wrap align-items-center p-0">
  <div class="right_two col-12 d-flex flex-wrap align-items-center p-0">

    <div class="title_one col-12 text-center p-0">
      <div>
        <i class="fas fa-angle-up"></i>
        <div>02</div>
      </div>
      <?php if(!empty($portfolio[1]['name'])){echo $portfolio[1]['name'];}else{echo "Portfolio Item";} ?>
      <div class="img_one mt-2">
        <?php if(!empty($portfolio[1]['img'])){echo "<img src='./img/{$portfolio[1]['img']}' class=''>";}?>
      </div>
      <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5">
        <?php if(!empty($portfolio[1]['text'])){echo $portfolio[1]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
      </div>
      <i class="fas fa-angle-down mt-4"></i>
    </div>
  </div>
</div>

<div class="right_two_con  col-12 d-flex flex-wrap align-items-center p-0">
  <div class="right_two col-12 d-flex flex-wrap align-items-center p-0">

    <div class="title_one col-12 text-center p-0">
      <div>
        <i class="fas fa-angle-up"></i>
        <div>05</div>
      </div>
      <?php if(!empty($portfolio[4]['name'])){echo $portfolio[4]['name'];}else{echo "Portfolio Item";} ?>
      <div class="img_one mt-2">
        <?php if(!empty($portfolio[4]['img'])){echo "<img src='./img/{$portfolio[4]['img']}' class=''>";}?>
      </div>
      <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5">
        <?php if(!empty($portfolio[4]['text'])){echo $portfolio[4]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
      </div>
      <i class="fas fa-angle-down mt-4"></i>
    </div>
  </div>
</div>