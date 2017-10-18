<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <?php if ($this->have()): ?>

  <?php while($this->next()): ?>
  <article id="archives" class="archive" itemscope="" itemtype="http://schema.org/BlogPosting">
    <h1 class="blog-post-title" itemprop="name headline"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
    <p class="blog-post-meta">
      <?php $this->category(', '); ?>&nbsp;•
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateword(); ?></time>
    </p>
    
    <?php $this->content('阅读'); ?>
    
  </article><!-- /.blog-post -->
  <?php endwhile; ?>

  <?php else: ?>
  <article id="article" class="blog" itemscope="" itemtype="http://schema.org/BlogPosting">

    <h1 class="blog-post-title" style="font-size: 80px;"><?php _e('无内容'); ?></h1>
    <p class="blog-post-meta" style="font-size: 20px;"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), null, null); ?></p>
    
  </article><!-- /.blog-post -->
  <?php endif; ?>

</div><!-- /.blog-container -->

  <?php $this->pageNav('&laquo;', '&raquo;', 1, '…', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>


<?php $this->need('footer.php'); ?>
