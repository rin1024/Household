<?php
// ブースの管理者達
class Test extends AppModel {
  var $name = 'Test';
  var $validate = array(
    'booth_id' => array('numeric'),
    'user_id' => array('numeric'),
    'rank' => array('numeric'),
  );
  /*var $hasMany = array(
    'Users' => array(
      'className' => 'ChatUser',
      'foreignKey' => 'chat_id',
      'dependent' => true,
      'limit' => '',
      'offset' => '100',
      'exclusive' => false,
    ),
  );*/
  var $joinAliases = array();

  /**
   * 検索前処理
   */
  function beforeFind(&$queryData) {
    $queryData["joins"] = array();
    $queryData["fields"] = '
      `BoothManager`.`id`, 
      `BoothManager`.`booth_id`, 
      `BoothManager`.`user_id`, 
      `BoothManager`.`rank`';

    // 内部結合した検索を行う場合
    foreach ($this->joinAliases AS $alias) {
      if ($alias === 'BoothMst') {
        $queryData['fields'] .= ', 
          `BoothMst`.`id`, 
          `BoothMst`.`messe_id`, 
          `BoothMst`.`plan_id`, 
          `BoothMst`.`boothname`, 
          `BoothMst`.`viewpoint`, 
          `BoothMst`.`summary`, 
          `BoothMst`.`content`, 
          `BoothMst`.`header_image`, 
          `BoothMst`.`banner_image`, 
          `BoothMst`.`category_list` 
          ';
        $queryData["joins"][] = array(
          'type' => 'INNER',
          'alias' => 'BoothMst',
          'table' => 'booth_msts',
          'conditions' => '`BoothMst`.`id` = `BoothManager`.`booth_id`',
        );
      }
    }
    $this->joinAliases = array();

    return true;
  }

  // 指定のブースの全管理者取得
  // UserMstと一緒に取得
  function findAllWithUserMstbyBoothId($booth_id = null) {
    $this->joinAliases = array('UserMst');
    return $this->find('all', array(
      'conditions' => array(
        'booth_id' => $booth_id,
        'UserMst.disable' => 0),
      'group' => array('user_id')));
?>

