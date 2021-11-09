<?php include '../download/download-list.php'; $downloads = getDownloadList('jedit-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: jEdit Plugin</h1>

<p>Binary/hexadecimal editor plugin for <a class="urlextern" href="http://www.jedit.org/">jEdit</a> written in Java.</p>

<p><img src="images/jedit-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>jEdit Plugin</td>
  <td><?php echoDownload($downloads['jedit-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['jedit-plugin']['dev']); ?></td>
</tr>
</table>

<h2 id="installation">Installation</h2>
<p>Unzip jar file from downloaded zip file into jars directory of your jEdit installation.</p>

<p>Use Plugins/Bined/Edit File.</p>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-jedit-plugin" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-jedit-plugin</a></td></tr>
</table>

<p>TODO</p>

</div>
</body>
</html>