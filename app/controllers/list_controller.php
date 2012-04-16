<?php
class ListController extends AppController {
  var $name = 'Main';
  var $uses = array('Category', 'Record', 'User');
  var $paginate = array(
    'limit' => 20,
    'order' => array(
      'Record.id' => 'asc'
    ),
  );
  //var $cacheAction = null;
  /**
   * トップページ
   */
  function index() {
    $conditions = array();

    // カテゴリによる絞り込み
    if (isset($this->params['url']['category_id']) && strlen($this->params['url']['category_id'])) {
      $conditions['Record.category_id'] = $this->params['url']['category_id'];
    }
    // 作成日による絞り込み
    if (isset($this->params['url']['created']) && strlen($this->params['url']['created'])) {
      $conditions['Record.created <'] = $this->params['url']['created'];
    }

    // カテゴリ一覧
    $categories = $this->Category->find(
      'list',
      array('Category,id', 'Category.name'));

    // 家計簿一覧
    // 第三引数(whitelist)は許可するurlからのパラメータ(sortとか)
    $records = $this->paginate('Record',
      $conditions);

    $this->set('categories', $categories);
    $this->set('records', $records);
  }
}
?>
