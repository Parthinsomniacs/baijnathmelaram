<?php require_once("inc-global.php"); ?>
<?php
$page = "tanker";
$pagetype = "subpage";
$pagename = "Tanker";
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

  <!-- Tanker Ships Section -->
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
          <h1 class="ship-detail-title">Tanker</h1>
        </div>

        <div class="ship-header-right">
          <div class="ship-nav-arrows">
            <a href="<?php echo $siteurl; ?>container.php" class="ship-nav-btn" title="Previous: Container" aria-label="Previous">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </a>
            <a href="<?php echo $siteurl; ?>rorocrew.php" class="ship-nav-btn" title="Next: Roro & Crew" aria-label="Next">
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
                <td class="td-ship-name">M.T. MH.ALBAKAR</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">1989-90</td>
                <td class="td-ship-ltd">6015</td>
              </tr>
              <tr>
                <td class="td-ship-name">MT. TT. ASTERIAS</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">1990-91</td>
                <td class="td-ship-ltd">7000</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. COUGAR</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">1992-93</td>
                <td class="td-ship-ltd">14912</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. PAZIN</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">1993-94</td>
                <td class="td-ship-ltd">5331</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. APSHERONSK</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">1995-96</td>
                <td class="td-ship-ltd">2060</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. OCEANUS</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">1996-97</td>
                <td class="td-ship-ltd">17171</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. PIONEER NAKODKI</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">3673</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. PETROMERCEY</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">5540</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. RADER</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">7476</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. ACCORD-I</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">6482</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. ATLAS</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">16039</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. ASTYPALEA</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">7085</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. MOON TRADER</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">2003-04</td>
                <td class="td-ship-ltd">1555</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. UNITED RELIANCE</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2003-04</td>
                <td class="td-ship-ltd">18865</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. STEF</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">1446</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. COTSWORLD</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">1376</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. NISHA II</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">2699</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. TRADERS</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">4110.11</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. DRAGGEN</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">4525</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. CARIBBEAN TRADER</td>
                <td class="td-ship-type">CHEMICAL TANKER</td>
                <td class="td-ship-year">2005-06</td>
                <td class="td-ship-ltd">2500</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. RANGE</td>
                <td class="td-ship-type">CHEMICAL TANKER</td>
                <td class="td-ship-year">2006-07</td>
                <td class="td-ship-ltd">11954</td>
              </tr>
              <tr>
                <td class="td-ship-name">BABY</td>
                <td class="td-ship-type">LPG TANKER</td>
                <td class="td-ship-year">2007-08</td>
                <td class="td-ship-ltd">2963</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. NARGES</td>
                <td class="td-ship-type">CHEMICAL TANKER</td>
                <td class="td-ship-year">2008-09</td>
                <td class="td-ship-ltd">2140</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T FAN</td>
                <td class="td-ship-type">OIL TANKER</td>
                <td class="td-ship-year">2008-09</td>
                <td class="td-ship-ltd">16046</td>
              </tr>
              <tr>
                <td class="td-ship-name">MONTE CASINO</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2009-10</td>
                <td class="td-ship-ltd">7790</td>
              </tr>
              <tr>
                <td class="td-ship-name">MT KEFRE</td>
                <td class="td-ship-type">CHEMICAL TANKER</td>
                <td class="td-ship-year">2010-11</td>
                <td class="td-ship-ltd">2160</td>
              </tr>
              <tr>
                <td class="td-ship-name">ZEINAT-2</td>
                <td class="td-ship-type">CRUDE OIL TANKER</td>
                <td class="td-ship-year">2010-11</td>
                <td class="td-ship-ltd">15002</td>
              </tr>
              <tr>
                <td class="td-ship-name">MT CHAMPION</td>
                <td class="td-ship-type">OIL &amp; CHEMICAL TANKER</td>
                <td class="td-ship-year">2010-11</td>
                <td class="td-ship-ltd">9948</td>
              </tr>
              <tr>
                <td class="td-ship-name">ASPHALT VICTORY</td>
                <td class="td-ship-type">OIL &amp; CHEMICAL TANKER</td>
                <td class="td-ship-year">2011-12</td>
                <td class="td-ship-ltd">8612</td>
              </tr>
              <tr>
                <td class="td-ship-name">OURANIA</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2011-12</td>
                <td class="td-ship-ltd">16499</td>
              </tr>
              <tr>
                <td class="td-ship-name">NAVAJO SPIRIT</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2012-13</td>
                <td class="td-ship-ltd">19500</td>
              </tr>
              <tr>
                <td class="td-ship-name">SULPHUR GLOBAL</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2013-14</td>
                <td class="td-ship-ltd">3670</td>
              </tr>
              <tr>
                <td class="td-ship-name">THERESA PACIFIC</td>
                <td class="td-ship-type">CHEMICAL TANKER</td>
                <td class="td-ship-year">2013-14</td>
                <td class="td-ship-ltd">14900</td>
              </tr>
              <tr>
                <td class="td-ship-name">GAS MAGIC</td>
                <td class="td-ship-type">LPG CARRIER</td>
                <td class="td-ship-year">2017-18</td>
                <td class="td-ship-ltd">10150</td>
              </tr>
              <tr>
                <td class="td-ship-name">TIRUPATI</td>
                <td class="td-ship-type">TANKER</td>
                <td class="td-ship-year">2017-18</td>
                <td class="td-ship-ltd">23525</td>
              </tr>
              <tr>
                <td class="td-ship-name">COURCHEVILLE</td>
                <td class="td-ship-type">LPG CARRIER</td>
                <td class="td-ship-year">2017-18</td>
                <td class="td-ship-ltd">10150</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. SHINE</td>
                <td class="td-ship-type">CHEMICAL TANKER</td>
                <td class="td-ship-year">2021</td>
                <td class="td-ship-ltd">2556</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. JADE</td>
                <td class="td-ship-type">CRUDE OIL TANKER</td>
                <td class="td-ship-year">2022</td>
                <td class="td-ship-ltd">13138.4</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. KAREN KNUTSEN</td>
                <td class="td-ship-type">SHUTTLE TANKER</td>
                <td class="td-ship-year">2022</td>
                <td class="td-ship-ltd">25865.8</td>
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
