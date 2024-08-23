<?php global $prefix, $submenu_editor;
$prefix = '..';

$query = @$_GET['p'];
if (empty($query)) {
  $query = @getenv('QUERY_STRING');
  $paramEndPos = strpos($query, '&');
  $valuePos = strpos($query, '=');
  if (!empty($query) && ($paramEndPos == null || ($paramEndPos > 0 && ($valuePos == null || $valuePos > $paramEndPos)))) {
    header('Location: ?p='.$query);
    exit();
  }
}

$nomenu = true;
include('../header.php');
include('db.php');
?>
<a href="..">&lt;&lt;&nbsp;Back</a>
<div>
<h1 id="addons">Addons: Browse</h1>
<?php
$rows = DB_Query('SELECT id, name, created, owner FROM addons');
while ($row = DB_Row()) {
	echo $row['name']."<br/>\n";
}

DB_Close();
?>
</div>
<?php include '../refer.php'; ?>