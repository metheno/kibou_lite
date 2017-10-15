<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
require_once("lib/PluginCheck.php");
require_once("lib/PostRenderer.php");
require_once("lib/UACheck.php");
$this->need('header.php'); ?>

<article id="archives" class="blog" itemscope="" itemtype="http://schema.org/BlogPosting">
  
  <h1 class="blog-post-title" style="font-size: 80px;"><?php _e('Error 404'); ?></h1>
  <p class="blog-post-meta" style="font-size: 30px;"><?php _e('Page not found.'); ?></p>
  <p class="blog-post-meta" style="font-size: 30px;"><?php _e('Please check your spelling.'); ?></p>
  
</article><!-- /.blog-post -->

<?php $this->need('footer.php'); ?>