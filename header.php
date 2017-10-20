<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<html class="no-js">
  <head>
    <meta charset="<?php $this->options->charset(); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="kibou" content="lite, 1.0.1.2"/>
    <?php if ($this->options->dnsPrefetch == 1): ?>
      <meta http-equiv="x-dns-prefetch-control" content="on"/>
      <link rel="dns-prefetch" href="//fonts.googleapis.com"/>
      <link rel="dns-prefetch" href="//secure.gravatar.com"/>
      <link rel="dns-prefetch" href="//cdn.bootcss.com"/>
      <?php if ($this->options->dnsPrefetch_Add): ?>
        <link rel="dns-prefetch" href="<?php $this->options->dnsPrefetch_Add(); ?>"/>
      <?php endif; ?>
    <?php endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="renderer" content="webkit"/>
    <meta name="author" content="<?php $this->author(); ?>"/>
    <!-- The above meta tags must be at top. -->

    <!-- Page Title -->
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章'),
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- Styles for Theme Kibou -->
    <link href="<?php $this->options->themeUrl('css/style.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/highlight.css'); ?>" rel="stylesheet">

    <?php $this->need('component/pageload.php'); ?>

    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php $this->header(); ?>
  </head>

  <body>
    
    <nav class="blog-nav">
      <div class="nav-container">
        <a class="blog-nav-item" href="<?php $this->options->siteUrl(); ?>"><?php if ($this->is('index')): _e('首页'); else: $this->options->title(); endif; ?></a>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
          <a class="blog-nav-item"  href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
      </div>
    </nav><!-- /.blog-nav -->
      
    <div class="blog-masthead">
      <div class="blog-title">
        <div class="blog-container">
          <?php if ($this->is('index')): ?>
          <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h1>
          <p><?php $this->options->description(); ?></p>
          <?php endif; ?>
          <?php if ($this->is('archive')): ?>
          <h1><?php $this->archiveTitle(array(
              'category'  =>  _t('分类 %s 下的文章'),
              'search'    =>  _t('包含关键字 %s 的文章'),
              'tag'       =>  _t('标签 %s 下的文章'),
              'author'    =>  _t('%s 发布的文章'),
          ), '', ''); ?></h1>
          <?php elseif ($this->is('page') || $this->is('post')): ?>
          <h1 itemprop="name headline"><?php $this->title() ?></h1>
          <p class="blog-post-meta">
            <?php if ($this->is('post')): ?><?php $this->category(', '); ?>&nbsp;• <?php endif; ?>
            <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateword(); ?></time>
            <?php if (PluginCheck::tePostViewsExists() == true): _e(' • 阅读: '); $this->viewsNum(); endif; ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
    </div><!-- /.blog-masthead -->

    <div class="blog-container">
