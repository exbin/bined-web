<?php
// Store referer
$referer = $_SERVER['HTTP_REFERER'];
$component = "";

function startsWith($text, $match) {
    return substr($text, 0, strlen($match)) === $match;
}

$query = str_replace('..','',$_SERVER['QUERY_STRING']);
$component = ':' . $query;
// if (startsWith($query,'org-exbin-deltahex-netbeans')) {
//     $component = "-netbeans";
// } else if (startsWith($query,'deltahex-java')) {
//     $component = "-example";
// }

file_put_contents("/var/www/html/deltahex/download/referer.html", date("Y-m-d H:i:s").$component.": ".$_SERVER['REMOTE_ADDR']." ".$referer."<br/>\n", FILE_APPEND);

header('Location: download/' . $query);
exit();
?>
