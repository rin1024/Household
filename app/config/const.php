<?php
/**
 * 定数を定義するファイル
 * bootstrap.phpでファイル名を設定できます
 */
include('/etc/httpd/virtualhost.d/household.php');
/*
// ローカル開発環境
if ($_SERVER['HTTP_HOST'] === 'household.sorauta.net') {
  ini_set('display_errors', 'On');

  define('DB_HOST', 'localhost');
  define('DB_LOGIN', 'dev');
  define('DB_PASSWORD', 'test');
  define('DB_NAME', 'household');
  define('VIEW_CACHE_TIME', null);
  define('LOG_ERROR', 2);

  Configure::write('debug', 2);
}
// 本番環境
else if ($_SERVER['HTTP_HOST'] === 'hogehoge') {
  ini_set('display_errors', 'Off');

  define('DB_HOST', 'localhost');
  define('DB_LOGIN', 'dev');
  define('DB_PASSWORD', 'test');
  define('DB_NAME', 'household');
  define('VIEW_CACHE_TIME', '+24 hours');
  define('LOG_ERROR', 2);

  Configure::write('debug', 0);
}
 */
?>
