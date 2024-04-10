<div id="content">
<h1 id="features">List of Features</h1>
<p>List of finished or considered features.</p>
<p><span style="background-color: #8fff8f;">GREEN</span> - Feature implemented / working to some degree in current development version<br/>
<span style="background-color: #ffbf8f;">ORANGE</span> - Work on feature started / partial or testing implementation underway<br/>
</p>

<table class="features">
<tr><th>Basic library</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Paged binary document</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Overwrite editation mode</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Insert editation mode</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Code and preview sections</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Cursor position / visibility</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Clipboard selection</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Binary/octal/decimal code modes</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Lower/upper case</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Scrolling position and handling</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Preview text encoding selection</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Row offset position support</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Inplace editation mode</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Stacked and interleaving mode</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Multiline mode</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Diff/comparision</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for network protocols like FTP or SMB</td><td></td></tr>
<tr><th>Operation library</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Undo/redo</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Delta undo/redo</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Undo/redo loading / saving</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Limit for undo/redo memory size</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for huge files (>4G)</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Macro editing support</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Macro loading / saving</td><td></td></tr>
<tr><th>Delta library</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Document segmentation</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Delta document saving</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Delta undo/redo</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Shared data sources management</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Checking for changes on non-exclusive locked files</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for swapping to temp file</td><td></td></tr>
<tr><th>Highlighting library</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for codes/preview highlighting</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Delta highlighting</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Byte-for-byte diff/comparision<td class="features-done">DONE</td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Custom decoder highlighting</td><td></td></tr>
<tr><th>Swing implementation</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Custom painter component</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Scrollbars fixed or optional, character/row or pixel precision</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Switchable characters antialiasing</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Optional row numbers</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Optional header with offset positions</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Selectable cursor shapes</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Optional cursor blinking</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Byte groups and space groups</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Changeable font</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Optionally show nonprintable characters</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Clipboard support</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Cut/copy/paste actions</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Support for delta clipboard</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Support for octet-stream clipboard flavor</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Support for drag&amp;drop</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Decoration lines</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Row wrapping mode</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Multi-caret support</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Support for multiple selection/clipboards</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for comparison of two files</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for half-size space grouping</td><td class="features-done">DONE</td></tr>
<tr><th>SWT implementation</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Custom painter component</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Scrollbars fixed or optional, character/row or pixel precision</td><td class="features-todo">PARTIAL</td></tr>
<tr><th>JavaFX implementation</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Canvas version</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Inner components version</td><td></td></tr>
<tr><th>Lanterna implementation</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;TODO</td><td></td></tr>
<tr><th>LibGDX implementation</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;TODO</td><td></td></tr>
<tr><th>Android implementation</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Custom painter component</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Scrollbars fixed or optional, character/row or pixel precision</td><td></td></tr>
<tr><th>Editor application</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for multiple tabs</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Copy from/to hexadecimal string</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Panel with integer, float, string values at cursor position</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Checking for updates</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Loading/saving progress bar</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Insert space action</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Exception issue dialog</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Side changes overview ruler</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Decompiler support / plugin</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Document tree structure</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Printing &amp; print preview</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Color settings and color profiles</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Bookmarks support</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Makro support</td><td class="features-done">DONE</td></tr>
<tr><th>Android application</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Support for multiple tabs</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Insert space action</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Copy from/to hexadecimal string</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Panel with integer, float, string values at cursor position</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Bookmarks support</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Makro support</td><td></td></tr>
<tr><th>Plugins for IDEs / integration into applications</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;NetBeans plugin</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Integration into menus</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Configuration panel</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Debugger support</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Binary diff support</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;DB blob field editing</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Idea plugin</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Integration into menus</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Configuration panel</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Debugger support</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Binary diff support</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;DB blob field editing</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Eclipse plugin</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Integration into menus</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Configuration panel</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Debugger support</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Binary diff support</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;DB blob field editing</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;BlueJ plugin</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Integration into menus</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Configuration panel</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Debugger support</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Binary diff support</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;DB blob field editing</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;JDeveloper plugin</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Integration into menus</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Configuration panel</td><td class="features-done">DONE</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Debugger support</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Binary diff support</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;DB blob field editing</td><td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;JEdit plugin</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Integration into menus</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-done">DONE</td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Binary diff support</td><td class="features-done">DONE</td></td></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Ghidra plugin</td><td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Integration into menus</td><td class="features-todo">PARTIAL</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Search/replace</td><td class="features-done">DONE</td></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;Binary diff support</td><td class="features-done">DONE</td></td></tr>
<tr><th>Help pages and documentation</th><th></th></tr>
<tr><td>&nbsp;&#8226;&nbsp;&nbsp;Main manual page</td><td class="features-done">DONE</td></tr>
</table>

</div>
</body>
</html>