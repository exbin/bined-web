<?php global $prefix;

if (!empty($prefix)) {
    $parentPrefix = $prefix.'/';
    $rootPrefix = $parentPrefix;
} else {
    $parentPrefix = '/';
    $rootPrefix = '';
} ?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="ExBin Project, http://exbin.org"/>
<meta name="copyright" content="ExBin Project, http://exbin.org"/>
<meta name="description" content="BinEd Binary Editor project webpage"/>
<meta name="keywords" content="binary, hexadecimal, hexedit, hexeditor, viewer, editor, java"/>
<meta name="robots" content="index,follow"/>
<link rel="SHORTCUT ICON" href="<?php echo $parentPrefix; ?>bined.ico" />
<link href="<?php echo $parentPrefix; ?>css/<?php if (@$_GET['op'] == 'print') { echo 'print'; } else { echo 'site'; } ?>.css" rel="stylesheet">
<title>BinEd - Binary / Hex Editor</title>
</head>

<body>
<?php if (@$_GET['op'] != 'print') { ?><div id="name"><h1><a href="<?php echo $parentPrefix; ?>"><img src="<?php echo $parentPrefix; ?>images/bined-icon.png" alt="[BinEd]" title="BinEd Icon" width="60" height="60" style="vertical-align: text-top; margin-top: -14px;"/>&nbsp; BinEd - Binary / Hex Editor</a></h1></div>
<div id="navbar">
  <a id="DownloadIcon" href="<?php echo $rootPrefix; ?>download/">Download</a>
  <a id="DemoIcon" href="<?php echo $rootPrefix; ?>editor/web/">Web Demo</a>
  <a id="DiscordLogo" href="https://discord.gg/SPdAfQ3axX">Discord</a>
  <a id="DocumentationIcon" href="<?php echo $rootPrefix; ?>editor/?p=manual">Manual</a>
</div>
<div id="divider"></div>

<ul id="navmenu">
  <li><div>Information</div>
    <ul class="submenu">
    <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/about.png');" href="<?php echo $rootPrefix; ?>?p=about">About</a></li>
    <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/news.png');" href="<?php echo $rootPrefix; ?>?p=news">News</a></li>
    <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/screenshots.png');"  href="<?php echo $rootPrefix; ?>?p=screenshots">Screenshots</a></li>
    <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/download.png');" href="<?php echo $rootPrefix; ?>download/">Downloads</a></li>
    </ul>
  </li>
  <li><div>Variants</div>
    <ul class="submenu">
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/java.png');" href="<?php echo $parentPrefix; ?>editor">Editor - Swing</a><?php echo @$submenu_editor; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/android.png');" href="<?php echo $parentPrefix; ?>android">Editor - Android</a><?php echo @$submenu_android; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/jar.png');" href="<?php echo $parentPrefix; ?>basic-editor">Editor - Basic</a><?php echo @$submenu_basiceditor; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/package.png');" href="<?php echo $parentPrefix; ?>library">Library</a><?php echo @$submenu_library; ?></li>
    </ul>
  </li>
  <li><div>Extensions</div>
    <ul class="submenu">
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/apache-netbeans.png');" href="<?php echo $parentPrefix; ?>netbeans-plugin">NetBeans Plugin</a><?php echo @$submenu_netbeansplugin; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/intellij-ide.png');" href="<?php echo $parentPrefix; ?>intellij-plugin">IntelliJ Plugin</a><?php echo @$submenu_intellijplugin; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/eclipse-ide.png');" href="<?php echo $parentPrefix; ?>eclipse-plugin">Eclipse Plugin</a><?php echo @$submenu_eclipseplugin; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/jdeveloper.png');" href="<?php echo $parentPrefix; ?>jdeveloper-extension">JDeveloper Ext.</a><?php echo @$submenu_jdeveloperextension; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/bluej.png');" href="<?php echo $parentPrefix; ?>bluej-extension">BlueJ Extension</a><?php echo @$submenu_bluejextension; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/jedit.png');" href="<?php echo $parentPrefix; ?>jedit-plugin">jEdit Plugin</a><?php echo @$submenu_jeditplugin; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/autopsy.png');" href="<?php echo $parentPrefix; ?>autopsy-plugin">Autopsy Plugin</a><?php echo @$submenu_autopsyplugin; ?></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/ghidra-sre.png');" href="<?php echo $parentPrefix; ?>ghidra-extension">Ghidra Extension</a><?php echo @$submenu_ghidraextension; ?></li>
    </ul>
  </li>
  <li><div>Development</div>
    <ul class="submenu">
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/group.png');" href="<?php echo $rootPrefix; ?>?p=participate">Participate</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/features.png');" href="<?php echo $rootPrefix; ?>?p=features">Features</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/lightning.png');" href="<?php echo $rootPrefix; ?>?p=concepts">Concepts</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/source-code.png');" href="<?php echo $rootPrefix; ?>?p=source-codes">Source Codes</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/user_red.png');" href="<?php echo $rootPrefix; ?>?p=authors">Authors</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/money.png');" href="<?php echo $rootPrefix; ?>?p=donate">Donate</a></li>
    </ul>
  </li>
  <li><div>Social</div>
    <ul class="submenu">
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/ref/discord.png');" href="https://discord.gg/SPdAfQ3axX">Discord</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/comment.png');" href="<?php echo $rootPrefix; ?>?p=comments">User Comments</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/plugin.png');" href="<?php echo $rootPrefix; ?>?p=known-uses">Known Uses</a></li>
      <li><a class="urlextern" href="https://sourceforge.net/projects/bined/">SourceForge</a></li>
      <li><a class="urlextern" href="https://www.openhub.net/p/bined/">OpenHub</a></li>
      <li><a class="urldecor" style="background-image: url('<?php echo $parentPrefix; ?>images/menu/world_go.png');" href="<?php echo $rootPrefix; ?>?p=similar-projects">Similar Projects</a></li>
    </ul>
  </li>
</ul>
<?php } ?>