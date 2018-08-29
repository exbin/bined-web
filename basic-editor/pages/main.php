<?php include '../download/download-list.php'; $downloads = getDownloadList('basic-editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<p>Free and open source basic hexadecimal editor written in Java.</p>
<p><img src="images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<p>Basic minimalist version provided as single jar.</p>
<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['stb']); ?></td>
  <td><?php echoDownload($downloads['basic-editor']['dev']); ?></td></tr>
</table>

</div>
</body>
</html>