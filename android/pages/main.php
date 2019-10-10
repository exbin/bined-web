<?php include '../download/download-list.php'; $downloads = getDownloadList('android');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<a name="variant"><h2>Variant: Android App</h2></a>
<p>Free and open source basic hexadecimal editor for Android written in Java.</p>
<p><img src="images/android_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<p>Under development.</p>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['android']['stb']); ?></td>
  <td><?php echoDownload($downloads['android']['dev']); ?></td></tr>
</table>

<a name="downloads"><h2>Source Codes</h2></a>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-android" title="GitHub repository"><img src="../images/social/github.png" alt="[GitHub]"/> exbin/bined-android</a></td></tr>
</table>

TODO
</div>
</body>
</html>