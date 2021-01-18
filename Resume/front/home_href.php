<?php
$about=$About->find(['display'=>'1']);
?>
<div><a href="<?=$about['facebook']?>" target="blank"><i
              class="fab fa-facebook-square text-white pr-3"></i></a></div>
        <div><a href="<?=$about['github']?>" target="blank"><i
              class="fab fa-github-square text-white pr-3"></i></a></div>
        <div><a href="<?=$about['artstation']?>" target="blank"><i
              class="fab fa-artstation text-white"></i></a></div>