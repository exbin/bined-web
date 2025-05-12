<?php include '../download/download-list.php'; $downloads = getDownloadList('basic-editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
}

$old_releases = array();

$ver = '0.2.1';
$date = '2023-12-30';

$old_releases[1][0]['name'] = 'JAR';
$old_releases[1][0]['ver'] = $ver;
$old_releases[1][0]['date'] = $date;
$old_releases[1][0]['icon'] = 'jar';
$old_releases[1][0]['file'] = 'bined-editor-basic-'.$ver.'.jar';

$ver = '0.2.0';
$date = '2021-08-29';

$old_releases[0][0]['name'] = 'JAR';
$old_releases[0][0]['ver'] = $ver;
$old_releases[0][0]['date'] = $date;
$old_releases[0][0]['icon'] = 'jar';
$old_releases[0][0]['file'] = 'bined-editor-basic-'.$ver.'.jar';

?><div id="content">
<h1 id="download">Download</h1>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Single JAR Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['stb']); ?></td>
</tr>
</table>

<h2 id="development">Development Version</h2>
<p>Development versions are likely untested/broken - use at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Single JAR Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['dev']); ?></td></tr>
</table>

<h2 id="older_releases">Older Releases</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th></tr>
<tr>
  <td>Single JAR Basic Editor <?php echo $old_releases[1][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[1]); ?></td>
</tr>
<tr>
  <td>Single JAR Basic Editor <?php echo $old_releases[0][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[0]); ?></td>
</tr>
</table>

</div>
</body>
</html>