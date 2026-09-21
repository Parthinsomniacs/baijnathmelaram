<?php
$title = "Baijnath Melaram";
$description = "";
$keywords = '';
$image = "seo";
$type = "website";
$canurl = $siteurl;
?>

<?php if ($page == "home") {
	$title = "Baijnath Melaram";
	$description = "";
	$keywords = '';
	$image = "seo";
	$type = "website";
	$canurl = $siteurl;
}
if ($page == "greenship-recycling") {
	$title = "Greenship Recycling - Baijnath Melaram";
	$description = "Pioneering eco-friendly and HKC compliant green ship recycling in Alang, Gujarat.";
	$keywords = 'Greenship Recycling, Ship Recycling Alang, HKC Compliant Yard';
	$image = "seo";
	$type = "website";
	$canurl = $siteurl . "greenship-recycling.php";
}
if ($page == "alloy-manufacturing") {
	$title = "Alloy Manufacturing - Baijnath Melaram";
	$description = "High-grade alloy metal casting and industrial manufacturing solutions by Baijnath Melaram.";
	$keywords = 'Alloy Manufacturing, Baijnath Melaram Alloys, Metal Casting Bhavnagar';
	$image = "seo";
	$type = "website";
	$canurl = $siteurl . "alloy-manufacturing.php";
}
if ($page == "secondary-scrap-trading") {
	$title = "Secondary Scrap Trading - Friends Corp. | Baijnath Melaram";
	$description = "Leading scrap trading firm in Bhavnagar specialising in high-grade ferrous, non-ferrous, and alloy metal scrap sourced from green ship recycling.";
	$keywords = 'Secondary Scrap Trading, Friends Corp Bhavnagar, HMS Scrap Alang, Ship Scrap Trading, Alloy Metal Scrap';
	$image = "seo";
	$type = "website";
	$canurl = $siteurl . "secondary-scrap-trading.php";
}
if ($page == "privacy-policy") {
	$title = "Privacy Policy - Baijnath Melaram";
	$description = "";
	$keywords = '';
	$image = "seo";
	$type = "website";
	$canurl = $siteurl . "privacy-policy/";
}
if ($page == "thankyou") {
	$title = "Thank You - Baijnath Melaram";
	$description = "";
	$keywords = '';
	$image = "seo";
	$type = "website";
	$canurl = $siteurl . "thankyou/";
}
?>

<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="<?php echo $canurl; ?>" />
<meta name="author" content="<?php echo $companyname; ?>">
<meta name="thumbnail" content="<?php echo $imagesurl; ?>seo/<?php echo $image; ?>.jpg" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="<?php echo $type; ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $canurl; ?>" />
<meta property="og:image" content="<?php echo $imagesurl; ?>seo/<?php echo $image; ?>.jpg" />
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="<?php echo $sitename; ?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="<?php echo $description; ?>" />
<meta name="twitter:title" content="<?php echo $title; ?>" />
<meta name="twitter:image" content="<?php echo $imagesurl; ?>seo/<?php echo $image; ?>.jpg" />
<meta name="twitter:site" content="<?php echo $twitterhandle; ?>" />
<meta name="twitter:creator" content="<?php echo $twitterurl; ?>" />
<meta property="article:publisher" content="<?php echo $facebookurl; ?>" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $mediaurl; ?>favicon/apple-icon-57x57.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $mediaurl; ?>favicon/apple-icon-60x60.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $mediaurl; ?>favicon/apple-icon-72x72.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $mediaurl; ?>favicon/apple-icon-76x76.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $mediaurl; ?>favicon/apple-icon-114x114.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $mediaurl; ?>favicon/apple-icon-120x120.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $mediaurl; ?>favicon/apple-icon-144x144.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $mediaurl; ?>favicon/apple-icon-152x152.png?v=<?php echo $version; ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $mediaurl; ?>favicon/apple-icon-180x180.png?v=<?php echo $version; ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $mediaurl; ?>favicon/android-icon-192x192.png?v=<?php echo $version; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $mediaurl; ?>favicon/favicon-32x32.png?v=<?php echo $version; ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $mediaurl; ?>favicon/favicon-96x96.png?v=<?php echo $version; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $mediaurl; ?>favicon/favicon-16x16.png?v=<?php echo $version; ?>">
<link rel="manifest" href="<?php echo $mediaurl; ?>favicon/manifest.json?v=<?php echo $version; ?>">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $mediaurl; ?>favicon/ms-icon-144x144.png?v=<?php echo $version; ?>">
<meta name="theme-color" content="#ffffff">
<link rel="shortcut icon" href="<?php echo $mediaurl; ?>favicon/favicon.ico?v=<?php echo $version; ?>" type="image/x-icon">
<link rel="icon" href="<?php echo $mediaurl; ?>favicon/favicon.ico?v=<?php echo $version; ?>" type="image/x-icon">
<?php if (!empty($facebookveri)) { ?>
	<meta name="facebook-domain-verification" content="<?php echo $facebookveri; ?>" />
<?php } ?>
<?php if (!empty($googleveri)) { ?>
	<meta name="google-site-verification" content="<?php echo $googleveri; ?>" />
<?php } ?>
<?php if (!empty($indiveri)) { ?>
	<meta name="indi-verification" content="<?php echo $indiveri; ?>" />
<?php } ?>