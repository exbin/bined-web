<?php include 'download/download-list.php'; $downloads = getDownloadList(null);
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<a name="downloads"><h2>Downloads</h2></a>
<p>
<a href="download/?<?php echo $downloads['editor']['stb'][0]['file']; ?>" class="button button-green"><img src="images/windows-32x32.png" style="vertical-align: middle;" width="28" height="28" alt="[WIN]"/>&nbsp;Download Installer (Windows)</a>&nbsp;
<a href="download/?<?php echo $downloads['editor']['stb'][1]['file']; ?>" class="button button-green"><img src="images/zip-32x32.png" style="vertical-align: middle;" width="28" height="28" alt="[WIN]"/>&nbsp;Download ZIP (Other platforms)</a></p>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['stb']); ?></td>
<tr><td>Single JAR Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['stb']); ?></td>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['stb']); ?>-</td>
<tr><td>Library/Example</td>
  <td><?php echoDownload($downloads['library']['stb']); ?></td>
</table>
<a name="integration"><h3>IDE and Applications Integration</h3></a>
<table class="downloads">
<tr><th>Application&nbsp;</th><th>Stable&nbsp;</th><th>Module Website&nbsp;</th></th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['stb']); ?></td>
  <td><a href="http://plugins.netbeans.org/plugin/67898">NetBeans Plugins Portal</a></td></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['stb']); ?></td>
  <td><a href="https://plugins.jetbrains.com/plugin/9339">IntelliJ IDEA Plugins</a></td></tr>
<tr><td>Eclipse Platform</td>
  <td><?php echoDownload($downloads['eclipse-plugin']['stb']); ?></td>
  <td><a href="https://marketplace.eclipse.org/content/bined-binaryhexadecimal-editor">Eclipse Marketplace</a></td></tr>
<tr><td>JDeveloper Extension</td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['stb']); ?></td>
  <td>-</td></tr>
<tr><td>BlueJ Extension</td>
  <td><?php echoDownload($downloads['bluej-extension']['stb']); ?></td>
  <td>-</td></tr>
</table>
<a name="plugins"><h3>Plugins</h3></a>
<p>Following plugins work only for standard version.</p>
<table class="plugins">
<tr><th>Plugin&nbsp;</th><th>Download&nbsp;</th><th>Repository&nbsp;</th></tr>
<tr><td>Czech Language</td><td><a href="download/?exbin-framework-language-cs_CZ-0.2.0-SNAPSHOT.jar" title="Download"><img src="images/jar.png" alt="[JAR]" width="16" height="16"/> 0.2.0</a> [2017-01-08]</td><td>-</td></tr>
</table>

<a name="known_issues"><h2>Known Issues</h2></a>
<ul><li>Editor can freeze with OutOfMemoryError: Java heap space if there is too many big modifications</li>
<li>In delta mode files can be corrupted, if they are changed with other applications at the same time</li>
<li>Memory leaks</li>
</ul>

<a name="development"><h3>Development Versions Download</h3></a>
<p>Development versions are likely untested/broken and at your own risk!</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Editor</td>
  <td><?php echoDownload($downloads['editor']['dev']); ?></td></tr>
<tr><td>Single JAR Basic Editor</td>
  <td><?php echoDownload($downloads['basic-editor']['dev']); ?></td></tr>
<tr><td>Android App</td>
  <td><?php echoDownload($downloads['android']['dev']); ?></td></tr>
<tr><td>Library/Example</td>
  <td><?php echoDownload($downloads['library']['dev']); ?></td></tr>
</table>
<a name="integration"><h3>IDE and Applications Integration</h3></a>
<table class="downloads-dev">
<tr><th>Application&nbsp;</th><th>Development&nbsp;</th><th>Module Website&nbsp;</th></th></tr>
<tr><td>NetBeans Platform Plugin</td>
  <td><?php echoDownload($downloads['netbeans-plugin']['dev']); ?></td>
  <td><a href="http://plugins.netbeans.org/plugin/67898">NetBeans Plugins Portal</a></td></tr>
<tr><td>IntelliJ Platform Plugin</td>
  <td><?php echoDownload($downloads['intellij-plugin']['dev']); ?></td>
  <td><a href="https://plugins.jetbrains.com/plugin/9339">IntelliJ IDEA Plugins</a></td></tr>
<tr><td>Eclipse Platform</td>
  <td><?php echoDownload($downloads['eclipse-plugin']['dev']); ?>-</td>
  <td><a href="https://marketplace.eclipse.org/content/bined-binaryhexadecimal-editor">Eclipse Marketplace</a></td></tr>
<tr><td>JDeveloper Extension</td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['dev']); ?></td>
  <td>-</td></tr>
<tr><td>BlueJ Extension</td>
  <td><?php echoDownload($downloads['bluej-extension']['dev']); ?></td>
  <td>-</td></tr>
</table>

</div>
</body>
</html>