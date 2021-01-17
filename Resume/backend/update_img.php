<?php
$table=$_GET['table'];
$id=$_GET['id'];
?>
<div class="add_img_con container rounded border shadow-sm col-3 h-50 mt-3 p-0">
  <div class="add_img bg-dark rounded-top text-white text-center h2 p-3">圖片更新</div>

  <form class="p-3" action="./api/upload.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <div class="mb-3">
          <div class="text-center">
            <label for="formFile" class="form-label h4">請選擇要上傳的圖片檔案</label>
          </div>
          <input class="form-control" type="file" id="formFile" name="img">
        </div>
      </tr>
    </table>
    <div class="text-center">
      <input type="hidden" name="table" value="<?=$table;?>">
      <input type="hidden" name="id" value="<?=$id;?>">
      <input class="btn btn-primary" type="submit" value="更新">
      <input class="btn btn-danger" type="reset" value="重置">
    </div>
  </form>
</div>