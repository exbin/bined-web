<?php include '../download/download-list.php'; $downloads = getDownloadList('library');
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo '<a href="../download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="../images/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<p>Free and open source library for hexadecimal component written in Java.</p>
<p><img src="../images/example_screenshot.png" alt="Example usage screenshot" title="Example usage screenshot"/></p>

<a name="downloads"><h2>Downloads</h2></a>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Library</td>
  <td><?php echoDownload($downloads['library']['stb']); ?></td>
  <td><?php echoDownload($downloads['library']['dev']); ?></td></tr>
</table>

<h2>Features</h2>
<p><ul>
<li>Visualize data as numerical (hexadecimal) codes and text representation</li>
<li>Codes can be also binary, octal or decimal</li>
<li>Insert and overwrite edit modes</span></li>
<li>Support for selection and clipboard actions</li>
<li>Scrollbars fixed or optional, character/line or pixel precision</li>
<li>Support for showing unprintable/whitespace characters</li>
<li>Support for undo/redo</li>
<li>Support for encoding selection</li>
<li>Searching for text / hexadecimal code with matching highlighting</li>
<li>Support for data sources up to exabytes</li>
<li>Delta mode - Only changes are stored in memory</li>
</ul></p>

<a name="usage"><h2>Usage</h2></a>
<p>Example component usage screenshot:</p>
<p><img src="images/example_screenshot.png" alt="Example screenshot" title="Example screenshot"/></p>

<p>You can use this component for your own project using one of the following methods:</p>
<ul><li>Download library and include it with your project</li>
<li>Download sources and modify it for your needs</li>
<li>Import library using Maven: <strong>org.exbin.deltahex:deltahex-swing:0.1.2</strong></li></ul></p>
<p>To use the component, create new instance and fill it with some data.</p>
<div class="code_example">
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">DeltaHexExample</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">final</span> JFrame frame <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> JFrame<span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;DeltaHex Frame&quot;</span><span style="color: #333333">);</span>
        CodeArea codeArea <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> CodeArea<span style="color: #333333">();</span>
        codeArea<span style="color: #333333">.</span><span style="color: #0000CC">setData</span><span style="color: #333333">(</span><span style="color: #008800; font-weight: bold">new</span> ByteArrayEditableData<span style="color: #333333">(</span><span style="color: #008800; font-weight: bold">new</span> <span style="color: #333399; font-weight: bold">byte</span><span style="color: #333333">[]{</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">}));</span>
        frame<span style="color: #333333">.</span><span style="color: #0000CC">add</span><span style="color: #333333">(</span>codeArea<span style="color: #333333">);</span>
        frame<span style="color: #333333">.</span><span style="color: #0000CC">setSize</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">1000</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">600</span><span style="color: #333333">);</span>
        frame<span style="color: #333333">.</span><span style="color: #0000CC">setVisible</span><span style="color: #333333">(</span><span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></div>
</div>

<a name="downloads"><h2>Source Codes</h2></a>
<table class="downloads">
<tr><th>GitHub Repository&nbsp;</th></tr>
<tr><td><a href="https://github.com/exbin/bined-lib-java" title="GitHub repository"><img src="../images/social-github.png" alt="[GitHub]"/> exbin/bined-lib-java</a></td></tr>
</table>

</div>
</body>
</html>