<div id="content">
<a name="concepts"><h2>Concepts</h2></a>

<p>This project was started to create component/editor supporting various features which was not available in other libraries or was not available under similar license.</p>
<p>While some of the concepts are partially implemented, majority of them is <strong>planned for far future</strong>.</p>

<a name="highly-configurable-component"><h3>Highly Configurable Component</h3></a>
<p>Component should be very flexible to support wide range of use-cases. This should include:</p>
<ul><li>Many settable options and switchable profiles (theme, decorations)</li>
<li>Customizable painter - Support for colorization / highlighting</li>
<li>Support for huge files</li>
<li>Both vertical and horizontal scrolling</li>
</ul>

<p>Example of code colorization:</p>
<p align="center"><img src="images/concept/colorized-codes.png" /></p>

<a name="differential-memory"><h3>Differential Memory Handling</h3></a>
<p>Easiest approach to editing files is to create copy of the whole file in memory/data drive, but that can take a long time for big files. Alternative approach is to keep list of changes only.</p>
<ul><li>Quickly open even big files - load only displayed part of the file</li>
<li>Represent opened file as blocks/pages from files or memory</li>
<li>Defragment blocks when sequence is too complex</li>
<li>UNDO/REDO has to support this too</li>
<li>Lock files to prevent loss of data (when possible)</li>
<li>Visualize performed changes/modified areas</li>
</ul>

<p>Modified and inserted code can be colorized and show in side ruler:</p>
<p align="center"><img src="images/concept/show-changes.png" /></p>

<a name="visualization"><h3>Visualization</h3></a>
<p>There are many options how can be binary data visualized. Multiple modes could be supported for more convenient use and for specific use-cases.</p>

<i><li>Traditional mode with hexadecimal codes and textual preview
<p align="center"><img src="images/concept/visual-mode-normal.png" /></p>
</li>

<li>Codes can be spaced by groups
<p align="center"><img src="images/concept/visual-mode-spacing.png" /></p>
</li>

<li>Binary variant - can be also decimal or octal
<p align="center"><img src="images/concept/visual-mode-binary.png" /></p>
</li>

<li>Binary variant can be even shown as black/white checkboxes
<p align="center"><img src="images/concept/visual-mode-checkboxes.png" /></p>
</li>

<li>Alternatively codes can be stacked
<p align="center"><img src="images/concept/visual-mode-stacked.png" /></p>
</li>

<p>TODO</p>

<li>Codes and preview can be interleaved
<p align="center"><img src="images/concept/visual-mode-interleaved.png" /></p>
</li>

<li>Or maybe more useful could be to have different fonts
<p align="center"><img src="images/concept/visual-mode-2fonts.png" /></p>
</li>

</ul>

<a name="multiline-mode"><h3>Multiline Mode</h3></a>
<p>Support for text files / EOL (end of line) characters.</p>
<p>This should also allow to support comparision with separated lines for inserted and deleted sections.</p>

<a name="content-analysis"><h3>Content Analysis</h3></a>
<p>To perform analysis of the content of the file, basic values conversion as well as traditional decompilers should be available.</p>

<p>There should be also capability to show data structures defined by mappings. Intention is to use <a href="https://xbup.exbin.org">XBUP protocol</a> and its capabilities to define data structures.</p>

</div>
</body>
</html>