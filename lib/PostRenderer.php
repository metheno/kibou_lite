<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * PostRenderer.php
 * Author     : metheno
 * Date       : 2017/03/17
 * Version    :
 * Description: Customize Post rendering.
 */

class PostRenderer {

    public static function parse($content) {
        $markdown_rendered = self::renderMarkdownExtension($content);
        return $markdown_rendered;
    }

    private static function renderMarkdownExtension($content) {
        $del_replaced = preg_replace('/\~\~(.+?)\~\~/i', "<del>$1</del>", $content);
        $mark_replaced = preg_replace('/\=\=(.+?)\=\=/i', "<mark>$1</mark>", $del_replaced);
        return $mark_replaced;
    
    }
}
