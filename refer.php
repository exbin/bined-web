<?php
// Store referer
$referer = $_SERVER['HTTP_REFERER'];

$remoteAddr = $_SERVER['REMOTE_ADDR'];
$myIPs = array("94.113.220.147","77.240.177.44","77.92.221.135","78.45.129.186","213.175.41.130"/*work*/);
if (!in_array($remoteAddr, $myIPs)) {
  file_put_contents("/var/www/html/bined/referer.html", date("Y-m-d H:i:s").": ".$remoteAddr." ".$referer."<br/>\n", FILE_APPEND);
}
?>