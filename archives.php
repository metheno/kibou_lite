<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * 时间归档
 *
 * @package custom
 */

$this->need('header.php'); ?>

  <article id="article" class="blog" itemscope="" itemtype="http://schema.org/BlogPosting">

    <h1 class="blog-post-title" itemprop="name headline"><?php _e('Tag Cloud'); ?></h1>

    <div style="padding-top:20px;text-align:center;">
      <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=1000')->to($tags); ?>

      <?php if($tags->have()):?>
        <?php while ($tags->next()): ?>
          <a href="<?php $tags->permalink(); ?>" rel="tag" class="archives-tags" title="<?php $tags->name(); ?> 有 <?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
        <?php endwhile; ?>
        <?php else: ?>
          <p><?php _e('没有任何标签'); ?></p>
      <?php endif; ?>
    </div>

    <hr/>

    <h1 class="blog-post-title" itemprop="name headline"><?php _e('Recent Post'); ?></h1>

    <ol class="archives-loop">

    <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=1000')->to($archives);
    while($archives->next()): ?>
      <li>
        <a href="<?php $archives->permalink() ?>">
          <h3><?php $archives->title('false'); ?></h3>
          <span><?php $archives->dateword(); ?></span>
        </a>
      </li>
    <?php endwhile; ?>
    </ol>

    <?php $this->content(); ?>

  </article><!-- /.blog-post -->
</div><!-- /.blog-container -->

<?php $this->need('footer.php'); ?>
