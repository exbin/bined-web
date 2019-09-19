<div id="content">
<a name="concepts"><h2>Concepts</h2></a>

<p>This project was started to create component/editor supporting various features which was not available in other libraries or was not available under proper license.</p>
<p>While some of the concepts are implemented, most of them is still in TODO list.</p>

<a name="highly-configurable-component"><h3>Highly Configurable Component</h3></a>
<p>Component should be very flexible to support wide range of use-cases. This should include:</p>
<ul><li>Many settable options and switchable profiles (theme, decorations)</li>
<li>Customizable painter - Support for colorization / highlighting</li>
<li>Support for huge files</li>
<li>Both vertical and horizontal scrolling</li>
</ul>

<a name="differential-memory-mode"><h3>Differential Memory Mode</h3></a>
<p>Easiest approach to editing is to create copy of the whole file in memory/disc, but that could be memory/time consuming for big files. Alternative approach is to only keep list of changes.</p>
<ul><li>Quickly open even big files - load only displayed part of the file</li>
<li>Represent opened file as blocks/pages from files or memory</li>
<li>Defragment blocks when sequence is too complex</li>
<li>Support this also for UNDO/REDO</li>
<li>Lock files to prevent loss of data (when possible)</li>
<li>Visualize performed changes/modified areas</li>
</ul>

<a name="visual-modes"><h3>Visual Modes</h3></a>
<p>TODO</p>

</div>
</body>
</html>