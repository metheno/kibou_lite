<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>

  <article id="article" class="blog"  itemscope="" itemtype="http://schema.org/BlogPosting">

    <?php // echo PostRenderer::parse($this->content); ?>
    <?php $this->content(); ?>

    <p itemprop="keywords" class="post-tag-holder" style="padding-top:10px;"><?php _e('标签: '); ?><?php $this->tags(', ', true, '无标签'); ?></p>

    <?php if ($this->options->donateQRLink): ?>
    <div class="donate">
      <p>赏</p>
    </div>
    <?php endif; ?>
  </article><!-- /.blog-post -->

  <ul class="article-switch">
    <li class="prev"><?php $this->thePrev('%s','<span>没有更多了</span>'); ?></li>
    <li class="next"><?php $this->theNext('%s','<span>没有更多了</span>'); ?></li>
  </ul>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
