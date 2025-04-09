<?php include '../download/download-list.php'; $downloads = getDownloadList('android');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo @$value['prefix'].'<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1>BinEd Hex Editor for Android</h1>
<p>Free and open source hex editor for Android written in Java.</p>
<p><img src="images/android_screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="360"/></p>

<h2 id="downloads">Downloads</h2>
<a href="https://f-droid.org/packages/org.exbin.bined.editor.android/"><img src="https://fdroid.gitlab.io/artwork/badge/get-it-on.png" alt="Get it on F-Droid" height="80"></a> <a href="https://play.google.com/store/apps/details?id=org.exbin.bined.editor.android"><img src="https://play.google.com/intl/en_us/badges/images/generic/en-play-badge.png" alt="Get it on Google Play" height="80"></a>

<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['stb']); ?></td>
  <td><?php echoDownload($downloads['android']['dev']); ?></td></tr>
</table>

<h2 id="requirements">Requirements</h2>
<p>Android 4.0 or newer (API 14+) Phone, Tablet or Android TV.</p>

<h2 id="features">Features</h2>
<ul><li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Support for Unicode, UTF-8 and other charsets</li>
<li>Insert and overwrite edit modes</li>
<li>TODO: Searching for text / hexadecimal code with matching highlighting</li>
<li>Support for undo/redo</li>
<li>Support for files with size up to exabytes</li></ul>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-android" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-android</a></td></tr>
</table>

</div>
</body>
</html>