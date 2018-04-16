<?php global $prefix, $submenu_editor;
$prefix = '..';
$submenu_basiceditor = '<ul><li><a href="?help">Help</a></li></ul>';
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

// Store referer
$referer = $_SERVER['HTTP_REFERER'];

$remoteAddr = $_SERVER['REMOTE_ADDR'];
$myIPs = array("94.113.220.147","77.240.177.44","77.92.221.135","89.103.110.124");
if (!in_array($remoteAddr, $myIPs)) {
  file_put_contents("/var/www/html/deltahex/referer.html", date("Y-m-d H:i:s").": ".$remoteAddr." ".$referer."<br/>\n", FILE_APPEND);
}
?>