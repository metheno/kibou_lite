<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>
  
  <article id="article" itemscope="" itemtype="http://schema.org/BlogPosting">
    <h1 class="blog-post-title" itemprop="name headline"><?php $this->title() ?></h1>
    <p class="blog-post-meta">
      <?php _e('分类：'); ?><?php $this->category(', '); ?>&nbsp;•
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateword(); ?></time>
      <?php if (PluginCheck::tePostViewsExists() == true): _e(' • 阅读: '); $this->viewsNum(); endif; ?>
    </p>

    <?php // echo PostRenderer::parse($this->content); ?>
    <?php $this->content(); ?>
    
    <p itemprop="keywords" class="post-tag-holder" style="padding-top:10px;"><?php _e('标签: '); ?><?php $this->tags(', ', true, '无标签'); ?></p>
  </article><!-- /.blog-post -->
  
  
  <?php if ($this->options->donateQRLink): ?>
  <div class="donate">
    <p>赏</p>
  </div>
  <?php endif; ?>

  <ul class="article-switch">
    <li class="prev"><?php $this->thePrev('%s','<span>没有更多了</span>'); ?></li>
    <li class="next"><?php $this->theNext('%s','<span>没有更多了</span>'); ?></li>
  </ul>

  <?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
