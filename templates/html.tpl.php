<!DOCTYPE HTML>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>

    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <noscript>
        <?php drupal_add_css(drupal_get_path("theme", "twenty") . '/css/skel.css'); ?>
        <?php drupal_add_css(drupal_get_path("theme", "twenty") . '/css/style.css'); ?>
        <?php drupal_add_css(drupal_get_path("theme", "twenty") . '/css/style-noscript.css'); ?>
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

</head>
<body class="<?php print $classes; ?> index loading" <?php print $attributes;?>>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
