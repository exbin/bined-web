<div id="content">
<?php if ((time() > filectime('author-alive.dat') + (60 * 60 * 24 * 90))) { // @$_GET['alivetest'] == 1 || 
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
  <li>Searching for text / hexadecimal code with matches highlighting</li>
  <li>Support for undo/redo</li>
  <li>Support for files with size up to exabytes</li>
</ul>

<p>License: <a class="urlextern" href="https://www.apache.org/licenses/LICENSE-2.0">Apache License 2.0</a></p>
<p>See additional info about <a href="?p=concepts">concepts</a>.</p>
<p>Detailed <a href="?p=features">list of features</a>.</p>

</div>
</body>
</html>