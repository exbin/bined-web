<?php global $prefix, $submenu_editor;
include('../db.php');

$op = @$_GET['op'];

echo "<?xml version=\"1.0\"?>\n";
echo "<result>\n";

$rows = DB_Query('SELECT addon.id, addon.module_id, addon.name, addon.description, addon.icon, addon.created, addon.owner_id, addon.created, addon_dep.id AS dep_id, addon_dep.type AS dep_type, addon_dep.value AS dep_value FROM addon LEFT JOIN addon_dep ON addon_dep.addon_id = addon.id ORDER BY addon.id, addon_dep.id');
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
    if ($row['icon']) {
      echo "    <icon>".$row['icon']."</icon>\n";
    }
  }
  if ($row['dep_id']) {
    if ($dep_id == 0) {
      echo "    <dependency>\n";
      $dep_id = $row['dep_id'];
      $type = $row['dep_type'];
      if ($type == 0) {
        echo "      <module id=\"".$row['dep_value']."\" />\n";
      }
    }
  }
}
if ($addon_id != 0) {
  echo "  </module>\n";
}

DB_Close();

echo "</result>\n";
?>