<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    
    <?php if ($this->options->enableCopyrightProtection == 1): ?>
    <style>
      article {
        -webkit-user-select: none;
      }
    </style>
    <script type="text/javascript">
      !function() {
        var o = /x/;
        console.log(o), o.toString = function() {
          window.location.href = "<?php $this->options->themeUrl('component/copyright_notice.php'); ?>";
        };
      }();
      document.onkeydown = function(e) {
        var t = e.keyCode || e.which || e.charCode, n = e.ctrlKey || e.metaKey;
        return n && 83 == t && alert("??"), e.preventDefault(), !1;
      };
    </script>
    <?php endif; ?>
    
    <?php if ($this->options->donateQRLink): ?>
    <style>
      .donate:hover {
        background-image: url(<?php $this->options->donateQRLink(); ?>);
      }
    </style>
    <?php endif; ?>

    <style>
      body {
        background-image: url("<?php $this->options->themeUrl('img/bg_pattern1.png'); ?>");
        background-repeat: repeat;
      }
      @media (prefers-color-scheme: dark) {
        body {
          background-image: url("<?php $this->options->themeUrl('img/bg_pattern3.png'); ?>");
        }
    </style>
