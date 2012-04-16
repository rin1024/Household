<?php
class MainController extends AppController {
  var $name = 'Main';
  var $uses = array('MasterCategory', 'InfoCategory', 'Record', 'User', 'Vouncer');
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
    // 担当一覧
    $vouncer_list = $this->Vouncer->find(
      'all',
      array(
        'conditions' => array('User.id' => 1)
      )
    );

    // 大カテゴリ
    $master_category_list = $this->MasterCategory->find(
      'all',
      array(
        'conditions' => array('MasterCategory.user_id' => 1)
      )
    );

    // 詳細カテゴリ
    $info_category_list = $this->InfoCategory->find(
      'all',
      array(
        'conditions' => array('InfoCategory.user_id' => 1)
      )
    );

    $this->set('vouncer_list', $vouncer_list);
    $this->set('master_category_list', $master_category_list);
    $this->set('info_category_list', $info_category_list);
/*
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
*/
  }
}
?>
