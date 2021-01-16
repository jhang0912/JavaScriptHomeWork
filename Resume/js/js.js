new WOW().init();

// 導覽列卷軸滾動
let Height =[
  '40px',
  '80px',
  '120px',
  '160px',
  '200px'
]
let position = 0;
$('.nav-item').on('click',function(e){
  let scrollY ={
    about:'About',
    resume:'Resume',
    skills:'Skills',
    portfolio:'Portfolio'
  };
  let Id = this.id;
  let target = $('#'+scrollY[Id]).offset().top;
  // console.log(target);
  switch(Id){
    case 'about':
      position = 1;
      $('html,body').animate({scrollTop:target},1500);
      $(".position").animate({height:Height[position]},1500)
      $('#header .num').text(position+1);
      break;
    case 'resume':
      position = 2;
      $('html,body').animate({scrollTop:target},2000);
      $(".position").animate({height:Height[position]},2000)
      $('#header .num').text(position+1);
      break;
      case 'portfolio':
      position = 3;
      $('html,body').animate({scrollTop:target},2500);
      $(".position").animate({height:Height[position]},2500)
      $('#header .num').text(position+1);
      break;
      case 'skills':
      position = 4;
      $('html,body').animate({scrollTop:(document.body.clientHeight-937)},2700);
      $(".position").animate({height:Height[position]},2700)
      $('#header .num').text(position+1);
      break;
  }
})


$('#list .col-12.d-flex').on('click',function(e){
  let scrollY ={
    about2:'About',
    resume2:'Resume',
    skills2:'Skills',
    portfolio2:'Portfolio2'
  };
  let Id = this.id;
  let target = $('#'+scrollY[Id]).offset().top;
  // console.log(target);

  switch(Id){
    case 'about2':
      position = 1;
      $('html,body').animate({scrollTop:target},1500);
      $(".position").animate({height:Height[position]},1500)
      $('#header .num').text(position+1);
      break;
    case 'resume2':
      position = 2;
      $('html,body').animate({scrollTop:target},2000);
      $(".position").animate({height:Height[position]},2000)
      $('#header .num').text(position+1);
      break;
      case 'portfolio2':
        position = 3;
        $('html,body').animate({scrollTop:target},2500);
        $(".position").animate({height:Height[position]},2500)
        $('#header .num').text(position+1);
        break;
        case 'skills2':
          position = 4;
        $('html,body').animate({scrollTop:(document.body.clientHeight-812)},3000);
        $(".position").animate({height:Height[position]},3000)
        $('#header .num').text(position+1);
        break;
  }
})


/*滑鼠滾輪監聽事件*/
let sectionY = [
  '#header',
  '#About',
  '#Resume',
  '#Portfolio',
  '#Skills'
]

$(window).on('mousewheel', function(e){
  $('html,body').stop();
  let Y = e.deltaY;

  if(Y > 0){/*滑鼠上捲 */
    position--;
    if(position < 0){
      position++;
    }
  }else{/*滑鼠下捲 */
    position++;
    if(position > 4){
      position--;
    }
  }

  if(position === 3){
    if($('#Portfolio').offset().top === 0){
      $('html,body').animate({scrollTop:$('#Portfolio2').offset().top},1500);
      $(".position").animate({height:Height[position]},1250);
      $('#header .num').text(position+1);
      return;
    }
  }

  if(position === 4){
      $('html,body').animate({scrollTop:document.body.clientHeight-window.innerHeight},1000);
      $(".position").animate({height:Height[position]},1250);
      $('#header .num').text(position+1);
      return;
    }
  

  let target = $(sectionY[position]).offset().top;
  $('html,body').animate({scrollTop:target},1500);
  $(".position").animate({height:Height[position]},1250);
  $('#header .num').text(position+1);
});

var mate = {
  about:'line1',
  resume:'line2',
  skills:'line3',
  portfolio:'line4',
  contacts:'line5'
};
$('.nav-item').on('mouseover',function(){
  var target = this.id;
  document.getElementById(mate[target]).style.animation="line 0.75s ease-in-out 1 forwards";
})

$('.nav-item').on('mouseout',function(){
  var target = this.id;
  document.getElementById(mate[target]).style.animation="line2 0.75s ease-in-out 1 forwards";
})

$(document).ready(function(){

  

  $('#Carousel').slick({
    arrows:false,
    slidesToShow: 6,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 4000,
    speed:1100,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
  $('#Portfolio .left_two_container').slick({
    arrows:false,
    dot: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed:1500,
    adaptiveHeight:true,
    vertical:true,
    verticalSwiping:true,
    draggable:false,
    pauseOnFocus:false,
    pauseOnHover:false,
  });

  $('#Portfolio .right_one_container').slick({
    arrows:false,
    dot: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    adaptiveHeight:true,
    speed:1500,
    vertical:true,
    verticalSwiping:true,
    draggable:false,
    pauseOnFocus:false,
    pauseOnHover:false,
  });

  $('#Portfolio .right_two_container').slick({
    arrows:false,
    dot: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    adaptiveHeight:true,
    speed:1500,
    vertical:true,
    verticalSwiping:true,
    draggable:false,
    pauseOnFocus:false,
    pauseOnHover:false,
  }); 



  var aText = {
    aText:'0s',
    aText1:'0.3s',
    aText2:'0.6s',
    aText3:'0.9s',
    aText4:'1.2s',
    aText5:'1.5s',
    aText6:'1.8s',
    aText7:'2.1s',
    aText8:'2.1s',
    aText9:'2.4s',
    aText10:'2.7s',
    aText11:'2.7s',
    aText12:'3s',
    aText13:'3.3s',
    aText14:'3.3s',
    aText15:'3.6s',
    aText16:'3.9s',
    aText17:'4.2s'
  }
  for(var p in aText){
  document.getElementById(p).style.animation="aText 0.5s linear 1 "+aText[p]+" forwards"
  }
  $('#main_img1').css({
    'animation':'scale 5.5s ease-out 1 forwards'
  })
  $('#item_ed').siblings('span').css({'display':'none'});
  $('#ed_text').siblings('div').css({'display':'none'});
  
  $('.position').css('height','40');

  $('#header .num').text('1');

})
// 向下按鈕
$('.scrollDown').on('click',function(){
  var target_top = $('#About').offset().top;
  position = 1;
  $('html,body').animate({scrollTop:target_top},1500);
  $(".position").animate({height:Height[position]},1500)
  $('#header .num').text(position+1);
})

var mainImg={
point1:'#main_img2',
point2:'#main_img1'
}

var mainImg2={
point1:'#main_img1',
point2:'#main_img2'
}

$('.controlPoint').on('click',function(e){
  var target = e.target;
  var img = target.id; 
  $(target).css({'animation':'opacity 0.5s linear 1 forwards'});
  $(target).siblings().css({'animation':'opacity2 0.5s linear 1 forwards'});
  $(mainImg[img]).css({'animation':'opacity3 3s linear 1 forwards','z-index':'-1'});
  $(mainImg2[img]).css({'animation':'opacity4 3s ease-out 1 forwards','z-index':'0'})
  
})

window.addEventListener('scroll',function(){
  var y = this.scrollY;
  // console.log(y);

  
  if(y >= 90){
    $('.img_line').css({'animation':'line 2s ease 1 forwards'})
    $('.left_img').css({
      'animation':'scale2 5.5s ease-out 1 forwards'
    })
  }

  if(y >= 940){
    $('#Resume .img').css({'animation':'opacity3 5.5s ease-out 1 forwards'})
  }

  if(y >= 1958){
    $('#Portfolio .left_one').css({
      'animation':'scale 5.5s ease-out 1 forwards'
    })
  }

  

  
})


$('.sort').on('click',function(e){
  let item ={
    Education:['item_ed','ed_text'],
    WorkExperience:['item_wo','wo_text'],
    PersonalDevelopment:['item_pe','pe_text']
  }
  let target = e.target;
  let id = target.id;
  // console.log(id);
  $('#'+item[id][0]).siblings('span').css({'animation':'opacity5 0.75s ease-out 1 forwards'});
  $('#'+item[id][1]).siblings('div').css({'animation':'opacity5 0.75s ease-out 1 forwards'});
  setTimeout(function(){
    $('#'+item[id][0]).siblings('span').css({'display':'none'});
    $('#'+item[id][1]).siblings('div').css({'display':'none'});
  },750);
  setTimeout(function(){
    $('#'+item[id][0]).css({'animation':'opacity6 0.75s ease-out 1 forwards','display':'inline'});
    $('#'+item[id][1]).css({'animation':'opacity6 0.75s ease-out 1 forwards','display':'block'});
  },750);

})
