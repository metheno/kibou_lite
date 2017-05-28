<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    
    <?php if ($this->options->enableSerifFont == 1): ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <style>
      body {
        font-family: "Roboto Slab", "Baskerville", serif;
      }
    </style>
    <?php endif; ?>
    
    <?php if ($this->options->enableCopyrightProtection == 1): ?>
    <style>
      #article {
        -webkit-user-select: none;
      }
    </style>
    <script type="text/javascript">
      (function () {
      var re = /x/;
      console.log(re);
    
      re.toString = function () {
        window.location.href="<?php $this->options->themeUrl('component/copyright_notice.php'); ?>";
      };
    })();
    </script>
    <?php endif; ?>
    
    <?php if ($this->options->commentAreaImage): ?>
    <style>
      .comment-form textarea.form-control {
        background-image: url(<?php $this->options->commentAreaImage() ?>);
      }
    </style>
    <?php endif; ?>
    
    <?php if ($this->options->donateQRLink): ?>
    <style>
      .donate:hover {
        background-image: url(<?php $this->options->donateQRLink(); ?>);
      }
    </style>
    <?php endif; ?>