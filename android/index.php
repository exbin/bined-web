<?php global $prefix, $submenu_android;
$prefix = '..';
$submenu_android = '<ul><li><a class="urldecor" style="background-image: url(\''.@$parentPrefix.'../images/menu/help-contents-2.png\');" href="?p=manual"><del>Manual</del></a></li>
<li><a class="urlextern" href="https://github.com/exbin/bined-android/issues/new?labels=bug">Report Bug</a></li>
<li><a class="urlextern" href="https://github.com/exbin/bined-android/issues/new?labels=enhancement">Request Feature</a></li>
<li><a class="urldecor" href="?p=privacy_policy">Privacy Policy</a></li></ul>';
$childIndex = 'android';
$query = @$_GET['p'];
if (empty($query)) {
  $query = @getenv('QUERY_STRING');
  $paramEndPos = strpos($query, '&');
  $valuePos = strpos($query, '=');
  if (!empty($query) && ($paramEndPos == null || ($paramEndPos > 0 && ($valuePos == null || $valuePos > $paramEndPos)))) {
    header('Location: ?p='.$query);
    exit();
  } else {
    $include = 'pages/main.php';
  }
} else {
  $target = 'pages/'.$query.'.php';
  if (!(preg_match("/^[a-z\_\-]+$/", $query) === false) && file_exists($target)) {
    $include = $target;
  } else {
  	http_response_code(404);
    $include = 'pages/not-found.php';
  }
}

include('../header.php');
include $include;

include '../refer.php';
?>