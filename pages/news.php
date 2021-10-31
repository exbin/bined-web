<div id="content">
<?php if (time() > filectime('author-alive.dat') + (60 * 60 * 24 * 90)) {
  echo '<p><h3 style="color: red; background-color: yellow;">This project is abandoned - author of this project is either dead or very long not updating</h3></p>';
} ?>
<p>Free and open source binary/hexadecimal viewer/editor and component written in Java.</p>
<p>This is part of the <a href="http://exbin.org">ExBin Project</a>.</p>
<p><img src="images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot" class="center" width="550"/></p>

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
<p>See <a href="?comments">more comments</a>. Add <a href="?add-comment">new comment</a>.</p>

<h2 id="news">News</h2>
<ul>
<li><p><strong>2021-10-31:</strong> BinEd 0.2.1 Released</p>
<ul><li>New app icon</li>
<li>Support for multiple files / tabs</li>
<li>Added string field in values panel (issue #8)</li>
<li>Added templates for profiles</li>
<li>Added insert data dialog</li>
<li>Added files compare dialog</li>
<li>Display the number of bytes selected</li>
<li>Fixed issue with creating new file</li>
</ul></li>

<li><p><strong>2021-08-29:</strong> Bined NetBeans Plugin 0.2.2 Released</p>
<ul><li>Minor GUI improvements</li>
<li>Switched to Gradle building</li>
<li>Action to show debug variables as binary data in ToolTip view</li>
<li>Support for multiple decoders in debugging view</li>
<li>Display the number of bytes selected</li>
<li>Added string field in values panel</li></ul></li>

<li><p><strong>2021-08-29:</strong> BinEd Library 0.2.0 Released</p>
<ul><li>Renamed to BinEd</li>
<li>Support for half-size space</li>
<li>Support for layout, theme and colors profiles</li>
<li>Context aware popup menu</li>
<li>Support for ENTER key in preview section</li>
</ul></li>


<li><p><strong>2021-04-11:</strong> BinEd IntelliJ Plugin 0.2.4 Released</p>
<ul><li>Added string field in values panel</li>
<li>Fixed 2021.1: Can't close any tabs once a binary file is opened</li>
</ul></li>

<li><p><strong>2020-07-30:</strong> BinEd IntelliJ Plugin 0.2.3 Released</p>
<ul><li>Fixed debugger array support for PHP</li>
<li>Added binary file type</li>
</ul></li>

</ul>

<p>See list of <a href="?older-news">older news</a>.</p>
</div>
</body>
</html>