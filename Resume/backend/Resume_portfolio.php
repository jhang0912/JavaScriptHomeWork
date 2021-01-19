<div class="container-fluid rounded-top bg-dark text-white text-center h3 mb-3 p-2">Portfolio</div>
<div class="edit_about container-fluid  p-0 table-responsive">
  <form method="post" action="./api/edit.php" enctype="multipart/form-data">
    <table class="table">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col" class="start text-center">作品名稱</th>
          <th scope="col" class="text-center">簡介</th>
          <th scope="col" class="text-center">連結</th>
          <th scope="col" class="text-center">預覽圖片</th>
          <th scope="col" class="text-center">顯示順序</th>
          <th scope="col" class="end text-center">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
      $portfolio=$Portfolio->all();
      $table=$_GET['do'];
      foreach($portfolio as $key => $value){
      ?>
        <tr>
          <td class="text-center align-middle"><input type="text" name="name[]" value="<?=$value['name']?>"></td>
          <td class="text-center align-middle">
            <textarea name="text[]" cols="40" rows="5"><?=$value['text']?></textarea>
          </td>
          <td class="text-center align-middle"><input type="text" name="href[]" class="w-100" value="<?=$value['href']?>">
          </td>
          <td class="text-center align-middle">
            <img src="./img/<?=$value['img']?>" class="rounded" style="width:160px; height:90px;">
            <div>
              <a href="?do=update_img&table=<?=$table?>&id=<?=$value['id']?>">
                <button type="button" class="btn btn-outline-dark btn-sm mt-2">更新圖片</button>
              </a>
            </div>
          </td>
          <td class="text-center align-middle">
            <input type="number" min="0" max="6" class="" name="display[]" value="<?=$value['display']?>">
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

<div class="add_about container-fluid mb-3 p-0 table-responsive shadow-sm" style="width: 30%;">
  <h3 class="text-center text-white bg-dark rounded-top mb-0 p-2 border-bottom">新增『PORTFOLIO』資料</h3>
  <form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="table m-0">
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">作品名稱 :</td>
        <td class="text-start align-middle">
          <input type="text" name="name" class="w-75" required>
          <span class="form-text">※必填</span>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">連&ensp;&ensp;&ensp;&ensp;結 :</td>
        <td class="text-start align-middle">
          <input type="text" name="href" class="w-75" required>
          <span class="form-text">※必填</span>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">簡&ensp;&ensp;&ensp;&ensp;介 :</td>
        <td class="text-start align-middle">
          <textarea name="text" cols="40" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">預覽圖片 :</td>
        <td class="text-center align-middle">
          <input type="file" class="form-control" name="img">
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