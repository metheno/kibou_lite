<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<html>
  <head>
    <meta charset="<?php $this->options->charset(); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="author" content="<?php $this->author(); ?>">
    <title>404 - <?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
  </head>
  <body>
    <div id="notfound" class="main-frame">
      <h2 class="title">404</h2>
      <p class="description"><span>Not Found</span></p>
      <div class="menu">
        <a class="link" href="<?php $this->options->siteUrl(); ?>">/</a>
      </div>
      <p class="footer">Copyright © 2020 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. All rights reserved.<br/>Theme <a href="https://github.com/metheno/kibou_lite">Kibou Lite</a> made with ♥</p>
    </div>
  </body>
</html>