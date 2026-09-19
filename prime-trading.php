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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Science+Gothic:wght@100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Fragment+Mono:ital@0;1&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>smruti.css?v=<?php echo time(); ?>">
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
        <source media="(max-width:600px)" srcset="<?php echo $imagesurl; ?>banner/banner-2-sm.webp" type="image/webp">
        <source media="(max-width:1000px)" srcset="<?php echo $imagesurl; ?>banner/banner-2-md.webp" type="image/webp">
        <source media="(max-width:1350px)" srcset="<?php echo $imagesurl; ?>banner/banner-2-lg.webp" type="image/webp">
        <img src="<?php echo $imagesurl; ?>banner/banner-2-xl.webp" width="1920" height="750" alt="Prime Trading - Baijnath Melaram" class="prime-banner-img" />
      </picture>
    </div>

    <!-- Banner Content Overlay -->
    <div class="banner-overlay-wrap">
      <div class="bm-prime-fullwidth-wrap">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text" style="color: #ffffff !important; text-transform: uppercase; letter-spacing: 0.12em; font-size: 11.5px;">Our company, philosophy and people</span>
        </div>
        <div class="banner-divider"></div>
        <div class="banner-content-row columns is-vcentered">
          <div class="column is-12-mobile is-12-tablet is-11-desktop">
            <div class="section-title">
              <h1 class="banner-title prime-banner-title">
                <span class="banner-word-mask"><span class="banner-word-inner">Empowering</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner text-secondary">Traders</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">for</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">Success:</span></span><br>
                <span class="banner-word-mask"><span class="banner-word-inner">Tools,</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">Insights,</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">and</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">Support</span></span>
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
    <section id="section-about-bms" class="section-prime-about">
      <div class="bm-prime-fullwidth-wrap">
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
              <h2 class="prime-about-heading">About B Melaram &amp; Sons</h2>

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
                  <source srcset="<?php echo $imagesurl; ?>extensions/2.webp" type="image/webp">
                  <img src="<?php echo $imagesurl; ?>extensions/2.jpg?v=<?php echo $version; ?>" alt="B Melaram &amp; Sons" class="prime-about-img" />
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
      <!-- Architectural Industrial Blueprint & Geometric Ambient Background -->
      <div class="bm-expertise-bg-decor" aria-hidden="true">
        <div class="bm-expertise-glow bm-expertise-glow-1"></div>
        <div class="bm-expertise-glow bm-expertise-glow-2"></div>
        <div class="bm-expertise-grid-lines"></div>
        <div class="bm-expertise-plus bm-expertise-plus-1">+</div>
        <div class="bm-expertise-plus bm-expertise-plus-2">+</div>
        <div class="bm-expertise-axis-tag">SPEC // EN 10025 &bull; ASTM A36 &bull; IS 2062</div>
      </div>

      <div class="bm-prime-fullwidth-wrap">
        <div class="prime-expertise-container">

          <!-- Section Header Block -->
          <div class="prime-expertise-header">
            <!-- Eyebrow / Kicker -->
            <div class="section-kicker" style="margin-bottom: 16px;">
              <span class="section-kicker-line"></span>
              <span class="section-kicker-text">FIELDS OF EXPERTISE</span>
            </div>

            <!-- Main Heading -->
            <h2 class="prime-expertise-heading">Fields of Expertise</h2>

            <!-- Intro Description Paragraph -->
            <p class="prime-expertise-desc">
              B Melaram &amp; Sons have a comprehensive range of hot rolled, cold rolled, metallic coated, direct rolled, pre-finished and electro-plated steels for use in the automotive and transport industries, construction, consumer packaging and general industry &amp; Pipe Factory.
            </p>
          </div>

          <!-- Interactive Tab Navigation -->
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

          <!-- Tab Content Panels Container -->
          <div class="prime-tab-panels-container">

            <!-- Panel 1: Flat Products (Active by default, 5 Accordion Cards in Strip) -->
            <div class="prime-tab-panel active" id="panel-flat-products" role="tabpanel" aria-labelledby="tab-btn-flat">
              <div class="prime-accordion-strip">
                
                <!-- Card 1: Hot Rolled Coils & Sheets (Active by default) -->
                <article class="prime-acc-card is-active" data-index="0">
                  <div class="acc-card-top">
                    <div class="acc-card-spec">
                      <span class="acc-spec-dot"></span>
                      <span class="acc-spec-code">HR &bull; HEAVY</span>
                    </div>
                    <h3 class="acc-card-title">Hot Rolled Coils &amp; Sheets</h3>
                    <p class="acc-card-desc">
                      Heavy-gauge structural steel with high tensile strength, ideal for automotive chassis, welded pipes, and heavy structural engineering.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-hr-coils.jpg?v=<?php echo $version; ?>" alt="Hot Rolled Coils and Sheets" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Hot Rolled Coils & Sheets">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 2: Cold Rolled Coils & Sheets -->
                <article class="prime-acc-card" data-index="1">
                  <div class="acc-card-top">
                    <div class="acc-card-spec">
                      <span class="acc-spec-dot"></span>
                      <span class="acc-spec-code">CR &bull; PRECISION</span>
                    </div>
                    <h3 class="acc-card-title">Cold Rolled Coils &amp; Sheets</h3>
                    <p class="acc-card-desc">
                      Superior surface finish and tight dimensional tolerances engineered for automotive skin panels, white goods, and precision stamping.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-cr-coils.jpg?v=<?php echo $version; ?>" alt="Cold Rolled Coils and Sheets" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Cold Rolled Coils & Sheets">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 3: Metallic Coated & Galvanized -->
                <article class="prime-acc-card" data-index="2">
                  <div class="acc-card-top">
                    <div class="acc-card-spec">
                      <span class="acc-spec-dot"></span>
                      <span class="acc-spec-code">GI &bull; ANTI-CORROSION</span>
                    </div>
                    <h3 class="acc-card-title">Metallic Coated &amp; Galvanized</h3>
                    <p class="acc-card-desc">
                      High-adhesion zinc and galvalume protective coating offering lasting weather durability for roofing, structural decking, and HVAC ductwork.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-galvanized.jpg?v=<?php echo $version; ?>" alt="Galvanized and Metallic Coated Steel" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Metallic Coated & Galvanized">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 4: Pre-Finished & Color Coated -->
                <article class="prime-acc-card" data-index="3">
                  <div class="acc-card-top">
                    <div class="acc-card-spec">
                      <span class="acc-spec-dot"></span>
                      <span class="acc-spec-code">PPGI &bull; ARCHITECTURAL</span>
                    </div>
                    <h3 class="acc-card-title">Pre-Finished &amp; Color Coated</h3>
                    <p class="acc-card-desc">
                      Factory-cured thermoset polymer coatings in tailored finishes, combining modern aesthetics with extreme UV and chemical resistance.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-prefinished.jpg?v=<?php echo $version; ?>" alt="Pre-Finished and Color Coated Steels" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Pre-Finished & Color Coated Steels">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 5: Electro-Plated & Tinplate Steels -->
                <article class="prime-acc-card" data-index="4">
                  <div class="acc-card-top">
                    <div class="acc-card-spec">
                      <span class="acc-spec-dot"></span>
                      <span class="acc-spec-code">ETP &bull; SPECULAR</span>
                    </div>
                    <h3 class="acc-card-title">Electro-Plated &amp; Tinplate</h3>
                    <p class="acc-card-desc">
                      Ultra-thin specular electro-tin coated sheets with pristine formability, optimal for food canning, consumer packaging, and electrical parts.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/flat-tinplate.jpg?v=<?php echo $version; ?>" alt="Electro-Plated and Tinplate Steels" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Electro-Plated & Tinplate Steels">
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

                <!-- Card 1: TMT Rebars & Deformed Bars -->
                <article class="prime-acc-card" data-index="0">
                  <div class="acc-card-top">
                    <div class="acc-card-spec">
                      <span class="acc-spec-dot"></span>
                      <span class="acc-spec-code">FE 500D / 550D &bull; HIGH-YIELD</span>
                    </div>
                    <h3 class="acc-card-title">TMT Rebars &amp; Deformed Bars</h3>
                    <p class="acc-card-desc">
                      Thermo-mechanically treated reinforcement bars with superior rib-bonding, high bendability, and thermal resistance for bridges, high-rises, and marine foundations.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/long-tmt-rebars.jpg?v=<?php echo $version; ?>" alt="TMT Rebars and Deformed Bars" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore TMT Rebars & Deformed Bars">
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </article>

                <!-- Card 2: Wire Rods & Structural Sections -->
                <article class="prime-acc-card" data-index="1">
                  <div class="acc-card-top">
                    <div class="acc-card-spec">
                      <span class="acc-spec-dot"></span>
                      <span class="acc-spec-code">STRUCTURAL &bull; BEAMS &amp; RODS</span>
                    </div>
                    <h3 class="acc-card-title">Wire Rods &amp; Structural Sections</h3>
                    <p class="acc-card-desc">
                      Comprehensive inventory of high-ductility wire rod coils, universal columns, I-beams, angles, and channels for industrial fabrication and heavy infrastructure.
                    </p>
                  </div>

                  <div class="acc-card-bottom">
                    <div class="acc-card-media">
                      <img src="<?php echo $imagesurl; ?>prime-trading/long-wire-rods.jpg?v=<?php echo $version; ?>" alt="Wire Rods and Structural Sections" class="acc-card-img" loading="lazy" />
                      <div class="acc-card-media-overlay"></div>
                    </div>
                    <a href="#contact" class="acc-card-action-btn" aria-label="Explore Wire Rods & Structural Sections">
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
           1. Hero Banner On-Load Smooth Entrance
           ====================================================================== */
        const banner = document.querySelector('#prime-banner');
        if (banner) {
          const bannerKicker = banner.querySelector('.section-kicker');
          const bannerTitle = banner.querySelector('.prime-banner-title');
          const bannerImg = banner.querySelector('.prime-banner-img');

          const heroTl = gsap.timeline({ delay: 0.15 });

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

          if (bannerKicker) {
            heroTl.fromTo(bannerKicker, {
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

          if (bannerTitle) {
            heroTl.fromTo(bannerTitle, {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.9,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0.35);
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

          if (heading) {
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
            expTl.fromTo(expKicker, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out', clearProps: 'all' }, 0);
          }
          if (expHeading) {
            expTl.fromTo(expHeading, { y: 35, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out', clearProps: 'all' }, 0.1);
          }
          if (expDesc) {
            expTl.fromTo(expDesc, { y: 25, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75, ease: 'power3.out', clearProps: 'all' }, 0.22);
          }
          if (tabsNav) {
            expTl.fromTo(tabsNav, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.6, ease: 'power2.out', clearProps: 'all' }, 0.3);
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
      }

      /* ======================================================================
         4. Accordion Card On-Hover Expansion & Image Reveal
         ====================================================================== */
      function setupAccordionHover() {
        // Tab 1: Flat Products (Horizontal Expansion on Hover)
        const flatStrip = document.querySelector('#panel-flat-products .prime-accordion-strip');
        if (flatStrip) {
          const flatCards = flatStrip.querySelectorAll('.prime-acc-card');
          flatCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
              flatCards.forEach(c => c.classList.remove('is-active'));
              this.classList.add('is-active');
            });
            card.addEventListener('click', function(e) {
              if (e.target.closest('.acc-card-action-btn')) return;
              flatCards.forEach(c => c.classList.remove('is-active'));
              this.classList.add('is-active');
            });
          });
        }

        // Tab 2: Long Products (Fixed Width 50/50, Image Reveal Strictly on Hover)
        const duoStrip = document.querySelector('#panel-long-products .prime-accordion-strip-duo');
        if (duoStrip) {
          const duoCards = duoStrip.querySelectorAll('.prime-acc-card');
          duoCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
              duoCards.forEach(c => c.classList.remove('is-active'));
              this.classList.add('is-active');
            });
            card.addEventListener('mouseleave', function() {
              this.classList.remove('is-active');
            });
            card.addEventListener('click', function(e) {
              if (e.target.closest('.acc-card-action-btn')) return;
              const wasActive = this.classList.contains('is-active');
              duoCards.forEach(c => c.classList.remove('is-active'));
              if (!wasActive) this.classList.add('is-active');
            });
          });
        }
      }
      setupAccordionHover();

      /* ======================================================================
         5. Tab Switching Logic for Fields of Expertise
         ====================================================================== */
      const tabButtons = document.querySelectorAll('.prime-tab-btn');
      const tabPanels = document.querySelectorAll('.prime-tab-panel');

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

                // If Flat Products, set first card active; if Long Products, leave closed until hover
                const cards = targetPanel.querySelectorAll('.prime-acc-card');
                if (targetTabId === 'flat-products') {
                  cards.forEach((c, idx) => {
                    if (idx === 0) c.classList.add('is-active');
                    else c.classList.remove('is-active');
                  });
                } else {
                  cards.forEach(c => c.classList.remove('is-active'));
                }

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
            if (targetTabId === 'flat-products') {
              cards.forEach((c, idx) => {
                if (idx === 0) c.classList.add('is-active');
                else c.classList.remove('is-active');
              });
            } else {
              cards.forEach(c => c.classList.remove('is-active'));
            }
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
