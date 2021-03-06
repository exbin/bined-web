<?php include 'download/download-list.php'; $downloads = getDownloadList(null);
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="downloads">Downloads</h1>
<p>Primary editor downloads:</p>
<p>
<a href="download/?<?php echo $downloads['editor']['stb'][0]['file']; ?>" class="button button-green"><img src="images/filetypes/windows-32x32.png" style="vertical-align: middle;" width="28" height="28" alt="[WIN]"/>&nbsp;Download Installer (Windows)</a>&nbsp;
<a href="download/?<?php echo $downloads['editor']['stb'][1]['file']; ?>" class="button button-green"><img src="images/filetypes/zip-32x32.png" style="vertical-align: middle;" width="28" height="28" alt="[ZIP]"/>&nbsp;Download ZIP (Other platforms)</a></p>
<h2 id="stable_downloads">Stable downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['stb']); ?></td>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['stb']); ?>-</td>
<tr><td>Library/Example</td>
  <td><?php echoDownload($downloads['library']['stb']); ?></td>
<tr><td>Single JAR Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['stb']); ?></td>
</table>
<h3 id="integration">IDE and Applications Integration</h3>
<table class="downloads">
<tr><th>Application&nbsp;</th><th>Stable&nbsp;</th><th>Module Website&nbsp;</th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['stb']); ?></td>
  <td><a href="<?php echo $downloads['netbeans-plugin']['repository_url']; ?>"><?php echo $downloads['netbeans-plugin']['repository_title']; ?></a></td></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['stb']); ?></td>
  <td><a href="<?php echo $downloads['intellij-plugin']['repository_url']; ?>"><?php echo $downloads['intellij-plugin']['repository_title']; ?></a></td></tr>
<tr><td>Eclipse Platform</td>
  <td><?php echoDownload($downloads['eclipse-plugin']['stb']); ?></td>
  <td><a href="<?php echo $downloads['eclipse-plugin']['repository_url']; ?>"><?php echo $downloads['eclipse-plugin']['repository_title']; ?></a></td></tr>
<tr><td>JDeveloper Extension</td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['stb']); ?></td>
  <td>-</td></tr>
<tr><td>BlueJ Extension</td>
  <td><?php echoDownload($downloads['bluej-extension']['stb']); ?></td>
  <td>-</td></tr>
<tr><td>jEdit Plugin</td>
  <td>-</td>
  <td>-</td></tr>
</table>
<h3 id="plugins">Plugins</h3>
<p>Following plugins work only for standard version.</p>
<table class="plugins">
<tr><th>Plugin&nbsp;</th><th>Download&nbsp;</th><th>Repository&nbsp;</th></tr>
<tr><td>Czech Language</td><td><a href="download/?exbin-framework-language-cs_CZ-0.2.0-SNAPSHOT.jar" title="Download"><img src="images/filetypes/jar.png" alt="[JAR]" width="16" height="16"/> 0.2.0</a> [2017-01-08]</td><td>-</td></tr>
</table>

<h3 id="known_issues">Known Issues</h3>
<ul><li>Editor can freeze with OutOfMemoryError: Java heap space if there is too many big modifications</li>
<li>In delta mode files can be corrupted, if they are changed with other applications at the same time</li>
<li>Memory leaks</li>
</ul>

<h2 id="development">Development Versions Download</h2>
<p>Development versions are likely untested/broken and at your own risk!</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['dev']); ?></td></tr>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['dev']); ?></td></tr>
<tr><td>Library/Example</td>
  <td><?php echoDownload($downloads['library']['dev']); ?></td></tr>
<tr><td>Single JAR Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['dev']); ?></td></tr>
</table>
<h3 id="development_integration">IDE and Applications Integration</h3>
<table class="downloads-dev">
<tr><th>Application&nbsp;</th><th>Development&nbsp;</th><th>Module Website&nbsp;</th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['dev']); ?></td>
  <td><a href="<?php echo $downloads['netbeans-plugin']['repository_url']; ?>"><?php echo $downloads['netbeans-plugin']['repository_title']; ?></a></td></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['dev']); ?></td>
  <td><a href="<?php echo $downloads['intellij-plugin']['repository_url']; ?>"><?php echo $downloads['intellij-plugin']['repository_title']; ?></a></td></tr>
<tr><td>Eclipse Platform</td>
  <td><?php echoDownload($downloads['eclipse-plugin']['dev']); ?></td>
  <td><a href="<?php echo $downloads['eclipse-plugin']['repository_url']; ?>"><?php echo $downloads['eclipse-plugin']['repository_title']; ?></a></td></tr>
<tr><td>JDeveloper Extension</td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['dev']); ?></td>
  <td>-</td></tr>
<tr><td>BlueJ Extension</td>
  <td><?php echoDownload($downloads['bluej-extension']['dev']); ?></td>
  <td>-</td></tr>
<tr><td>jEdit Plugin</td>
  <td><?php echoDownload($downloads['jedit-plugin']['dev']); ?></td>
  <td>-</td></tr>
</table>

</div>
</body>
</html>