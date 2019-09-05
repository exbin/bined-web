<?php include '../download/download-list.php'; $downloads = getDownloadList('netbeans-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> '.(isset($value['date']) ? '['.$value['date'].']' : '');
  }
}

$sources = array();

$ver = '0.2.1';

$sources[0]['name'] = 'Sources';
$sources[0]['ver'] = $ver;
$sources[0]['icon'] = 'zip';
$sources[0]['file'] = 'org-exbin-bined-netbeans-'.$ver.'.src.zip';

$old_releases = array();
$old_sources = array();

$ver = '0.2.0';
$date = '2019-04-13';

$old_releases[8][0]['name'] = 'Plugin';
$old_releases[8][0]['ver'] = $ver;
$old_releases[8][0]['date'] = $date;
$old_releases[8][0]['icon'] = 'netbeans';
$old_releases[8][0]['file'] = 'org-exbin-bined-netbeans-'.$ver.'.nbm';

$old_sources[8][0]['name'] = 'Sources';
$old_sources[8][0]['ver'] = $ver;
$old_sources[8][0]['icon'] = 'zip';
$old_sources[8][0]['file'] = 'org-exbin-bined-netbeans-'.$ver.'.src.zip';

$ver = '0.1.7';
$date = '2017-10-10';

$old_releases[7][0]['name'] = 'Plugin';
$old_releases[7][0]['ver'] = $ver;
$old_releases[7][0]['date'] = $date;
$old_releases[7][0]['icon'] = 'netbeans';
$old_releases[7][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';
$old_releases[7][1]['name'] = 'Plugin';
$old_releases[7][1]['prefix'] = 'nb7.1 ';
$old_releases[7][1]['ver'] = $ver;
$old_releases[7][1]['date'] = $date;
$old_releases[7][1]['icon'] = 'netbeans';
$old_releases[7][1]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'_nb7.1.nbm';

$old_sources[7][0]['name'] = 'Sources';
$old_sources[7][0]['ver'] = $ver;
$old_sources[7][0]['icon'] = 'zip';
$old_sources[7][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.src.zip';

$ver = '0.1.6';
$date = '2017-04-01';

$old_releases[6][0]['name'] = 'Plugin';
$old_releases[6][0]['ver'] = $ver;
$old_releases[6][0]['date'] = $date;
$old_releases[6][0]['icon'] = 'netbeans';
$old_releases[6][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';

$old_sources[6][0]['name'] = 'Sources';
$old_sources[6][0]['ver'] = $ver;
$old_sources[6][0]['icon'] = 'zip';
$old_sources[6][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.src.zip';

$ver = '0.1.5';
$date = '2017-03-22';

$old_releases[5][0]['name'] = 'Plugin';
$old_releases[5][0]['ver'] = $ver;
$old_releases[5][0]['date'] = $date;
$old_releases[5][0]['icon'] = 'netbeans';
$old_releases[5][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';
$old_releases[5][1]['name'] = 'Plugin';
$old_releases[5][1]['prefix'] = 'nb7.1 ';
$old_releases[5][1]['ver'] = $ver;
$old_releases[5][1]['date'] = $date;
$old_releases[5][1]['icon'] = 'netbeans';
$old_releases[5][1]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'_nb7.1.nbm';

$old_sources[5][0]['name'] = 'Sources';
$old_sources[5][0]['ver'] = $ver;
$old_sources[5][0]['icon'] = 'zip';
$old_sources[5][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.src.zip';

$ver = '0.1.4';
$date = '2017-01-08';

$old_releases[4][0]['name'] = 'Plugin';
$old_releases[4][0]['ver'] = $ver;
$old_releases[4][0]['date'] = $date;
$old_releases[4][0]['icon'] = 'netbeans';
$old_releases[4][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';

$old_sources[4][0]['name'] = 'Sources';
$old_sources[4][0]['ver'] = $ver;
$old_sources[4][0]['icon'] = 'zip';
$old_sources[4][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.src.zip';

$ver = '0.1.3';
$date = '2016-10-05';

$old_releases[3][0]['name'] = 'Plugin';
$old_releases[3][0]['ver'] = $ver;
$old_releases[3][0]['date'] = $date;
$old_releases[3][0]['icon'] = 'netbeans';
$old_releases[3][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';

$old_sources[3][0]['name'] = 'Sources';
$old_sources[3][0]['ver'] = $ver;
$old_sources[3][0]['icon'] = 'zip';
$old_sources[3][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.src.zip';

$ver = '0.1.2';
$date = '2016-07-23';

$old_releases[2][0]['name'] = 'Plugin';
$old_releases[2][0]['ver'] = $ver;
$old_releases[2][0]['date'] = $date;
$old_releases[2][0]['icon'] = 'netbeans';
$old_releases[2][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';

$ver = '0.1.1';
$date = '2016-06-25';

$old_releases[1][0]['name'] = 'Plugin';
$old_releases[1][0]['ver'] = $ver;
$old_releases[1][0]['date'] = $date;
$old_releases[1][0]['icon'] = 'netbeans';
$old_releases[1][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';

$old_sources[1][0]['name'] = 'Sources';
$old_sources[1][0]['ver'] = $ver;
$old_sources[1][0]['icon'] = 'zip';
$old_sources[1][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.src.zip';

$ver = '0.1.0';
$date = '2016-06-08';

$old_releases[0][0]['name'] = 'Plugin';
$old_releases[0][0]['ver'] = $ver;
$old_releases[0][0]['date'] = $date;
$old_releases[0][0]['icon'] = 'netbeans';
$old_releases[0][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.nbm';

$old_sources[0][0]['name'] = 'Sources';
$old_sources[0][0]['ver'] = $ver;
$old_sources[0][0]['icon'] = 'zip';
$old_sources[0][0]['file'] = 'org-exbin-deltahex-netbeans-'.$ver.'.src.zip';

?><div id="content">
<a name="download"><h2>Download</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th>Sources&nbsp;</th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['stb']); ?></td>
  <td><?php echoDownload($sources); ?></td>
</tr>
</table>

<a name="download"><h2>Latest Changes</h2></a>
<p>
<ul><li>Action to show debug variables as binary data</li>
<li>Minor GUI improvements</li>
<li>Context aware popup menu</li>
<li>Go-to dialog position to support position from end</li>
<li>Go-to dialog position to support different numerical bases</li>
<li>Support for ENTER key in preview section</li></ul>
</p>

<a name="development"><h2>Development Version</h2></a>
<p>Development versions are likely untested/broken and at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['dev']); ?></td></tr>
</table>

<a name="older_releases"><h2>Older Releases</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th><th>Sources&nbsp;</th></tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[8][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[8]); ?></td>
  <td><?php echoDownload($old_sources[8]); ?></td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[7][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[7]); ?></td>
  <td><?php echoDownload($old_sources[7]); ?></td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[6][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[6]); ?></td>
  <td><?php echoDownload($old_sources[6]); ?></td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[5][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[5]); ?></td>
  <td><?php echoDownload($old_sources[5]); ?></td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[4][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[4]); ?></td>
  <td><?php echoDownload($old_sources[4]); ?></td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[3][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[3]); ?></td>
  <td><?php echoDownload($old_sources[3]); ?></td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[2][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[2]); ?></td>
  <td>-</td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[1][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[1]); ?></td>
  <td><?php echoDownload($old_sources[1]); ?></td>
</tr>
<tr>
  <td>NetBeans Platform Plugin <?php echo $old_releases[0][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[0]); ?></td>
  <td>-</td>
</tr>
</table>

</div>
</body>
</html>