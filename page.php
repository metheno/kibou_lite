<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <article id="article" class="blog" itemscope="" itemtype="http://schema.org/BlogPosting">

    <?php // echo PostRenderer::parse($this->content); ?>
    <?php $this->content(); ?>
    
    <?php if ($this->options->donateQRLink): ?>
    <div class="donate" style="margin-top: 25px;">
      <p>赏</p>
    </div>
    <?php endif; ?>

  </article><!-- /.blog-post -->
</div><!-- /.blog-container -->

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
