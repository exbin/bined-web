<div id="content">
<h1 id="manual">Editor Manual</h1>

<p>BinEd is editor for binary files or other general data.</p>
<p style="color: red; font-weight: bold;">Manual is under construction!</p>

<p>In basic mode, data are shown as matrix of numeric codes and also as regular text at the same time.</p>

<p><img alt="[overview]" src="images/0.2.0/overview.png" class="center" /></p>

<p>Application consists of (from top to bottom):</p>

<ul><li>Window header with icon, application name and optionally name of the currently opened file</li>
<li>Main menu strip with menu items for working with file, data editing, view options, tools and application help</li>
<li>Toolbar strip with quick action buttons (optionally with captions)</li>
<li>Main data area</li>
<li>Status bar showing currently selected encoding, cursor position and other states.</li>
</ul>

<h2>View options</h2>

<h3>View modes</h3>
<ul><li>Code Matrix - Show matrix of codes representing data of the file</li>
<li>Text Preview - Show textual characters representing data using currently selected encoding</li>
<li>Dual - Show both code matrix and text preview next to each other</li>
</ul>

<h3>Code type</h3>
<ul><li>Binary - shows data as numbers of the base 2. This mode is useful to show actual bits of the data. Values are in range 0 - 11111111</li>
<li>Decimal - Shows each data byte as decimal value in the range 0 - 255 in typical form which most people is used to</li>
<li>Octal - Each byte is represent as three values of the base 8, therefore in range 0 - 377. Each figure represents up to 3 bits</li>
<li>Hexadecimal - Most commonly used form for technical purposes as each byte is represent as two figures of base 16. Value 10 to 15 are shown as alphabet letters A to F which can be optionally of lower or upper case. Each figure represent 4 bits</li></ul>

<h3>Position code type</h3>
<p>In status bar cursor position can be shown using different base to code type.</p>

<h3>Code Area</h3>

<p>Row starts optionally by row position. Row position can be represented by numbers in octal, decimal or hexadecimal base independent on code base.</p>

<p>Optionally there is header, which represents position offset for the particular code on the given row.</p>

<h3>Encoding</h3>
<p>Text preview section is showing data decoded to textual characters according to currently selected encoding. Java supports universal UNICODE encodings as well as various ISO and platform specific encodings often tailored for specific country/language.</p>
<p>Both encodings with fixed or dynamic size of code are supported. Each character in textual preview section is decoded from particular position therefore characters longer than single byte will overlap.</p>

<p>User can set list of encodings available for quick switching in encodings manager dialog.</p>

<p><img alt="[manage_encodings_dialog]" src="images/0.2.0/manage_encodings_dialog.png" class="center" /></p>

<p>It's possible to move/reorder encodings in the list and add another encoding.<br/>

<p><img alt="[add_encoding_dialog]" src="images/0.2.0/add_encoding_dialog.png" class="center" /></p>

<p>Encodings can be filtered by name and/or country code.</p>

<p>Active encoding can be either selected by popup menu or cycled thru by single click.</p>

<h3>Layout</h3>
<p>Layout options specify positions of the printed data. Primary capability is to specify size and frequency of spacing between characters.</p>

<h3>Decorations</h3>
<p>Decoration options allow to specify additional cosmetic entities, namely lines and shapes.</p>

<h3>Colors</h3>
<p>It is possible to specify colors of text, background, decorations and make it specific for areas like selection or found matches.</p>

</div>
</body>
</html>