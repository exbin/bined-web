<?php include '../download/download-list.php'; $downloads = getDownloadList('intellij-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> '.(isset($value['date']) ? '['.$value['date'].']' : '');
  }
}

$sources = array();

$ver = '0.2.4';

$sources[0]['name'] = 'Sources';
$sources[0]['ver'] = $ver;
$sources[0]['icon'] = 'zip';
$sources[0]['file'] = 'bined-intellij-plugin-'.$ver.'.src.zip';

$old_releases = array();
$old_sources = array();

$ver = '0.2.3';
$date = '2020-07-30';

$old_releases[12][0]['name'] = 'Plugin';
$old_releases[12][0]['ver'] = $ver;
$old_releases[12][0]['date'] = $date;
$old_releases[12][0]['icon'] = 'zip';
$old_releases[12][0]['file'] = 'bined-intellij-plugin-'.$ver.'.zip';

$old_sources[12][0]['name'] = 'Sources';
$old_sources[12][0]['ver'] = $ver;
$old_sources[12][0]['icon'] = 'zip';
$old_sources[12][0]['file'] = 'bined-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.2.2';
$date = '2020-01-25';

$old_releases[11][0]['name'] = 'Plugin';
$old_releases[11][0]['ver'] = $ver;
$old_releases[11][0]['date'] = $date;
$old_releases[11][0]['icon'] = 'zip';
$old_releases[11][0]['file'] = 'bined-intellij-plugin-'.$ver.'.zip';

$old_sources[11][0]['name'] = 'Sources';
$old_sources[11][0]['ver'] = $ver;
$old_sources[11][0]['icon'] = 'zip';
$old_sources[11][0]['file'] = 'bined-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.2.1';
$date = '2019-08-22';

$old_releases[10][0]['name'] = 'Plugin';
$old_releases[10][0]['ver'] = $ver;
$old_releases[10][0]['date'] = $date;
$old_releases[10][0]['icon'] = 'zip';
$old_releases[10][0]['file'] = 'bined-intellij-plugin-'.$ver.'.zip';

$old_sources[10][0]['name'] = 'Sources';
$old_sources[10][0]['ver'] = $ver;
$old_sources[10][0]['icon'] = 'zip';
$old_sources[10][0]['file'] = 'bined-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.2.0';
$date = '2019-04-13';

$old_releases[9][0]['name'] = 'Plugin';
$old_releases[9][0]['ver'] = $ver;
$old_releases[9][0]['date'] = $date;
$old_releases[9][0]['icon'] = 'zip';
$old_releases[9][0]['file'] = 'bined-intellij-plugin-'.$ver.'.zip';

$old_sources[9][0]['name'] = 'Sources';
$old_sources[9][0]['ver'] = $ver;
$old_sources[9][0]['icon'] = 'zip';
$old_sources[9][0]['file'] = 'bined-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.7';
$date = '2018-08-24';

$old_releases[8][0]['name'] = 'Plugin';
$old_releases[8][0]['ver'] = $ver;
$old_releases[8][0]['date'] = $date;
$old_releases[8][0]['icon'] = 'jar';
$old_releases[8][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[8][0]['name'] = 'Sources';
$old_sources[8][0]['ver'] = $ver;
$old_sources[8][0]['icon'] = 'zip';
$old_sources[8][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.6.1';
$date = '2018-03-05';

$old_releases[7][0]['name'] = 'Plugin';
$old_releases[7][0]['ver'] = $ver;
$old_releases[7][0]['date'] = $date;
$old_releases[7][0]['icon'] = 'jar';
$old_releases[7][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[7][0]['name'] = 'Sources';
$old_sources[7][0]['ver'] = $ver;
$old_sources[7][0]['icon'] = 'zip';
$old_sources[7][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.6';
$date = '2018-03-05';

$old_releases[6][0]['name'] = 'Plugin';
$old_releases[6][0]['ver'] = $ver;
$old_releases[6][0]['date'] = $date;
$old_releases[6][0]['icon'] = 'jar';
$old_releases[6][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[6][0]['name'] = 'Sources';
$old_sources[6][0]['ver'] = $ver;
$old_sources[6][0]['icon'] = 'zip';
$old_sources[6][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.5';
$date = '2017-10-10';

$old_releases[5][0]['name'] = 'Plugin';
$old_releases[5][0]['ver'] = $ver;
$old_releases[5][0]['date'] = $date;
$old_releases[5][0]['icon'] = 'jar';
$old_releases[5][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[5][0]['name'] = 'Sources';
$old_sources[5][0]['ver'] = $ver;
$old_sources[5][0]['icon'] = 'zip';
$old_sources[5][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.4';
$date = '2017-04-01';

$old_releases[4][0]['name'] = 'Plugin';
$old_releases[4][0]['ver'] = $ver;
$old_releases[4][0]['date'] = $date;
$old_releases[4][0]['icon'] = 'jar';
$old_releases[4][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[4][0]['name'] = 'Sources';
$old_sources[4][0]['ver'] = $ver;
$old_sources[4][0]['icon'] = 'zip';
$old_sources[4][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.3';
$date = '2017-03-22';

$old_releases[3][0]['name'] = 'Plugin';
$old_releases[3][0]['ver'] = $ver;
$old_releases[3][0]['date'] = $date;
$old_releases[3][0]['icon'] = 'jar';
$old_releases[3][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[3][0]['name'] = 'Sources';
$old_sources[3][0]['ver'] = $ver;
$old_sources[3][0]['icon'] = 'zip';
$old_sources[3][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.2';
$date = '2017-02-04';

$old_releases[2][0]['name'] = 'Plugin';
$old_releases[2][0]['ver'] = $ver;
$old_releases[2][0]['date'] = $date;
$old_releases[2][0]['icon'] = 'jar';
$old_releases[2][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[2][0]['name'] = 'Sources';
$old_sources[2][0]['ver'] = $ver;
$old_sources[2][0]['icon'] = 'zip';
$old_sources[2][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.1';
$date = '2017-01-11';

$old_releases[1][0]['name'] = 'Plugin';
$old_releases[1][0]['ver'] = $ver;
$old_releases[1][0]['date'] = $date;
$old_releases[1][0]['icon'] = 'jar';
$old_releases[1][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[1][0]['name'] = 'Sources';
$old_sources[1][0]['ver'] = $ver;
$old_sources[1][0]['icon'] = 'zip';
$old_sources[1][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

$ver = '0.1.0';
$date = '2016-12-13';

$old_releases[0][0]['name'] = 'Plugin';
$old_releases[0][0]['ver'] = $ver;
$old_releases[0][0]['date'] = $date;
$old_releases[0][0]['icon'] = 'jar';
$old_releases[0][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.jar';

$old_sources[0][0]['name'] = 'Sources';
$old_sources[0][0]['ver'] = $ver;
$old_sources[0][0]['icon'] = 'zip';
$old_sources[0][0]['file'] = 'deltahex-intellij-plugin-'.$ver.'.src.zip';

?><div id="content">
<h1 id="download">Download</h1>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th>Sources&nbsp;</th><th>Module Website&nbsp;</th></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['stb']); ?></td>
  <td><?php echoDownload($sources); ?></td>
  <td><a href="<?php echo $downloads['intellij-plugin']['repository_url']; ?>"><?php echo $downloads['intellij-plugin']['repository_title']; ?></a></td>
</tr>
</table>

<h2 id="latest_chages">Latest Changes</h2>
<ul><li>Added string field in values panel</li>
<li>Fixed 2021.1: Can't close any tabs once a binary file is opened</li>
</ul>

<h2 id="development">Development Version</h2>
<p>Development versions are likely untested/broken and at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['dev']); ?></td>
</tr>
</table>

<h2 id="older_releases">Older Releases</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th><th>Sources&nbsp;</th></tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[11][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[11]); ?></td>
  <td><?php echoDownload($old_sources[11]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[10][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[10]); ?></td>
  <td><?php echoDownload($old_sources[10]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[9][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[9]); ?></td>
  <td><?php echoDownload($old_sources[9]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[8][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[8]); ?></td>
  <td><?php echoDownload($old_sources[8]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[7][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[7]); ?></td>
  <td><?php echoDownload($old_sources[7]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[6][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[6]); ?></td>
  <td><?php echoDownload($old_sources[6]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[5][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[5]); ?></td>
  <td><?php echoDownload($old_sources[5]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[4][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[4]); ?></td>
  <td><?php echoDownload($old_sources[4]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[3][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[3]); ?></td>
  <td><?php echoDownload($old_sources[3]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[2][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[2]); ?></td>
  <td><?php echoDownload($old_sources[2]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[1][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[1]); ?></td>
  <td><?php echoDownload($old_sources[1]); ?></td>
</tr>
<tr>
  <td>IntelliJ Platform Plugin <?php echo $old_releases[0][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[0]); ?></td>
  <td></td>
</tr>
</table>

</div>
</body>
</html>