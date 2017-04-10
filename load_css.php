<!-- CSSの読み込み -->

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="header.css">

<!-- URIで判定する -->
<!-- http://nexseed.net/20170213_Basic/dev_sample/view.php
http://ドメイン名/パス
パス部分のみ = URI
URIのファイル名部分を取得して、ページごとで処理をわける -->
<?php
if (empty($_SERVER['HTTPS'])) {
    echo 'http://';
} else {
    echo 'https://';
}
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['REQUEST_URI'];
echo '<br>';
// URIの最後にあるファイル名のみ取得
$uri_arr = explode('/', $_SERVER['REQUEST_URI']);
echo '<pre>';
var_dump($uri_arr);
echo '</pre>';
$last = end($uri_arr);
echo $last;
echo '<br>';

// パラメータが存在する場合
$file_name = explode('?', $last);
$file_name = $file_name[0];
echo $file_name;
echo '<br>';
// どこででも使用できるよう関数化
?>

<?php if($file_name == 'index.php'): ?>
  ほげ<br>
  <link rel="stylesheet" type="text/css" href="top.css">
<?php endif; ?>






