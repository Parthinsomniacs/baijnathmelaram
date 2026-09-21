<?php
$version = "3.0.29";
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Science+Gothic:wght@100..900" rel="stylesheet">

<link rel=preload href="<?php echo $fontsurl; ?>JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin />


<!-- Favicon Links with Cache Buster -->
<link rel="icon" type="image/x-icon" href="<?php echo $mediaurl; ?>favicon/favicon.ico?v=1789792507169" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $mediaurl; ?>favicon/favicon.ico?v=1789792507169" />
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $mediaurl; ?>favicon/favicon-32x32.png?v=1789792507169" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $mediaurl; ?>favicon/favicon-16x16.png?v=1789792507169" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $mediaurl; ?>favicon/apple-icon-180x180.png?v=1789792507169" />
<?php require_once $stylecss; ?>
<?php require_once $inccss; ?>

<!--Common CSS-->
<?php if ($swiperjs == "yes") { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>swiper-bundle.min.css">
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>all-custom.css?<?php echo $version; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>smruti.css?<?php echo $version; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>all-responsive.css?<?php echo $version; ?>">
<!--End Common CSS-->
<?php require_once $seo; ?>
<?php
echo $block_head_all_page;
if ($page == "home") {
  echo $block_head_index_page;
}
?>