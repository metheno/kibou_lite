# kibou_lite

一个简洁的主题。

如有问题请不要犹豫：立刻在 GitHub 发送 [issues](https://github.com/metheno/kibou_lite/issues)！

QQ群：343313447.

**在 Typecho 1.0 正式版和 PHP 7.0.7 下做的测试，其他情况没有太多测试。**

[README_EN.md](https://github.com/metheno/kibou_lite/blob/master/README_EN.md)

## 感谢

- [isagalaev/highlight.js](https://github.com/isagalaev/highlight.js)
- [DIYgod/ASpace](https://github.com/DIYgod/ASpace/)

## 截图

首页长这样：
![index](https://github.com/metheno/kibou_lite/blob/master/screenshot.png)

文章页长这样：
![post](https://github.com/metheno/kibou_lite/blob/master/screenshot1.png)

## 功能

- 简洁大气。
- 响应式。
- 自动高亮 `<code>` 标签。
- 简洁的[归档页](https://blog.metheno.net/archives.html)。
- 好看的[友链页](https://blog.metheno.net/py.html)。
- DNS 预加载。
- 可设置改用衬线字体提升英文可读性。
- 支持 MathJAX。
- 支持 Google Analysis。
- 版权保护（什么？

### 友链

如需添加友链，请使用以下格式。

```html
<ul class="links">
  <li>
    <a href="//some.link" target="_blank">
      <img src="//path.to/avatar.png">
      <span>Your Friend's Name</span>
    </a>
  </li>
<ul>
```

## 已知问题

- `lib/PostRenderer.php` 会导致页面渲染出现问题。

## 链接

演示: https://blog.metheno.net/

## 许可证

Apache License 2.0

## 捐助

如果你喜欢这个主题，那么请捐助一下吧！

### PayPal

<a href='https://pledgie.com/campaigns/33629'><img alt='Click here to lend your support to: typecho-theme-kibou and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/33629.png?skin_name=chrome' border='0' ></a>

### 微信

![WeChat QR Code](https://raw.githubusercontent.com/metheno/didactic-umbrella/master/typecho-theme-kibou/WeChatPay.jpg)

## 更新记录

### 0.1.7.1

如果有 bug 请在 [issues](https://github.com/metheno/kibou_lite/issues) 里反馈～

- new: 新增滚动时 `.blog-masthead` 内元素 `blur` 和 `translation`。
- fix: `index.php` 忘记增加版本号（蛤？
- fix: 滚动时只更改了 `.blog-masthead` 的透明度，因此的元素在透明度时依然可点击。
- fix: 各种细节和轻微的优化。
- todo: 评论区和 `schemes.css` 适配以及响应式优化。

### 0.1.7

- new: 新文章卡片式设计

### 0.1.6.4

- fix: 评论区 `overflow`
- fix: 一些文案。
