<?php
require_once("inc-global.php");
header("Location: " . $siteurl . "greenship-recycling.php", true, 301);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0;url=<?php echo $siteurl; ?>greenship-recycling.php">
  <script>window.location.href = "<?php echo $siteurl; ?>greenship-recycling.php";</script>
  <title>Redirecting to Green Ship Recycling...</title>
</head>
<body>
  <p>Redirecting to <a href="<?php echo $siteurl; ?>greenship-recycling.php">Green Ship Recycling</a>...</p>
</body>
</html>
