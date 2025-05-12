<?php include '../download/download-list.php'; $downloads = getDownloadList('library');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1>BinEd Component Library</h1>

<p>Free and open source library for binary/hex viewer/editor component written in Java.</p>
<p><img src="images/bined-swing-demo.png" alt="Library demo screenshot" title="Example usage screenshot"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Library</td>
  <td><?php echoDownload($downloads['library']['stb']); ?></td>
  <td><?php echoDownload($downloads['library']['dev']); ?></td></tr>
</table>

<h2>Features</h2>
<ul>
<li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Insert and overwrite edit modes</li>
<li>Support for selection and clipboard actions</li>
<li>Scrollbars fixed or optional, character/line or pixel precision</li>
<li>Support for showing unprintable/whitespace characters</li>
<li>Support for undo/redo</li>
<li>Support for encoding selection</li>
<li>Support for data sources up to exabytes</li>
</ul>

<h2 id="web_demo">Web Demo</h2>
<p>You can try <a href="web/">BinEd library example running in browser</a>.<br><em>Using <a href="https://labs.leaningtech.com/cheerpj">CheerpJ</a> by Leaning Technologies.</em></p>

<h2 id="published">Published</h2>
<table class="table">
<tr><th>Maven&nbsp;</th></tr>
<tr>
  <td><a class="urlextern" href="<?php echo $downloads['library']['repository_url']; ?>"><?php echo $downloads['library']['repository_title']; ?></a></td>
</tr></table>

<h2>Known Issues</h2>
<ul>
<li>Only Swing components are currently usable</li>
</ul>

<h2 id="usage">Usage</h2>

<table class="downloads">
<tr><th>Example&nbsp;</th><th>Demo App&nbsp;</th><th>Basic Editor&nbsp;</th></tr>
<tr>
  <td><a href="https://github.com/exbin/bined-lib-java/tree/0.2/apps/bined-swing-example/src/main/java/org/exbin/bined/swing/example/BinEdExample.java"><img src="../images/ref/github.png" alt="[GitHub]"/> BinEdExample</a></td>
  <td><a href="https://github.com/exbin/bined-lib-java/tree/0.2/apps/bined-swing-demo/src/main/java/org/exbin/bined/swing/demo/BinEdDemo.java"><img src="../images/ref/github.png" alt="[GitHub]"/> BinEdDemo</a></td>
  <td><a href="https://github.com/exbin/bined-lib-java/tree/0.2/apps/bined-editor-basic/src/main/java/org/exbin/bined/editor/basic/BinEdEditorBasic.java"><img src="../images/ref/github.png" alt="[GitHub]"/> BinEdDemo</a></td>
</tr>
</table>

<p>For development build:</p>

<table class="downloads">
<tr><th class="dev">Example&nbsp;</th><th class="dev">Demo App&nbsp;</th><th class="dev">Basic Editor&nbsp;</th></tr>
<tr>
  <td><a href="https://github.com/exbin/bined-lib-java/blob/master/apps/bined-swing-example/src/main/java/org/exbin/bined/swing/example/BinEdExample.java"><img src="../images/ref/github.png" alt="[GitHub]"/> BinEdExample</a></td>
  <td><a href="https://github.com/exbin/bined-lib-java/blob/master/apps/bined-swing-demo/src/main/java/org/exbin/bined/swing/demo/BinEdDemo.java"><img src="../images/ref/github.png" alt="[GitHub]"/> BinEdDemo</a></td>
  <td><a href="https://github.com/exbin/bined-lib-java/blob/master/apps/bined-editor-basic/src/main/java/org/exbin/bined/editor/basic/BinEdEditorBasic.java"><img src="../images/ref/github.png" alt="[GitHub]"/> BinEdDemo</a></td>
</tr>
</table>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-lib-java" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-lib-java</a></td></tr>
</table>

</div>
</body>
</html>