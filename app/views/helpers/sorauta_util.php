<?php
/**
 * HouseHold?用のヘルパー
 */
class SorautaUtilHelper extends Helper {
  // 曜日一覧
  var $week_list = array('日','月','火','水','木','金','土');

  /**
   * MySQLのdatetime型で受け取った時間をYMDに変換
   */
  function parseTimeToYMD($raw_time) {
    $raw_time = strtotime($raw_time);
    return date("Y年m月d日", $raw_time)."(".$this->week_list[date("w", $raw_time)].")";
  }

  /**
   * 値がなければ--で表示
   */
  function valueCheck($value) {
    return empty($value) ? '--' : $value;
  }

  /**
   * 価格が無い場合-で表示
   */
  function price($price) {
    return empty($price) ||
      (
        !empty($price) &&
        ((int)$price <= 0 || preg_match('/\./', $price))
      ) ? '--' : number_format($price);
  }

  /**
   * リンクが存在しない場合普通のテキストで表示
   */
  function link($url, $text) {
    return empty($url) ? $text : '<a href="' . $url . '">' . $text . '</a>';
  }

  /**
   * GET引数にしたいパラメータリストからURL生成
   * add_key, add_val : paramsに追加するキーと値
   */
  function makeUrl($url, $params, $add_key = null, $add_val = null) {
    $param = '';
    if ($add_key && $add_val) {
      $params[$add_key] = $add_val;
    }
    foreach ($params as $key => $val) {
      $param .= $key . '=' . urlencode($val) . '&';
    }
    return $url . '?' . $param;
  }
}
?>
