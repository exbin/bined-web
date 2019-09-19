<div id="content">
<a name="manual"><h2>Editor Manual</h2></a>

<p>TODO: BinEd is editor for binary files or other general data.</p>

<p>In basic mode, data are shown as matrix of numeric codes and also as regular text at the same time.</p>

<h4>View modes:</h4>

<h4>Code type:</h4>
<p><li>Binary - shows data as numbers of the base 2. This mode is useful to show actual bits of the data. Values are in range 0 - 11111111.</li>
<li>Decimal - Shows each data byte as decimal value in the range 0 - 255 in typical form which most people is used to.</li>
<li>Octal - Each byte is represent as three values of the base 8, therefore in range 0 - 377. Each figure represents up to 3 bits.</li>
<li>Hexadecimal - Most commonly used form for technical purposes as each byte is represent as two figures of base 16. Value 10 to 15 are shown as alphabet letters A to F which can be optionally of lower or upper case. Each figure represent 4 bits.</li></ul>

<h4>Encoding:</h4>
<p>Text preview section is showing data decoded to textual characters according to currently selected encoding. Java supports various encodong with fixed or dynamic size of code. Each character in textual preview section is decoded from particular position therefore chatacters longer than single byte will overlap.</p>

<p>User can set list of encodings available for quick switching. Encodings can be filtered by country code.<br/>
Active encoding can be either selected by popup menu or cycled thru by single click.</p>

<p>Row starts optionally by row position. Row position can be represented by numbers in octal, decimal or hexadecimal base independent on code base.</p>

<p>Optionally there is header, which represents position offset for the particular code on the given row.</p>

<h4>Layout:</h4>
<p>Layout options specify positions of the printed data. Primary capability is to specify size and frequency of spacing between characters.</p>

<h4>Decorations:</h4>
<p>Decoration options allow to specify additional cosmetic entities, namely lines and shapes.</p>

<h4>Colors:</h4>
<p>It is possible to specify colors of text, background, decorations and make it specific for areas like selection or found matches.</p>

</p>
</div>
</body>
</html>