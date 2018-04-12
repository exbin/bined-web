<div id="content">
<a name="documentation"><h2>Documentation</h2></a>
<p><a href="javadoc/">JavaDoc</a></p>

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
</div><br/>

</div>
</body>
</html>