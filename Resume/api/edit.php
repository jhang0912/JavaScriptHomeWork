<?php
include_once "../base.php";

$table=$_POST['table'];/*判斷資料從哪個頁面傳過來*/
$db=new DB($table);/*登入該資料表 */

foreach($_POST['id'] as $key => $id){
  if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
    $db->del($id);
  }else{
    $data=$db->find($id);


    switch($table){
      case "Resume_about":
        $data['name']=$_POST['name'][$key];
        $data['en_name']=$_POST['en_name'][$key];
        $data['gender']=$_POST['gender'][$key];
        $data['age']=$_POST['age'][$key];
        $data['email']=$_POST['email'][$key];
        $data['city']=$_POST['city'][$key];
        $data['facebook']=$_POST['facebook'][$key];
        $data['github']=$_POST['github'][$key];
        $data['artstation']=$_POST['artstation'][$key];
        $data['display']=(in_array($id,$_POST['display']))?1:0;
      case "Resume_Introduction":

        break;
      case "Resume_resume":

        break;
      case "Resume_portfolio":

        break;
        default:

        break;
    }
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    $db->save($data);
  }
}

to("../admin_jhang_128699083.php?do=$table");