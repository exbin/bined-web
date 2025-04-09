<?php include '../download/download-list.php'; $downloads = getDownloadList('eclipse-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: Eclipse Plugin</h1>
<p>Binary/hex editor plugin for <a class="urlextern" href="https://www.eclipse.org/">Eclipse IDE</a> written in Java.</p>
<p><img src="images/eclipse-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<p>This plugin has limited capabilities</p>
<ul><li>Using Swing GUI wrapping in SWT dialogs - it doesn''t fit native look and feel and have various rendering issues depending on system / java version</li>
<li>Poor integration</li>
</ul>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Eclipse Platform Plugin</td>
  <td><?php echoDownload($downloads['eclipse-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['eclipse-plugin']['dev']); ?></td></tr>
</table>

<h2 id="requirements">Requirements</h2>
<p>Eclipse IDE or product based on Eclipse Platform 4.7 (Oxygen) or newer.</p>

<h2 id="published">Published</h2>
<table class="table">
<tr><th>Module Website&nbsp;</th></tr>
<tr>
  <td><a class="urlextern" href="<?php echo $downloads['eclipse-plugin']['repository_url']; ?>"><?php echo $downloads['eclipse-plugin']['repository_title']; ?></a></td></tr>
</tr></table>

<h2 id="usage">Usage</h2>

<ul><li>Use "<strong>Open With/BinEd Binary/Hex Editor</strong>" action in project explorer context menu</li>
<li>Use "<strong>View as Binary</strong>" in Variables window</li></ul>

<h2 id="installation">Installation</h2>

<p>Choose one of the following options:</p>
<ul><li>In Help/Eclipse Marketplace search for bined and press install button</li>
<li>In Help/Install new software add plugin update site "<a href="update/">https://bined.exbin.org/eclipse-plugin/update</a>" and install content</li>
<li>Copy downloaded jar file to eclipse/dropins directory</li></ul>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-eclipse-plugin" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-eclipse-plugin</a></td></tr>
</table>

</div>
</body>
</html>