<?php global $prefix, $submenu_editor;
$prefix = '..';
$submenu_bluejextension = '<ul><li><a class="urldecor" style="background-image: url(\''.@$parentPrefix.'../images/menu/help-contents-2.png\');" href="?manual">Manual</a></li></ul>';
$childIndex = 'bluej-extension';
include('../header.php');
$query = getenv('QUERY_STRING');
if (empty($query)) {
  $include = 'pages/main.php';
} else {
  $length = strlen($query);
  if ($length > 0 && ("=" == $query[$length - 1])) {
  	  $query = substr($query, 0, $length - 1);
  }

  $target = 'pages/'.$query.'.php';
  if (!(preg_match("/^[a-z\_\-]+$/", $query) === false) && file_exists($target)) {
    $include = $target;
  } else {
  	http_response_code(404);
    $include = 'pages/not-found.php';
  }
}

include $include;

include '../refer.php';
?>