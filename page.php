<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
  
  <article id="article" itemscope="" itemtype="http://schema.org/BlogPosting">
    <h1 class="blog-post-title" itemprop="name headline"><?php $this->title() ?></h1>
    <p class="blog-post-meta">
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateword(); ?></time>
      <?php if (PluginCheck::tePostViewsExists() == true): _e(' • 阅读: '); $this->viewsNum(); endif; ?>
    </p>

    <?php // echo PostRenderer::parse($this->content); ?>
    <?php $this->content(); ?>
      
  </article><!-- /.blog-post -->
  
  <?php if ($this->options->donateQRLink): ?>
  <div class="donate" style="margin-top: 25px;">
    <p>赏</p>
  </div>
  <?php endif; ?>

  <?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
