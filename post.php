<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
error_reporting(E_ALL); 
ini_set('display_errors', '1'); 
$this->need('header.php');?>
  
      <article id="article" class="blog" itemscope="" itemtype="http://schema.org/BlogPosting">
    
        <?php // echo PostRenderer::parse($this->content); ?>
        <?php $this->content(); ?>
        
        <p itemprop="keywords" class="post-tag-holder" style="padding-top:10px;"><?php _e('标签: '); ?><?php $this->tags(', ', true, '无标签'); ?></p>
        
        <?php if ($this->options->donateQRLink): ?>
        <div class="donate">
          <p>赏</p>
        </div>
        <?php endif; ?>
      </article><!-- /.blog-post -->
    </div><!-- /.blog-container -->
    
    <div class="blog-bottom-bar">
      <div class="blog-container">
        <?php prev_post($this); next_post($this); ?>
        
      </div>
    </div>
    
    <div class="promo-bar" style="background:#f9f9f9;text-align:center;">
      <iframe src="//banners.itunes.apple.com/banner.html?partnerId=&aId=&bt=promotional&at=Music&st=apple_music&c=jp&l=ja-JP&w=320&h=50&rs=1" frameborder=0 style="overflow-x:hidden;overflow-y:hidden;width:320px;height:50px;border:0px"></iframe>
    </div>

  <?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
