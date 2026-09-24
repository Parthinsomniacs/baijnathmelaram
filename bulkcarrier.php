<?php require_once("inc-global.php"); ?>
<?php
$page = "bulkcarrier";
$pagetype = "subpage";
$pagename = "Bulk Carrier";
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

  <!-- Bulk Carrier Ships Section -->
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
          <h1 class="ship-detail-title">Bulk Carrier</h1>
        </div>

        <div class="ship-header-right">
          <div class="ship-nav-arrows">
            <span class="ship-nav-btn is-disabled" title="Previous" aria-label="Previous">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </span>
            <a href="<?php echo $siteurl; ?>generalcargo.php" class="ship-nav-btn" title="Next: General Cargo" aria-label="Next">
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
                <td class="td-ship-name">M.V. OREME - D</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1983-84</td>
                <td class="td-ship-ltd">5500</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. AL - JOHFFA</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1984-85</td>
                <td class="td-ship-ltd">4853</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. BRAVE</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1985-86</td>
                <td class="td-ship-ltd">5620</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. ZLETOVO</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1986-87</td>
                <td class="td-ship-ltd">5885</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. DIANA</td>
                <td class="td-ship-type">CEMENT BULK CARRIER</td>
                <td class="td-ship-year">1991-92</td>
                <td class="td-ship-ltd">3233</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. TAURUS</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1993-94</td>
                <td class="td-ship-ltd">2247</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. LAZERTA</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1993-94</td>
                <td class="td-ship-ltd">2255</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. TOLMIROS</td>
                <td class="td-ship-type">OBO</td>
                <td class="td-ship-year">1993-94</td>
                <td class="td-ship-ltd">21362.78</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. AEGIALI</td>
                <td class="td-ship-type">OBO</td>
                <td class="td-ship-year">1995-96</td>
                <td class="td-ship-ltd">22397</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. STANDAR VIRTUE</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">11793</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. GENERAL BEM</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">9876</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. ALMA</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">2151</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MYOHYANG-6</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">3182</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MIRA</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">6765</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. BOTOSANI</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">14396.69</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. BARBARA-D</td>
                <td class="td-ship-type">LOG CARRIER</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">3018.22</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MSC LAURA</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1999-00</td>
                <td class="td-ship-ltd">10716</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. URGUP</td>
                <td class="td-ship-type">OBO</td>
                <td class="td-ship-year">1999-00</td>
                <td class="td-ship-ltd">24278</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. GEMINY</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">1999-00</td>
                <td class="td-ship-ltd">3392</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. SAABA</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">5390</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. FLAG MARU</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">6499</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. LEON</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">4232</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. CONVEYAR</td>
                <td class="td-ship-type">SALT CARRIER</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">17679</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. STAV ROULA</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">4738</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MICHALAKIS</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">10670</td>
              </tr>
              <tr>
                <td class="td-ship-name">AGAME MNON</td>
                <td class="td-ship-type">CEMENT BULK CARRIER</td>
                <td class="td-ship-year">2007-08</td>
                <td class="td-ship-ltd">2450</td>
              </tr>
              <tr>
                <td class="td-ship-name">UNFAIR LADY</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2008-09</td>
                <td class="td-ship-ltd">8319</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. ELLISPONTOS</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2008-09</td>
                <td class="td-ship-ltd">7296</td>
              </tr>
              <tr>
                <td class="td-ship-name">MOL THAMES</td>
                <td class="td-ship-type">CONTAINER SHIP</td>
                <td class="td-ship-year">2009-10</td>
                <td class="td-ship-ltd">19243</td>
              </tr>
              <tr>
                <td class="td-ship-name">HANDY V</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2011-12</td>
                <td class="td-ship-ltd">11349</td>
              </tr>
              <tr>
                <td class="td-ship-name">CASTILLO DE SOUTOMAIOR</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2012-13</td>
                <td class="td-ship-ltd">13400</td>
              </tr>
              <tr>
                <td class="td-ship-name">MV LIBERTY SPIRIT</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2012-13</td>
                <td class="td-ship-ltd">11310</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MONA LIBERTY</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2015-16</td>
                <td class="td-ship-ltd">17503</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. PREVENTER</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2015-16</td>
                <td class="td-ship-ltd">9412</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. PEARL RIVER</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2015-16</td>
                <td class="td-ship-ltd">9286</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. SEA LORD</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2015-16</td>
                <td class="td-ship-ltd">9726</td>
              </tr>
              <tr>
                <td class="td-ship-name">SKS TANARO</td>
                <td class="td-ship-type">OBO</td>
                <td class="td-ship-year">2019-20</td>
                <td class="td-ship-ltd">18715</td>
              </tr>
              <tr>
                <td class="td-ship-name">UNIVERSAL GREEN</td>
                <td class="td-ship-type">WOODCHIP CARRIER</td>
                <td class="td-ship-year">2019-20</td>
                <td class="td-ship-ltd">10640</td>
              </tr>
              <tr>
                <td class="td-ship-name">GRANDE SOLARIS</td>
                <td class="td-ship-type">BULKER</td>
                <td class="td-ship-year">2020-2021</td>
                <td class="td-ship-ltd">21100</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V.BERGE APO</td>
                <td class="td-ship-type">BULK CARRIER</td>
                <td class="td-ship-year">2022-23</td>
                <td class="td-ship-ltd">20668</td>
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
