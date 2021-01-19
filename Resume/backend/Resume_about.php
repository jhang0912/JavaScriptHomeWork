<div class="container-fluid rounded-top bg-dark text-white text-center h3 mb-3 p-2">About</div>
<div class="edit_about container-fluid  p-0 table-responsive">
  <form method="post" action="./api/edit.php" enctype="multipart/form-data">
    <table class="table">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col" class="start text-center">姓名</th>
          <th scope="col" class="text-center">英文姓名</th>
          <th scope="col" class="text-center">性別</th>
          <th scope="col" class="text-center">年齡</th>
          <th scope="col" class="text-center">電子信箱</th>
          <th scope="col" class="text-center">居住城市</th>
          <th scope="col" class="text-center">Facebook</th>
          <th scope="col" class="text-center">github</th>
          <th scope="col" class="text-center">artstation</th>
          <th scope="col" class="text-center">大頭照圖片</th>
          <th scope="col" class="text-center" style="width: 3%;">顯示</th>
          <th scope="col" class="end text-center" style="width: 4%;">刪除</th>
        </tr>
      </thead>
      <tbody>
        <?php
      $about=$About->all();
      $table=$_GET['do'];
      foreach($about as $key => $value){
      ?>
        <tr>
          <td class="text-center align-middle"><input type="text" name="name[]" value="<?=$value['name']?>"
              style="width: 75px; margin: 0 auto;"></td>
          <td class="text-center align-middle"><input type="text" name="en_name[]" value="<?=$value['en_name']?>"
              style="margin: 0 auto;"></td>
          <td class="text-center align-middle">
            <select name="gender[]" style="width: 75px;margin: 0 auto;">
              <option value="male" <?php if($value['gender']=='male'){echo 'selected';}?>>male</option>
              <option value="female" <?php if($value['gender']=='female'){echo 'selected';}?>>female</option>
            </select>
          </td>
          <td class="text-center align-middle"><input type="number" min="1" step="1" name="age[]"
              value="<?=$value['age']?>" style="width: 50px; margin: 0 auto;"></td>
          <td class="text-center align-middle"><input type="text" name="email[]" value="<?=$value['email']?>">
          </td>
          <td class="text-center align-middle"><input type="text" name="city[]" value="<?=$value['city']?>"></td>
          <td class="text-center align-middle"><input type="text" name="facebook[]" value="<?=$value['facebook']?>">
          </td>
          <td class="text-center align-middle"><input type="text" name="github[]" value="<?=$value['github']?>">
          </td>
          <td class="text-center align-middle"><input type="text" name="artstation[]" value="<?=$value['artstation']?>">
          </td>
          <td class="text-center align-middle">
            <img src="./img/<?=$value['img']?>" class="rounded" style="width:100px; height:100px;">
            <div>
              <a href="?do=update_img&table=<?=$table?>&id=<?=$value['id']?>">
                <button type="button" class="btn btn-outline-dark btn-sm mt-2">更新圖片</button>
              </a>
            </div>
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

<div class="add_about container-fluid mb-3 p-0 table-responsive shadow-sm" style="width: 30%;">
  <h3 class="text-center text-white bg-dark rounded-top mb-0 p-2 border-bottom">新增『ABOUT』資料</h3>
  <form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="table m-0">
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">姓&ensp;&ensp;&ensp;&ensp;名 :</td>
        <td class="text-start align-middle">
          <input type="text" name="name" class="w-75" required>
          <span class="form-text">※必填</span>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">英文姓名 :</td>
        <td class="text-start align-middle">
          <input type="text" name="en_name" class="w-75" required>
          <span class="form-text">※必填</span>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">性&ensp;&ensp;&ensp;&ensp;別 :</td>
        <td class="text-start align-middle">
          <select name="gender" required>
            <option value="male">male</option>
            <option value="female">female</option>
          </select>
          <span class="form-text">※必填</span>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">年&ensp;&ensp;&ensp;&ensp;齡 :</td>
        <td class="text-start align-middle">
          <input type="number" min="1" step="1" name="age" class="w-75" required>
          <span class="form-text">※必填</span>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">電子信箱 :</td>
        <td class="text-start align-middle"><input type="email" name="email" class="w-75"></td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">居住城市 :</td>
        <td class="text-start align-middle">
          <input type="text" name="city" class="w-75" required>
          <span class="form-text">※必填</span>
        </td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">Facebook :</td>
        <td class="text-start align-middle"><input type="text" name="Facebook" class="w-75"></td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">github :</td>
        <td class="text-start align-middle"><input type="text" name="github" class="w-75"></td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">artstation :</td>
        <td class="text-start align-middle"><input type="text" name="artstation" class="w-75"></td>
      </tr>
      <tr>
        <td class="text-end text-white align-middle border-end bg-dark">大頭照圖片 :</td>
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