<?php
include_once "../base.php";

$table=$_POST['table'];/*判斷資料從哪個頁面傳過來*/
$db=new DB($table);/*登入該資料表 */
$data=$db->find($_POST['id']);




if(!empty($_FILES['img']['tmp_name'])){/*判斷是否有上傳圖片 */
  $filename=$_FILES['img']['name'];/*把用戶端原檔案名稱放到變數中 */
  move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);/*把檔案放置在img資料夾 */
  $data['img']=$filename;
}


echo "<pre>";
print_r($data);
echo "</pre>";



$db->save($data);

to("../admin.php?do=$table");
