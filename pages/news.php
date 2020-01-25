<div id="content">
<?php if (time() > filectime('author-alive.dat') + (60 * 60 * 24 * 90)) {
  echo '<p><h3 style="color: red; background-color: yellow;">This project is abandoned - author of this project is either dead or very long not updating</h3></p>';
} ?>
<p>Free and open source binary/hexadecimal viewer/editor and component written in Java.</p>
<p>This is part of the <a href="http://exbin.org">ExBin Project</a>.</p>
<p><img src="images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<a name="latest_comment"><h2>Latest User Comment</h2></a>
<?php
function getline($fl) {
  $fp = @fgets($fl, 65536);
  $fp = substr($fp, 0, strlen($fp) - 1);
  return $fp;
}

$perpage = 10;
$count_file = fopen('pages/comments/count.txt', 'r');
$count = (int) getline($count_file);
fclose($count_file);

if ($count == 0) {
  echo '<p>There are no comments yet.</p>';
} else {
  $file = fopen('pages/comments/'.$count.'.txt', 'r');
  $time = getline($file);
  $author = getline($file);
  $comment = '';
  while (!feof($file)) {
  	  if ($comment != '') {
  	  	  $comment .= "<br/>";
  	  }
   	  $comment .= getline($file);
  }
  fclose($file);
      
  echo '<ul><li>';
  echo '<p>Comment from: <strong>'.$author.'</strong> on '.date('l jS \of F Y h:i:s A', $time).'</p>';
  echo '<p>'.$comment.'</p>';
  echo "</li></ul>\n";
}
?>
<p>See <a href="?comments">more comments</a>. Add <a href="?add-comment">new comment</a>.</p>

<a name="news"><h2>News</h2></a>
<ul>
<li><strong>2020-01-25:</strong> BinEd IntelliJ Plugin 0.2.2 Released<p>
<ul><li>Minor GUI improvements</li>
<li>Support for multiple decoders in debugging view</li>
<li>Display the number of bytes selected</li>
<li>Fixed opening via dialog crashes IntelliJ (mac)</li>
<li>Fixed "HIDE_DEFAULT_EDITOR is supported only for DumbAware providers" error message</li>
<li>Fixed NullPointerException when trying to hex-view bytearray in Debug mode</li>
<li>Fixed Editor stops responding when I use Find</li>
<li>Fixed Cursor position is lost if you switch tabs</li>
</ul></p></li>

<li><strong>2019-09-04:</strong> BinEd NetBeans Plugin 0.2.1 Released<p>
<ul><li>Action to show debug variables as binary data</li>
<li>Minor GUI improvements</li>
<li>Context aware popup menu</li>
<li>Go-to dialog position to support position from end</li>
<li>Go-to dialog position to support different numerical bases</li>
<li>Support for ENTER key in preview section</li>
</ul></p></li>

<li><strong>2019-08-22:</strong> BinEd IntelliJ Plugin 0.2.1 Released<p>
<ul><li>Minor GUI improvements</li>
<li>Context aware popup menu</li>
<li>Go-to dialog position to support position from end</li>
<li>Go-to dialog position to support different numerical bases</li>
<li>Support for ENTER key in preview section</li>
<li>Minor fix to view of native Java debug values</li>
<li>Minor fix to integration</li>
</ul></p></li>

<li><strong>2019-08-18:</strong> BinEd 0.2.0 Released<p>
<ul><li>Renamed to BinEd</li>
<li>Updated to newer version of library</li>
<li>Support for half-size space</li>
<li>Support for layout, theme and colors profiles</li>
<li>Added support for different numerical bases in status bar</li>
<li>Configurable address margin</li>
<li>Context aware popup menu</li>
<li>Go-to dialog position to support position from end</li>
<li>Go-to dialog position to support different numerical bases</li>
<li>Support for ENTER key in preview section</li>
</ul></p></li>

<li><strong>2019-08-15:</strong> BinEd JDeveloper Extension 0.2.0.1 Released<p>
<ul><li>Fixed issue with limitation to single editor only</li>
<li>Added legacy version for 11g</li>
</ul></p></li>
</ul>

<p>See list of <a href="?older-news">older news</a>.</p>
</div>
</body>
</html>