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

  $enableMathJax = new Typecho_Widget_Helper_Form_Element_Radio('enableMathJax',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('MathJax 支持'), _t('默认为关闭。<br/>单行：<code>$...$</code>；<br/>多行：<code>$$...$$</code>。'));
  $form->addInput($enableMathJax);

  $donateQRLink = new Typecho_Widget_Helper_Form_Element_Text('donateQRLink', NULL, NULL,
  _t('赞赏二维码'), _t('在文章页内插入一个用于打赏的二维码。'));
  $form->addInput($donateQRLink);

  $commentAreaImage = new Typecho_Widget_Helper_Form_Element_Text('commentAreaImage', NULL, NULL,
  _t('评论区图'), _t('给你的评论框加一个萌萌的背景图吧！'));
  $form->addInput($commentAreaImage);

  $beianNumber = new Typecho_Widget_Helper_Form_Element_Text('beianNumber', NULL, NULL,
  _t('备案号'), _t('如果已经备案，请填写备案号。'));
  $form->addInput($beianNumber);

  $dnsPrefetch = new Typecho_Widget_Helper_Form_Element_Radio('dnsPrefetch',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('DNS Prefetch'), _t('默认为关闭。<br/>开启后会对 Google Fonts 和 Gravatar 进行预获取。'));
  $form->addInput($dnsPrefetch);

  $dnsPrefetch_Add = new Typecho_Widget_Helper_Form_Element_Text('dnsPrefetch_Add', NULL, NULL,
  _t('添加一条 DNS Prefetch'), _t('填写一个 URL。例如：<code>//ewiuegqiwefweif.qnssl.com</code>。'));
  $form->addInput($dnsPrefetch_Add);

  $analyticsGoogle = new Typecho_Widget_Helper_Form_Element_Textarea('analyticsGoogle', NULL, NULL,
  _t('JS 代码'), _t('填写其他 JS 代码。不需要加 <code>script</code> 标签。'));
  $form->addInput($analyticsGoogle);

}

function prev_post($archive)
{
  $db = Typecho_Db::get();
  $content = $db->fetchRow($db->select()
                              ->from('table.contents')
                              ->where('table.contents.created < ?', $archive->created)
                              ->where('table.contents.status = ?', 'publish')
                              ->where('table.contents.type = ?', $archive->type)
                              ->where('table.contents.password IS NULL')
                              ->order('table.contents.created', Typecho_Db::SORT_DESC)
                              ->limit(1));
  if ($content)
  {
    $content = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($content);
    echo '<a class="prev" href="' . $content['permalink'] . '" rel="prev"><span>上一篇</span><br/>' . $content['title'] . '</a>';
  } else {
    echo "<a class=\"prev\"><span>\xf0\x9F\x98\xb6</span><br/>没有更多了</a>";
  }
}

function next_post($archive)
{
  $db = Typecho_Db::get();
  $content = $db->fetchRow($db->select()
                              ->from('table.contents')
                              ->where('table.contents.created > ? AND table.contents.created < ?', $archive->created, Helper::options()->gmtTime)
                              ->where('table.contents.status = ?', 'publish')
                              ->where('table.contents.type = ?', $archive->type)
                              ->where('table.contents.password IS NULL')
                              ->order('table.contents.created', Typecho_Db::SORT_ASC)
                              ->limit(1));
                              
  if ($content)
  {
    $content = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($content);
    echo '<a class="next" href="' . $content['permalink'] . '" rel="next"><span>下一篇</span><br/>' . $content['title'] . '</a>';
  } else {
    echo "<a class=\"next\"><span>\xf0\x9F\x98\xb6</span><br/>没有更多了</a>";
  }
}
