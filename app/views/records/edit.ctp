<style type="text/css">
<!--

#RecordEditForm .form_list {
  float:left;
  margin-right: 30px;
  margin-bottom:10px;
}

#RecordEditForm #master_category, #RecordEditForm #use_credit_card {
  width: 120px;
}

#RecordEditForm #description {
  width: 250px;
}

#RecordEditForm #price input {
  width: 100px;
}

.clearFix {
  clear:both;
}

// -->
</style>
<script src="/js/jquery.datePicker.js" type="text/javascript"></script>
<link title="default" href="/css/datePicker.css" type="text/css" rel="stylesheet">
<h1>入力フォーム</h1>
<br />
<?php echo $this->Form->create('Record');?>
  <input type="hidden" name="_method" value="POST" />
  <input type="hidden" name="data[Record][user_id]" value="1" />
  <div class="form_list">
    <h3>使った人</h3>
    <?=$this->Form->input('vouncer_id', array('label' => false));?>
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>日付</h3>
    <input type="text" id="recordDate" name="data[Record][date]" value="<?=$this->data['Record']['date']?>" />
  </div>
  <br class="clearFix" />

  <div id="master_category" class="form_list">
    <h3>大カテゴリ</h3>
    <?=$this->Form->input('master_category_id', array('label' => false));?>
  </div>
  <div id="info_category" class="form_list">
    <h3>詳細カテゴリ</h3>
    <?=$this->Form->input('info_category_id', array('label' => false));?>
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>内容</h3>
    <?=$this->Form->input('description', array('label' => false));?>
  </div>
  <br class="clearFix" />

  <div id="price" class="form_list">
    <h3>金額</h3>
    <?=$this->Form->input('price', array('label' => false));?>
  </div>
  <br class="clearFix" />

  <div id="use_credit_card" class="form_list">
    <h3>カード使用</h3>
    <select name="data[Record][use_credit_card]">
      <option value="0" selected="selected">未使用</option>
      <option value="1">使用</option>
    </select>
  </div>
  <div class="form_list">
    <h3>立替</h3>
    <select name="data[Record][pay_temporary]">
      <option value="0" selected="selected">通常支払</option>
      <option value="1">立替</option>
    </select>
  </div>
  <br class="clearFix" />

  <div class="form_list">
    <h3>勘定元帳(現金出納帳)</h3>
    <select name="data[Record][add_cash_payment_journal]">
      <option value="0" selected="selected">反映しない</option>
      <option value="1">反映する</option>
    </select>
  </div>
  <div class="form_list">
    <h3>勘定元帳(通帳出納帳)</h3>
    <select name="data[Record][add_bank_payment_journal]">
      <option value="0" selected="selected">反映しない</option>
      <option value="1">反映する</option>
    </select>
  </div>
  <br class="clearFix" />

<?php echo $this->Form->end(__('登録', true));?>
<br class="clearFix" />

<script type="text/javascript">
jQuery(function($){
  $.datepicker.regional['ja'] = {
        clearText: '',
        clearStatus: '',
        closeText: '閉じる',
        closeStatus: '',
        prevText: '<前月', prevStatus: '',
        nextText: '次月>', nextStatus: '',
        currentText: '今日', currentStatus: '',
        monthNames: ['1月','2月','3月','4月','5月','6月',
        '7月','8月','9月','10月','11月','12月'],
        monthNamesShort: ['1月','2月','3月','4月','5月','6月',
        '7月','8月','9月','10月','11月','12月'],
        monthStatus: '', yearStatus: '',
        weekHeader: 'Wk', weekStatus: '',
        dayNames: ['日','月','火','水','木','金','土'],
        dayNamesShort: ['日','月','火','水','木','金','土'],
        dayNamesMin: ['日','月','火','水','木','金','土'],
        dayStatus: 'DD', dateStatus: 'D, M d',
        dateFormat: 'yy-mm-dd', firstDay: 0,
        initStatus: '',
        isRTL: false
    };
    $.datepicker.setDefaults($.datepicker.regional['ja']);

    $.datepicker.setDefaults({
        showOn: 'button',
        buttonImageOnly: true,
        buttonImage: '/img/calendar.gif',
        buttonText: 'Calendar',
        showAnim: 'slideDown',
        speed: 'fast'
    });

    $("#recordDate").datepicker();
    $("#recordDate").focus(function(){ $(".datepicker_trigger").click(); $(this).blur(); return false; }); // can't focus this text box
});
</script>

