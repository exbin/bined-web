<?php
$query = @getenv('QUERY_STRING');
if ($query == "download") {
	header("Location: editor/?download");
	die();
}

include('header.php');
if (empty($query)) {
  $include = 'pages/about.php';
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

include 'refer.php'; ?>