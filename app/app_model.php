<?php
/**
 * 基盤モデルクラス
 */
class AppModel extends Model {
  var $assocs = array();
  /**
   * コンストラクタ
   * テスト用DBを自動切り替えできるように
   * via http://pm.11op.net/2007/06/cakephp-1.php
   */
  function __construct($id = false, $table = null, $ds = null) {
    if (defined('CAKE_TEST_OUTPUT_HTML')) {
      $this->useDbConfig = 'test';
    }
    parent::__construct($id, $table, $ds);
  }
  /**
   * Keeping bindModel and unbindModel out of your controllers
   * http://bit.ly/aRyeNe
   */
  function expects($array = array()) {
    $this->unbindModelAll();
    foreach ($array as $assoc) {
      $this->bindModel(
        array(
          $this->assocs[$assoc]['type'] => array(
            $assoc => $this->assocs[$assoc])));
    }
  }
  /**
   * bindされていたmodelを全て外す
   */
  function unbindModelAll() {
    $unbind = array();
    foreach ($this->belongsTo as $model=>$info) {
      $unbind['belongsTo'][] = $model;
    }
    foreach ($this->hasOne as $model=>$info) {
      $unbind['hasOne'][] = $model;
    }
    foreach ($this->hasMany as $model=>$info) {
      $unbind['hasMany'][] = $model;
    }
    foreach ($this->hasAndBelongsToMany as $model=>$info) {
      $unbind['hasAndBelongsToMany'][] = $model;
    }
    parent::unbindModel($unbind);
  }
  /**
   * 指定したテーブルのカラム一覧を返却
   */
  function getColumnList($table_name = null) {
    $columnList = '';
    switch ($table_name) {
      case 'Test': {
        $columnList = 'Test.id, Test.loginerr';
        break;
      }
    }
    return $columnList;
  }
}
?>

