<?php include '../download/download-list.php'; $downloads = getDownloadList('editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<a name="variant"><h2>Variant: Stand-Alone Editor</h2></a>
<p>Free and open source hexadecimal viewer/editor and component written in Java.</p>
<p><img src="../images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['stb']); ?></td>
  <td><?php echoDownload($downloads['editor']['dev']); ?></td></tr>
</table>

<a name="source_codes"><h2>Source Codes</h2></a>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined" title="GitHub repository"><img src="../images/social/github.png" alt="[GitHub]"/> exbin/bined</a></td></tr>
</table>

<a name="news"><h2>News</h2></a>
<p>TODO</p>

</div>
</body>
</html>