<?php include '../download/download-list.php'; $downloads = getDownloadList('ghidra-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo @$value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: Ghidra Extension</h1>

<p>Binary/hex editor extension for <a class="urlextern" href="https://ghidra-sre.org/">Ghidra SRE</a> written in Java.</p>

<p>Extension has very limited integration.</p>

<p><img src="images/bined-ghidra-screenshot.png" alt="Extension screenshot" title="Extension screenshot" width="800"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Ghidra Extension</td>
  <td><?php echoDownload($downloads['ghidra-extension']['stb']); ?></td>
  <td><?php echoDownload($downloads['ghidra-extension']['dev']); ?></td>
</tr>
</table>

<h2 id="installation">Installation</h2>
<p>Use "File/Install Extensions" in project window or unzip jar file from downloaded zip file into Ghidra/Extensions directory of your Ghidra installation.</p>
<p>Create new tool and select Bined Extension for it.</p>
<p>Show BinEd window using BinEd toolbar action.</p>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-ghidra-extension" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-ghidra-extension</a></td></tr>
</table>

</div>
</body>
</html>