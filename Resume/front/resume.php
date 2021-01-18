<?php
$education=$Education->find(['display'=>'1']);
$work_experience=$Work_experience->find(['display'=>'1']);
$personal_development=$Personal_development->find(['display'=>'1']);
?>
<div id="ed_text" class="text text-white mt-3">
  <h2><?=$education['school']?></h2>
  <?=$education['text']?>
</div>

<div id="wo_text" class="text text-white mt-3">
  <h2><?=$work_experience['company']?></h2>
  <?=$work_experience['text']?>
</div>

<div id="pe_text" class="text text-white mt-3">
  <?=$personal_development['text']?>
</div>