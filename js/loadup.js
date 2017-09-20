/* Copyright (c) 2017 by metheno. All Rights Reserved.
Website: https://www.metheno.net */

// Open in new tab.
function openExternalLinks() {
  for (var a = document.getElementsByTagName("a"), i = 0; i < a.length; i++) {
    var c = a[i];
    c.getAttribute("href") && c.hostname !== location.hostname && (c.target = "_blank")
  }
}
openExternalLinks();

var target = $('.blog-masthead h1, .blog-masthead nav, .blog-masthead p');
var targetHeight = target.outerHeight() + 300;

$(document).scroll(function(e) {
  var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
  if (scrollPercent >= 0) {
    target.css('opacity', scrollPercent);
  }
});

hljs.initHighlightingOnLoad(); // highlight.js
