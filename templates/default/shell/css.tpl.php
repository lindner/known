<link href="<?php echo \Idno\Core\Idno::site()->config()->getStaticURL() ?>css/<?php echo $this->getModifiedTS('css/known.min.css'); ?>/known.min.css" rel="stylesheet">

<!-- Syndication -->
<link
    href="<?php echo \Idno\Core\Idno::site()->config()->getStaticURL() ?>vendor/npm-asset/bootstrap-toggle/css/bootstrap-toggle.min.css"
    rel="stylesheet"/>

<!-- Mention styles -->
<link rel="stylesheet" type="text/css"
      href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>vendor/bower-asset/mention/recommended-styles.css">

<?php
    // Load style assets
if ((\Idno\Core\Idno::site()->currentPage()) && $style = \Idno\Core\Idno::site()->currentPage->getAssets('css')) {
    foreach ($style as $css) {
        ?>
            <link href="<?php echo $css; ?>" rel="stylesheet">
            <?php
    }
}
