<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * functions.php
 *
 * Author     : metheno
 * Date       : 2017/02/11
 * Version    :
 * Description:
 */

require_once("lib/PluginCheck.php");
require_once("lib/PostRenderer.php");
require_once("lib/UACheck.php");

function themeConfig($form) {
  
  $enableAutoSpace = new Typecho_Widget_Helper_Form_Element_Radio('enableAutoSpace',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('自动添加空格'), _t(''));
  $form->addInput($enableAutoSpace);
  
  $donateQRLink = new Typecho_Widget_Helper_Form_Element_Text('donateQRLink', NULL, NULL,
  _t('赞赏二维码'), _t('在文章页内插入一个用于打赏的二维码。'));
  $form->addInput($donateQRLink);
  
  $commentAreaImage = new Typecho_Widget_Helper_Form_Element_Text('commentAreaImage', NULL, NULL,
  _t('评论区图'), _t('给你的评论框加一个萌萌的背景图吧！'));
  $form->addInput($commentAreaImage);

  $beianNumber = new Typecho_Widget_Helper_Form_Element_Text('beianNumber', NULL, NULL,
  _t('备案号'), _t('如果已经备案，请填写备案号。'));
  $form->addInput($beianNumber);

  $enableSerifFont = new Typecho_Widget_Helper_Form_Element_Radio('enableSerifFont',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('正文使用衬线字体'), _t('关闭状况下<b>正文</b>字体使用 Roboto、苹方、微软雅黑。开启后使用 Roboto Slab。'));
  $form->addInput($enableSerifFont);

  $enableMathJax = new Typecho_Widget_Helper_Form_Element_Radio('enableMathJax',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('MathJax 支持'), _t('默认为关闭。<br/>单行：<code>$...$</code>；<br/>多行：<code>$$...$$</code>。'));
  $form->addInput($enableMathJax);
  
  $enableCopyrightProtection = new Typecho_Widget_Helper_Form_Element_Radio('enableCopyrightProtection',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('开启版权保护'), _t('添加一个版权保护机制。'));
  $form->addInput($enableCopyrightProtection);

  $dnsPrefetch = new Typecho_Widget_Helper_Form_Element_Radio('dnsPrefetch',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('DNS Prefetch'), _t('默认为关闭。<br/>开启后会对 Google Fonts 和 Gravatar 进行预获取。'));
  $form->addInput($dnsPrefetch);

  $dnsPrefetch_Add = new Typecho_Widget_Helper_Form_Element_Text('dnsPrefetch_Add', NULL, NULL,
  _t('添加一条 DNS Prefetch'), _t('填写一个 URL。例如：<code>//ewiuegqiwefweif.qnssl.com</code>。'));
  $form->addInput($dnsPrefetch_Add);

  $analyticsGoogle = new Typecho_Widget_Helper_Form_Element_Textarea('analyticsGoogle', NULL, NULL,
  _t('Google Analytics 代码'), _t('填写你的 Google Analytics 代码。不需要加 <code>script</code> 标签。'));
  $form->addInput($analyticsGoogle);

}
