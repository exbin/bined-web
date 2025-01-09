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

if ($query) {
  global $db_link;
  $module_id = $db_link -> real_escape_string($query);
  $rows = DB_Query('SELECT addon.id, addon.module_id, addon.name, addon.description, addon.homepage, addon.icon, addon.created, addon.owner_id, addon.created, user.name AS owner_name FROM addon INNER JOIN user ON user.id = addon.owner_id WHERE addon.module_id = \''.$module_id.'\' ORDER BY addon.id');
  $row = DB_Row();
?>
<a href="/addon/">&lt;&lt;&nbsp;Back</a>
<div>
<?php
  if ($row) {
  	echo "<h1 id=\"addons\"><img src=\"icon/default.png\" alt=\"[ICON]\" style=\"float:left;margin-right:10px\" />Addon: ".$row['name']."</h1>\n";
  	echo "<p>Module ID: ".$row['module_id']."<br/>\n";
  	echo "Description: ".$row['description']."<br/>\n";
  	echo "Homepage: <a href=\"".$row['homepage']."\">".$row['homepage']."</a><br/>\n";
  	echo "Owner: ".$row['owner_name']."<br/>\n";
  	echo "Created: ".$row['created']."<br/>\n";
  	echo "</p>\n";
  	
  	// Long description
  	
  	// Releases
  	echo "<p>Releases:<br/>\n";
  	$rels = DB_Query('SELECT version, revision, created, file FROM addon_rel WHERE addon_id = '.$row['id'].' ORDER BY revision DESC');
    while ($rel = DB_Row()) {
    	echo "* <a href=\"download/".$rel['file']."\">Version ".$rel['version']."</a> (revision ".$rel['revision']." from ".$rel['created'].")<br/> \n";
    }
  	echo "</p>\n";
  	
  	// Dependencies
  	echo "<p>Dependencies:<br/>\n";
    $deps = DB_Query('SELECT addon_dep.id, addon_dep.type, addon_dep.value FROM addon_dep WHERE addon_dep.addon_id = '.$row['id'].' ORDER BY id');
    while ($dep = DB_Row()) {
    	echo "* Module ".$dep['value']."<br/> \n";
    }
  	echo "</p>\n";
  } else {
  	echo '<p>Error: No addon exist for ID</p>';
  }

  DB_Close();
} else {
?>
<a href="..">&lt;&lt;&nbsp;Back</a>
<div>
<h1 id="addons">Addons: Browse</h1>
<?php
  $rows = DB_Query('SELECT id, module_id, name, description, created FROM addon ORDER BY created DESC');
  while ($row = DB_Row()) {
	echo "<div><img src=\"icon/default.png\" alt=\"[ICON]\" style=\"float:left;margin-right:10px\" /><a href=\"?p=".$row['module_id']."\"><strong>".$row['name']."</strong></a><br/>".$row['description']."</div><br/>\n";
  }

  DB_Close();
}
?>
</div>
<?php include '../refer.php'; ?>