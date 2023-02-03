<?php global $prefix;
$prefix = '..';
$submenu_jdeveloperextension = '<ul><li><a class="urldecor" style="background-image: url(\''.$parentPrefix.'../images/menu/help-contents-2.png\');" href="?manual"><del>Manual</del></a></li></ul>';
$childIndex = 'jdeveloper-extension';
include('../header.php');
$query = getenv('QUERY_STRING');
if (empty($query)) {
  $include = 'pages/main.php';
} else {
  $target = 'pages/'.$query.'.php';
  if (!(preg_match("/[a-z\/\_\-]+/", $query) === false) && file_exists($target)) {
    $include = $target;
  } else {
  	http_response_code(404);
    $include = 'pages/not-found.php';
  }
}

include $include;

include '../refer.php';
?>