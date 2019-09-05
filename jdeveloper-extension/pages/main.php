<?php include '../download/download-list.php'; $downloads = getDownloadList('jdeveloper-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<a name="variant"><h2>Variant: JDeveloper Extension</h2></a>

<p>Hexadecimal editor plugin for Oracle JDeveloper and SQLDeveloper written in Java.</p>
<p>Use <strong>"Open as Binary"</strong> from File menu or in context menu.</p>

<p><img src="images/jdeveloper-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<p>To install copy to "jdeveloper/dropins" folder/directory.</p>

<p>There are various limitations:</p>
<ul>
  <li>Version for JDeveloper 12c requires Java 8</li>
  <li>No integration with save/undo operations</li>
</ul>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>JDeveloper Extension</td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['stb']); ?></td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['dev']); ?></td></tr>
</table>

<a name="downloads"><h2>Source Codes</h2></a>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-jdeveloper-extension" title="GitHub repository"><img src="../images/social-github.png" alt="[GitHub]"/> exbin/bined-jdeveloper-extension</a></td></tr>
</table>

<p>TODO</p>
</div>
</body>
</html>