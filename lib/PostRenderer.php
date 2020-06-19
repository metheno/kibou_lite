<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
* PostRenderer.php
* Author     : metheno
* Date       : 2017/03/17
* Version    :
* Description:
*/
class PostRenderer {

  public static function parse($content) {
    $output = self::renderMarkdownExtension($content);
    return $output;
  }

  private static function renderMarkdownExtension($content) {
    $content = preg_replace('/\~\~(.+?)\~\~/i', "<del>$1</del>", $content);
    $content = preg_replace('/\=\=(.+?)\=\=/i', "<mark>$1</mark>", $content);
    return $content;
  }

}
