<?php include '../download/download-list.php'; $downloads = getDownloadList('netbeans-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: NetBeans Plugin</h1>

<p>Binary/hexadecimal editor plugin for <a class="urlextern" href="http://netbeans.apache.org/">NetBeans IDE and NetBeans Platform</a> written in Java.</p>
<p><img src="images/netbeans-screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['netbeans-plugin']['dev']); ?></td>
</tr>
</table>

<h2 id="published">Published</h2>
<table class="table">
<tr><th>Module Website&nbsp;</th></tr>
<tr>
  <td><a href="<?php echo $downloads['netbeans-plugin']['repository_url']; ?>"><?php echo $downloads['netbeans-plugin']['repository_title']; ?></a></td>
</tr></table>

<h2>Features</h2>
<ul><li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Support for Unicode, UTF-8 and other charsets</li>
<li>Insert and overwrite edit modes</li>
<li>Searching for text / hexadecimal code with found matches highlighting</li>
<li>Support for undo/redo</li>
<li>Support for files with size up to exabytes</li>
<li>Show debug variables as binary data</li></ul>

<h2 id="installation">Installation</h2>
<p>In Tools/Plugins in Available Plugins tab search for "bined" or in Downladed tab "Add Plugins" if you want to install .nbm file.</p>

<h2 id="usage">Usage</h2>
<p>Use "Open as Binary" action in main "File" menu or in project files context menu.<br/>
Use "View as Binary" action in context menu in variables/debug window.</p>

<h2 id="known_issues">Known Issues</h2>
<ul>
<li>Editor can freeze with OutOfMemoryError: Java heap space if there is too many big modifications</li>
<li>In delta mode files can be corrupted, if they are changed with other applications at the same time</li>
<li>Memory leaks</li></ul>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-netbeans-plugin" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-netbeans-plugin</a></td></tr>
</table>

</div>
</body>
</html>