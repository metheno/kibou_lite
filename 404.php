<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

    <div class="blog-container">

      <article id="archives" class="archive" itemscope="" itemtype="http://schema.org/BlogPosting">
        <h1 class="blog-post-title" itemprop="name headline">页面未找到</h1>
        <p>请检查您访问的链接，或者</p>
        <p class="more"><a href="<?php $this->options->siteUrl(); ?>" title="返回首页">返回首页</a></p>
      </article><!-- /.blog-post -->

    </div><!-- /.blog-container -->

<?php $this->need('footer.php'); ?>