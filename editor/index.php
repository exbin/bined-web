<?php global $prefix, $submenu_editor;
$prefix = '..';
$submenu_editor =
'<ul><li><a href="?download">Download</a></li>
<li><a href="?manual">Manual</a></li>
<li><a class="urlextern" href="https://github.com/exbin/bined/issues/new?labels=bug">Report Bug</a</li>
<li><a class="urlextern" href="https://github.com/exbin/bined/issues/new?labels=enhancement">Request Feature</a></li></ul>';

include('../header.php');
$query = getenv('QUERY_STRING');
if (empty($query)) {
  $include = 'pages/main.php';
} else {
  $target = 'pages/'.$query.'.php';
  if (!(preg_match("/[a-z\/\_\-]+/", $query) === false) && file_exists($target)) {
    $include = $target;
  } else {
    $include = 'pages/not-found.php';
  }
}

include $include;

include '../refer.php';
?>