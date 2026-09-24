<?php require_once("inc-global.php"); ?>
<?php
$page = "rorocrew";
$pagetype = "subpage";
$pagename = "Roro & Crew";
/**JS & CSS**/
$onepagemenu = "yes";
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

  <!-- Roro & Crew Ships Section -->
  <section class="section section-ship-details">
    <!-- Subtle Background Orange Squares Elements -->
    <div class="ship-bg-squares" aria-hidden="true">
      <div class="ship-square-shape ship-square-1"></div>
      <div class="ship-square-shape ship-square-2"></div>
      <div class="ship-square-shape ship-square-3"></div>
    </div>

    <div class="ship-details-container theme-padding">

      <!-- Top Bar: Home Link | Centered Title | Prev/Next Navigation -->
      <div class="ship-details-header">
        <div class="ship-header-left">
          <a href="<?php echo $siteurl; ?>" class="ship-nav-home">Home</a>
        </div>

        <div class="ship-header-center">
          <h1 class="ship-detail-title">Roro & Crew</h1>
        </div>

        <div class="ship-header-right">
          <div class="ship-nav-arrows">
            <a href="<?php echo $siteurl; ?>tanker.php" class="ship-nav-btn" title="Previous: Tanker" aria-label="Previous">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </a>
            <a href="<?php echo $siteurl; ?>fpso.php" class="ship-nav-btn" title="Next: FPSO" aria-label="Next">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Ships Table Card -->
      <div class="ship-table-card">
        <div class="ship-table-responsive">
          <table class="ship-data-table">
            <thead>
              <tr>
                <th class="th-ship-name">Name of Ship</th>
                <th class="th-ship-type">Type of Ship</th>
                <th class="th-ship-year">Year</th>
                <th class="th-ship-ltd">LTD</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="td-ship-name">M.V. MARSHAL ROKOSSOVSKY</td>
                <td class="td-ship-type">RORO</td>
                <td class="td-ship-year">1995-96</td>
                <td class="td-ship-ltd">4568</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. KIDIRA</td>
                <td class="td-ship-type">CAR CARRIER</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">10696.6</td>
              </tr>
              <tr>
                <td class="td-ship-name">ABBY G</td>
                <td class="td-ship-type">RORO</td>
                <td class="td-ship-year">2010-11</td>
                <td class="td-ship-ltd">19376</td>
              </tr>
              <tr>
                <td class="td-ship-name">EURO SPIRIT</td>
                <td class="td-ship-type">CAR CARRIER</td>
                <td class="td-ship-year">2020/21</td>
                <td class="td-ship-ltd">12700</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. TEHODOR HEUSS</td>
                <td class="td-ship-type">PASS/RAIL FERRY</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">6326</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. FRANSES CO DI PAOLA</td>
                <td class="td-ship-type">PASS/RAIL FERRY</td>
                <td class="td-ship-year">2003-04</td>
                <td class="td-ship-ltd">7000</td>
              </tr>
              <tr>
                <td class="td-ship-name">D.V. OKKAI</td>
                <td class="td-ship-type">CAR CARRIER</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">6294.7</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <?php echo $block_body_end; ?>
</body>

</html>
