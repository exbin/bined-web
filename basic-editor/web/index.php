<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>BinEd (CheerpJ)</title>
    <script src="https://cjrtnc.leaningtech.com/3.0rc2/cj3loader.js"></script>
  </head>
  <body style="margin: 0px; padding: 0px; border: 0px;">
    <script>
      (async function () {
        await cheerpjInit();
        var body = document.body, html = document.documentElement;
        var width = Math.max( body.scrollWidth, body.offsetWidth, html.clientWidth, html.scrollWidth, html.offsetWidth );
        var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
        cheerpjCreateDisplay(width, height);
        await cheerpjRunJar("/app/basic-editor/web/bined-editor-basic-0.2.2.jar");
      })();
    </script>
  </body>
</html>
<?php include 'refer.php'; ?>