<?php require_once("inc-global.php"); ?>
<?php
$page = "prime-trading";
$pagetype = "onepage";
$pagename = "Prime Trading";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "no";
$sliderautoscroll = "no";
$swiperjs = "no";
$popup = "yes";
$counter = "no";
$accordian = "no";
$utm = "yes";
?>

<!DOCTYPE html>
<html id="<?php echo $page; ?>" dir="ltr" lang="en-US">

<head>
  <?php require_once $head; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300..900;1,300..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
  <?php echo $block_body_start; ?>
  <?php require_once $header; ?>

  <!-- ==========================================================================
       Section 1: Hero Banner (Empowering Traders for Success)
       ========================================================================== -->
  <section id="prime-banner" class="section section-banner p-0 prime-trading-banner">
    <div class="banner-image">
      <picture>
        <source media="(max-width:600px)" srcset="<?php echo $imagesurl; ?>banner/banner-2-sm.webp?v=<?php echo $version; ?>" type="image/webp">
        <source media="(max-width:1000px)" srcset="<?php echo $imagesurl; ?>banner/banner-2-md.webp?v=<?php echo $version; ?>" type="image/webp">
        <source media="(max-width:1350px)" srcset="<?php echo $imagesurl; ?>banner/banner-2-lg.webp?v=<?php echo $version; ?>" type="image/webp">
        <img src="<?php echo $imagesurl; ?>banner/banner-2-xl.webp?v=<?php echo $version; ?>" width="1920" height="750" alt="Prime Trading - Baijnath Melaram" class="prime-banner-img" />
      </picture>
      <div class="banner-video-overlay"></div>
    </div>

    <!-- Banner Content Overlay (Matches Reference Design) -->
    <div class="banner-overlay-wrap">
      <div class="theme-padding">
        <div class="about-ref-eyebrow">
          <span class="about-eyebrow-line"></span>
          <span class="about-eyebrow-text" style="color: #ffffff !important;">OUR COMPANY, PHILOSOPHY AND PEOPLE</span>
        </div>
        <div class="banner-content-row columns is-vcentered">
          <div class="column is-12">
            <div class="section-title">
              <h1 class="banner-title prime-banner-title">
                <span class="banner-phrase-nowrap">
                  <span class="banner-word-mask"><span class="banner-word-inner">Empowering</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner text-secondary">Traders</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner">for</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner">Success:</span></span>
                </span><br class="is-hidden-mobile">
                <span class="banner-phrase-nowrap">
                  <span class="banner-word-mask"><span class="banner-word-inner">Tools,</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner">Insights,</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner">and</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner">Support</span></span>
                </span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main id="prime-trading-main">
    <!-- ==========================================================================
         Section 2: About B Melaram & Sons (BMS)
         ========================================================================== -->
    <section id="section-about-bms" class="section-prime-about section-stacked">
      <!-- Square Grid Background (Warm Orange Subdued Grid) -->
      <div class="timeline-bg-grid" aria-hidden="true"></div>

      <div class="theme-padding">
        <div class="prime-about-container">

          <div class="prime-about-grid">

            <!-- Left Column: 60% Content -->
            <div class="prime-about-content-col">
              <!-- Theme Kicker Matching Greenship Recycling -->
              <div class="section-kicker" style="margin-bottom: 16px;">
                <span class="section-kicker-line"></span>
                <span class="section-kicker-text">ABOUT THE SUBSIDIARY</span>
              </div>

              <!-- Main Section Title Matching Screenshot & Greenship Typography -->
              <h2 class="prime-about-heading">
                <span class="word-mask"><span class="word-inner">About</span></span>
                <span class="word-mask"><span class="word-inner">B</span></span>
                <span class="word-mask"><span class="word-inner">Melaram</span></span>
                <span class="word-mask"><span class="word-inner">&amp;</span></span>
                <span class="word-mask"><span class="word-inner text-secondary">Sons</span></span>
              </h2>

              <!-- Prominent Lead Paragraph Matching Screenshot Exactly -->
              <p class="prime-about-lead">
                B Melaram &amp; Sons (BMS), a subsidiary of Baijnath Melaram, was established in the early 2000s to expand further and diversify into importing Prime Iron and Steel Products, which include flat and long products.
              </p>

              <!-- Descriptive Body Text Paragraphs -->
              <div class="prime-about-body">
                <p>
                  To expand &amp; diversify the business activities of Baijnath Melaram Group, B. Melaram &amp; Sons emerged as an Importer and Stockist of Prime Iron &amp; Steel Products, having established strong tie-ups with major steel producers in Asia, Russia, China and Europe.
                </p>

                <p>
                  B.Melaram &amp; Sons has a reputation for supplying not only prime material, but also having our own storage facility at Kalamboli (New Mumbai), and Mumbai Iron Market, with 24 hrs Loading &amp; Unloading facility. Furthermore, we have also tied up with major Steel Coil Processing units for De-Coiling &amp; Cut To Length (CTL) as per our customer's requirements.
                </p>

                <p>
                  These materials are imported specifically with the original Mill Test Certificates to authenticate their origin, quality and grade. These materials have various applications ranging from car manufacturing, machinery, and Industrial steel fabrication &amp; construction, depending upon their density, strength, and bending capacity.
                </p>

                <p>
                  In addition to this, as we have been in the industry since the early 2000’s we have maintained and created long-standing relationships with key industry players in the domestic markets like Jindal, Tata and SAIL so we can also procure prime material locally and supply to different vendors. Orders are executed in a timely manner and delivered to the customer with feedback maintained for continuous improvement and aiming growth for all. Prime Steel imports are divided into two categories, Flat and Long Products.
                </p>
              </div>
            </div>

            <!-- Right Column: 40% Image -->
            <div class="prime-about-media-col">
              <div class="prime-about-image-card">
                <picture>
                  <img src="<?php echo $imagesurl; ?>prime-trading/about-bms.jpg?v=<?php echo $version; ?>" width="900" height="1200" alt="B Melaram &amp; Sons - Prime Steel Stockyard and Logistics" class="prime-about-img" />
                </picture>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================================================
         Section 3: Fields of Expertise (Product Showcase)
         ========================================================================== -->
    <section id="section-expertise" class="section-prime-expertise">
      <!-- Nautical Compass Background Watermark -->
      <div class="anchors-bg-compass" aria-hidden="true">
        <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.12)" stroke-width="1.5" stroke-dasharray="4 8" />
          <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.16)" stroke-width="1.2" />
          <circle cx="300" cy="300" r="140" stroke="rgba(229,145,47,0.12)" stroke-width="1.5" stroke-dasharray="2 6" />
          <circle cx="300" cy="300" r="60" stroke="rgba(229,145,47,0.18)" stroke-width="1.2" />
          <!-- Compass Crosshairs & Navigation Marks -->
          <line x1="300" y1="10" x2="300" y2="590" stroke="rgba(229,145,47,0.14)" stroke-width="1" stroke-dasharray="6 6" />
          <line x1="10" y1="300" x2="590" y2="300" stroke="rgba(229,145,47,0.14)" stroke-width="1" stroke-dasharray="6 6" />
          <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.28)" />
          <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.20)" />
          <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.20)" />
          <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.20)" />
          <!-- Dial ticks -->
          <g stroke="rgba(229,145,47,0.16)" stroke-width="1">
            <line x1="300" y1="70" x2="300" y2="85" />
            <line x1="300" y1="515" x2="300" y2="530" />
            <line x1="70" y1="300" x2="85" y2="300" />
            <line x1="515" y1="300" x2="530" y2="300" />
            <line x1="137" y1="137" x2="148" y2="148" />
            <line x1="463" y1="463" x2="452" y2="452" />
            <line x1="463" y1="137" x2="452" y2="148" />
            <line x1="137" y1="463" x2="148" y2="452" />
          </g>
        </svg>
      </div>

      <!-- Architectural Industrial Blueprint & Geometric Ambient Background -->
      <div class="bm-expertise-bg-decor" aria-hidden="true">
        <div class="bm-expertise-glow bm-expertise-glow-1"></div>
        <div class="bm-expertise-glow bm-expertise-glow-2"></div>
        <div class="bm-expertise-grid-lines"></div>
        <div class="bm-expertise-plus bm-expertise-plus-1">+</div>
        <div class="bm-expertise-plus bm-expertise-plus-2">+</div>
      </div>

      <div class="theme-padding">
        <div class="prime-expertise-container">

          <!-- Section Header Block -->
          <div class="prime-expertise-header text-center">
            <!-- Eyebrow / Kicker -->
            <div class="section-kicker is-centered" style="margin-bottom: 16px;">
              <span class="section-kicker-line"></span>
              <span class="section-kicker-text">FIELDS OF EXPERTISE</span>
            </div>

            <!-- Main Heading -->
            <h2 class="prime-expertise-heading">
              <span class="word-mask"><span class="word-inner">Fields</span></span>
              <span class="word-mask"><span class="word-inner">of</span></span>
              <span class="word-mask"><span class="word-inner text-secondary">Expertise</span></span>
            </h2>
          </div>

          <!-- Interactive Tab Navigation (Swapped: Red Box on Top) -->
          <div class="prime-tabs-nav-wrapper">
            <div class="prime-tabs-nav" role="tablist" aria-label="Steel Product Categories">
              <button type="button" class="prime-tab-btn active" data-tab="flat-products" role="tab" aria-selected="true" aria-controls="panel-flat-products" id="tab-btn-flat">
                <span class="tab-indicator-dot"></span>
                <span class="tab-label">Flat Products</span>
              </button>
              <button type="button" class="prime-tab-btn" data-tab="long-products" role="tab" aria-selected="false" aria-controls="panel-long-products" id="tab-btn-long">
                <span class="tab-indicator-dot"></span>
                <span class="tab-label">Long Products</span>
              </button>
            </div>
          </div>

          <!-- Dynamic Category Description (Swapped: Blue Box below Tabs) -->
          <div class="prime-expertise-desc-wrapper">
            <p class="prime-expertise-desc" id="prime-expertise-dynamic-desc">
              B Melaram &amp; Sons have a comprehensive range of hot rolled, cold rolled, metallic coated, direct rolled, pre-finished and electro-plated steels for use in the automotive and transport industries, construction, consumer packaging and general industry &amp; Pipe Factory.
            </p>
          </div>

          <!-- Tab Content Panels Container -->
          <div class="prime-tab-panels-container">

            <!-- Panel 1: Flat Products (Active by default, 5 Accordion Cards in Strip) -->
            <div class="prime-tab-panel active" id="panel-flat-products" role="tabpanel" aria-labelledby="tab-btn-flat">
              <div class="prime-accordion-strip">

                <!-- Card 1: H.R Coils (Active by default) -->
                <article class="prime-acc-card is-active" data-index="0">
                  <div class="acc-card-top">
                    <h3 class="acc-card-title">H.R Coils</h3>
                    <p class="acc-card-desc">
                      <strong>Thickness:</strong> 1.5 mm to 16 mm<br>
                      <strong>Grades / Specs:</strong> E250 / E350 / IS 2062 / SPHT / IS 10748 CRI API Grades. Used in Automobile, Pipe Manufacturing, Railway, and Bicycle Industries.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-hr-coils.jpg?v=<?php echo $version; ?>" alt="H.R Coils" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore H.R Coils">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 2: H.R Plates -->
                <article class="prime-acc-card" data-index="1">
                  <div class="acc-card-top">
                    <h3 class="acc-card-title">H.R Plates</h3>
                    <p class="acc-card-desc">
                      <strong>Thickness:</strong> 5 mm to 120 mm<br>
                      <strong>Grades / Specs:</strong> E250 / IS 2062 / A588 GR A. Heavy structural and boiler quality plates essential for high-pressure vessels, construction, and fabrication.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-prefinished.jpg?v=<?php echo $version; ?>" alt="H.R Plates" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore H.R Plates">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 3: Round Bars -->
                <article class="prime-acc-card" data-index="2">
                  <div class="acc-card-top">
                    <h3 class="acc-card-title">Round Bars</h3>
                    <p class="acc-card-desc">
                      <strong>Thickness:</strong> 12 mm to 300 mm<br>
                      <strong>Grades / Specs:</strong> C45 / 4140. High-integrity rounds for forging industries, bright bar units, auto-ancillaries, foundation bolts, pins, and rollers.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-tinplate.jpg?v=<?php echo $version; ?>" alt="Round Bars" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Round Bars">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 4: PPGI -->
                <article class="prime-acc-card" data-index="3">
                  <div class="acc-card-top">
                    <h3 class="acc-card-title">PPGI</h3>
                    <p class="acc-card-desc">
                      <strong>Thickness:</strong> 0.42 mm to 1 mm<br>
                      <strong>Grades / Specs:</strong> JIS G3322 CG LCC. Pre-painted galvanized steel coils ideal for modern roofing solutions, providing durability and vibrant colours.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-galvanized.jpg?v=<?php echo $version; ?>" alt="PPGI Coils" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore PPGI">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 5: Cold Roll / Sheets / Coils -->
                <article class="prime-acc-card" data-index="4">
                  <div class="acc-card-top">
                    <h3 class="acc-card-title">Cold Roll / Sheets / Coils</h3>
                    <p class="acc-card-desc">
                      <strong>Thickness:</strong> 0.5 mm to 2 mm<br>
                      <strong>Grades / Specs:</strong> SPGHT. Precision cold-rolled coils for furniture, automobile panels, container manufacturing, and value-add sheet processing.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-cr-coils.jpg?v=<?php echo $version; ?>" alt="Cold Roll Sheets and Coils" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Cold Roll / Sheets / Coils">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

              </div>
            </div>

            <!-- Panel 2: Long Products (2 Accordion Cards in Strip) -->
            <div class="prime-tab-panel" id="panel-long-products" role="tabpanel" aria-labelledby="tab-btn-long">
              <div class="prime-accordion-strip prime-accordion-strip-duo">

                <!-- Card 1: Wire Rods (Active by default) -->
                <article class="prime-acc-card is-active" data-index="0">
                  <div class="acc-card-top">
                    <h3 class="acc-card-title">Wire Rods</h3>
                    <p class="acc-card-desc">
                      <strong>Thickness:</strong> 5.5 mm to 22 mm<br>
                      <strong>Grades / Specs:</strong> SAE 1008. High-ductility steel wire rods for wire drawing, fasteners, nails, welding electrodes, and industrial mesh.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/long-wire-rods.jpg?v=<?php echo $version; ?>" alt="Wire Rods" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Wire Rods">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 2: TMT Bars (Rebars) -->
                <article class="prime-acc-card" data-index="1">
                  <div class="acc-card-top">
                    <h3 class="acc-card-title">TMT Bars (Rebars)</h3>
                    <p class="acc-card-desc">
                      <strong>Thickness:</strong> 6 mm to 40 mm<br>
                      <strong>Grades / Specs:</strong> FE500D. High-yield thermo-mechanically treated reinforcement bars engineered for bridges, high-rises, and capital infrastructure.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/long-tmt-rebars.jpg?v=<?php echo $version; ?>" alt="TMT Bars Rebars" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore TMT Bars Rebars">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================================================
         Section: Our Products (Creative 6-Product Showcase)
         ========================================================================== -->
    <section id="section-our-products" class="section-prime-our-products">
      <!-- Ambient Square Grid Background Pattern -->
      <div class="timeline-bg-grid" aria-hidden="true"></div>

      <div class="theme-padding">
        <div class="prime-products-container">

          <!-- Section Header Block -->
          <div class="prime-products-header">
            <div class="section-kicker" style="margin-bottom: 16px;">
              <span class="section-kicker-line"></span>
              <span class="section-kicker-text">PRODUCT CATALOG</span>
            </div>
            <div class="prime-products-heading-row">
              <h2 class="prime-products-heading">
                <span class="word-mask"><span class="word-inner">Our</span></span>
                <span class="word-mask"><span class="word-inner text-secondary">Products</span></span>
              </h2>
              <p class="prime-products-subtext">
                Explore our versatile inventory of prime iron and steel products engineered to meet demanding industrial specifications across automotive, infrastructure, pressure vessels, and architectural applications.
              </p>
            </div>
          </div>

          <!-- Products Grid (Hover: Warm Amber Gradient Overlay with Bold White Title) -->
          <div class="prime-products-grid">

            <!-- Card 1: Hot Rolled Steel Coil/Sheets -->
            <div class="prime-product-card" data-card="0">
              <div class="product-card-media">
                <img src="<?php echo $imagesurl; ?>prime-trading/3.1Hot-Rolled-Steel-Coil-1200x675.avif?v=<?php echo $version; ?>" alt="Hot Rolled Steel Coil/Sheets" class="product-img" loading="lazy" />
                <div class="product-media-overlay"></div>
                <h3 class="product-card-hover-title">Hot Rolled Steel Coil/Sheets</h3>
              </div>
            </div>

            <!-- Card 2: Cold Rolled Steel Coil/Sheets -->
            <div class="prime-product-card" data-card="1">
              <div class="product-card-media">
                <img src="<?php echo $imagesurl; ?>prime-trading/3.2closeup-photo-metal-tile-roof-metallic-forming-machine-production-line-factory-cold-rolled.avif?v=<?php echo $version; ?>" alt="Cold Rolled Steel Coil/Sheets" class="product-img" loading="lazy" />
                <div class="product-media-overlay"></div>
                <h3 class="product-card-hover-title">Cold Rolled Steel Coil/Sheets</h3>
              </div>
            </div>

            <!-- Card 3: Boiler Quality Plates -->
            <div class="prime-product-card" data-card="2">
              <div class="product-card-media">
                <img src="<?php echo $imagesurl; ?>prime-trading/3.5A588%20GR%20A_.avif?v=<?php echo $version; ?>" alt="Boiler Quality Plates" class="product-img" loading="lazy" />
                <div class="product-media-overlay"></div>
                <h3 class="product-card-hover-title">Boiler Quality Plates</h3>
              </div>
            </div>

            <!-- Card 4: Galvanized Coils -->
            <div class="prime-product-card" data-card="3">
              <div class="product-card-media">
                <img src="<?php echo $imagesurl; ?>prime-trading/3.3galvanized-coils-sheets-banner.avif?v=<?php echo $version; ?>" alt="Galvanized Coils" class="product-img" loading="lazy" />
                <div class="product-media-overlay"></div>
                <h3 class="product-card-hover-title">Galvanized Coils</h3>
              </div>
            </div>

            <!-- Card 5: PPGI Coils -->
            <div class="prime-product-card" data-card="4">
              <div class="product-card-media">
                <img src="<?php echo $imagesurl; ?>prime-trading/3.4amns-ppgi-coils.avif?v=<?php echo $version; ?>" alt="PPGI Coils" class="product-img" loading="lazy" />
                <div class="product-media-overlay"></div>
                <h3 class="product-card-hover-title">PPGI Coils</h3>
              </div>
            </div>

            <!-- Card 6: MS Rounds -->
            <div class="prime-product-card" data-card="5">
              <div class="product-card-media">
                <img src="<?php echo $imagesurl; ?>prime-trading/3.64-Advantages-of-Round-Bars.avif?v=<?php echo $version; ?>" alt="MS Rounds" class="product-img" loading="lazy" />
                <div class="product-media-overlay"></div>
                <h3 class="product-card-hover-title">MS Rounds</h3>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================================================
         Section 4: Association with India's biggest corporations
         ========================================================================== -->
    <section id="section-corporate-associations" class="section-prime-corporations">
      <!-- Background Image with Light-Theme Gradient Overlay -->
      <div class="prime-corp-bg-layer" aria-hidden="true">
        <picture>
          <img src="<?php echo $imagesurl; ?>prime-trading/corp-alliances-bg.jpg" alt="Maritime Vessels & Trading Cargo" class="prime-corp-bg-img" loading="lazy" />
        </picture>
        <div class="prime-corp-overlay"></div>
      </div>

      <div class="theme-padding">
        <div class="prime-corp-container">

          <!-- Left-Aligned Header Block matching Screenshot Structure -->
          <div class="prime-corp-content-block">
            <!-- Eyebrow / Kicker with Line on the Right -->
            <div class="section-kicker prime-corp-kicker">
              <span class="section-kicker-text">TRUSTED ALLIANCES</span>
              <span class="section-kicker-line"></span>
            </div>

            <!-- Main Heading with Brand Color Accent -->
            <h2 class="prime-corp-heading">
              <span class="word-mask"><span class="word-inner">Association</span></span>
              <span class="word-mask"><span class="word-inner">with</span></span>
              <span class="word-mask"><span class="word-inner">India’s</span></span><br>
              <span class="word-mask"><span class="word-inner text-secondary">biggest</span></span>
              <span class="word-mask"><span class="word-inner text-secondary">corporations</span></span>
            </h2>

            <!-- Lead Paragraph directly under Heading -->
            <p class="prime-corp-desc">
              Association with India's biggest corporation offers access to a vast customer base, strategic collaborations, enhanced credibility, and valuable resources for business growth and success.
            </p>
          </div>

          <!-- 4 Corporate Logos Grid at Bottom -->
          <div class="prime-corp-grid">

            <!-- Card 1: JSW -->
            <div class="prime-corp-card" title="JSW Steel">
              <svg class="prime-corp-logo-svg" viewBox="0 0 170 65" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="JSW">
                <path d="M72 21 C85 10 115 9 146 19 C130 14 104 13.5 86 21.5 Z" fill="#E2211C" />
                <path d="M78 19 C92 7.5 125 7 155 18 C135 12.5 106 12 84 19.5 Z" fill="#E2211C" />
                <path d="M19 50 C26 50 30.5 46.5 32.5 41.5 L36.2 24.5 H27.2 L24.8 35.5 C24 39 22 41 18.2 41 C15.2 41 13.5 39.5 13.5 36.8 C13.5 35.5 14 33.5 15.2 30.5 L16.5 24.5 H7.5 L5.8 31.5 C4.2 37.8 5.2 43 8.8 46.5 C11.5 48.8 15 50 19 50 Z" fill="#0E3875" />
                <path d="M38 44 C41.2 48 46.8 50 54.2 50 C62.8 50 68 45.8 68 39.5 C68 35 65.2 32.2 57.8 29.5 L55.2 28.5 C50.5 26.8 49 25.2 49 23.2 C49 21 51.2 19.2 55.5 19.2 C59.8 19.2 63 21 65 24.5 L73 22 C70.2 16.5 63.8 13.5 55.2 13.5 C46.8 13.5 40.8 17.5 40.8 24 C40.8 28.5 43.8 31.2 51 34 L53.8 35 C58.5 36.8 60 38.5 60 40.8 C60 43.2 57.5 44.8 53.2 44.8 C48 44.8 44.2 42 42.2 37.2 L38 44 Z" fill="#0E3875" />
                <path d="M74 49.5 H82.5 L87.5 30 L94.2 49.5 H101.8 L108.5 30 L113.5 49.5 H122 L129.5 24.5 H120.5 L116 40.5 L109.2 24.5 H101.8 L95 40.5 L90.5 24.5 H68.5 L74 49.5 Z" fill="#0E3875" />
              </svg>
            </div>

            <!-- Card 2: Welspun -->
            <div class="prime-corp-card" title="Welspun - Dare to Commit">
              <svg class="prime-corp-logo-svg" viewBox="0 0 200 68" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Welspun - Dare to Commit">
                <text x="100" y="16" text-anchor="middle" font-family="'Montserrat', sans-serif" font-size="14.5" font-weight="900" letter-spacing="4.5" fill="#000000">WELSPUN</text>
                <g transform="translate(68, 22)">
                  <path d="M5 2 C12 8, 19 19, 21 24 C20 18, 14 6, 8 0 Z" fill="#00AEEF" />
                  <path d="M1 4 C7 11, 20 25, 23 26 C23 23, 15 11, 9 2 Z" fill="#0090D0" />
                  <path d="M21 24 C24 18, 33 5, 41 1 C35 6, 26 18, 23 26 Z" fill="#00B8F5" />
                  <path d="M37 2 C44 9, 56 22, 63 26 C57 19, 45 7, 39 0 Z" fill="#0090D0" />
                  <path d="M43 25 C45 20, 55 7, 62 1 C56 7, 47 18, 44 26 Z" fill="#00AEEF" />
                </g>
                <text x="100" y="61" text-anchor="middle" font-family="'Montserrat', sans-serif" font-size="10" font-weight="600" letter-spacing="0.4" fill="#222222">Dare to Commit</text>
              </svg>
            </div>

            <!-- Card 3: Panchmahal Steel Limited -->
            <div class="prime-corp-card" title="Panchmahal Steel Limited Stainless Steel">
              <svg class="prime-corp-logo-svg" viewBox="0 0 210 65" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Panchmahal Steel Limited Stainless Steel">
                <g transform="translate(14, 11)">
                  <circle cx="20" cy="20" r="16" stroke="#007F86" stroke-width="2.6" fill="none" stroke-dasharray="82 18" stroke-linecap="round" />
                  <path d="M13 22 C13 16 19 12 24 15 C28 17 28 23 24 26 C21 28 17 26 18 22 C18 20 21 19 23 20" stroke="#007F86" stroke-width="2.2" stroke-linecap="round" fill="none" />
                </g>
                <g transform="translate(64, 8)">
                  <text x="0" y="16" font-family="'Montserrat', sans-serif" font-size="14.5" font-weight="700" fill="#0B2B48">Panchmahal</text>
                  <text x="0" y="29" font-family="'Montserrat', sans-serif" font-size="11.5" font-weight="500" fill="#0B2B48">Steel Limited</text>
                  <line x1="0" y1="34" x2="132" y2="34" stroke="#007F86" stroke-width="1.2" />
                  <text x="66" y="44" text-anchor="middle" font-family="'Montserrat', sans-serif" font-size="8.2" font-weight="700" letter-spacing="2.2" fill="#222222">STAINLESS STEEL</text>
                  <text x="66" y="51" text-anchor="middle" font-family="'Montserrat', sans-serif" font-size="5" font-weight="600" letter-spacing="1.2" fill="#666666">SEAMLESS BARS &bull; WIRES</text>
                </g>
              </svg>
            </div>

            <!-- Card 4: IRM Offshore & Marine Engineers -->
            <div class="prime-corp-card" title="IRM Offshore and Marine Engineers Pvt. Ltd.">
              <svg class="prime-corp-logo-svg" viewBox="0 0 210 65" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="IRM Offshore and Marine Engineers Pvt. Ltd.">
                <g transform="translate(12, 10)">
                  <path d="M72 8 C80 3, 90 3, 98 8 C106 13, 116 13, 124 8 C118 12, 106 12, 98 7 C90 2, 80 2, 72 8 Z" fill="#0077B6" />
                  <path d="M70 14 C78 9, 88 9, 96 14 C104 19, 114 19, 122 14 C116 18, 104 18, 96 13 C88 8, 78 8, 70 14 Z" fill="#48CAE4" />
                </g>
                <g transform="translate(10, 20)">
                  <text x="0" y="27" font-family="'Montserrat', 'Arial Black', sans-serif" font-size="29" font-weight="900" font-style="italic" letter-spacing="-0.5" fill="#181818">IRM</text>
                  <line x1="-2" y1="18" x2="68" y2="18" stroke="#ffffff" stroke-width="2.5" />
                  <text x="74" y="16" font-family="'Montserrat', sans-serif" font-size="7.5" font-weight="800" letter-spacing="0.6" fill="#181818">OFFSHORE AND MARINE</text>
                  <text x="74" y="26" font-family="'Montserrat', sans-serif" font-size="6.8" font-weight="700" letter-spacing="0.5" fill="#282828">ENGINEERS PVT. LTD.</text>
                </g>
              </svg>
            </div>

          </div>

        </div>
      </div>
    </section>
  </main>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <?php echo $block_body_end; ?>

  <!-- Page Specific Script at the bottom of the file -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      function initPrimeAnimations() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
          return;
        }

        gsap.registerPlugin(ScrollTrigger);

        // Check for reduced motion preferences
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReducedMotion) return;

        /* ======================================================================
           1. Hero Banner On-Load Smooth Entrance (Matches index.php GSAP Animation)
           ====================================================================== */
        const banner = document.querySelector('#prime-banner');
        if (banner) {
          const eyebrowLine = banner.querySelector('.about-eyebrow-line, .section-kicker-line');
          const eyebrowText = banner.querySelector('.about-eyebrow-text, .section-kicker-text');
          const eyebrowWrap = banner.querySelector('.about-ref-eyebrow, .section-kicker');
          const wordInners = banner.querySelectorAll('.banner-word-inner');
          const bannerImg = banner.querySelector('.prime-banner-img');

          const heroTl = gsap.timeline({
            delay: 0.15
          });

          if (bannerImg) {
            heroTl.fromTo(bannerImg, {
              scale: 1.07,
              opacity: 0.8
            }, {
              scale: 1,
              opacity: 1,
              duration: 1.4,
              ease: 'power2.out',
              clearProps: 'transform'
            }, 0);
          }

          if (eyebrowLine) {
            heroTl.fromTo(eyebrowLine, {
              scaleX: 0,
              transformOrigin: 'left center'
            }, {
              scaleX: 1,
              duration: 0.6,
              ease: 'power2.out'
            }, 0.1);
          }

          if (eyebrowText) {
            heroTl.fromTo(eyebrowText, {
              y: 14,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.55,
              ease: 'power2.out'
            }, 0.15);
          } else if (eyebrowWrap) {
            heroTl.fromTo(eyebrowWrap, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.12);
          }

          if (wordInners.length) {
            heroTl.fromTo(wordInners, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.95,
              stagger: 0.08,
              ease: 'power3.out'
            }, 0.25);
          }

          // Fast-forward if scrolled down on page refresh
          const currentScroll = window.scrollY || window.pageYOffset || 0;
          if (currentScroll > 80) {
            heroTl.progress(1);
          }
        }

        /* ======================================================================
           2. About B Melaram & Sons: Text On-Scroll Animations
           ====================================================================== */
        const aboutSec = document.querySelector('#section-about-bms');
        if (aboutSec) {
          const kicker = aboutSec.querySelector('.section-kicker');
          const heading = aboutSec.querySelector('.prime-about-heading');
          const lead = aboutSec.querySelector('.prime-about-lead');
          const bodyWrap = aboutSec.querySelector('.prime-about-body');
          const paragraphs = aboutSec.querySelectorAll('.prime-about-body p');
          const imageCard = aboutSec.querySelector('.prime-about-image-card');

          // Header elements timeline on section entry
          const headerTl = gsap.timeline({
            scrollTrigger: {
              trigger: aboutSec,
              start: 'top 78%',
              once: true
            }
          });

          if (kicker) {
            headerTl.fromTo(kicker, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0);
          }

          const headingWords = heading ? heading.querySelectorAll('.word-inner') : [];
          if (headingWords.length) {
            headerTl.fromTo(headingWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          } else if (heading) {
            headerTl.fromTo(heading, {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.85,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.12);
          }

          if (lead) {
            headerTl.fromTo(lead, {
              y: 28,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.25);
          }

          // Body paragraphs sequential cascade on scroll
          if (paragraphs.length && bodyWrap) {
            gsap.fromTo(paragraphs, {
              y: 25,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.75,
              stagger: 0.14,
              ease: 'power2.out',
              clearProps: 'all',
              scrollTrigger: {
                trigger: bodyWrap,
                start: 'top 82%',
                once: true
              }
            });
          }

          // Image card smooth fade & entrance alongside text
          if (imageCard) {
            gsap.fromTo(imageCard, {
              y: 35,
              opacity: 0,
              scale: 0.98
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 1.0,
              ease: 'power3.out',
              clearProps: 'opacity,transform',
              scrollTrigger: {
                trigger: imageCard,
                start: 'top 82%',
                once: true
              }
            });
          }
        }

        /* ======================================================================
           3. Section 3: Fields of Expertise On-Scroll Animations & Tab Switcher
           ====================================================================== */
        const expertiseSec = document.querySelector('#section-expertise');
        if (expertiseSec) {
          const compassSvg = expertiseSec.querySelector('.anchors-bg-compass svg');
          if (compassSvg) {
            gsap.fromTo(compassSvg, { yPercent: -12, rotation: -8 }, {
              yPercent: 12,
              rotation: 16,
              ease: 'none',
              scrollTrigger: {
                trigger: expertiseSec,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1
              }
            });
          }

          const expKicker = expertiseSec.querySelector('.section-kicker');
          const expHeading = expertiseSec.querySelector('.prime-expertise-heading');
          const expDesc = expertiseSec.querySelector('.prime-expertise-desc');
          const tabsNav = expertiseSec.querySelector('.prime-tabs-nav');
          const initialCards = expertiseSec.querySelectorAll('#panel-flat-products .prime-acc-card');

          const expTl = gsap.timeline({
            scrollTrigger: {
              trigger: expertiseSec,
              start: 'top 75%',
              once: true
            }
          });

          if (expKicker) {
            expTl.fromTo(expKicker, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.5,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0);
          }
          const expWords = expHeading ? expHeading.querySelectorAll('.word-inner') : [];
          if (expWords.length) {
            expTl.fromTo(expWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          } else if (expHeading) {
            expTl.fromTo(expHeading, {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.1);
          }
          if (tabsNav) {
            expTl.fromTo(tabsNav, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.2);
          }
          if (expDesc) {
            expTl.fromTo(expDesc, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.65,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.28);
          }
          if (initialCards.length) {
            expTl.fromTo(initialCards, {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              stagger: 0.1,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.35);
          }
        }

        /* ======================================================================
           Section: Our Products Staggered Scroll Entrance Animation
           ====================================================================== */
        const ourProductsSec = document.querySelector('#section-our-products');
        if (ourProductsSec) {
          const prodKicker = ourProductsSec.querySelector('.section-kicker');
          const prodHeading = ourProductsSec.querySelector('.prime-products-heading');
          const prodSubtext = ourProductsSec.querySelector('.prime-products-subtext');
          const prodCards = ourProductsSec.querySelectorAll('.prime-product-card');

          const prodTl = gsap.timeline({
            scrollTrigger: {
              trigger: ourProductsSec,
              start: 'top 75%',
              once: true
            }
          });

          if (prodKicker) {
            prodTl.fromTo(prodKicker, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.5,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0);
          }
          const prodWords = prodHeading ? prodHeading.querySelectorAll('.word-inner') : [];
          if (prodWords.length) {
            prodTl.fromTo(prodWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          } else if (prodHeading) {
            prodTl.fromTo(prodHeading, {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.1);
          }
          if (prodSubtext) {
            prodTl.fromTo(prodSubtext, {
              y: 25,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.75,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.2);
          }
          if (prodCards.length) {
            prodTl.fromTo(prodCards, {
              y: 40,
              opacity: 0,
              scale: 0.98
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.75,
              stagger: 0.1,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.3);
          }
        }

        /* ======================================================================
           Section 4: Corporate Associations On-Scroll Animation
           ====================================================================== */
        const corpSec = document.querySelector('#section-corporate-associations');
        if (corpSec) {
          const corpBgImg = corpSec.querySelector('.prime-corp-bg-img');
          const corpKicker = corpSec.querySelector('.prime-corp-kicker');
          const corpHeading = corpSec.querySelector('.prime-corp-heading');
          const corpCards = corpSec.querySelectorAll('.prime-corp-card');
          const corpDesc = corpSec.querySelector('.prime-corp-desc');

          const corpTl = gsap.timeline({
            scrollTrigger: {
              trigger: corpSec,
              start: 'top 85%',
              once: true
            }
          });

          if (corpBgImg) {
            corpTl.fromTo(corpBgImg, {
              scale: 1.08,
              opacity: 0.85
            }, {
              scale: 1,
              opacity: 1,
              duration: 1.5,
              ease: 'power2.out',
              clearProps: 'transform'
            }, 0);
          }

          if (corpKicker) {
            corpTl.fromTo(corpKicker, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.1);
          }

          const corpWords = corpHeading ? corpHeading.querySelectorAll('.word-inner') : [];
          if (corpWords.length) {
            corpTl.fromTo(corpWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.18);
          } else if (corpHeading) {
            corpTl.fromTo(corpHeading, {
              y: 32,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.85,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.2);
          }

          if (corpDesc) {
            corpTl.fromTo(corpDesc, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.7,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.35);
          }

          if (corpCards.length) {
            corpTl.fromTo(corpCards, {
              y: 40,
              opacity: 0,
              scale: 0.94
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.75,
              stagger: 0.1,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.45);
          }
        }
      }

      /* ======================================================================
         4. Accordion Card On-Click Expansion & Image Reveal
         ====================================================================== */
      function setupAccordionClick() {
        // Tab 1: Flat Products (Horizontal / Stacked Expansion on Click)
        const flatStrip = document.querySelector('#panel-flat-products .prime-accordion-strip');
        if (flatStrip) {
          const flatCards = flatStrip.querySelectorAll('.prime-acc-card');
          flatCards.forEach(card => {
            card.addEventListener('click', function(e) {
              if (e.target.closest('.acc-card-action-btn')) return;
              flatCards.forEach(c => c.classList.remove('is-active'));
              this.classList.add('is-active');
            });
          });
        }

        // Tab 2: Long Products (Duo Strip: 1st card active by default, click switch)
        const duoStrip = document.querySelector('#panel-long-products .prime-accordion-strip-duo');
        if (duoStrip) {
          const duoCards = duoStrip.querySelectorAll('.prime-acc-card');
          duoCards.forEach(card => {
            card.addEventListener('click', function(e) {
              if (e.target.closest('.acc-card-action-btn')) return;
              duoCards.forEach(c => c.classList.remove('is-active'));
              this.classList.add('is-active');
            });
          });
        }
      }
      setupAccordionClick();

      /* ======================================================================
         5. Tab Switching Logic for Fields of Expertise
         ====================================================================== */
      const tabButtons = document.querySelectorAll('.prime-tab-btn');
      const tabPanels = document.querySelectorAll('.prime-tab-panel');
      const dynamicDesc = document.getElementById('prime-expertise-dynamic-desc');

      const tabDescriptions = {
        'flat-products': 'B Melaram & Sons have a comprehensive range of hot rolled, cold rolled, metallic coated, direct rolled, pre-finished and electro-plated steels for use in the automotive and transport industries, construction, consumer packaging and general industry & Pipe Factory.',
        'long-products': 'Long products refers to steel products including wire, rod, rail, and bars as well as types of steel structural sections and girders. Long products find general use in construction industries, and in capital goods sectors.'
      };

      tabButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.preventDefault();
          if (this.classList.contains('active')) return;

          const targetTabId = this.getAttribute('data-tab');
          const targetPanel = document.getElementById('panel-' + targetTabId);
          if (!targetPanel) return;

          // Update buttons state
          tabButtons.forEach(b => {
            b.classList.remove('active');
            b.setAttribute('aria-selected', 'false');
          });
          this.classList.add('active');
          this.setAttribute('aria-selected', 'true');

          // Smoothly animate & update dynamic description text
          if (dynamicDesc && tabDescriptions[targetTabId]) {
            if (typeof gsap !== 'undefined') {
              gsap.to(dynamicDesc, {
                opacity: 0,
                y: -4,
                duration: 0.16,
                ease: 'power2.in',
                onComplete: function() {
                  dynamicDesc.textContent = tabDescriptions[targetTabId];
                  gsap.to(dynamicDesc, {
                    opacity: 1,
                    y: 0,
                    duration: 0.3,
                    ease: 'power2.out',
                    clearProps: 'all'
                  });
                }
              });
            } else {
              dynamicDesc.textContent = tabDescriptions[targetTabId];
            }
          }

          // Find currently active panel
          const currentActivePanel = document.querySelector('.prime-tab-panel.active');

          if (currentActivePanel && typeof gsap !== 'undefined') {
            gsap.to(currentActivePanel, {
              opacity: 0,
              y: -8,
              duration: 0.22,
              ease: 'power2.in',
              onComplete: function() {
                currentActivePanel.classList.remove('active');
                currentActivePanel.style.display = 'none';

                // Display target panel
                targetPanel.style.display = 'block';
                targetPanel.classList.add('active');

                // For both tabs, set first card active by default
                const cards = targetPanel.querySelectorAll('.prime-acc-card');
                cards.forEach((c, idx) => {
                  if (idx === 0) c.classList.add('is-active');
                  else c.classList.remove('is-active');
                });

                gsap.fromTo(targetPanel, {
                  opacity: 0,
                  y: 12
                }, {
                  opacity: 1,
                  y: 0,
                  duration: 0.35,
                  ease: 'power2.out',
                  clearProps: 'all'
                });

                if (cards.length) {
                  gsap.fromTo(cards, {
                    opacity: 0,
                    y: 28
                  }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.65,
                    stagger: 0.08,
                    ease: 'power2.out',
                    clearProps: 'all'
                  });
                }

                if (typeof ScrollTrigger !== 'undefined') {
                  ScrollTrigger.refresh();
                }
              }
            });
          } else {
            // Fallback without GSAP
            tabPanels.forEach(p => {
              p.classList.remove('active');
              p.style.display = 'none';
            });
            targetPanel.style.display = 'block';
            targetPanel.classList.add('active');

            const cards = targetPanel.querySelectorAll('.prime-acc-card');
            cards.forEach((c, idx) => {
              if (idx === 0) c.classList.add('is-active');
              else c.classList.remove('is-active');
            });
          }
        });
      });

      // Initialize after DOM and scripts ready
      if (document.readyState === 'complete') {
        initPrimeAnimations();
      } else {
        window.addEventListener('load', initPrimeAnimations);
      }
    });
  </script>
</body>

</html>