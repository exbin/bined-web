<?php include '../download/download-list.php'; $downloads = getDownloadList('editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
}

$old_releases = array();

$ver = '0.2.2';
$date = '2023-07-29';

$old_releases[6][0]['name'] = 'Windows Installer';
$old_releases[6][0]['ver'] = $ver;
$old_releases[6][0]['date'] = $date;
$old_releases[6][0]['icon'] = 'exe';
$old_releases[6][0]['file'] = 'bined-'.$ver.'-win32.exe';
$old_releases[6][1]['name'] = 'ZIP';
$old_releases[6][1]['ver'] = $ver;
$old_releases[6][1]['date'] = $date;
$old_releases[6][1]['icon'] = 'zip';
$old_releases[6][1]['file'] = 'bined-'.$ver.'.zip';
$old_releases[6][2]['name'] = 'Debian Package';
$old_releases[6][2]['ver'] = $ver;
$old_releases[6][2]['date'] = $date;
$old_releases[6][2]['icon'] = 'debian';
$old_releases[6][2]['file'] = 'bined_'.$ver.'-1_all.deb';
$old_releases[6][3]['name'] = 'Linux RPM Package';
$old_releases[6][3]['ver'] = $ver;
$old_releases[6][3]['date'] = $date;
$old_releases[6][3]['icon'] = 'rpm';
$old_releases[6][3]['file'] = 'bined-'.$ver.'-1.noarch.rpm';

$ver = '0.2.1';
$date = '2021-10-31';

$old_releases[5][0]['name'] = 'Windows Installer';
$old_releases[5][0]['ver'] = $ver;
$old_releases[5][0]['date'] = $date;
$old_releases[5][0]['icon'] = 'exe';
$old_releases[5][0]['file'] = 'bined-'.$ver.'-win32.exe';
$old_releases[5][1]['name'] = 'ZIP';
$old_releases[5][1]['ver'] = $ver;
$old_releases[5][1]['date'] = $date;
$old_releases[5][1]['icon'] = 'zip';
$old_releases[5][1]['file'] = 'bined-'.$ver.'.zip';
$old_releases[5][2]['name'] = 'Debian Package';
$old_releases[5][2]['ver'] = $ver;
$old_releases[5][2]['date'] = $date;
$old_releases[5][2]['icon'] = 'debian';
$old_releases[5][2]['file'] = 'bined_'.$ver.'-1_all.deb';
$old_releases[5][3]['name'] = 'Linux RPM Package';
$old_releases[5][3]['ver'] = $ver;
$old_releases[5][3]['date'] = $date;
$old_releases[5][3]['icon'] = 'rpm';
$old_releases[5][3]['file'] = 'bined-'.$ver.'-1.noarch.rpm';

$ver = '0.2.0';
$date = '2019-08-26';

$old_releases[4][0]['name'] = 'Windows Installer';
$old_releases[4][0]['ver'] = $ver;
$old_releases[4][0]['date'] = $date;
$old_releases[4][0]['icon'] = 'exe';
$old_releases[4][0]['file'] = 'bined-'.$ver.'-win32.exe';
$old_releases[4][1]['name'] = 'ZIP';
$old_releases[4][1]['ver'] = $ver;
$old_releases[4][1]['date'] = $date;
$old_releases[4][1]['icon'] = 'zip';
$old_releases[4][1]['file'] = 'bined-'.$ver.'.zip';
$old_releases[4][2]['name'] = 'Debian Package';
$old_releases[4][2]['ver'] = $ver;
$old_releases[4][2]['date'] = $date;
$old_releases[4][2]['icon'] = 'debian';
$old_releases[4][2]['file'] = 'bined_'.$ver.'-1_all.deb';
$old_releases[4][3]['name'] = 'Linux RPM Package';
$old_releases[4][3]['ver'] = $ver;
$old_releases[4][3]['date'] = $date;
$old_releases[4][3]['icon'] = 'rpm';
$old_releases[4][3]['file'] = 'bined-'.$ver.'-1.noarch.rpm';

$ver = '0.1.3';
$date = '2017-10-22';

$old_releases[3][0]['name'] = 'Windows Installer';
$old_releases[3][0]['ver'] = $ver;
$old_releases[3][0]['date'] = $date;
$old_releases[3][0]['icon'] = 'exe';
$old_releases[3][0]['file'] = 'deltahex-editor-'.$ver.'-win32.exe';
$old_releases[3][1]['name'] = 'ZIP';
$old_releases[3][1]['ver'] = $ver;
$old_releases[3][1]['date'] = $date;
$old_releases[3][1]['icon'] = 'zip';
$old_releases[3][1]['file'] = 'deltahex-editor-'.$ver.'.zip';
$old_releases[3][2]['name'] = 'Debian Package';
$old_releases[3][2]['ver'] = $ver;
$old_releases[3][2]['date'] = $date;
$old_releases[3][2]['icon'] = 'debian';
$old_releases[3][2]['file'] = 'deltahex-editor_'.$ver.'_all.deb';
$old_releases[3][3]['name'] = 'Linux RPM Package';
$old_releases[3][3]['ver'] = $ver;
$old_releases[3][3]['date'] = $date;
$old_releases[3][3]['icon'] = 'rpm';
$old_releases[3][3]['file'] = 'deltahex-editor-'.$ver.'.noarch.rpm';

$ver = '0.1.2';
$date = '2017-01-07';

$old_releases[2][0]['name'] = 'Windows Installer';
$old_releases[2][0]['ver'] = $ver;
$old_releases[2][0]['date'] = $date;
$old_releases[2][0]['icon'] = 'exe';
$old_releases[2][0]['file'] = 'deltahex-editor-'.$ver.'-win32.exe';
$old_releases[2][1]['name'] = 'ZIP';
$old_releases[2][1]['ver'] = $ver;
$old_releases[2][1]['date'] = $date;
$old_releases[2][1]['icon'] = 'zip';
$old_releases[2][1]['file'] = 'deltahex-editor-'.$ver.'.zip';
$old_releases[2][2]['name'] = 'Debian Package';
$old_releases[2][2]['ver'] = $ver;
$old_releases[2][2]['date'] = $date;
$old_releases[2][2]['icon'] = 'debian';
$old_releases[2][2]['file'] = 'deltahex-editor_'.$ver.'_all.deb';
$old_releases[2][3]['name'] = 'Linux RPM Package';
$old_releases[2][3]['ver'] = $ver;
$old_releases[2][3]['date'] = $date;
$old_releases[2][3]['icon'] = 'rpm';
$old_releases[2][3]['file'] = 'deltahex-editor-'.$ver.'.noarch.rpm';

$ver = '0.1.1';
$date = '2016-12-05';

$old_releases[1][0]['name'] = 'Windows Installer';
$old_releases[1][0]['ver'] = $ver;
$old_releases[1][0]['date'] = $date;
$old_releases[1][0]['icon'] = 'exe';
$old_releases[1][0]['file'] = 'deltahex-editor-'.$ver.'-win32.exe';
$old_releases[1][1]['name'] = 'ZIP';
$old_releases[1][1]['ver'] = $ver;
$old_releases[1][1]['date'] = $date;
$old_releases[1][1]['icon'] = 'zip';
$old_releases[1][1]['file'] = 'deltahex-editor-'.$ver.'.zip';

$ver = '0.1.0';
$date = '2016-07-20';

$old_releases[0][0]['name'] = 'ZIP';
$old_releases[0][0]['ver'] = $ver;
$old_releases[0][0]['date'] = $date;
$old_releases[0][0]['icon'] = 'zip';
$old_releases[0][0]['file'] = 'deltahex-editor-'.$ver.'.zip';

?><div id="content">
<h1 id="download">Download</h1>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['stb']); ?></td>
</tr>
</table>

<h2 id="latest_changes">Latest Changes</h2>
<p>
<ul><li>Added convert data action</li>
<li>Added drag&amp;drop content tool</li>
<li>Added GUI rendering options</li>
<li>Added support for basic macro</li>
<li>Fixed issue with language switching</li>
<li>Fixed some issues with searching</li>
</ul></p>

<h2 id="development">Development Version</h2>
<p>Development versions are likely untested/broken and at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['dev']); ?></td></tr>
</table>

<h2 id="older_releases">Older Releases</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th></tr>
<tr>
  <td>BinEd <?php echo $old_releases[6][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[6]); ?></td>
</tr>
<tr>
  <td>BinEd <?php echo $old_releases[5][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[5]); ?></td>
</tr>
<tr>
  <td>BinEd <?php echo $old_releases[4][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[4]); ?></td>
</tr>
<tr>
  <td>DeltaHex <?php echo $old_releases[3][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[3]); ?></td>
</tr>
<tr>
  <td>DeltaHex <?php echo $old_releases[2][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[2]); ?></td>
</tr>
<tr>
  <td>DeltaHex <?php echo $old_releases[1][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[1]); ?></td>
</tr>
<tr>
  <td>DeltaHex <?php echo $old_releases[0][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[0]); ?></td>
</tr>
</table>

</div>
</body>
</html>