<?php include '../download/download-list.php'; $downloads = getDownloadList('netbeans-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<p>Hexadecimal editor plugin for NetBeans IDE written in Java.</p>
<p><img src="images/netbeans-screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>NetBeans IDE Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['netbeans-plugin']['dev']); ?></td></tr>
</table>

<p>TODO</p>
</div>
</body>
</html>