<?php include '../download/download-list.php'; $downloads = getDownloadList('jgrasp-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: JGrasp Extension</h1>

<p>Binary / hex editor plugin for <a class="urlextern" href="https://www.jgrasp.org/">jGRASP</a> written in Java.</p>
<p>Use <strong>"Open as Binary"</strong> from File menu or in context menu.</p>

<p><img src="images/jgrasp-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>jGrasp Extension</td>
  <td><?php echoDownload($downloads['jgrasp-extension']['stb']); ?></td>
  <td><?php echoDownload($downloads['jgrasp-extension']['dev']); ?></td></tr>
</table>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-jgrasp-extension" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-jgrasp-extension</a></td></tr>
</table>

<p>TODO</p>
</div>
</body>
</html>