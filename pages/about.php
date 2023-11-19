<div id="content">
<?php if (time() > filectime('author-alive.dat') + (60 * 60 * 24 * 90)) {
  echo '<p><h3 style="color: red; background-color: yellow;">This project is abandoned - author of this project is either dead or very long not updating</h3></p>';
} ?>
<p>Free and open source binary/hex viewer/editor and component written in Java.</p>
<p>This is part of the <a href="http://exbin.org">ExBin Project</a>.</p>
<p><img src="images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot" class="center" width="550"/></p>

<h2 id="features">Features</h2>
<ul>
  <li>Visualize data as numerical (hexadecimal) codes and text representation</li>
  <li>Codes can be also binary, octal or decimal</li>
  <li>Support for Unicode, UTF-8 and other charsets</li>
  <li>Insert and overwrite edit modes</li>
  <li>Searching for text / hexadecimal code with matching highlighting</li>
  <li>Support for undo/redo</li>
  <li>Support for files with size up to exabytes</li>
</ul>

<p>License: <a class="urlextern" href="https://www.apache.org/licenses/LICENSE-2.0">Apache License 2.0</a></p>
<p>See additional info about <a href="?concepts">concepts</a>.</p>
<p>Detailed <a href="?features">list of features</a>.</p>

<h2 id="latest_comment">Latest User Comment</h2>
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
<p>Add <a href="?add-comment">new comment</a>.</p>
<p>See <a href="?comments">list of comments</a>.</p>

</div>
</body>
</html>