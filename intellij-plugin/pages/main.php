<?php include '../download/download-list.php'; $downloads = getDownloadList('intellij-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: IntelliJ Plugin</h1>

<p>Binary/hexadecimal editor plugin for <a class="urlextern" href="https://www.jetbrains.com/idea/">IntelliJ Idea IDE</a> and other IDEs based on IntelliJ Platform from <a class="urlextern" href="https://www.jetbrains.com/">JetBrains</a> written in Java.</p>
<p><img src="images/intellij-screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['stb']); ?></td>
  <td><?php echoDownload($downloads['intellij-plugin']['dev']); ?></td>
</tr>
</table>

<p><iframe style="border: none;" frameborder="none" width="245px" height="48px" src="https://plugins.jetbrains.com/embeddable/install/9339" target="_blank"></iframe></p>

<h2 id="published">Published</h2>
<table class="table">
<tr><th>Module Website&nbsp;</th></tr>
<tr>
  <td><a class="urlextern" href="<?php echo $downloads['intellij-plugin']['repository_url']; ?>"><?php echo $downloads['intellij-plugin']['repository_title']; ?></a></td>
</tr></table>
<p><img src="images/jetbrains-ref.png" alt="JetBrains" title="JetBrains"/>&nbsp;&nbsp; <a class="urlextern" href="https://jetbrains.com">JetBrains</a> kindly provided license for their products via their <a class="urlextern" href="https://www.jetbrains.com/community/opensource/">Free License Programs</a>.</p>

<h2>Features</h2>
<ul><li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Support for Unicode, UTF-8 and other charsets</li>
<li>Insert and overwrite edit modes</li>
<li>Searching for text / hexadecimal code with found matches highlighting</li>
<li>Support for undo/redo</li>
<li>Support for files with size up to exabytes</li>
<li>Show debug variables as binary data</li></ul>

<h2 id="installation">Installation</h2>
<p>In File/Settings/Plugins search for "bined" in Marketplace tab or use "Install plugin from disk" from additional actions menu if you want to install downloaded .zip file.</p>
<p>Alternative method is to unzip file into plugins directory to make it part of the IDE installation.</p>

<h2 id="usage">Usage</h2>
<ul><li>Use "Open as Binary" action in toolbar of "File/Open" dialog or "Open In/Binary Editor" in project files context menu.</li>
<li>Use "View as Binary" action in context menu in variables/debug window.</li>
<li>Associate file extension with Binary File file type in Options/Editor/File Types</li>
<li>Use "Byte-to-byte compare" in Compare files dialog</li>
<li>Use "Edit as Binary" in column context menu in DB view</li></ul>

<h2 id="known_issues">Known Issues</h2>
<ul>
<li>Editor can freeze with OutOfMemoryError: Java heap space if there is too many big modifications</li>
<li>In delta mode files can be corrupted, if they are changed by other applications at the same time</li>
<li>Memory leaks</li></ul>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-intellij-plugin" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-intellij-plugin</a></td></tr>
</table>

</div>
</body>
</html>