<?php
include_once "../base.php";

$table=$_POST['table'];/*判斷資料從哪個頁面傳過來*/
$db=new DB($table);/*登入該資料表 */
$data=[];/* 放置要上傳資料的空陣列 */


if(!empty($_FILES['img']['tmp_name'])){/*判斷是否有上傳圖片 */
  $filename=$_FILES['img']['name'];/*把用戶端原檔案名稱放到變數中 */
  move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);/*把檔案放置在img資料夾 */
  $data['img']=$filename;
}


switch($table){
  case "Resume_about":
    $data['name']=$_POST['name'];
    $data['en_name']=$_POST['en_name'];
    $data['gender']=$_POST['gender'];
    $data['age']=$_POST['age'];
    $data['email']=$_POST['email'];
    $data['city']=$_POST['city'];
    $data['facebook']=$_POST['facebook'];
    $data['github']=$_POST['github'];
    $data['artstation']=$_POST['artstation'];
    break;
  case "Resume_education":
    $data['school']=$_POST['school'];
    $data['text']=$_POST['text'];
    break;
  case "Resume_work_experience":
    $data['company']=$_POST['company'];
    $data['text']=$_POST['text'];
    break;
  case "Resume_portfolio":
    $data['name']=$_POST['name'];
    $data['text']=$_POST['text'];
    $data['href']=$_POST['href'];
    break;
  default:
    $data['text']=$_POST['text'];
    break;
}

echo "<pre>";
print_r($data);
echo "</pre>";


$db->save($data);
to("../admin_jhang_128699083.php?do=$table");