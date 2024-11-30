<?php include '../download/download-list.php'; $downloads = getDownloadList('library');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?f='.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1>BinEd Component Library</h1>

<p>Free and open source library for binary/hex viewer/editor component written in Java.</p>
<p><img src="../images/example_screenshot.png" alt="Example usage screenshot" title="Example usage screenshot"/></p>

<h2 id="downloads">Downloads</h2>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th class="dev">Development&nbsp;</th></tr>
<tr><td>Library</td>
  <td><?php echoDownload($downloads['library']['stb']); ?></td>
  <td><?php echoDownload($downloads['library']['dev']); ?></td></tr>
</table>

<h2>Features</h2>
<ul>
<li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Insert and overwrite edit modes</li>
<li>Support for selection and clipboard actions</li>
<li>Scrollbars fixed or optional, character/line or pixel precision</li>
<li>Support for showing unprintable/whitespace characters</li>
<li>Support for undo/redo</li>
<li>Support for encoding selection</li>
<li>Searching for text / hexadecimal code with matching highlighting</li>
<li>Support for data sources up to exabytes</li>
<li>Delta mode - Only changes are stored in memory</li>
</ul>

<h2 id="web_demo">Web Demo</h2>
<p>You can try <a href="web/">BinEd library example running in browser</a>.<br><em>Using <a href="https://labs.leaningtech.com/cheerpj">CheerpJ</a> by Leaning Technologies.</em></p>

<h2>Limitations</h2>
<ul>
<li>Only Swing components are currently usable</li>
</ul>

<h2>Known Issues</h2>
<ul>
<li>In current version tab key works only if CodeArea has set:
<span>setFocusTraversalKeysEnabled(false);</span></li>
</ul>

<h2 id="usage">Usage</h2>
<p>Example component usage screenshot:</p>
<p><img src="images/usage_screenshot.png" alt="Usage screenshot" title="Usage screenshot"/></p>

<p>You can use this component for your own project using one of the following methods:</p>

<ul><li>Download library and include it with your project</li>
<li>Download sources and modify it for your needs</li>
<li>Import library using Maven (groupId:artifactId:version):<br/>
  <strong>org.exbin.bined:bined-swing:0.2.1</strong><br/>
  <strong>org.exbin.auxiliary:binary_data:0.2.1</strong>
</li></ul>

<p>To use the component, create new instance and fill it with some data.</p>
<div class="code_example">
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">BinEdExample</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">final</span> JFrame frame <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> JFrame<span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;BinEd Frame&quot;</span><span style="color: #333333">);</span>
        CodeArea codeArea <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> CodeArea<span style="color: #333333">();</span>
        codeArea<span style="color: #333333">.</span><span style="color: #0000CC">setContentData</span><span style="color: #333333">(</span><span style="color: #008800; font-weight: bold">new</span> ByteArrayEditableData<span style="color: #333333">(</span><span style="color: #008800; font-weight: bold">new</span> <span style="color: #333399; font-weight: bold">byte</span><span style="color: #333333">[]{</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">}));</span>
        frame<span style="color: #333333">.</span><span style="color: #0000CC">add</span><span style="color: #333333">(</span>codeArea<span style="color: #333333">);</span>
        frame<span style="color: #333333">.</span><span style="color: #0000CC">setSize</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">1000</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">600</span><span style="color: #333333">);</span>
        frame<span style="color: #333333">.</span><span style="color: #0000CC">setVisible</span><span style="color: #333333">(</span><span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></div>
</div>

<h2 id="source_codes">Source Codes</h2>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-lib-java" title="GitHub repository"><img src="../images/ref/github.png" alt="[GitHub]"/> exbin/bined-lib-java</a></td></tr>
</table>

</div>
</body>
</html>