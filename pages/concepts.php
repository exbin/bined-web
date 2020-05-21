<div id="content">
<h1 id="concepts">Concepts</h1>

<p>This project was started to create component/editor supporting various features which was not available in other libraries or was not available under similar license.</p>
<p>While some of the concepts are partially implemented, majority of them is <strong>planned for future development</strong>.</p>

<h3 id="highly-configurable-component">Highly Configurable Component</h3>
<p>Component should be very flexible to support wide range of use-cases. This should include:</p>
<ul><li>Many settable options and switchable profiles (theme, decorations)</li>
<li>Customizable painter - Support for colorization / highlighting</li>
<li>Support for huge files</li>
<li>Both vertical and horizontal scrolling</li>
</ul>

<p>Example of code colorization:</p>
<p><img src="images/concept/colorized-codes.png" alt="[colorized-codes]" class="center" /></p>

<h3 id="differential-memory">Differential Memory Handling</h3>
<p>Easiest approach to editing files is to create copy of the whole file in memory/data drive, but that can take a long time for big files. Alternative approach is to keep list of changes only.</p>
<ul><li>Quickly open even big files - load only displayed part of the file</li>
<li>Represent opened file as blocks/pages from files or memory</li>
<li>Defragment blocks when sequence is too complex</li>
<li>UNDO/REDO has to support this too</li>
<li>Lock files to prevent loss of data (when possible)</li>
<li>Visualize performed changes/modified areas</li>
</ul>

<p>Modified and inserted code can be colorized and show in side ruler:</p>
<p><img src="images/concept/show-changes.png" alt="[show-changes]" class="center" /></p>

<h3 id="visualization">Visualization</h3>
<p>There are many options how can be binary data visualized. Multiple modes could be supported for more convenient use and for specific use-cases.</p>

<ul>
<li>Traditional mode with hexadecimal codes and textual preview
<p><img src="images/concept/visual-mode-normal.png" alt="[visual-mode-normal]" class="center" /></p>
</li>

<li>Codes can be spaced by groups
<p><img src="images/concept/visual-mode-spacing.png" alt="[visual-mode-spacing]" class="center" /></p>
</li>

<li>Binary variant - can be also decimal or octal
<p><img src="images/concept/visual-mode-binary.png" alt="[visual-mode-binary]" class="center" /></p>
</li>

<li>Binary variant can be even shown as black/white checkboxes
<p><img src="images/concept/visual-mode-checkboxes.png" alt="[visual-mode-checkboxes]" class="center" /></p>
</li>

<li>Alternatively codes can be stacked
<p><img src="images/concept/visual-mode-stacked.png" alt="[visual-mode-stacked]" class="center" /></p>
</li>

<li>Codes and preview can be interleaved
<p><img src="images/concept/visual-mode-interleaved.png" alt="[visual-mode-interleaved]" class="center" /></p>
</li>

<li>More readable could be to use different fonts
<p><img src="images/concept/visual-mode-2fonts.png" alt="[visual-mode-2fonts]" class="center" /></p>
</li>
</ul>

<h3 id="multiline-mode">Multiline Mode</h3>
<p>Support for text files / EOL (end of line) characters.</p>

<p><img src="images/concept/multiline-mode.png" alt="[multiline-mode]" class="center" /></p>

<p>This should also allow to support comparision with separated lines for inserted and deleted sections.</p>

<p><img src="images/concept/multiline-diff.png" alt="[multiline-diff]" class="center" /></p>

<h3 id="content-analysis">Content Analysis</h3>
<p>To perform analysis of the content of the file, basic values conversion as well as traditional decompilers should be available.</p>

<p>There should be also capability to show data structures defined by mappings. Intention is to use <a href="https://xbup.exbin.org">XBUP protocol</a> and its capabilities to define data structures.</p>

</div>
</body>
</html>