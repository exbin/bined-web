<?php include '../download/download-list.php'; $downloads = getDownloadList('android');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> '.(isset($value['date']) ? '['.$value['date'].']' : '');
  }
}

$old_releases = array();
$old_sources = array();

$ver = '0.2.6';
$date = '2025-05-29';

$old_releases[7][0]['name'] = 'Android App';
$old_releases[7][0]['ver'] = $ver;
$old_releases[7][0]['date'] = $date;
$old_releases[7][0]['icon'] = 'android';
$old_releases[7][0]['file'] = 'bined-android-'.$ver.'.apk';

$ver = '0.2.5';
$date = '2025-05-07';

$old_releases[6][0]['name'] = 'Android App';
$old_releases[6][0]['ver'] = $ver;
$old_releases[6][0]['date'] = $date;
$old_releases[6][0]['icon'] = 'android';
$old_releases[6][0]['file'] = 'bined-android-'.$ver.'.apk';

$ver = '0.2.4';
$date = '2025-04-06';

$old_releases[5][0]['name'] = 'Android App';
$old_releases[5][0]['ver'] = $ver;
$old_releases[5][0]['date'] = $date;
$old_releases[5][0]['icon'] = 'android';
$old_releases[5][0]['file'] = 'bined-android-'.$ver.'.apk';

$ver = '0.2.3';
$date = '2024-11-13';

$old_releases[4][0]['name'] = 'Android App';
$old_releases[4][0]['ver'] = $ver;
$old_releases[4][0]['date'] = $date;
$old_releases[4][0]['icon'] = 'android';
$old_releases[4][0]['file'] = 'bined-android-'.$ver.'.apk';

$ver = '0.2.2';
$date = '2024-10-13';

$old_releases[3][0]['name'] = 'Android App';
$old_releases[3][0]['ver'] = $ver;
$old_releases[3][0]['date'] = $date;
$old_releases[3][0]['icon'] = 'android';
$old_releases[3][0]['file'] = 'bined-android-'.$ver.'.apk';

$ver = '0.2.1';
$date = '2024-09-27';

$old_releases[2][0]['name'] = 'Android App';
$old_releases[2][0]['ver'] = $ver;
$old_releases[2][0]['date'] = $date;
$old_releases[2][0]['icon'] = 'android';
$old_releases[2][0]['file'] = 'bined-android-'.$ver.'.apk';

$ver = '0.2.0.1';
$date = '2024-09-05';

$old_releases[1][0]['name'] = 'Android App';
$old_releases[1][0]['ver'] = $ver;
$old_releases[1][0]['date'] = $date;
$old_releases[1][0]['icon'] = 'android';
$old_releases[1][0]['file'] = 'bined-android-'.$ver.'.apk';

$ver = '0.2.0';
$date = '2024-09-01';

$old_releases[0][0]['name'] = 'Android App';
$old_releases[0][0]['ver'] = $ver;
$old_releases[0][0]['date'] = $date;
$old_releases[0][0]['icon'] = 'android';
$old_releases[0][0]['file'] = 'bined-android-'.$ver.'.apk';

?><div id="content">
<h1 id="download">Download</h1>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['stb']); ?></td>
</tr>
</table>

<h2 id="latest_chages">Latest Changes</h2>
<ul><li>Added basic binary search</li>
<li>Added Portuguese, Turkish, Russian and Spanish translations</li>
<li>Bug fixes</li>
</ul>
<p><a class="urlextern" href="https://github.com/exbin/bined-android/blob/master/changes.txt">Full list of changes</a></p>

<h2 id="development">Development Version</h2>
<p>Development versions are likely untested/broken - use at your own risk.</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['dev']); ?></td>
</tr>
</table>

<h2 id="older_releases">Older Releases</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Files&nbsp;</th></tr>
<tr>
  <td>Android App <?php echo $old_releases[7][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[7]); ?></td>
</tr>
<tr>
  <td>Android App <?php echo $old_releases[6][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[6]); ?></td>
</tr>
<tr>
  <td>Android App <?php echo $old_releases[5][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[5]); ?></td>
</tr>
<tr>
  <td>Android App <?php echo $old_releases[4][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[4]); ?></td>
</tr>
<tr>
  <td>Android App <?php echo $old_releases[3][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[3]); ?></td>
</tr>
<tr>
  <td>Android App <?php echo $old_releases[2][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[2]); ?></td>
</tr>
<tr>
  <td>Android App <?php echo $old_releases[1][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[1]); ?></td>
</tr>
<tr>
  <td>Android App <?php echo $old_releases[0][0]['ver']; ?></td>
  <td><?php echoDownload($old_releases[0]); ?></td>
  <td></td>
</tr>
</table>

</div>
</body>
</html>