// 読み込み後アドレスバー非表示
function doScroll() { if (window.pageYOffset === 0) { window.scrollTo(0,1); } }
window.onload = function() { setTimeout(doScroll, 100); }

// UA判定 Android振り分け
function is_mobile () {
  var useragents = [
    'Android',        // 1.5+ Android
    'dream',          // Pre 1.5 Android
    'CUPCAKE'        // 1.5+ Android
    ];
  var pattern = new RegExp(useragents.join('|'), 'i');
  return pattern.test(navigator.userAgent);
}
if (is_mobile()) {
  var link = document.createElement('link');
  link.rel = 'stylesheet';
  link.type = 'text/css';
  link.href = './css/android.css';
  document.getElementsByTagName('head')[0].appendChild(link);
}

