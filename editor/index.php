<?php global $prefix, $submenu_editor;
$prefix = '..';
$submenu_editor =
'<ul><li><a href="?download">Download</a></li>
<li><a href="?help"><strike>Help</strike></a></li>
<li><a href="?report-bug"><strike>Report Bug</strike></a></li>
<li><a href="?request-feature"><strike>Request Feature</strike></a></li></ul>';

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