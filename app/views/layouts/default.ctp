<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="content-language" content="ja" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-script-type" content="text/javascript" />
  <meta http-equiv="content-style-type" content="text/css" />
  <title><?=$title_for_layout?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
  <meta name="format-detection" content="telephone=no" />
<!--
  <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" />
  <link rel="shortcut icon" href="./favicon.ico" />
-->
  <meta name="Keywords" content="<?=$keywords?>" />
  <meta name="Description" content="<?=$description?>" />
  <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/css/android.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/css/datePicker.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>
  <?php echo $scripts_for_layout;?>
</head>
<body>
  <div id="page">
    <?php echo $this->Session->flash(); ?>
    <header class="global">
      <h1><?=$title_for_layout?></h1>
      <nav>
      <ul>
        <li><a href="/records/add">Add</a></li>
        <li><a href="/records">List</a></li>
        <li><a href="/graph">Graph</a></li>
      </ul>
      </nav>
    </header>
    <section class="main">
      <?php echo $content_for_layout; ?>
    </section>
    <footer class="global">
      <p class="copyright"><small>Copyright &copy; sorauta.net. All Rights Reserved.</small></p>
    </footer>
    <?if(Configure::read('debug') === 2):?>
    <?=$this->element('sql_dump')?>
    <?endif;?>
  </div>
</body>
</html>

