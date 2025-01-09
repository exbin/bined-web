<?php global $prefix, $submenu_editor;
include('../db.php');

$op = @$_GET['op'];

header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\" ?>\n";
echo "<result>\n";

$rows = DB_Query('SELECT addon.id, addon.module_id, addon.name, addon.description, addon.homepage, addon.icon, addon.created, addon.owner_id, addon.created, addon_dep.id AS dep_id, addon_dep.type AS dep_type, addon_dep.value AS dep_value, addon_rel.version, user.name AS provider FROM addon INNER JOIN user ON user.id = addon.owner_id INNER JOIN addon_rel ON addon_rel.addon_id = addon.id AND NOT EXISTS(SELECT 1 FROM addon_rel rl WHERE rl.addon_id = addon_rel.addon_id AND rl.revision > addon_rel.revision) LEFT JOIN addon_dep ON addon_dep.addon_id = addon.id ORDER BY addon.id, addon_dep.id');
$addon_id = 0;
$dep_id = 0;
while ($row = DB_Row()) {
  if ($row['id'] != $addon_id) {
    if ($addon_id != 0) {
      if ($dep_id != 0) {
        echo "    </dependency>\n";
      }
      echo "  </module>\n";
    }
    echo "  <module id=\"".$row['module_id']."\" name=\"".$row['name']."\">\n";
    $addon_id = $row['id'];
    $dep_id = 0;
    if ($row['description']) {
      echo "    <description>".$row['description']."</description>\n";
    }
    if ($row['version']) {
      echo "    <version>".$row['version']."</version>\n";
    }
    if ($row['provider']) {
      echo "    <provider>".$row['provider']."</provider>\n";
    }
    if ($row['homepage']) {
      echo "    <homepage>".$row['homepage']."</homepage>\n";
    }
    if ($row['icon']) {
      echo "    <icon>".$row['icon']."</icon>\n";
    }
  }
  if ($row['dep_id']) {
    if ($dep_id == 0) {
      echo "    <dependency>\n";
    }
    $dep_id = $row['dep_id'];
    $type = $row['dep_type'];
    if ($type == 0) {
      echo "      <module id=\"".$row['dep_value']."\" />\n";
    } else if ($type == 1) {
      echo "      <library jar=\"".$row['dep_value']."\" />\n";
    } else if ($type == 2) {
      echo "      <library maven=\"".$row['dep_value']."\" />\n";
    }
  }
}
if ($addon_id != 0) {
  if ($dep_id != 0) {
    echo "    </dependency>\n";
  }
  echo "  </module>\n";
}

DB_Close();

echo "</result>\n";
?>