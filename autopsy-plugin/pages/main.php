<?php include '../download/download-list.php'; $downloads = getDownloadList('autopsy-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: Autopsy Plugin</h1>

<p>Hexadecimal viewer/editor plugin module for <a class="urlextern" href="https://sleuthkit.org/autopsy/">Autopsy digital forensics platform</a> written in Java.</p>

<p><img src="images/autopsy-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Autopsy Plugin</td>
  <td><?php echoDownload($downloads['autopsy-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['autopsy-plugin']['dev']); ?></td>
</tr>
</table>

<h2 id="installation">Installation</h2>
<p>In Tools/Plugins in Downloaded tab "Add Plugins" if you want to install .nbm file.</p>

<h2 id="usage">Usage</h2>
<p>New "BinEd" tab is available in Data Content Viewers section.<br/>
Use "Open as Binary" action in main "Tools" menu.</p>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-autopsy-plugin" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-autopsy-plugin</a></td></tr>
</table>

</div>
</body>
</html>