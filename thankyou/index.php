<?php require_once("../inc-global.php"); ?>
<?php
$page = "thankyou";
$pagename = "thankyou";
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
<html dir="ltr" lang="en-US">

<head>
  <?php if (isset($_GET['reg']) && $_GET['reg'] == 'success') { ?>
    <meta http-equiv="refresh" content="8;URL='<?php echo $siteurl; ?>" />
    <?php echo $block_conv_head; ?>
    <?php
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
    if ($email != "") {
      require $leadsendmail;
    }
    ?>

    <!-- Open Brochure On New Page Start -->
    <?php
    $formtype = isset($_GET['formtype']) ? $_GET['formtype'] : '';
    if ($formtype == "brochure") { ?>

      <script>
        const fileUrl = '<?php echo $siteurl . "download/brochure.pdf"; ?>';
        const userAgent = navigator.userAgent.toLowerCase();

        const isIPhone = /iphone/.test(userAgent);
        const isMac = /macintosh/.test(userAgent);
        const isSafari = /^((?!chrome|android).)*safari/i.test(userAgent);

        if (isIPhone) {
          setTimeout(() => {
            window.location.href = fileUrl;
          }, 2000);
        } else if (isMac) {
          setTimeout(() => {
            window.location.href = fileUrl;
          }, 2000);
        } else if (isSafari) {
          setTimeout(() => {
            window.location.href = fileUrl;
          }, 2000);
        } else {
          window.open("<?php echo $siteurl . 'download/brochure.pdf'; ?>", '_blank').focus();
        }
      </script>

    <?php } ?>
    <!-- Open Brochure On New Page End -->


    <!-- Unlock Session Start-->
    <?php
    if ($formtype == "plans") {
      $_SESSION['eligibility'] = "valid";
    } ?>
    <!-- Unlock Session Start-->

  <?php } else { ?>
    <meta http-equiv="refresh" content="8;URL='<?php echo $siteurl; ?>'" />
  <?php } ?>


  <?php require_once $head; ?>
</head>

<body class="<?php echo $page; ?> pt-0">
  <!-- SLIDER -->
  <div class="thankyou-block col-middle">
    <div class="col-middle-inner has-text-centered">
      <div class="container thankyou-block-inner">
        <?php if (isset($_GET['reg']) && $_GET['reg'] == 'success') { ?>
          <h1 class="text-uppercase">Thank you for your interest!</h1>
          <p class="thankyou-msg">One of our representatives will contact you shortly with more information.</p>
        <?php } else { ?>
          <h1 class="text-uppercase">Thank you for your effort!</h1>
          <p class="thankyou-msg">Your detailed are failed to submit. Try again.</p>
        <?php } ?>
        <div class="thankyou-logo">
          <picture>
            <img loading="lazy" src="<?php echo $imagesurl; ?>logo-black.svg" alt="<?php echo $sitename; ?> Logo">
          </picture>
        </div>
      </div>
    </div>
  </div>
  <?php require_once $footscripts; ?>
  <?php echo $block_conv_body_end; ?>
</body>

</html>