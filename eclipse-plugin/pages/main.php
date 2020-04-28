<?php include '../download/download-list.php'; $downloads = getDownloadList('eclipse-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h2 id="extension">Extension: Eclipse Plugin</h2>
<p>Binary/hexadecimal editor plugin for <a class="urlextern" href="https://www.eclipse.org/">Eclipse IDE</a> written in Java.</p>
<p><img src="images/eclipse-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<p>To install use update site or copy to eclipse/dropins and use Open with/Other - BinEd Editor.</p>

<p>Note: This plugin is very experimental. Please use other similar eclipse plugin for production use.</p>
<ul><li>Very limited / poor integration</li>
<li>Using wrapping of Swing GUI into SWT dialogs - works only partially depending on the platform / java version</li>
</ul>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Eclipse Platform Plugin</td>
  <td><?php echoDownload($downloads['eclipse-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['eclipse-plugin']['dev']); ?></td></tr>
</table>

<h2 id="published">Published</h2>
<table class="table">
<tr><th>Module Website&nbsp;</th></tr>
<tr>
  <td><a href="<?php echo $downloads['eclipse-plugin']['repository_url']; ?>"><?php echo $downloads['eclipse-plugin']['repository_title']; ?></a></td></tr>
</tr></table>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-eclipse-plugin" title="GitHub repository"><img src="../images/social/github.png" alt="[GitHub]"/> exbin/bined-eclipse-plugin</a></td></tr>
</table>

<p>Experimental plugin update site for Eclipse: <a href="update/">https://bined.exbin.org/eclipse-plugin/update</a></p>
<p>TODO</p>
</div>
</body>
</html>