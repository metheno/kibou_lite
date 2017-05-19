<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <?php if ($this->have()): ?>

    <?php while($this->next()): ?>
    <article id="archives" itemscope="" itemtype="http://schema.org/BlogPosting">
      <h1 class="blog-post-title" itemprop="name headline"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
      <p class="blog-post-meta">
        <?php _e('分类：'); ?><?php $this->category(', '); ?>&nbsp;•
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateword(); ?></time>
      </p>
      
      <?php $this->content('继续阅读'); ?>
      
    </article><!-- /.blog-post -->
    <?php endwhile; ?>

  <?php else: ?>
      <article>
          <h2 class="blog-post-title"><?php _e('没有找到内容'); ?></h2>
      </article>
  <?php endif; ?>

  <hr/>

  <center>
    <?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
  </center>

<?php $this->need('footer.php'); ?>
