<?php include '../download/download-list.php'; $downloads = getDownloadList('jdeveloper-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo @$value['prefix'].'<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: JDeveloper Extension</h1>

<p>Binary/hex editor plugin for <a class="urlextern" href="https://www.oracle.com/technologies/developer-tools/jdeveloper/jdeveloper.html">Oracle JDeveloper</a> and <a class="urlextern" href="https://www.oracle.com/database/technologies/appdev/sql-developer.html">SQLDeveloper</a> written in Java.</p>
<p>Use <strong>"Open as Binary"</strong> from File menu or in context menu.</p>

<p><img src="images/jdeveloper-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<p>To install copy to "jdeveloper/dropins" folder/directory.</p>

<p>There are various limitations:</p>
<ul>
  <li>Version for JDeveloper 12c requires Java 8</li>
  <li>No integration with save/undo operations</li>
</ul>

<p>JDeveloper <a href="https://forums.oracle.com/ords/apexds/post/new-3rd-party-extension-hexadecimal-editor-8121">forum thread</a> about this extension.</p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>JDeveloper Extension</td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['stb']); ?></td>
  <td><?php echoDownload($downloads['jdeveloper-extension']['dev']); ?></td></tr>
</table>

<h2 id="requirements">Requirements</h2>
<p>JDeveloper 11g or JDeveloper 12c or newer running on Java 8 or newer.</p>


<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-jdeveloper-extension" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-jdeveloper-extension</a></td></tr>
</table>

</div>
</body>
</html>