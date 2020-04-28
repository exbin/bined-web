<?php include '../download/download-list.php'; $downloads = getDownloadList('netbeans-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h2 id="extension">Extension: NetBeans Plugin</h2>

<p>Binary/hexadecimal editor plugin for <a class="urlextern" href="http://netbeans.apache.org/">NetBeans IDE and NetBeans Platform</a> written in Java.</p>
<p><img src="images/netbeans-screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['netbeans-plugin']['dev']); ?></td>
</tr></table>

<h2 id="published">Published</h2>
<table class="table">
<tr><th>Module Website&nbsp;</th></tr>
<tr>
  <td><a href="<?php echo $downloads['netbeans-plugin']['repository_url']; ?>"><?php echo $downloads['netbeans-plugin']['repository_title']; ?></a></td>
</tr></table>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-netbeans-plugin" title="GitHub repository"><img src="../images/social/github.png" alt="[GitHub]"/> exbin/bined-netbeans-plugin</a></td></tr>
</table>

<p>TODO</p>
</div>
</body>
</html>