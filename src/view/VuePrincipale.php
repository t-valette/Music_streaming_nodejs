<?php
namespace view;

class VuePrincipale
{
    public static function render($content)
    {
        return self::renderHeader() + $content + self::renderFooter();
    }

    private static function renderHeader()
    {
        $html = <<<END
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ratchet template page</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="/include/css/ratchet.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="/include/js/ratchet.js"></script>
  </head>
  <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <h1 class="title">NOM APPLICATION</h1>
    </header>
END;
        return $html;
    }

    private static function renderFooter()
    {
        $html = <<<END
  </body>
</html>
END;
        return $html;
    }
}
