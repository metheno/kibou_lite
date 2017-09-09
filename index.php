<?php
/**
 * Kibou Lite: 轻量级的主题。
 *
 * @package Kibou Lite
 * @author metheno
 * @version 0.1.6.4
 * @link https://www.metheno.net
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <?php while($this->next()): ?>
  <article id="archives" itemscope="" itemtype="http://schema.org/BlogPosting">
    <h1 class="blog-post-title" itemprop="name headline"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
    <p class="blog-post-meta">
      <?php _e('分类：'); ?><?php $this->category(', '); ?>&nbsp;•
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateword(); ?></time>
    </p>
    <?php $this->content('阅读'); ?>
  </article><!-- /.blog-post -->
  <?php endwhile; ?>

  <center><?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?></center>

<?php $this->need('footer.php'); ?>
