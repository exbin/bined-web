<?php global $prefix, $submenu_editor;
$prefix = '..';
$submenu_jdeveloperextension = '<ul><li><a href="?manual"><del>Manual</del></a></li></ul>';
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