<div id="content">
<p>List of finished or considered features.</p>
<p><span style="background-color: #8fff8f;">GREEN</span> - Feature implemented / working to some degree in current development version<br/>
<span style="background-color: #ffbf8f;">ORANGE</span> - Work on feature started / partial or testing implementation underway<br/>
</p>
<h2>Features List</h2>
<p>
<ul><li>Basic library
  <ul><li><span style="background-color: #8fff8f;">Paged binary document</span></li>
  <li><span style="background-color: #8fff8f;">Overwrite editation mode</span></li>
  <li><span style="background-color: #8fff8f;">Insert editation mode</span></li>
  <li><span style="background-color: #8fff8f;">Code and preview sections</span></li>
  <li><span style="background-color: #8fff8f;">Cursor position / visibility</span></li>
  <li><span style="background-color: #8fff8f;">Clipboard selection</span></li>
  <li><span style="background-color: #8fff8f;">Binary/octal/decimal code modes</span></li>
  <li><span style="background-color: #8fff8f;">Lower/upper case</span></li>
  <li><span style="background-color: #8fff8f;">Scrolling position and handling</span></li>
  <li><span style="background-color: #8fff8f;">Preview text encoding selection</span></li>
  <li><span style="background-color: #8fff8f;">Line offset position support</span></li>
  <li><span style="background-color: #ffbf8f;">Inplace editation mode</span></li>
  <li>Support for network protocols like FTP or SMB</li>
  </ul>
</li>
<li>Operation library
  <ul><li><span style="background-color: #8fff8f;">Undo/redo</span>
  <li><span style="background-color: #ffbf8f;">Delta undo/redo</span></li>
  <li>Undo/redo loading / saving</li>
  <li>Limit for undo/redo memory size</li>
  </li>
  <li><span style="background-color: #ffbf8f;">Support for huge files (>4G)</span></li>
  <li>Macro editing support</li>
  <li>Macro loading / saving</li>
  </ul>
</li>
<li>Delta library
  <ul><li><span style="background-color: #8fff8f;">Document segmentation</span></li>
  <li><span style="background-color: #8fff8f;">Delta document saving</span></li>
  <li><span style="background-color: #8fff8f;">Delta undo/redo</span></li>
  <li><span style="background-color: #ffbf8f;">Shared data sources management</span></li>
  <li>Checking for changes on non-exclusive locked files</li>
  </ul>
</li>
<li>Highlighting library
  <ul><li><span style="background-color: #8fff8f;">Support for codes/preview highlighting</span></li>
  <li>Delta highlighting</li>
  </ul>
</li>
<li>Swing implementation
  <ul><li><span style="background-color: #8fff8f;">Scrollbars fixed or optional, character/line or pixel precision</span></li>
  <li><span style="background-color: #8fff8f;">Switchable characters antialiasing</span></li>
  <li><span style="background-color: #8fff8f;">Optional line numbers</span></li>
  <li><span style="background-color: #8fff8f;">Optional header with offset positions</span></li>
  <li><span style="background-color: #8fff8f;">Selectable cursor shapes</span></li>
  <li><span style="background-color: #8fff8f;">Optional cursor blinking</span></li>
  <li><span style="background-color: #8fff8f;">Byte groups and space groups</span></li>
  <li><span style="background-color: #8fff8f;">Changeable font</span></li>
  <li><span style="background-color: #8fff8f;">Optionally show nonprintable characters</span></li>
  <li><span style="background-color: #8fff8f;">Clipboard support</span>
    <ul><li><span style="background-color: #8fff8f;">Cut/copy/paste actions</span></li>
    <li><span style="background-color: #ffbf8f;">Support for delta clipboard</span></li>
    <li>Support for octet-stream clipboard flavor</li>
    <li>Support for drag&amp;drop</li>
    </ul>
  </li>
  <li><span style="background-color: #8fff8f;">Decoration lines</span></li>
  <li><span style="background-color: #8fff8f;">Line wrapping mode</span></li>
  <li>Multicared support
    <ul><li>Support for multiple selection/clipboards</li>
    </ul>
  </li>
  <li>Support for comparison of two files</li>
  <li>Support for half-size space grouping</span></li>
  </ul>
</li>
<li>JavaFX implementation
  <ul><li><span style="background-color: #ffbf8f;">Inner components version</span></li>
  <li>Canvas version</li>
  </ul>
</li>
<li>SWT implementation
</li>
<li>Lantern implementation
</li>
<li>LibGDX implementation
</li>
<li>Android implementation
</li>
<li>Editor application
  <ul><li><span style="background-color: #8fff8f;">Checking for updates</span></li>
  <li><span style="background-color: #ffbf8f;">Support for multiple tabs</span></li>
  <li>Insert empty space action</li>
  <li><span style="background-color: #8fff8f;">Copy from/to hexadecimal string</span></li>
  <li><span style="background-color: #ffbf8f;">Search/replace</span></li>
  <li><span style="background-color: #8fff8f;">Panel with integer, float, string values at cursor position</span></li>
  <li>Loading/saving progress bar</li>
  <li>Exception issue dialog</li>
  <li>Side changes overview ruler</li>
  <li>Decompiler support</li>
  <li>Document tree structure</li>
  <li>Printing &amp; print preview</li>
  <li><span style="background-color: #ffbf8f;">Color settings and color profiles</span></li>
  </ul>
</li>
<li>Plugins for IDEs / integration into applications
  <ul><li>NetBeans plugin
    <ul><li><span style="background-color: #8fff8f;">Integration into menus</span></li>
    <li><span style="background-color: #8fff8f;">Copy from/to hexadecimal string</span></li>
    <li><span style="background-color: #8fff8f;">Configuration panel</span></li>
    <li><span style="background-color: #ffbf8f;">Search/replace</span></li>
    <li><span style="background-color: #8fff8f;">Delta mode</span></li>
    </ul>
  </li>
  <li>Eclipse plugin</li>
  <li>Idea plugin
    <ul><li><span style="background-color: #ffbf8f;">Integration into menus</span></li>
    <li><span style="background-color: #8fff8f;">Configuration panel</span></li>
    <li><span style="background-color: #ffbf8f;">Search/replace</span></li>
    <li><span style="background-color: #8fff8f;">Delta mode</span></li>
    <li><span style="background-color: #8fff8f;">Show values in debugger</span></li>
    </ul>
  </li>
  <li>JDeveloper plugin
    <ul><li><span style="background-color: #ffbf8f;">Integration into menus</span></li>
    <li>Configuration panel</li>
    <li>Search/replace</li>
    <li>Delta mode</li>
    </ul>
  </li>
  <li>JEdit plugin</li>
  <li>MuCommander plugin</li>
  </ul>
</li>
<li>Help pages and documentation</li>
</ul>
</p>
</div>
</body>
</html>