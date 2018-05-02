<?php global $prefix;
if (!empty($prefix)) {
    $parentPrefix = $prefix.'/';
    $rootPrefix = $parentPrefix;
} else {
    $parentPrefix = '/';
} ?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $parentPrefix; ?>css/bined.css" rel="stylesheet">
<title>BinEd - Binary Editor</title>
</head>

<body>
<div id="name"><h1><a href="<?php echo $parentPrefix; ?>"><img src="<?php echo $parentPrefix; ?>images/deltahex-40x40.png" alt="[Icon]" title="Icon" width="40" height="40" style="vertical-align: text-top; margin-top: -7px;"/>&nbsp;BinEd - Binary Editor</a></h1></div>
<div id="navbar">
  <a id="FeaturesIcon" href="<?php echo $rootPrefix; ?>?features">Features</a>
  <a id="ScreenshotsIcon" href="<?php echo $rootPrefix; ?>?screenshots">Screenshots</a>
  <a id="DownloadIcon" href="<?php echo $rootPrefix; ?>?downloads">Download</a>
  <a id="DocumentationIcon" href="<?php echo $rootPrefix; ?>?manual">Manual</a>
</div>
<div id="divider"></div>

<div id="sidebar">
<h4>&nbsp;&nbsp;&nbsp;Information</h4>
<ul>
  <li><a href="<?php echo $rootPrefix; ?>?news">News</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?about">About</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?features">Features</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?screenshots">Screenshots</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?downloads">Downloads</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?manual">Manual</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?contact">Contact</a></li>
</ul>

<h4>&nbsp;&nbsp;&nbsp;Versions</h4>
<ul>
  <li><a href="<?php echo $parentPrefix; ?>editor">Editor - Java</a><?php echo $submenu_editor; ?></li>
  <li><a href="<?php echo $parentPrefix; ?>android">Editor - Android</a><?php echo $submenu_android; ?></li>
  <li><a href="<?php echo $parentPrefix; ?>library">Component Libraries</a><?php echo $submenu_library; ?></li>
  <li><a href="<?php echo $parentPrefix; ?>basic-editor">Basic Editor</a><?php echo $submenu_basiceditor; ?></li>
  <li><a href="<?php echo $parentPrefix; ?>netbeans-plugin">NetBeans Plugin</a><?php echo $submenu_netbeansplugin; ?></li>
  <li><a href="<?php echo $parentPrefix; ?>intellij-plugin">IntelliJ Plugin</a><?php echo $submenu_intellijplugin; ?></li>
  <li><a href="<?php echo $parentPrefix; ?>jdeveloper-extension">JDeveloper Extension</a><?php echo $submenu_jdeveloperextension; ?></li>
</ul>

<h4>&nbsp;&nbsp;&nbsp;Development</h4>
<ul>
  <li><a href="<?php echo $rootPrefix; ?>?how-to-join">How to Join</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?source-codes">Source Codes</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?report-bug">Report Bug</a></li>
  <li><a href="<?php echo $rootPrefix; ?>?request-feature">Request Feature</a></li>
</ul>

<h4>&nbsp;&nbsp;&nbsp;Social</h4>
<ul>
  <li><a href="https://sourceforge.net/projects/deltahex/">SourceForge Page</a></li>
</ul>
</div>
