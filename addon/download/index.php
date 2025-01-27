<?php
// Store referer
$referer = @$_SERVER['HTTP_REFERER'];
$component = "";

function startsWith($text, $match) {
    return substr($text, 0, strlen($match)) === $match;
}

$query = @$_GET['f'];
if (empty($query)) {
  $query = $_SERVER['QUERY_STRING'];
}

$query = str_replace('..','',$query);
$query = str_replace('/','',$query);
$component = ':' . $query;

if (!empty($query)) {
  if ("10.145.65.49" != @$_SERVER['REMOTE_ADDR']) {
    file_put_contents("/var/www/html/bined/addon/download/referer.html", date("Y-m-d H:i:s").htmlentities($component).": ".$_SERVER['REMOTE_ADDR']." ".htmlentities($referer)."<br/>\n", FILE_APPEND);
  }
  header('Location: ' . $query);
  exit();
}
?>