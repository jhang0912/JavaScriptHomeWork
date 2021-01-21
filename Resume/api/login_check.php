<?php
include_once "../base.php";

if(!empty($_POST['acc']) && !empty($_POST['pass'])){
  $chk=$Admin->count(['acc'=>$_POST['acc'],'pass'=>$_POST['pass']]);
  if($chk>0){
    $_SESSION['login']=$_POST['pass'];
    to('../admin.php?do=Resume_about');
  }else{
    to('../login.php?login_error=帳號密碼輸入錯誤!!');
  }
    

}
?>