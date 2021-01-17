<div class="about container-fluid  p-0 table-responsive">

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
            style="width: 50%; margin: 0 auto;"></td>
        <td class="text-center align-middle"><input type="text" name="en_name[]" value="<?=$value['en_name']?>"
            style="width: 75%; margin: 0 auto;"></td>
        <td class="text-center align-middle"><input type="text" name="gender[]" value="<?=$value['gender']?>"
            style="width: 50%; margin: 0 auto;"></td>
        <td class="text-center align-middle"><input type="text" name="age[]" value="<?=$value['age']?>"
            style="width: 50%; margin: 0 auto;"></td>
        <td class="text-center align-middle"><input type="text" name="email[]" value="<?=$value['email']?>">
        </td>
        <td class="text-center align-middle"><input type="text" name="city[]" value="<?=$value['city']?>"></td>
        <td class="text-center align-middle"><input type="text" name="facebook[]" value="<?=$value['facebook']?>"></td>
        <td class="text-center align-middle"><input type="text" name="github[]" value="<?=$value['github']?>">
        </td>
        <td class="text-center align-middle"><input type="text" name="artstation[]" value="<?=$value['artstation']?>">
        </td>
        <td class="text-center align-middle">
          <img src="./img/<?=$value['img']?>" class="rounded" style="width:100px; height:100px;">
          <a href="?do=update_img&table=<?=$table?>&id=<?=$value['id']?>">
            <button type="button" class="btn btn-outline-dark btn-sm mt-2">更新圖片</button>
          </a>
        </td>
        <td class="text-center align-middle">
          <input class="form-check-input" type="radio" name="display[]" value="<?=$value['id']?>"
            <?=($value['display']==1)?'checked':''?>>
        </td>
        <td class="text-center align-middle">
          <input class="form-check-input" type="checkbox" name="del[]" value="<?=$value['id']?>">
          <input type="hidden" name="id[]" value="<?=$value['id']?>">
        </td>

      </tr>
      <?php
      }
      ?>
    </tbody>

  </table>
</div>