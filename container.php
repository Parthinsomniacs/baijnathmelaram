<?php require_once("inc-global.php"); ?>
<?php
$page = "container";
$pagetype = "subpage";
$pagename = "Container";
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

  <!-- Container Ships Section -->
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
          <h1 class="ship-detail-title">Container</h1>
        </div>

        <div class="ship-header-right">
          <div class="ship-nav-arrows">
            <a href="<?php echo $siteurl; ?>generalcargo.php" class="ship-nav-btn" title="Previous: General Cargo" aria-label="Previous">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </a>
            <a href="<?php echo $siteurl; ?>tanker.php" class="ship-nav-btn" title="Next: Tanker" aria-label="Next">
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
                <td class="td-ship-name">M.V. BOYEVOY</td>
                <td class="td-ship-type">CONTAINER</td>
                <td class="td-ship-year">1996-97</td>
                <td class="td-ship-ltd">2765</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. KOTAMAKMUR</td>
                <td class="td-ship-type">CONTAINER</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">3262</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. CARMEN CARA</td>
                <td class="td-ship-type">CONTAINER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">14521.3</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. IGEN STAR</td>
                <td class="td-ship-type">CONTAINER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">5903</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. KOTA SABAS</td>
                <td class="td-ship-type">CONTAINER</td>
                <td class="td-ship-year">2003-04</td>
                <td class="td-ship-ltd">8321</td>
              </tr>
              <tr>
                <td class="td-ship-name">MOL THAMES</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2009-10</td>
                <td class="td-ship-ltd">19243</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V LYS</td>
                <td class="td-ship-type">CELLULAR CONTAINER</td>
                <td class="td-ship-year">2009-10</td>
                <td class="td-ship-ltd">17126</td>
              </tr>
              <tr>
                <td class="td-ship-name">APL TOPAZ</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2012-13</td>
                <td class="td-ship-ltd">17825</td>
              </tr>
              <tr>
                <td class="td-ship-name">MV MALACCA</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2013-14</td>
                <td class="td-ship-ltd">22245</td>
              </tr>
              <tr>
                <td class="td-ship-name">HANJIN WASHINGTON</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2014-15</td>
                <td class="td-ship-ltd">25860</td>
              </tr>
              <tr>
                <td class="td-ship-name">WILL</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2016/17</td>
                <td class="td-ship-ltd">11446</td>
              </tr>
              <tr>
                <td class="td-ship-name">MAERSK PHUKET</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2018/19</td>
                <td class="td-ship-ltd">12400</td>
              </tr>
              <tr>
                <td class="td-ship-name">ISLAND CHIEF</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2018/19</td>
                <td class="td-ship-ltd">5889</td>
              </tr>
              <tr>
                <td class="td-ship-name">EVER DECENT</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2020/21</td>
                <td class="td-ship-ltd">21731</td>
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
