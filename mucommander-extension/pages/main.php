<?php include '../download/download-list.php'; $downloads = getDownloadList('jdeveloper-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: MuCommander Extension</h1>

<p>Binary/hex editor extension for <a class="urlextern" href="https://www.mucommander.com">muCommander</a> written in Java.</p>
<p>Extension was included into muCommander: Use view on binary files in muCommander 0.9.4 or later.</p>

<p><img src="images/mucommander-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

</div>
</body>
</html>