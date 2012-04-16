<?php
class TestsController extends AppController {
  var $uses = array(
    'BoothManager',
    'BoothMst',
    'BulletinMst',
    'CardMst');
  var $name = 'Tests';
  var $components = array('Editor', 'Qdmail');
  var $manageOK = false;
  /** 
   * コントローラ実行前の処理
   */
  function beforeFilter() {
  }
  /**
   *
   */
  function index() {
    // $this->cakeError('SystemError', array(array('message' => '存在しないチャットです')));
    // $this->redirect("/chats/join?booth_id={$_REQUEST['booth_id']}");
    
    // Ajaxのページの場合，
    // Configure::write('debug', 0);
    // を記述したほうがいい(何でか覚えてない)
  }
?>
