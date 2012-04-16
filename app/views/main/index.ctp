<style type="text/css">
<!--

.form_list {
  float:left;
  width:100px;
  margin-bottom:10px;
}

.clearFix {
  clear:both;
}

// -->
</style>
<h1>入力フォーム</h1>
<br />
<form action="" method="post">
  <div class="form_list">
    <h3>入力者</h3>
    <select name="user">
    <?foreach($vouncer_list as $vouncer):?>
      <option value="<?=$vouncer['Vouncer']['id']?>"><?=$vouncer['Vouncer']['name']?></option>
    <?endforeach;?>
    </select>
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>日付</h3>
    <input type="text" name="date" value="" />
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>大カテゴリ</h3>
    <select name="master_category">
    <?foreach($master_category_list as $master_category):?>
      <option value="<?=$master_category['MasterCategory']['id']?>"><?=$master_category['MasterCategory']['name']?></option>
    <?endforeach;?>
    </select>
  </div>
  <div class="form_list">
    <h3>詳細カテゴリ</h3>
    <select name="info_category">
    <?foreach($info_category_list as $info_category):?>
      <option value="<?=$info_category['InfoCategory']['id']?>"><?=$info_category['InfoCategory']['name']?></option>
    <?endforeach;?>
    </select>
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>内容</h3>
    <input type="text" name="content" value="" />
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>金額</h3>
    <input type="text" name="money" value="" />
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>カード使用</h3>
    <select name="use_card">
      <option value="0" selected="selected">未使用</option>
      <option value="1">使用</option>
    </select>
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>立替</h3>
    <select name="pay_temporary">
      <option value="0" selected="selected">通常支払</option>
      <option value="1">立替</option>
    </select>
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>勘定元帳</h3>
    <select name="recipt_journal">
      <option value="0" selected="selected">反映しない</option>
      <option value="1">反映する</option>
    </select>
  </div>
  <br class="clearFix" />

  <input type="submit" value="登録" />
  <br class="clearFix" />
</form>
<br />

