<?php include '../download/download-list.php'; $downloads = getDownloadList('bluej-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: BlueJ Extension</h1>
<p>Binary/hex editor extension for BlueJ written in Java.</p>
<p>See <a class="urlextern" href="https://bluej.org/extensions/extensions.html">BlueJ Extensions</a> page for installation instruction.</p>
<p><img src="images/bluej-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>BlueJ Extension</td>
  <td><?php echoDownload($downloads['bluej-extension']['stb']); ?></td>
  <td><?php echoDownload($downloads['bluej-extension']['dev']); ?></td></tr>
</table>

<h2>Features</h2>
<ul><li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Support for Unicode, UTF-8 and other charsets</li>
<li>Insert and overwrite edit modes</li>
<li>Searching for text / hexadecimal code with found matches highlighting</li>
<li>Support for undo/redo</li>
<li>Support for files with size up to exabytes</li></ul>

<h2 id="installation">Installation</h2>
<p>Put the downloaded jar file into bluej/lib/extensions2 directory/folder.</p>

<h2 id="usage">Usage</h2>
<p>
<ul><li>Use "Open File As Binary" in "Tools" main menu to open file in file system</li>
<li>Use "Open As Binary" in context menu for classes / files</li></ul>
</p> 

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-bluej-extension" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-bluej-extension</a></td></tr>
</table>
</div>
</body>
</html>