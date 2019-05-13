<?php include '../download/download-list.php'; $downloads = getDownloadList('bluej-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<p>Hexadecimal editor plugin for BlueJ written in Java.</p>
<p><img src="images/bluej-screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>BlueJ Extension</td>
  <td><?php echoDownload($downloads['bluej-extension']['stb']); ?></td>
  <td><?php echoDownload($downloads['bluej-extension']['dev']); ?></td></tr>
</table>

<a name="downloads"><h2>Source Codes</h2></a>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-bluej-extension" title="GitHub repository"><img src="../images/social-github.png" alt="[GitHub]"/> exbin/bined-bluej-extension</a></td></tr>
</table>

<p>TODO</p>
</div>
</body>
</html>