<?php include '../download/download-list.php'; $downloads = getDownloadList('editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="variant">Variant: Stand-Alone Editor</h1>
<p>Free and open source hexadecimal viewer/editor and component written in Java.</p>
<p><img src="../images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['stb']); ?></td>
  <td><?php echoDownload($downloads['editor']['dev']); ?></td></tr>
</table>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined" title="GitHub repository"><img src="../images/social/github.png" alt="[GitHub]"/> exbin/bined</a></td></tr>
</table>

<h2 id="news">News</h2>
<p>TODO</p>

</div>
</body>
</html>