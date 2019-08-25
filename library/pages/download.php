<?php include '../download/download-list.php'; $downloads = getDownloadList('library');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> '.(isset($value['date']) ? '['.$value['date'].']' : '');
  }
}

$old_releases = array();

$ver = '0.1.2';
$date = '2017-01-07';

$old_releases[2][0]['name'] = 'Library';
$old_releases[2][0]['ver'] = $ver;
$old_releases[2][0]['date'] = $date;
$old_releases[2][0]['icon'] = 'zip';
$old_releases[2][0]['file'] = 'deltahex-java-'.$ver.'.zip';

$ver = '0.1.1';
$date = '2016-12-05';

$old_releases[1][0]['name'] = 'Library';
$old_releases[1][0]['ver'] = $ver;
$old_releases[1][0]['date'] = $date;
$old_releases[1][0]['icon'] = 'zip';
$old_releases[1][0]['file'] = 'deltahex-java-'.$ver.'.zip';

$ver = '0.1.0';
$date = '2016-07-20';

$old_releases[0][0]['name'] = 'Library';
$old_releases[0][0]['ver'] = $ver;
$old_releases[0][0]['date'] = $date;
$old_releases[0][0]['icon'] = 'zip';
$old_releases[0][0]['file'] = 'deltahex-java-'.$ver.'.zip';

?><div id="content">
<a name="download"><h2>Download</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Library</td>
  <td><?php echoDownload($downloads['library']['stb']); ?></td>
</tr>
</table>

<a name="download"><h2>Latest Changes</h2></a>
<p>
<ul><li>Fixed behavior for high precision wheel scrolling</li>
<li>Code colorization by byte value</li>
<li>Added values panel</li>
<li>Various minor fixes</li>
</ul></p>

<a name="development"><h2>Development Version</h2></a>
<p>Development versions are likely untested/broken and at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Library</td>
  <td><?php echoDownload($downloads['library']['dev']); ?></td></tr>
</table>

<a name="older_releases"><h2>Older Releases</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th></tr>
<tr>
  <td>Library <?php echo $old_releases[2][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[2]); ?></td>
</tr>
<tr>
  <td>Library <?php echo $old_releases[1][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[1]); ?></td>
</tr>
<tr>
  <td>Library <?php echo $old_releases[0][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[0]); ?></td>
</tr>
</table>

</div>
</body>
</html>