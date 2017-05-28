/**
* loadup.js
*
* Author     : metheno
* Date       : 2017/02/20
* Version    :
* Description:
*/

// Open in new tab.
function openExternalLinks() {
  for (var a = document.getElementsByTagName("a"), i = 0; i < a.length; i++) {
    var c = a[i];
    c.getAttribute("href") && c.hostname !== location.hostname && (c.target = "_blank")
  }
} openExternalLinks();

hljs.initHighlightingOnLoad(); // highlight.js