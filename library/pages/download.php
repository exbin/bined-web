<?php include '../download/download-list.php'; $downloads = getDownloadList('library');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo @$value['prefix'].'<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> '.(isset($value['date']) ? '['.$value['date'].']' : '');
  }
}

$old_releases = array();

$ver = '0.2.1';
$date = '2023-12-30';

$old_releases[5][0]['name'] = 'Library';
$old_releases[5][0]['ver'] = $ver;
$old_releases[5][0]['date'] = $date;
$old_releases[5][0]['icon'] = 'zip';
$old_releases[5][0]['file'] = 'bined-lib-java-'.$ver.'.zip';

$ver = '0.2.0';
$date = '2021-08-29';

$old_releases[4][0]['name'] = 'Library';
$old_releases[4][0]['ver'] = $ver;
$old_releases[4][0]['date'] = $date;
$old_releases[4][0]['icon'] = 'zip';
$old_releases[4][0]['file'] = 'bined-lib-java-'.$ver.'.zip';

$ver = '0.1.3';
$date = '2017-10-22';

$old_releases[3][0]['name'] = 'Library';
$old_releases[3][0]['ver'] = $ver;
$old_releases[3][0]['date'] = $date;
$old_releases[3][0]['icon'] = 'zip';
$old_releases[3][0]['file'] = 'deltahex-java-'.$ver.'.zip';

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
<h1 id="download">Download</h1>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Library</td>
  <td><?php echoDownload($downloads['library']['stb']); ?></td>
</tr>
</table>

<h2 id="latest_changes">Latest Changes</h2>
<p>
<ul><li>Some fixes and refactoring</li>
</ul></p>
<p><a class="urlextern" href="https://github.com/exbin/bined-lib-java/blob/master/changes.txt">Full list of changes</a></p>

<h2 id="development">Development Version</h2>
<p>Development versions are likely untested/broken - use at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Library</td>
  <td><?php echoDownload($downloads['library']['dev']); ?></td></tr>
</table>

<h2 id="older_releases">Older Releases</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th></tr>
<tr>
  <td>Library <?php echo $old_releases[5][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[5]); ?></td>
</tr>
<tr>
  <td>Library <?php echo $old_releases[4][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[4]); ?></td>
</tr>
<tr>
  <td>Library <?php echo $old_releases[3][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[3]); ?></td>
</tr>
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