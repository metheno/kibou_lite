<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<html class="no-js">
  <head>
    <meta charset="<?php $this->options->charset(); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <?php if ($this->options->dnsPrefetch == 1): ?>
      <meta http-equiv="x-dns-prefetch-control" content="on"/>
      <link rel="dns-prefetch" href="//fonts.googleapis.com"/>
      <link rel="dns-prefetch" href="//secure.gravatar.com"/>
      <link rel="dns-prefetch" href="//cdn.bootcss.com"/>
      <link rel="dns-prefetch" href="//ooo.0o0.ooo"/>
      <link rel="dns-prefetch" href="//cdnjs.cloudflare.com"/>
      <?php if ($this->options->dnsPrefetch_Add): ?>
        <link rel="dns-prefetch" href="<?php $this->options->dnsPrefetch_Add(); ?>"/>
      <?php endif; ?>
    <?php endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="renderer" content="webkit"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="author" content="<?php $this->author(); ?>"/>
    <!-- The above meta tags must be at top. -->

    <!-- Page Title -->
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- Styles for Theme Kibou -->
    <link href="<?php $this->options->themeUrl('css/normalize.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/style.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/highlight.css'); ?>" rel="stylesheet">

    <?php $this->need('component/pageload.php'); ?>

    <!--[if lt IE 10]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php $this->header(); ?>
  </head>

  <body id="kibou-lite">

    <!--[if lt IE 10]>
      <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
    <![endif]-->

    <div class="blog-masthead">

      <?php if ($this->is('index')): ?>
      <div class="blog-title">
        <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h1>
        <p><?php $this->options->description(); ?></p>
      </div>
      <?php endif; ?>

      <nav class="blog-nav">
        <a class="blog-nav-item" href="<?php $this->options->siteUrl(); ?>"><?php if ($this->is('index')): _e('首页'); else: $this->options->title(); endif; ?></a>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
          <a class="blog-nav-item"  href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
      </nav>

    </div>

    <div class="blog-container">
      <div class="blog-row">

        <div class="blog-main">
