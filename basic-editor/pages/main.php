<?php include '../download/download-list.php'; $downloads = getDownloadList('basic-editor');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="variant">Variant: Basic Editor</h1>
<p>Free and open source basic hex editor written in Java.</p>
<p><img src="images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<p>Basic minimalist version provided as single jar.</p>
<p>Java version 8 or later must be installed. To run use "java -jar filename.jar" or in some operation systems jar files can be executed directly.</p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['stb']); ?></td>
  <td><?php echoDownload($downloads['basic-editor']['dev']); ?></td></tr>
</table>

<h2 id="web_demo">Web Demo</h2>
<p>You can try <a href="web/">BinEd basic editor running in browser</a>.</p>

</div>
</body>
</html>