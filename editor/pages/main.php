<?php include '../download/download-list.php'; $downloads = getDownloadList('editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="variant">Variant: Desktop Application</h1>
<p>Free and open source stand-alone hex viewer/editor written in Java.</p>
<p><img src="../images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['stb']); ?></td>
  <td><?php echoDownload($downloads['editor']['dev']); ?></td></tr>
</table>

<h2 id="web_demo">Web Demo</h2>
<p>You can try <a href="web/">BinEd editor running in browser</a>.<br><em>Using <a href="https://labs.leaningtech.com/cheerpj">CheerpJ</a> by Leaning Technologies.</em></p>

<h2 id="published">Published</h2>
<table class="table">
<tr><th>Website&nbsp;</th></tr>
<tr>
  <td><a href="https://sourceforge.net/projects/bined/">SourceForge page</a></td>
</tr></table>

<h2>Features</h2>
<ul><li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Support for Unicode, UTF-8 and other charsets</li>
<li>Insert and overwrite edit modes</li>
<li>Searching for text / hexadecimal code with matching highlighting</li>
<li>Support for undo/redo</li>
<li>Support for files with size up to exabytes</li></ul>

<h2 id="known_issues">Known Issues</h2>
<ul>
<li>Editor can freeze with OutOfMemoryError: Java heap space if there is too many big modifications</li>
<li>In delta mode files can be corrupted, if they are changed with other applications at the same time</li>
<li>Memory leaks</li></ul>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined</a></td></tr>
</table>

</div>
</body>
</html>