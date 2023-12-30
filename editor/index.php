<?php global $prefix, $submenu_editor;
$prefix = '..';
$submenu_editor =
'<ul><li><a class="urldecor" style="background-image: url(\''.@$parentPrefix.'../images/menu/demo.png\');" href="web/">Web Demo</a></li>
<li><a class="urldecor" style="background-image: url(\''.@$parentPrefix.'../images/menu/download.png\');" href="?download">Download</a></li>
<li><a class="urldecor" style="background-image: url(\''.@$parentPrefix.'../images/menu/help-contents-2.png\');" href="?manual">Manual</a></li>
<li><a class="urldecor" style="background-image: url(\''.@$parentPrefix.'../images/menu/plugin.png\');" href="?plugins">Plugins</a></li>
<li><a class="urlextern" href="https://github.com/exbin/bined/issues/new?labels=bug">Report Bug</a></li>
<li><a class="urlextern" href="https://github.com/exbin/bined/issues/new?labels=enhancement">Request Feature</a></li></ul>';

$childIndex = 'editor';
include('../header.php');
$query = @getenv('QUERY_STRING');
if (empty($query)) {
  $include = 'pages/main.php';
} else {
  $paramPos = strpos($query, '&');
  if ($paramPos !== false) {
    if ($paramPos > 0 && ("=" == $query[$paramPos - 1])) {
  	   $query = substr($query, 0, $paramPos - 1);
    } else {
  	   $query = substr($query, 0, $paramPos);
  	}
  } else {
  	$length = strlen($query);
  	if ($length > 0 && ("=" == $query[$length - 1])) {
  		$query = substr($query, 0, $length - 1);
  	}
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