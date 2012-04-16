


<!--[if IE]>
  <script type="text/javascript" src="/js/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="/js/plugins/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="/js/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="/js/plugins/jqplot.cursor.min.js"></script>

<p style="background-image : url(bg.gif); font-size : 16pt; padding : 10px 5px; text-align : center; color : white;">
  棒グラフ＆横軸のカテゴリ化＆カーソル表示
</p>
<div id="jq" style="width : 500px; height : 500px;">
</div>



<hr />

<link rel="stylesheet" type="text/css" href="/css/datePicker.css" />
<script type="text/javascript" src="/js/date.js"></script>
<!--[if IE]>
  <script type="text/javascript" src="/js/jquery.bgiframe.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/js/jquery.datePicker.js"></script>

<h2>なんだか色々指定</h2>

<form action="/graph" method="get">
  <label>Date</label>
  <input name="start" id="start-date" class="date-pick" />
  <input name="end" id="end-date" class="date-pick" />
  <br /><br />

  <label>Category Id</label>
  <select name="category_id">
  <option value="">--</option>
  <?foreach($masterCategories as $category_id => $category_name):?>
    <option value="<?=$category_id?>"><?=$category_name?></option>
  <?endforeach;?>
  </select>
  <br /><br />

  <label>Send</label>
  <input type="submit" value="exec" />
  <br /><br />
</form>

<?php
$sum_by_categories = array();
foreach (array_keys($masterCategories) as $category_id) {
  $sum_by_categories[$category_id] = isset($records[$category_id]) ? array_sum($records[$category_id]) : 0;
}
//var_dump($records);
//var_dump($sum_by_categories);
//var_dump($categories);
?>

<script type="text/javascript">
$(document).ready(function() {
  // グラフ
  var sum_by_categories = [
    <?=(join(",", array_values($sum_by_categories)))?>
    ];
  var categories = [
    <?=("'". join("','", array_values($categories)). "'")?>
    ];
  $.jqplot('jq', [ sum_by_categories ], {
    axes: {
      xaxis: {
        // categoriesの値を横軸のラベルに表示
        ticks: categories,
          renderer: $.jqplot.CategoryAxisRenderer

      },
      yaxis: {
        // 縦軸の目盛をmin～maxのtickInterval刻みにする
        min: 0,
          max: 20000,
          tickInterval: 10,
          numberTicks: 20
      }
    },
      seriesDefaults: {
        // 棒グラフを表示
        renderer: $.jqplot.BarRenderer
      },
      cursor: {
        // カーソル位置を北西（左上）に表示
        tooltipLocation: 'nw'
      }
  });

  // データピッカー
  $('.date-pick').datePicker({
    // 開始日時
    startDate:'1996-01-01',
    // テキストボックスクリックでカレンダーの選択を開始するか
    clickInput:true
  });

  $('#start-date').bind(
    'dpClosed',
    function(e, selectedDates)
    {
      var d = selectedDates[0];
      if (d) {
        d = new Date(d);
        $('#end-date').dpSetStartDate(d.addDays(1).asString());
      }
    }
  );
  $('#end-date').bind(
    'dpClosed',
    function(e, selectedDates)
    {
      var d = selectedDates[0];
      if (d) {
        d = new Date(d);
        $('#start-date').dpSetEndDate(d.addDays(-1).asString());
      }
    }
  );
});
</script>

