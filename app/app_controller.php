<?php
/**
 * 基盤コントローラクラス
 */
class AppController extends Controller {
  // 使用するヘルパークラス一覧
  var $helpers = array('Html', 'Form', 'Session', 'SorautaUtil', 'Cache');
  // キャッシュ時間
  var $cacheAction = VIEW_CACHE_TIME;
  // 都道府県一覧
  var $prefectureList = array(
    "都道府県",
    "北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県",
    "茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県",
    "新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県","静岡県","愛知県",
    "三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県",
    "鳥取県","島根県","岡山県","広島県","山口県",
    "徳島県","香川県","愛媛県","高知県",
    "福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");
  // ログイン中のユーザの情報
  var $loginData = null;
  // ログイン後リダイレクトすべきページ一覧
  var $redirectPageListAfterLogin = array(
    'mains', 'topics', 'users', 'reminder', 'ajaxs');
  // ページ名一覧
  var $page_name_list = array(
    /*'main' => array(
      'index' => '開催概要',
    ),*/
  );
  // ページタイトル
  var $page_title = '家計簿';
  // キーワード
  var $keywords = '家計簿';
  // 説明
  var $description = '家計簿支援';
  /**
   * コントローラ実行前の処理
   */
  function beforeFilter() {
    // 文字列のデコード
    $this->_decode(&$this->params);

    //$this->getLoginUser();
  }
  /**
   * ビュー表示前の処理
   */
  function beforeRender() {
    // 現在のページタイトル
    $page_title = $this->page_title . ' - ' . ucfirst($this->params['controller']) . ' / ' . ucfirst($this->params['action']);

    // 現在のページ名
    $page_name = '';
    /*if (!empty($this->page_name_list[$this->params['controller']][$this->params['action']])) {
      $page_name = $this->page_name_list[$this->params['controller']][$this->params['action']];
    }*/

    // 選択中のページ(メニュー)
    $selected_menu = array(
      'main' => null,
    );
    /*if ($this->params['controller'] !== 'info' || ($this->params['controller'] === 'info' && $this->params['action'] === 'join')) {
      $selected_menu[$this->params['controller']] = '_f';
    }*/

    $this->set('title_for_layout', $page_title);
    $this->set('keywords', $this->keywords);
    $this->set('description', $this->description);
    $this->set('page_name', $page_name);
    $this->set('selected_menu', $selected_menu);
  }
  /**
   * 文字列のデコード
   */
  function _decode($lists = array()) {
    foreach (array_keys($lists) as $list_key) {
      if (is_array($lists[$list_key])) {
        $this->_decode(&$lists[$list_key]);
      }
      else {
        $lists[$list_key] = htmlspecialchars(
          $lists[$list_key],
          ENT_QUOTES);
        //$lists[$list_key] = preg_replace(
        //  "/[\r\n]/",
        //  "<br />",
        //  $lists[$list_key]);
      }
    }
  }
  /**
   * セッションが生きてるか？
   * ログイン必須のページでは，beforeFilterに必ず記述してください
   */
  function checkSession() {/*
    if (!$this->Session->check('LoginID')) {
      // ログイン後リダイレクトすべきか？
      $isRedirectPage = preg_grep(
        "/^{$this->viewPath}$/",
        $this->redirectPageListAfterLogin);

      if ($isRedirectPage > 0) {
        $uri = urlencode($_SERVER['REQUEST_URI']);
        $this->redirect("/mypages/login?redirect_uri={$uri}");
      }
      else {
        $this->redirect("/mypages/login");
      }
    }
    else {
      $this->getLoginUser();
    }
  */}
  /**
   * ログインユーザの情報取得
   */
  function getLoginUser() {/*
    $this->loginData = $this->UserMst->findById(
      $this->Session->read('LoginID'));

    // ログインしていない場合，ダミーデータをセット
    if (is_null($this->loginData['UserMst'])) {
      $this->loginData['UserMst'] = array(
        'id' => 0,
        'nickname' => 'ゲスト',
        'login' => 0);
    }
    else {
      $this->loginData['UserMst']['login'] = 1;

      // 未読メッセージ数
      //$this->set('new_message_count', count($this->UserMessage->findAllByToIdAndReadFlag($this->Session->read('LoginID'), null)));
    }

    $this->set('loginData', $this->loginData);
  */}
}
?>

