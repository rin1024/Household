<?php
class GraphController extends AppController {
  var $name = 'Graph';
  var $uses = array('MasterCategory', 'Record', 'User');

  /**
   * 指定したカテゴリの今までのグラフ表示
   */
  function index() {
   $conditions = array();

    // カテゴリによる絞り込み
    if (isset($this->params['url']['master_category_id']) && strlen($this->params['url']['master_category_id'])) {
      $conditions['Record.master_category_id'] = $this->params['url']['master_category_id'];
    }
    // 開始日を指定
    if (isset($this->params['url']['start']) && strlen($this->params['url']['start'])) {
      $conditions['Record.created >'] = $this->params['url']['start'];
    }
    // 終了日を指定
    if (isset($this->params['url']['end']) && strlen($this->params['url']['end'])) {
      $conditions['Record.created <'] = $this->params['url']['end'];
    }

    // カテゴリ一覧
    $masterCategories = $this->MasterCategory->find(
      'list',
      array('MasterCategory,id', 'MasterCategory.name'));

    // 家計簿一覧
    $records = $this->Record->find('list',
      array(
        'conditions' => $conditions,
        'fields' => array(
          'Record.id',
          'Record.price',
          'Record.master_category_id'),
      ));
    //var_dump($records);

    // 3ヶ月前
    //$date = date("Y-m-d H:i:s", mktime(0,0,0, date("m")-3, date("d"), date("Y")));

    $this->set('masterCategories', $masterCategories);
    $this->set('records', $records);
  }
}
?>
