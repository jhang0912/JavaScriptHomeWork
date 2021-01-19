<?php
include_once "../base.php";

echo $table=$_POST['table'];/*判斷資料從哪個頁面傳過來*/
$db=new DB($table);/*登入該資料表 */
$data=$db->find($_POST['id']);


if($table=='Resume_skills'){
  if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../icon/".$filename);
    $data['img']=$filename;
  }
}else{
  if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);
    $data['img']=$filename;
  }
}



echo "<pre>";
print_r($data);
echo "</pre>";



$db->save($data);

to("../admin_jhang_128699083.php?do=$table");
