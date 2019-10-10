<?php include '../download/download-list.php'; $downloads = getDownloadList('intellij-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<a name="variant"><h2>Variant: IntelliJ Plugin</h2></a>

<p>Binary/hexadecimal editor plugin for <a href="https://www.jetbrains.com/idea/">IntelliJ Idea IDE</a> and other IDEs based on IntelliJ Platform from <a href="https://www.jetbrains.com/">JetBrains</a> written in Java.</p>
<p><img src="images/intellij-screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['intellij-plugin']['dev']); ?></td></tr>
</table>

<a name="published"><h2>Published</h2></a>
<table class="table">
<tr><th>Module Website&nbsp;</th></tr>
<tr>
  <td><a href="<?php echo $downloads['intellij-plugin']['repository_url']; ?>"><?php echo $downloads['intellij-plugin']['repository_title']; ?></a></td></tr>
</tr></table>

<a name="source_codes"><h2>Source Codes</h2></a>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-intellij-plugin" title="GitHub repository"><img src="../images/social/github.png" alt="[GitHub]"/> exbin/bined-intellij-plugin</a></td></tr>
</table>

<p>TODO</p>
</div>
</body>
</html>