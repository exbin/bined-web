<?php include '../download/download-list.php'; $downloads = getDownloadList('jdeveloper-extension');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<a name="variant"><h2>Variant: MuCommander Extension</h2></a>

<p>Binary/hexadecimal editor extension for <a href="https://www.mucommander.com">muCommander</a> written in Java.</p>
<p>Use view on binary files.</p>

<p><img src="images/mucommander-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<p>TODO</p>
</div>
</body>
</html>