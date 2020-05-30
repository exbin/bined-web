<?php include '../download/download-list.php'; $downloads = getDownloadList('jedit-plugin');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="extension">Extension: jEdit Plugin</h1>

<p>Binary/hexadecimal editor plugin for <a class="urlextern" href="http://www.jedit.org/">jEdit</a> written in Java.</p>
<p>TODO</p>

<p><img src="images/jedit-screenshot.png" alt="Editor screenshot" title="Editor screenshot" width="800"/></p>

<p>TODO</p>
</div>
</body>
</html>