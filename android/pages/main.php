<?php include '../download/download-list.php'; $downloads = getDownloadList('android');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="variant">Variant: Android App</h1>
<p>Free and open source basic hex editor for Android written in Java.</p>
<p><img src="images/android_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<p>Under development.</p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['stb']); ?></td>
  <td><?php echoDownload($downloads['android']['dev']); ?></td></tr>
</table>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-android" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-android</a></td></tr>
</table>

TODO
</div>
</body>
</html>