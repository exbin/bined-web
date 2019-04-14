<div id="content">
<?php if (time() > filectime('author-alive.dat') + (60 * 60 * 24 * 90)) {
  echo '<p><h3 style="color: red; background-color: yellow;">This project is abandoned - author of this project is either dead or very long not updating</h3></p>';
} ?>
<p>Free and open source hexadecimal viewer/editor and component written in Java.</p>
<p>This is part of the <a href="http://exbin.org">ExBin Project</a>.</p>
<p><img src="images/editor_screenshot.png" alt="Editor screenshot" title="Editor screenshot"/></p>

<h2 style="color: red">This website is still under construction!</h2>

<a name="news"><h2>News</h2></a>
<ul>
<li><strong>2019-04-13:</strong> BinEd NetBeans &amp; IntelliJ Plugin 0.2.0 Released<p>
<ul><li>Renamed to BinEd</li>
<li>Updated to newer version of library</li>
<li>Support for half-size space</li>
<li>Support for layout, theme and colors profiles</li>
<li>Added support for different numerical bases in status bar</li>
<li>Configurable address margin</li>
<li>Fixed issue with copy as code for debug view</li>
</ul></p></li>

<li><strong>2018-08-24:</strong> DeltaHex IntelliJ Plugin 0.1.7 Released<p>
<ul><li>Fixed issue with debugging in CLion (issue #4)</li>
<li>Fixed issue with goto does not scrolling window (issue #5)</li>
<li>Added basic support for debug view of bytearray and bytes for Python</li>
</ul></p></li>

<li><strong>2018-05-31:</strong> Project renamed to BinEd + website updated<p></p></li>

<li><strong>2018-03-05:</strong> DeltaHex IntelliJ Plugin Hot Fix 0.1.6.1 Released<p>
<ul><li>Fixed issue with byte array / NPE</li>
</ul></p></li>

<li><strong>2018-03-05:</strong> DeltaHex IntelliJ Plugin 0.1.6 Released<p>
<ul><li>Added "Show as hex" action for debugger (native types and native arrays only)</li>
<li>Show "Document changed" dialog on window close</li>
<li>Fixed Unknown property name: 'modified' (issue #3)</li>
</ul></p></li>
</ul>

<p>See list of <a href="?older-news">older news</a>.</p>
</div>
</body>
</html>