<?php require_once("../inc-global.php"); ?>
<?php
$page = "privacy-policy";
$pagename = "Privacy Policy";
/**JS & CSS**/
$onepagemenu = "no";
$slider = "no";
$sliderautoscroll = "no";
$swiperjs = "no";
$popup = "no";
$counter = "no";
$accordian = "no";
$utm = "yes";
?>

<!DOCTYPE html>
<html id="<?php echo $page; ?>" dir="ltr" lang="en-US">

<head>
  <?php require_once $head; ?>
</head>

<body>
  <?php echo $block_body_start; ?>
  <?php require_once $header; ?>
  <section class="section section-cms">
    <div class="container">
      <div class="cms-item js-scroll fade-in-bottom scrolled">
        <div class="section-title">
          <h2>Privacy Policy</h2>
        </div>
        <p>The privacy policy sets out the basis on which any personal data we collect from you, or that you provide to us, will be processed by us. By visiting <a href="<?php echo $siteurl; ?>" target="_blank"><?php echo $siteurl; ?></a> or any other of our websites to which this privacy policy applies (“Sites”) or otherwise providing us with information you are accepting and consenting to the practices described in this policy. <?php echo $companyname; ?> reserves the right to update the website on a periodic basis, without any obligation or intimation. In no event will <?php echo $companyname; ?> or its affiliates/subsidiaries/group companies be liable for any direct, indirect, incidental and/or consequential claims, loss and/or damage whatsoever arising out of the use of the information on the website. The personal data collected by us will be subject to terms of Privacy Policy & <?php echo $companyname; ?> shall also abide by the same. Visit us on: <a href="<?php echo $corporatesiteurl; ?>" target="_blank"><?php echo $corporatesiteurl; ?></a></p>
      </div>
    </div>
  </section>
  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <?php echo $block_body_end; ?>
</body>

</html>