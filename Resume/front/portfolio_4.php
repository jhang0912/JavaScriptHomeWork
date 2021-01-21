<div class="container-fluid col-12 d-flex p-0">
  <div class="left col-6 d-flex p-0">
    <div class="left_two_container h-100 col-12 p-0 d-flex flex-wrap">
      <div class="left_two_con  col-12 d-flex flex-wrap align-items-center p-0">
        <div class="left_two col-12 d-flex flex-wrap align-items-center p-0">

          <div class="title_one col-12 text-center p-0">
            <div>
              <i class="fas fa-angle-up d-none d-sm-block"></i>
              <div>01</div>
            </div>
            <?php if(!empty($portfolio[0]['name'])){echo $portfolio[0]['name'];}else{echo "Portfolio Item";} ?>
            <div class="img_one mt-2 uk-inline-clip uk-transition-toggle" tabindex="0">
        <?php if(!empty($portfolio[0]['img'])){echo "<img class='uk-transition-scale-up uk-transition-opaque' src='./img/{$portfolio[0]['img']}'>";}?>
        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle text-white"></div>
        <div class="uk-position-center">
          <p class="uk-transition-slide-top h3">LINK</p>
          <a href="<?php if(!empty($portfolio[0]['href'])){echo $portfolio[0]['href'];}?>" target='blank'>
            <p class="link_hover uk-transition-slide-bottom" uk-icon="icon: link;ratio: 2.5"></p>
          </a>
        </div>
      </div>
            <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5"><?php if(!empty($portfolio[0]['text'])){echo $portfolio[0]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
            </div>
            <i class="fas fa-angle-down d-none d-sm-block mt-4"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="right col-6 d-flex p-0">
    <div class="right_one_container h-100 col-12 p-0 d-flex flex-wrap">
      <div class="right_two_con  col-12 d-flex flex-wrap align-items-center p-0">
        <div class="right_two col-12 d-flex flex-wrap align-items-center p-0">

          <div class="title_one col-12 text-center p-0">
            <div>
              <i class="fas fa-angle-up d-none d-sm-block"></i>
              <div>02</div>
            </div>
            <?php if(!empty($portfolio[1]['name'])){echo $portfolio[1]['name'];}else{echo "Portfolio Item";} ?>
            <div class="img_one mt-2 uk-inline-clip uk-transition-toggle" tabindex="0">
        <?php if(!empty($portfolio[1]['img'])){echo "<img class='uk-transition-scale-up uk-transition-opaque' src='./img/{$portfolio[1]['img']}'>";}?>
        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle text-white"></div>
        <div class="uk-position-center">
          <p class="uk-transition-slide-top h3">LINK</p>
          <a href="<?php if(!empty($portfolio[1]['href'])){echo $portfolio[1]['href'];}?>" target='blank'>
            <p class="link_hover uk-transition-slide-bottom" uk-icon="icon: link;ratio: 2.5"></p>
          </a>
        </div>
      </div>
            <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5"><?php if(!empty($portfolio[1]['text'])){echo $portfolio[1]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
            </div>
            <i class="fas fa-angle-down d-none d-sm-block mt-4"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="line_two"></div>

</div>

<div class="container-fluid col-12 d-flex p-0">
  <div class="left col-6 d-flex p-0">
    <div class="left_two_container h-100 col-12 p-0 d-flex flex-wrap">
      <div class="left_two_con  col-12 d-flex flex-wrap align-items-center p-0">
        <div class="left_two col-12 d-flex flex-wrap align-items-center p-0">

          <div class="title_one col-12 text-center p-0">
            <div>
              <i class="fas fa-angle-up d-none d-sm-block"></i>
              <div>03</div>
            </div>
            <?php if(!empty($portfolio[2]['name'])){echo $portfolio[2]['name'];}else{echo "Portfolio Item";} ?>
            <div class="img_one mt-2 uk-inline-clip uk-transition-toggle" tabindex="0">
        <?php if(!empty($portfolio[2]['img'])){echo "<img class='uk-transition-scale-up uk-transition-opaque' src='./img/{$portfolio[2]['img']}'>";}?>
        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle text-white"></div>
        <div class="uk-position-center">
          <p class="uk-transition-slide-top h3">LINK</p>
          <a href="<?php if(!empty($portfolio[2]['href'])){echo $portfolio[2]['href'];}?>" target='blank'>
            <p class="link_hover uk-transition-slide-bottom" uk-icon="icon: link;ratio: 2.5"></p>
          </a>
        </div>
      </div>
            <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5"><?php if(!empty($portfolio[2]['text'])){echo $portfolio[2]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
            </div>
            <i class="fas fa-angle-down d-none d-sm-block mt-4"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="right col-6 d-flex p-0">
    <div class="right_one_container h-100 col-12 p-0 d-flex flex-wrap">
      <div class="right_two_con  col-12 d-flex flex-wrap align-items-center p-0">
        <div class="right_two col-12 d-flex flex-wrap align-items-center p-0">

          <div class="title_one col-12 text-center p-0">
            <div>
              <i class="fas fa-angle-up d-none d-sm-block"></i>
              <div>04</div>
            </div>
            <?php if(!empty($portfolio[3]['name'])){echo $portfolio[3]['name'];}else{echo "Portfolio Item";} ?>
            <div class="img_one mt-2 uk-inline-clip uk-transition-toggle" tabindex="0">
        <?php if(!empty($portfolio[3]['img'])){echo "<img class='uk-transition-scale-up uk-transition-opaque' src='./img/{$portfolio[3]['img']}'>";}?>
        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle text-white"></div>
        <div class="uk-position-center">
          <p class="uk-transition-slide-top h3">LINK</p>
          <a href="<?php if(!empty($portfolio[3]['href'])){echo $portfolio[3]['href'];}?>" target='blank'>
            <p class="link_hover uk-transition-slide-bottom" uk-icon="icon: link;ratio: 2.5"></p>
          </a>
        </div>
      </div>
            <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5"><?php if(!empty($portfolio[3]['text'])){echo $portfolio[3]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
            </div>
            <i class="fas fa-angle-down d-none d-sm-block mt-4"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="line_two"></div>

</div>

<div class="container-fluid col-12 d-flex p-0">
  <div class="left col-6 d-flex p-0">
    <div class="left_two_container h-100 col-12 p-0 d-flex flex-wrap">
      <div class="left_two_con  col-12 d-flex flex-wrap align-items-center p-0">
        <div class="left_two col-12 d-flex flex-wrap align-items-center p-0">

          <div class="title_one col-12 text-center p-0">
            <div>
              <i class="fas fa-angle-up d-none d-sm-block"></i>
              <div>05</div>
            </div>
            <?php if(!empty($portfolio[4]['name'])){echo $portfolio[4]['name'];}else{echo "Portfolio Item";} ?>
            <div class="img_one mt-2 uk-inline-clip uk-transition-toggle" tabindex="0">
        <?php if(!empty($portfolio[4]['img'])){echo "<img class='uk-transition-scale-up uk-transition-opaque' src='./img/{$portfolio[4]['img']}'>";}?>
        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle text-white"></div>
        <div class="uk-position-center">
          <p class="uk-transition-slide-top h3">LINK</p>
          <a href="<?php if(!empty($portfolio[4]['href'])){echo $portfolio[4]['href'];}?>" target='blank'>
            <p class="link_hover uk-transition-slide-bottom" uk-icon="icon: link;ratio: 2.5"></p>
          </a>
        </div>
      </div>
            <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5"><?php if(!empty($portfolio[4]['text'])){echo $portfolio[4]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
            </div>
            <i class="fas fa-angle-down d-none d-sm-block mt-4"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="right col-6 d-flex p-0">
    <div class="right_one_container h-100 col-12 p-0 d-flex flex-wrap">
      <div class="right_two_con  col-12 d-flex flex-wrap align-items-center p-0">
        <div class="right_two col-12 d-flex flex-wrap align-items-center p-0">

          <div class="title_one col-12 text-center p-0">
            <div>
              <i class="fas fa-angle-up d-none d-sm-block"></i>
              <div>06</div>
            </div>
            <?php if(!empty($portfolio[5]['name'])){echo $portfolio[5]['name'];}else{echo "Portfolio Item";} ?>
            <div class="img_one mt-2 uk-inline-clip uk-transition-toggle" tabindex="0">
        <?php if(!empty($portfolio[5]['img'])){echo "<img class='uk-transition-scale-up uk-transition-opaque' src='./img/{$portfolio[5]['img']}'>";}?>
        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle text-white"></div>
        <div class="uk-position-center">
          <p class="uk-transition-slide-top h3">LINK</p>
          <a href="<?php if(!empty($portfolio[5]['href'])){echo $portfolio[5]['href'];}?>" target='blank'>
            <p class="link_hover uk-transition-slide-bottom" uk-icon="icon: link;ratio: 2.5"></p>
          </a>
        </div>
      </div>
            <div class="text_one col-12 text-center text-white mt-3 pl-5 pr-5"><?php if(!empty($portfolio[5]['text'])){echo $portfolio[5]['text'];}else{echo "Lorem ipsum dolor sit amet consectetur,
      adipisicing elit. Mollitia itaque enim quos expedita sed ad vero impedit nesciunt voluptate quae.";} ?>
            </div>
            <i class="fas fa-angle-down d-none d-sm-block mt-4"></i>
          </div>
        </div>
      </div>
    </div>
  </div>