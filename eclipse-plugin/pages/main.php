<?php include '../download/download-list.php'; $downloads = getDownloadList('eclipse-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<p>Hexadecimal editor plugin for Eclipse written in Java.</p>
<p><img src="images/eclipse-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Eclipse Platform Plugin</td>
  <td><?php echoDownload($downloads['eclipse-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['eclipse-plugin']['dev']); ?></td></tr>
</table>

<a name="downloads"><h2>Source Codes</h2></a>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-eclipse-plugin" title="GitHub repository"><img src="../images/social-github.png" alt="[GitHub]"/> exbin/bined-eclipse-plugin</a></td></tr>
</table>

<p>Copy to eclipse/dropins and use Open with/Other - BinEd Editor.</p>
<p>TODO</p>
</div>
</body>
</html>