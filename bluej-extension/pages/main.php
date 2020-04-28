<?php include '../download/download-list.php'; $downloads = getDownloadList('bluej-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h2 id="extension">Extension: BlueJ Extension</h2>
<p>Hexadecimal editor extension for BlueJ written in Java.</p>
<p>See <a class="urlextern" href="https://bluej.org/extensions/extensions.html">BlueJ Extensions</a> page for installation instruction.</p>
<p><img src="images/bluej-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>BlueJ Extension</td>
  <td><?php echoDownload($downloads['bluej-extension']['stb']); ?></td>
  <td><?php echoDownload($downloads['bluej-extension']['dev']); ?></td></tr>
</table>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-bluej-extension" title="GitHub repository"><img src="../images/social/github.png" alt="[GitHub]"/> exbin/bined-bluej-extension</a></td></tr>
</table>

<p>TODO</p>
</div>
</body>
</html>