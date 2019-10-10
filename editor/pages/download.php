<?php include '../download/download-list.php'; $downloads = getDownloadList('editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
}

$old_releases = array();

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
<a name="download"><h2>Download</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['stb']); ?></td>
</tr>
</table>

<a name="download"><h2>Latest Changes</h2></a>
<p>
<ul><li>Renamed to BinEd</li>
<li>Updated to newer version of library</li>
<li>Support for half-size space</li>
<li>Support for layout, theme and colors profiles</li>
<li>Added support for different numerical bases in status bar</li>
<li>Configurable address margin</li>
<li>Context aware popup menu</li>
<li>Go-to dialog position to support position from end</li>
<li>Go-to dialog position to support different numerical bases</li>
<li>Support for ENTER key in preview section</li>
</ul></p>

<a name="development"><h2>Development Version</h2></a>
<p>Development versions are likely untested/broken and at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['dev']); ?></td></tr>
</table>

<a name="older_releases"><h2>Older Releases</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th></tr>
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