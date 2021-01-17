<div class="edit_about container-fluid  p-0 table-responsive">
  <form method="post" action="./api/edit.php" enctype="multipart/form-data">
    <table class="table">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col" class="start text-center">求學經歷</th>
          <th scope="col" class="text-center">顯示</th>
          <th scope="col" class="end text-center">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
      $education=$Education->all();
      $table=$_GET['do'];
      foreach($education as $key => $value){
      ?>
        <tr>
          <td class="text-center align-middle">
            <textarea name="text[]" cols="100" rows="5"><?=$value['text'];?></textarea>
          </td>
          
          <td class="text-center align-middle">
            <input class="form-check-input" type="radio" name="display[]" value="<?=$value['id']?>"
              <?=($value['display']==1)?'checked':''?>>
          </td>
          <td class="text-center align-middle">
            <input class="form-check-input" type="checkbox" name="del[]" value="<?=$value['id']?>">
            <!-- 隱藏欄位 -->
            <input type="hidden" name="id[]" value="<?=$value['id']?>">
            <input type="hidden" name="table" value="<?=$table?>">
          </td>
        </tr>
        <?php
      }
      ?>
      </tbody>
    </table>
    <table class="table table-borderless">
      <tr>
        <td class="text-center align-middle">
          <input type="submit" class="btn btn-primary" value="修改">
          <input type="reset" class="btn btn-danger" value="重置">
        </td>
      </tr>
    </table>
  </form>
</div>

<div class="add_about container-fluid mb-3 p-0 table-responsive shadow-sm" style="width: 42%;">
  <h3 class="text-center text-white bg-dark rounded-top mb-0 p-2 border-bottom">新增『EDUCATION』資料</h3>
  <form action="./api/add.php" method="post">
    <table class="table m-0">
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">求學經歷 :</td>
        <td class="text-center align-middle">
          <textarea name="text" cols="80" rows="10" required></textarea>
          <input type="hidden" name="table" value="<?=$table?>">
        </td>
      </tr>
      <tr>
        <td class="text-center" colspan="2">
          <input type="submit" class="btn btn-primary" value="新增">
          <input type="reset" class="btn btn-danger" value="重置">
        </td>
      </tr>
    </table>
  </form>
</div>