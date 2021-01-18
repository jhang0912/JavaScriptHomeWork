<?php
$skills=$Skills->q('SELECT * FROM `Resume_skills` WHERE `display` !=0 ORDER BY `display`');

foreach($skills as $value){
  ?>
    <div class="item d-flex flex-wrap align-items-strat col-2 p-4">
      <img src="./icon/<?=$value['img']?>" class="img col-12">
      <div class="text col-12 text-center">
        <?=$value['text']?>
      </div>
    </div>
<?php
}
?>
