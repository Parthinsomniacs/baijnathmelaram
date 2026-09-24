<?php require_once("inc-global.php"); ?>
<?php
$page = "generalcargo";
$pagetype = "subpage";
$pagename = "General Cargo";
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

  <!-- General Cargo Ships Section -->
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
          <h1 class="ship-detail-title">General Cargo</h1>
        </div>

        <div class="ship-header-right">
          <div class="ship-nav-arrows">
            <a href="<?php echo $siteurl; ?>bulkcarrier.php" class="ship-nav-btn" title="Previous: Bulk Carrier" aria-label="Previous">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </a>
            <a href="<?php echo $siteurl; ?>container.php" class="ship-nav-btn" title="Next: Container" aria-label="Next">
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
                <td class="td-ship-name">M.V. KOTA-BUANA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1983-84</td>
                <td class="td-ship-ltd">3610</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. "INCA-91"</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1989-90</td>
                <td class="td-ship-ltd">5470</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MERULA</td>
                <td class="td-ship-type">MULTIPURPOSE GENERAL CARGO</td>
                <td class="td-ship-year">1989-90</td>
                <td class="td-ship-ltd">5629</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. FENG HUA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1991-92</td>
                <td class="td-ship-ltd">6520</td>
              </tr>
              <tr>
                <td class="td-ship-name">PHU YEN-02</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1992-93</td>
                <td class="td-ship-ltd">3760</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. GARCIEMS</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1993-94</td>
                <td class="td-ship-ltd">3250.4</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. NIKOLOZ BARATSHVILI</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1994-95</td>
                <td class="td-ship-ltd">7330</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. VLADIMIR MORDVINOV</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1996-97</td>
                <td class="td-ship-ltd">5775</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. DALIA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1996-97</td>
                <td class="td-ship-ltd">3982.91</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. BONTRADER</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1996-97</td>
                <td class="td-ship-ltd">12518</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. WONDER</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1996-97</td>
                <td class="td-ship-ltd">3110</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. PLETWAL</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">2357.4</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. ZAVICHOST</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">4545</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. NOVORZHEV</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">2102</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. GRUMANT</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">2347</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MOSKOVSKIY KOMSOMOLETS</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1998-99</td>
                <td class="td-ship-ltd">3543</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. INDIAN VALOUR</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">5000</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. FREATZESCOS-M</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">7735</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MAZO</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">6800</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. JAVA RAINBOW</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1997-98</td>
                <td class="td-ship-ltd">1491.6</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. GILBERT</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1999-00</td>
                <td class="td-ship-ltd">2140</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. ASHAGLOBAL</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1999-00</td>
                <td class="td-ship-ltd">3484</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. JINFA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1999-00</td>
                <td class="td-ship-ltd">2193</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. AL FARES</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">1999-00</td>
                <td class="td-ship-ltd">1446</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MICHAL-R</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">6273</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. LIVADIYA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">941</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. ZARZIS</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">6222</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. SANGMON</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">5352</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. EODOR</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">4822</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. CARRIBEAN EXPRESS</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">4546</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MEGI</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">5640.4</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. REGULES</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2000-01</td>
                <td class="td-ship-ltd">2426.81</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. PROGRESO-I</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">7282</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. LADY NIVINE</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">2106</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MIRIAM</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">1103</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. BRIGHT SEA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">3580</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. WAHIBA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">3265</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MARINGA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">6986</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MAGNISIA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">5194</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MASTER A-II</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">17790</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. TAMATIKI</td>
                <td class="td-ship-type">MULTIPURPOSE GENERAL CARGO</td>
                <td class="td-ship-year">2001-02</td>
                <td class="td-ship-ltd">9710</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MINERVA P</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">7700</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. ABU MOHAMED</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">4740</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. CIUDAD GUYANA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">7650</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. FORWARD</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">1099</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. PACIFIC CARRIER</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2002-03</td>
                <td class="td-ship-ltd">4470</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. IRAN SALAM</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2003-04</td>
                <td class="td-ship-ltd">5298</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. OCEAN ICE</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2003-04</td>
                <td class="td-ship-ltd">5203</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. KOTA SURIA</td>
                <td class="td-ship-type">MULTIPURPOSE GENERAL CARGO</td>
                <td class="td-ship-year">2003-04</td>
                <td class="td-ship-ltd">8321.1</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. EASTERN STAR</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">5727</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. ISKRA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">4242.12</td>
              </tr>
              <tr>
                <td class="td-ship-name">D.V. AQUA SIERA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">5395</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. POTI STAR</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2004-05</td>
                <td class="td-ship-ltd">6552</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. HUNTER</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2005-06</td>
                <td class="td-ship-ltd">1760.9</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MERCS SAJINDA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2005-06</td>
                <td class="td-ship-ltd">1405</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MERCS KIRINDA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2006-07</td>
                <td class="td-ship-ltd">1146</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.T. SARADHA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2006-07</td>
                <td class="td-ship-ltd">755</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. FEEDER - 4</td>
                <td class="td-ship-type">MULTIPURPOSE GENERAL CARGO</td>
                <td class="td-ship-year">2006-07</td>
                <td class="td-ship-ltd">2050</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. SIMA - K</td>
                <td class="td-ship-type">MULTIPURPOSE GENERAL CARGO</td>
                <td class="td-ship-year">2006-07</td>
                <td class="td-ship-ltd">8696</td>
              </tr>
              <tr>
                <td class="td-ship-name">MV AMIRAS</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2009-10</td>
                <td class="td-ship-ltd">3003</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. PRINCESS LAYAN</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2009-10</td>
                <td class="td-ship-ltd">4333</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MONALISA</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2010-11</td>
                <td class="td-ship-ltd">2467</td>
              </tr>
              <tr>
                <td class="td-ship-name">MV ALEXANDER - 1</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2014-15</td>
                <td class="td-ship-ltd">6850</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. MASAR TRADE</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2014-15</td>
                <td class="td-ship-ltd">3659</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. AQUA STAR</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2014-15</td>
                <td class="td-ship-ltd">4369</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. SANTOSH</td>
                <td class="td-ship-type">MULTIPURPOSE GENERAL CARGO</td>
                <td class="td-ship-year">2015-16</td>
                <td class="td-ship-ltd">4983</td>
              </tr>
              <tr>
                <td class="td-ship-name">M.V. AQUA PEARL</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2015-16</td>
                <td class="td-ship-ltd">12252</td>
              </tr>
              <tr>
                <td class="td-ship-name">WIENIAWSKI</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2016-17</td>
                <td class="td-ship-ltd">9996</td>
              </tr>
              <tr>
                <td class="td-ship-name">SZYMANOWSKI</td>
                <td class="td-ship-type">GENERAL CARGO</td>
                <td class="td-ship-year">2016-17</td>
                <td class="td-ship-ltd">10096</td>
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
