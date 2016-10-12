<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Pamman</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="http://pamman.altervista.org/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
  </head>
  <body class="template">
    <p class="header"><span>Pamman</span></p>
    <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
      <br>
      <div class="logo"></div>
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <a style="margin-left:15%" target="_blank" href="https://play.google.com/store/apps/details?id=com.ThunderShotMagmaWare.Pamman"><img height="15%" width="15%" src="http://pamman.altervista.org/img/android_app_on_play_logo_large.png"></a>
      <a target="_blank" href="https://itunes.apple.com/us/app/pamman/id1140165655"><img height="15%" width="15%" src="http://pamman.altervista.org/img/available-on-the-app-store.png"></a>
      <a target="_blank" href="http://pamman.altervista.org/"><img  style="margin-left:15%" height="4%" width="4%" src="http://pamman.altervista.org/img/iconAndroid.png"></a>
      <div class="title">Pamman</div>
    </div>
    <p class="footer">&laquo; created with <a href="http://unity3d.com/" title="Go to unity3d.com">Unity</a> &raquo;</p>
    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    dataUrl: "Release/Pamman.data",
    codeUrl: "Release/Pamman.js",
    memUrl: "Release/Pamman.mem",

  };
</script>
<script src="Release/UnityLoader.js"></script>

  </body>
</html>
