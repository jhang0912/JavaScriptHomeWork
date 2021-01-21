<?php
include_once "../base.php";

echo $table=$_POST['table'];/*判斷資料從哪個頁面傳過來*/
$db=new DB($table);/*登入該資料表 */

foreach($_POST['id'] as $key => $id){
  if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
    $db->del($id);
  }else{
    $data=$db->find($id);

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";


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
        break;
      case "Resume_portfolio":
        $data['name']=$_POST['name'][$key];
        $data['text']=$_POST['text'][$key];
        $data['href']=$_POST['href'][$key];
        $data['display']=$_POST['display'][$key];
        break;
      case "Resume_skills":
        $data['name']=$_POST['name'][$key];
        $data['text']=$_POST['text'][$key];
        $data['display']=$_POST['display'][$key];
        break;
      case "Resume_education":
        $data['school']=$_POST['school'][$key];
        $data['text']=$_POST['text'][$key];
        $data['display']=(in_array($id,$_POST['display']))?1:0;
        break;
      case "Resume_work_experience":
        $data['company']=$_POST['company'][$key];
        $data['text']=$_POST['text'][$key];
        $data['display']=(in_array($id,$_POST['display']))?1:0;
        break;
      default:
        $data['text']=$_POST['text'][$key];
        $data['display']=(in_array($id,$_POST['display']))?1:0;
        break;
    }
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    $db->save($data);
  }
}

to("../admin.php?do=$table");