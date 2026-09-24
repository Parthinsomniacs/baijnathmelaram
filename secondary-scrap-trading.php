<?php require_once("inc-global.php"); ?>
<?php
$page = "secondary-scrap-trading";
$pagetype = "onepage";
$pagename = "Secondary Scrap Trading";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "yes";
$sliderautoscroll = "no";
$swiperjs = "no";
$popup = "no";
$counter = "yes";
$accordian = "yes";
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

  <!-- ==========================================================================
       Section 1: Hero Banner
       ========================================================================== -->
  <section id="section-banner" class="section section-banner p-0">
    <div class="banner-image">
      <picture>
        <source media="(max-width:600px)" srcset="<?php echo $imagesurl; ?>banner/scrap-trading-banner.webp?v=<?php echo $version; ?>" type="image/webp">
        <img src="<?php echo $imagesurl; ?>banner/scrap-trading-banner.webp?v=<?php echo $version; ?>" width="1920" height="880" alt="Secondary Scrap Trading - Friends Corp." />
      </picture>
      <div class="banner-video-overlay"></div>
    </div>

    <!-- Banner Content Overlay -->
    <div class="banner-overlay-wrap" style="padding-bottom: clamp(60px, 8vw, 110px);">
      <div class="theme-padding">
        <div class="about-ref-eyebrow">
          <span class="about-eyebrow-line"></span>
          <span class="about-eyebrow-text" style="color: #ffffff !important;">SECONDARY SCRAP TRADING</span>
        </div>
        <div class="banner-divider"></div>
        <div class="banner-content-row columns is-variable is-8 is-vcentered">
          <div class="column is-12">
            <div class="section-title">
              <h1 class="banner-title">
                <span class="banner-word-mask"><span class="banner-word-inner">Friends</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner banner-italic text-secondary">Corp.</span></span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       Section 2: About / Overview & Core Pillars (Friends Corp) - Editorial Design
       ========================================================================== -->
  <!-- ==========================================================================
       Section 2: About / Overview & Core Pillars (Friends Corp) - Exact Design
       ========================================================================== -->
  <section id="section-about" class="section section-about scrap-editorial-about section-stacked">
    <!-- Ambient Orange Square Grid Background Pattern -->
    <div class="timeline-bg-grid" aria-hidden="true"></div>

    <div class="theme-padding">

      <!-- TOP TIER: Editorial About Intro & Hero Frame -->
      <div class="scrap-editorial-top-row">
        <!-- Left Column: Big Headline & Editorial Narrative Split -->
        <div class="scrap-editorial-left">
          <h2 class="scrap-editorial-main-title">
            <span class="word-mask"><span class="word-inner">ABOUT</span></span>
          </h2>

          <div class="scrap-editorial-desc-col">
            <p class="scrap-editorial-body-text">
              Baijnath Melaram is a trading firm, mainly associated with the trading of secondary ferrous and non-ferrous scrap. We have been trading since 2008. We procure materials locally (pan-India) as well as import materials from various countries, including the USA, UK, Europe, Japan, Russia and etc. Founded in 2008 is one of the fast-growing enterprises in the field of metals trade. Through our vision, hard work and commitment to customer satisfaction, we have been successful in establishing ourselves as one of the most trusted names in the field of trading and sourcing.
            </p>
            <p class="scrap-editorial-body-text" style="margin-top: 10px;">
              We are traders in Industrial Raw materials and commodities and specialise in Metals and ferrous &amp; non-ferrous Recyclable Scrap. The vision was to be able to help in the reduction of pollution and carbon footprint in multiple ways. Shredded 211 Scrap and Heavy melting Scrap were the base for the company and slowly expanded into multiple categories like Stainless Steel Scrap, Aluminium Scrap, Electric Motors Scrap, Mix Material Scrap, Manganese Steel Scrap, Pipes, Cast iron Scrap and much more.
            </p>
          </div>
        </div>

        <!-- Right Column: Hero Visual Frame (Static, No Slider) -->
        <div class="scrap-editorial-right">
          <div class="scrap-editorial-hero-frame">
            <img src="<?php echo $imagesurl; ?>scrap-trading/scrap-about-hero.jpg?v=<?php echo $version; ?>" alt="Baijnath Melaram Secondary Scrap Operations &amp; Port Logistics" class="scrap-editorial-hero-img" loading="lazy" />
          </div>
        </div>
      </div>

      <!-- Subtle Horizontal Divider -->
      <div class="scrap-editorial-divider"></div>

      <!-- BOTTOM TIER: 5-Column Grid (Kicker + 4 Pillar Cards) -->
      <div class="scrap-editorial-bottom-grid">
        <!-- Info Kicker Column -->
        <div class="scrap-pillars-kicker-col">
          <h3 class="scrap-kicker-heading">WHAT MAKES OUR BUSINESS MODEL UNIQUE</h3>
          <div class="scrap-kicker-line"></div>
          <p class="scrap-kicker-desc">
            Our values aren't just words, they are the foundation of every partnership we build.
          </p>
          <div class="scrap-kicker-tags">
            <span class="kicker-tag-accent"></span>
            <span>ETHICS &nbsp;/&nbsp; RELIABILITY &nbsp;/&nbsp; LONG TERM</span>
          </div>
        </div>

        <!-- Pillar 01: TRUTH -->
        <div class="scrap-pillar-item-col">
          <div class="scrap-pillar-item-card">
            <div class="scrap-pillar-card-top">
              <span class="scrap-pillar-num">01</span>
              <span class="scrap-pillar-arrow" aria-hidden="true">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="7" y1="17" x2="17" y2="7"></line>
                  <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
              </span>
            </div>
            <h4 class="scrap-pillar-card-title">TRUTH</h4>
            <p class="scrap-pillar-card-desc">
              We say what we mean.<br />No hidden terms, no surprises.
            </p>
            <div class="scrap-pillar-img-frame">
              <img src="<?php echo $imagesurl; ?>scrap-trading/pillar-truth.jpg?v=<?php echo $version; ?>" alt="Truth - Steel Beams &amp; Material Precision" class="scrap-pillar-img" loading="lazy" />
            </div>
          </div>
        </div>

        <!-- Pillar 02: TRUST -->
        <div class="scrap-pillar-item-col">
          <div class="scrap-pillar-item-card">
            <div class="scrap-pillar-card-top">
              <span class="scrap-pillar-num">02</span>
              <span class="scrap-pillar-arrow" aria-hidden="true">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="7" y1="17" x2="17" y2="7"></line>
                  <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
              </span>
            </div>
            <h4 class="scrap-pillar-card-title">TRUST</h4>
            <p class="scrap-pillar-card-desc">
              Built through every<br />transaction and relationship.
            </p>
            <div class="scrap-pillar-img-frame">
              <img src="<?php echo $imagesurl; ?>scrap-trading/pillar-trust.jpg?v=<?php echo $version; ?>" alt="Trust - Industrial Forged Chains &amp; Enduring Bonds" class="scrap-pillar-img" loading="lazy" />
            </div>
          </div>
        </div>

        <!-- Pillar 03: TRANSPARENCY -->
        <div class="scrap-pillar-item-col">
          <div class="scrap-pillar-item-card">
            <div class="scrap-pillar-card-top">
              <span class="scrap-pillar-num">03</span>
              <span class="scrap-pillar-arrow" aria-hidden="true">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="7" y1="17" x2="17" y2="7"></line>
                  <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
              </span>
            </div>
            <h4 class="scrap-pillar-card-title">TRANSPARENCY</h4>
            <p class="scrap-pillar-card-desc">
              Clear processes.<br />Clear relationships.
            </p>
            <div class="scrap-pillar-img-frame">
              <img src="<?php echo $imagesurl; ?>scrap-trading/pillar-transparency.jpg?v=<?php echo $version; ?>" alt="Transparency - Architectural Structure &amp; Open Verification" class="scrap-pillar-img" loading="lazy" />
            </div>
          </div>
        </div>

        <!-- Pillar 04: DEDICATION -->
        <div class="scrap-pillar-item-col">
          <div class="scrap-pillar-item-card">
            <div class="scrap-pillar-card-top">
              <span class="scrap-pillar-num">04</span>
              <span class="scrap-pillar-arrow" aria-hidden="true">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="7" y1="17" x2="17" y2="7"></line>
                  <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
              </span>
            </div>
            <h4 class="scrap-pillar-card-title">DEDICATION</h4>
            <p class="scrap-pillar-card-desc">
              Long-term thinking.<br />Consistent action.
            </p>
            <div class="scrap-pillar-img-frame">
              <img src="<?php echo $imagesurl; ?>scrap-trading/pillar-dedication.jpg?v=<?php echo $version; ?>" alt="Dedication - Compressed Scrap Bales &amp; Recycling Excellence" class="scrap-pillar-img" loading="lazy" />
            </div>
          </div>
        </div>
      </div>

      <!-- Editorial Bottom Partner Note -->
      <div class="scrap-editorial-bottom-note">
        <p class="scrap-editorial-note-text">
          We are a trusted partner to a range of companies across the recycling industry. From processors, and refineries to manufacturers. We serve all major categories of scrap and recycled non-ferrous metals, including aluminium, copper, lead, nickel and zinc, with a substantial interest in other non-ferrous metals.
        </p>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       Section: Our Services (A Commitment to the 3 R's)
       ========================================================================== -->
  <section id="our-service" class="section section-our-services section-stacked">
    <!-- Nautical Compass Background Watermark -->
    <div class="services-bg-compass" aria-hidden="true">
      <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.18)" stroke-width="1.5" stroke-dasharray="4 8" />
        <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.24)" stroke-width="1.2" />
        <circle cx="300" cy="300" r="140" stroke="rgba(229,145,47,0.18)" stroke-width="1.5" stroke-dasharray="2 6" />
        <circle cx="300" cy="300" r="60" stroke="rgba(229,145,47,0.28)" stroke-width="1.2" />
        <!-- Compass Crosshairs & Navigation Marks -->
        <line x1="300" y1="10" x2="300" y2="590" stroke="rgba(229,145,47,0.22)" stroke-width="1" stroke-dasharray="6 6" />
        <line x1="10" y1="300" x2="590" y2="300" stroke="rgba(229,145,47,0.22)" stroke-width="1" stroke-dasharray="6 6" />
        <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.38)" />
        <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.28)" />
        <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.28)" />
        <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.28)" />
      </svg>
    </div>

    <div class="theme-padding" style="position: relative; z-index: 2;">

      <!-- Section Header -->
      <div class="services-3r-header">
        <div class="about-ref-eyebrow mb-2">
          <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
          <span class="about-eyebrow-text about-eyebrow-text-orange">OUR SERVICES</span>
          <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
        </div>
        <div class="section-title">
          <h2>
            <span class="word-mask"><span class="word-inner">A</span></span>
            <span class="word-mask"><span class="word-inner">Commitment</span></span>
            <span class="word-mask"><span class="word-inner">to</span></span>
            <span class="word-mask"><span class="word-inner">the</span></span>
            <span class="word-mask"><span class="word-inner">3</span></span>
            <span class="word-mask"><span class="word-inner">R's:</span></span><br />
            <span class="word-mask"><span class="word-inner text-secondary">Pioneering</span></span>
            <span class="word-mask"><span class="word-inner text-secondary">Sustainability</span></span>
            <span class="word-mask"><span class="word-inner text-secondary">in</span></span>
            <span class="word-mask"><span class="word-inner text-secondary">Our</span></span>
            <span class="word-mask"><span class="word-inner text-secondary">Expertise</span></span>
          </h2>
        </div>
      </div>

      <!-- 3-Column Services Grid -->
      <div class="services-3r-grid">

        <!-- Service 1: REDUCE -->
        <div class="services-3r-col">
          <div class="services-3r-icon-wrap" aria-hidden="true">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
              <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
            </svg>
          </div>
          <h3 class="services-3r-title">REDUCE</h3>
          <p class="services-3r-desc">
            Consciously use fewer products and resources to lower waste and environmental impact.
          </p>
        </div>

        <!-- Service 2: RECYCLE -->
        <div class="services-3r-col">
          <div class="services-3r-icon-wrap" aria-hidden="true">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M7 19H4.815a1.83 1.83 0 0 1-1.57-.881 1.785 1.785 0 0 1-.004-1.784L7.196 9.5"></path>
              <path d="M11 19h8.2a1.8 1.8 0 0 0 1.565-.898 1.79 1.79 0 0 0 .005-1.786L18 11.5"></path>
              <path d="M13.5 2 9.5 9h7.5"></path>
              <polyline points="4 15 7 19 10 15"></polyline>
              <polyline points="18 8 18 12 14 12"></polyline>
              <polyline points="15 6 13.5 2 10 4"></polyline>
            </svg>
          </div>
          <h3 class="services-3r-title">RECYCLE</h3>
          <p class="services-3r-desc">
            Give items extended life through repurposing, saving energy and reducing landfill waste.
          </p>
        </div>

        <!-- Service 3: REUSE -->
        <div class="services-3r-col">
          <div class="services-3r-icon-wrap" aria-hidden="true">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg>
          </div>
          <h3 class="services-3r-title">REUSE</h3>
          <p class="services-3r-desc">
            Transform discarded materials into new products, conserving resources and combating pollution.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       Section 3: Materials We Trade-In (Ferrous Products Showcase)
       ========================================================================== -->
  <section id="section-products" class="section section-scrap-ferrous-products section-scrap-ferrous-has-bg section-stacked">
    <!-- Square Grid Background -->
    <div class="scrap-ferrous-bg-decor bg-decor-square" aria-hidden="true">
    </div>

    <div class="theme-padding" style="position: relative; z-index: 2;">
      <div class="scrap-ferrous-container">

        <!-- Section Header Block -->
        <div class="scrap-ferrous-header text-center">
          <div class="about-ref-eyebrow mb-2 about-ref-eyebrow-center">
            <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
            <span class="about-eyebrow-text about-eyebrow-text-orange">MATERIALS WE TRADE-IN</span>
            <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
          </div>
          <div class="section-title">
            <h2 class="scrap-ferrous-heading">
              <span class="word-mask"><span class="word-inner">Materials</span></span>
              <span class="word-mask"><span class="word-inner">We</span></span>
              <span class="word-mask"><span class="word-inner">Trade-In</span></span>
              <span class="word-mask"><span class="word-inner text-secondary">(Ferrous)</span></span>
            </h2>
          </div>
        </div>

        <!-- 6-Product Cards Grid -->
        <div class="scrap-ferrous-grid">

          <!-- Card 1: Tungsten Carbide Bits Scrap -->
          <div class="scrap-ferrous-card" data-card="0">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-tungsten-carbide.jpg?v=<?php echo $version; ?>" alt="Tungsten Carbide Bits Scrap" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Tungsten Carbide Bits Scrap</h3>
                <p class="scrap-ferrous-card-desc">Earth moving equipment/drills or stone crushers consisting of tungsten carbides at their surfaces or tips which can be extracted and processed further</p>
              </div>
            </div>
          </div>

          <!-- Card 2: Secondary Shafts -->
          <div class="scrap-ferrous-card" data-card="1">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-secondary-shafts.jpg?v=<?php echo $version; ?>" alt="Secondary Shafts" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Secondary Shafts</h3>
                <p class="scrap-ferrous-card-desc">Mild steel rounds</p>
              </div>
            </div>
          </div>

          <!-- Card 3: Mild Steel Pipes -->
          <div class="scrap-ferrous-card" data-card="2">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-mild-steel-pipes.jpg?v=<?php echo $version; ?>" alt="Mild Steel Pipes" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Mild Steel Pipes</h3>
                <p class="scrap-ferrous-card-desc">Mild Steel Pipes</p>
              </div>
            </div>
          </div>

          <!-- Card 4: Moon Cut Pipes -->
          <div class="scrap-ferrous-card" data-card="3">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-moon-cut-pipes.jpg?v=<?php echo $version; ?>" alt="Moon Cut Pipes" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Moon Cut Pipes</h3>
                <p class="scrap-ferrous-card-desc">Differing or uniform thickness pipes, suitable for re-rolling</p>
              </div>
            </div>
          </div>

          <!-- Card 5: MS Plates & Structures -->
          <div class="scrap-ferrous-card" data-card="4">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-ms-plates.jpg?v=<?php echo $version; ?>" alt="MS Plates &amp; Structures" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">MS Plates &amp; Structures</h3>
                <p class="scrap-ferrous-card-desc">Suitable for profile cutting and re-rolling</p>
              </div>
            </div>
          </div>

          <!-- Card 6: HMS 1&2 (Ship Breaking Melting Scrap) -->
          <div class="scrap-ferrous-card" data-card="5">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-hms-scrap.jpg?v=<?php echo $version; ?>" alt="HMS 1&amp;2 (Ship Breaking Melting Scrap)" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">HMS 1&amp;2 (Ship Breaking Melting Scrap)</h3>
                <p class="scrap-ferrous-card-desc">Heavy melting steel (HMS) or heavy melting scrap is broken up into two major categories: HMS 1 and HMS 2, where HMS 1 does not contain galvanized and blackened steel, whereas HMS 2 does. HMS is typically traded as a blend of 1 and 2 (80/20).</p>
              </div>
            </div>
          </div>

          <!-- Card 7: Bushellings -->
          <div class="scrap-ferrous-card" data-card="6">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-bushellings.jpg?v=<?php echo $version; ?>" alt="Bushellings" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Bushellings</h3>
                <p class="scrap-ferrous-card-desc">Pieces of sheet cutting, typically from rolling mills. Considered highest grade of scrap due to its recovery and chemistry.</p>
              </div>
            </div>
          </div>

          <!-- Card 8: High Manganese Scrap -->
          <div class="scrap-ferrous-card" data-card="7">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-high-manganese.jpg?v=<?php echo $version; ?>" alt="High Manganese Scrap" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">High Manganese Scrap</h3>
                <p class="scrap-ferrous-card-desc">Alloy steel scrap with range of Mn content around 3-27%, extremely high impact strength and abrasion resistance.</p>
              </div>
            </div>
          </div>

          <!-- Card 9: Chrome Scrap -->
          <div class="scrap-ferrous-card" data-card="8">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-chrome-scrap.jpg?v=<?php echo $version; ?>" alt="Chrome Scrap" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Chrome Scrap</h3>
                <p class="scrap-ferrous-card-desc">Alloy steel containing chromium, increases hardenability and improves the strength and wear resistance of steel.</p>
              </div>
            </div>
          </div>

          <!-- Card 10: Cast Iron Scrap -->
          <div class="scrap-ferrous-card" data-card="9">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-cast-iron.jpg?v=<?php echo $version; ?>" alt="Cast Iron Scrap" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Cast Iron Scrap</h3>
                <p class="scrap-ferrous-card-desc">An alloy of iron that contains 2-4% carbon.</p>
              </div>
            </div>
          </div>

          <!-- Card 11: Blue Steel Scrap -->
          <div class="scrap-ferrous-card" data-card="10">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-blue-steel.jpg?v=<?php echo $version; ?>" alt="Blue Steel Scrap" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Blue Steel Scrap</h3>
                <p class="scrap-ferrous-card-desc">Consists of cut steel pieces generated from fabrication units, structural steel, plates, forgings, stampings and etc.</p>
              </div>
            </div>
          </div>

          <!-- Card 12: PNS Scrap -->
          <div class="scrap-ferrous-card" data-card="11">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-pns-scrap.jpg?v=<?php echo $version; ?>" alt="PNS Scrap" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">PNS Scrap</h3>
                <p class="scrap-ferrous-card-desc">Cut Structural &amp; Plate Scrap, 5 feet and under. Clean open hearth steel plates, structural shapes, crop ends, shearings, or broken steel tires.</p>
              </div>
            </div>
          </div>

          <!-- Card 13: Low Nickel–Molybdenum Alloy Scrap -->
          <div class="scrap-ferrous-card" data-card="12">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/ferrous-nickel-moly.jpg?v=<?php echo $version; ?>" alt="Low Nickel–Molybdenum Alloy Scrap" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Low Nickel–Molybdenum Alloy Scrap</h3>
                <p class="scrap-ferrous-card-desc">Alloy steel containing traces of nickel and molybdenum</p>
              </div>
            </div>
          </div>

        </div>

        <!-- Materials Showcase Bottom CTA Button -->
        <div class="scrap-ferrous-cta-wrap text-center">
          <a href="contact.php" class="scrap-ferrous-cta-btn">
            <span class="btn-text">Enquire For Trading Material</span>
            <span class="btn-icon" aria-hidden="true">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
              </svg>
            </span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       Section: Materials We Trade-In (Non-Ferrous Products Showcase)
       ========================================================================== -->
  <section id="section-non-ferrous-products" class="section section-scrap-ferrous-products section-stacked section-non-ferrous-bg">
    <!-- Nautical Compass Background Watermark (Clean background) -->
    <div class="materials-bg-compass nonferrous-bg-compass nonferrous-bg-compass-alt" aria-hidden="true">
      <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.16)" stroke-width="1.5" stroke-dasharray="4 8" />
        <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.22)" stroke-width="1.2" />
        <circle cx="300" cy="300" r="140" stroke="rgba(229,145,47,0.16)" stroke-width="1.5" stroke-dasharray="2 6" />
        <circle cx="300" cy="300" r="60" stroke="rgba(229,145,47,0.24)" stroke-width="1.2" />
        <line x1="300" y1="10" x2="300" y2="590" stroke="rgba(229,145,47,0.2)" stroke-width="1" stroke-dasharray="6 6" />
        <line x1="10" y1="300" x2="590" y2="300" stroke="rgba(229,145,47,0.2)" stroke-width="1" stroke-dasharray="6 6" />
        <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.35)" />
        <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.25)" />
        <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.25)" />
        <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.25)" />
      </svg>
    </div>

    <div class="theme-padding" style="position: relative; z-index: 2;">
      <div class="scrap-ferrous-container">

        <!-- Section Header Block -->
        <div class="scrap-ferrous-header text-center">
          <div class="about-ref-eyebrow mb-2 about-ref-eyebrow-center">
            <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
            <span class="about-eyebrow-text about-eyebrow-text-orange">MATERIALS WE TRADE-IN</span>
            <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
          </div>
          <div class="section-title">
            <h2 class="scrap-ferrous-heading">
              <span class="word-mask"><span class="word-inner">Materials</span></span>
              <span class="word-mask"><span class="word-inner">We</span></span>
              <span class="word-mask"><span class="word-inner">Trade-In</span></span>
              <span class="word-mask"><span class="word-inner text-secondary">(Non-Ferrous)</span></span>
            </h2>
          </div>
        </div>

        <!-- 12-Product Cards Grid -->
        <div class="scrap-ferrous-grid">

          <!-- Card 1: Zorba -->
          <div class="scrap-ferrous-card" data-card="0">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-zorba.jpg?v=<?php echo $version; ?>" alt="Zorba" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Zorba</h3>
                <p class="scrap-ferrous-card-desc">A mix of non-ferrous material generated by shredding of automobiles, end of life vehicles, electrical waste etc.</p>
              </div>
            </div>
          </div>

          <!-- Card 2: Taint Tabor -->
          <div class="scrap-ferrous-card" data-card="1">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-taint-tabor.jpg?v=<?php echo $version; ?>" alt="Taint Tabor" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Taint Tabor</h3>
                <p class="scrap-ferrous-card-desc">Shall consist of clean old alloy aluminium sheet of two or more alloys</p>
              </div>
            </div>
          </div>

          <!-- Card 3: Tense -->
          <div class="scrap-ferrous-card" data-card="2">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-tense.jpg?v=<?php echo $version; ?>" alt="Tense" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Tense</h3>
                <p class="scrap-ferrous-card-desc">Shall consist of all clean aluminium castings which may contain auto and airplane castings but no ingots, and to be free of iron, brass, dirt and other non-metallic items</p>
              </div>
            </div>
          </div>

          <!-- Card 4: Trump -->
          <div class="scrap-ferrous-card" data-card="3">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-trump.jpg?v=<?php echo $version; ?>" alt="Trump" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Trump</h3>
                <p class="scrap-ferrous-card-desc">Primarily consisting of castings obtained from automobiles</p>
              </div>
            </div>
          </div>

          <!-- Card 5: Twitch -->
          <div class="scrap-ferrous-card" data-card="4">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-twitch.jpg?v=<?php echo $version; ?>" alt="Twitch" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Twitch</h3>
                <p class="scrap-ferrous-card-desc">Sorted Zorba, mainly consisting of shredded aluminum scrap</p>
              </div>
            </div>
          </div>

          <!-- Card 6: Insulated Copper Cable (ICC) -->
          <div class="scrap-ferrous-card" data-card="5">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-icc-copper-cable.jpg?v=<?php echo $version; ?>" alt="Insulated Copper Cable (ICC)" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Insulated Copper Cable (ICC)</h3>
                <p class="scrap-ferrous-card-desc">Consists of copper wire or cable which is clean, unalloyed, uncoated, and untinned. Can be plastic/rubber insulated.</p>
              </div>
            </div>
          </div>

          <!-- Card 7: Insulated Aluminium Cable (IAC) -->
          <div class="scrap-ferrous-card" data-card="6">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-iac-aluminium-cable.jpg?v=<?php echo $version; ?>" alt="Insulated Aluminium Cable (IAC)" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Insulated Aluminium Cable (IAC)</h3>
                <p class="scrap-ferrous-card-desc">Consists of aluminium wire or cable which is clean, unalloyed, uncoated, and untinned. Can be plastic/rubber insulated.</p>
              </div>
            </div>
          </div>

          <!-- Card 8: Birch–Cliff (Copper) -->
          <div class="scrap-ferrous-card" data-card="7">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-birch-cliff-copper.jpg?v=<?php echo $version; ?>" alt="Birch–Cliff (Copper)" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Birch–Cliff (Copper)</h3>
                <p class="scrap-ferrous-card-desc">Shall consist of unalloyed copper wires having a nominal 94-96% Cu content</p>
              </div>
            </div>
          </div>

          <!-- Card 9: Brass Honey -->
          <div class="scrap-ferrous-card" data-card="8">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-brass-honey.jpg?v=<?php echo $version; ?>" alt="Brass Honey" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Brass Honey</h3>
                <p class="scrap-ferrous-card-desc">Mixed yellow brass solids including brass castings, rolled brass, rod brass, tubing and miscellaneous yellow brasses, including plated brass.</p>
              </div>
            </div>
          </div>

          <!-- Card 10: Brass Ebony -->
          <div class="scrap-ferrous-card" data-card="9">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-brass-ebony.jpg?v=<?php echo $version; ?>" alt="Brass Ebony" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Brass Ebony</h3>
                <p class="scrap-ferrous-card-desc">EBONY consist of red brass scrap, valves, machinery bearings and other machinery parts, including miscellaneous castings made of copper, tin, zinc, and/or lead.</p>
              </div>
            </div>
          </div>

          <!-- Card 11: Stainless Steel Scrap (304, 316, 2205, 430) -->
          <div class="scrap-ferrous-card" data-card="10">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-stainless-steel.jpg?v=<?php echo $version; ?>" alt="Stainless Steel Scrap (304, 316, 2205, 430)" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Stainless Steel Scrap (304, 316, 2205, 430)</h3>
                <p class="scrap-ferrous-card-desc">Alloys of iron and carbon containing differing amounts of nickel, chromium and molybdenum, according to their grades and applications.</p>
              </div>
            </div>
          </div>

          <!-- Card 12: Troma (Aluminium Alloy wheels) -->
          <div class="scrap-ferrous-card" data-card="11">
            <div class="scrap-ferrous-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/nonferrous-troma-wheels.jpg?v=<?php echo $version; ?>" alt="Troma (Aluminium Alloy wheels)" class="scrap-ferrous-img" loading="lazy" />
              <div class="scrap-ferrous-overlay"></div>
              <div class="scrap-ferrous-hover-content">
                <h3 class="scrap-ferrous-card-title">Troma (Aluminium Alloy wheels)</h3>
                <p class="scrap-ferrous-card-desc">Shall consist of clean, single-piece, unplated aluminium wheels of a single specified alloy, free of all inserts, steel, wheel weights, valve stems, tires, grease and oil and other non-metallic items.</p>
              </div>
            </div>
          </div>

        </div>

        <!-- Materials Showcase Bottom CTA Button -->
        <div class="scrap-ferrous-cta-wrap text-center">
          <a href="contact.php" class="scrap-ferrous-cta-btn">
            <span class="btn-text">Contact Us</span>
            <span class="btn-icon" aria-hidden="true">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
              </svg>
            </span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       Section: Demolition & Dismantling (Split-Column Editorial Layout)
       ========================================================================== -->
  <section id="section-demolition" class="section section-demolition section-stacked">
    <!-- Square Grid Background -->
    <div class="demolition-bg-decor bg-decor-square" aria-hidden="true">
    </div>

    <div class="theme-padding" style="position: relative; z-index: 2;">
      <div class="demolition-grid-row">

        <!-- Left Column: Image -->
        <div class="demolition-media-col">
          <div class="demolition-image-card">
            <img src="<?php echo $imagesurl; ?>scrap-trading/demolition-hero.jpg?v=<?php echo $version; ?>" alt="Industrial Demolition &amp; Plant Dismantling - Baijnath Melaram" class="demolition-img" loading="lazy" />
          </div>
        </div>

        <!-- Right Column: Content -->
        <div class="demolition-content-col">
          <div class="about-ref-eyebrow mb-2">
            <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
            <span class="about-eyebrow-text about-eyebrow-text-orange">DISMANTLING &amp; RECOVERY</span>
            <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
          </div>
          <h2 class="demolition-heading">
            <span class="word-mask"><span class="word-inner">Demol</span><span class="word-inner text-secondary">ition</span></span>
          </h2>
          <div class="demolition-body-text">
            <p>
              Since the inception and innovation of the steam engine which led to the industrial revolution, humanity has produced more, built and made their discoveries come true. However, to pave the way for newer technologies and investments, the pre-existing production facilities, civil structures, and power plants that were built earlier need to be replaced. Due to this constant change in technology coupled with a more sustainable approach, the idea of Demolition and Dismantling started within the Baijnath Melaram group.
            </p>
            <p>
              Demolitions, dismantling, and salvaging of structures which have been abandoned owing to ageing, stoppage of operations, natural wear and tear of structures, or are undergoing modifications is one of the most dangerous and challenging jobs. Baijnath Melaram group's dismantling division has carved out a niche for itself in this field. This division of the Group has established itself as the market leader by undertaking and delivering complex tasks of demolishing and dismantling of production plants, machinery, civil structures, mechanical structures ranging from small to very large structures on turnkey basis. Group's stellar project management skills and team of highly skilled professionals allows it to tackle even the most technically challenging projects, while delivering on time and within budget.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       Section: Premier Heavy-Duty Machinery Line
       ========================================================================== -->
  <section id="section-heavy-machinery" class="section section-extensions section-stacked hm-section-wrapper">
    <!-- Nautical Compass Background Watermark -->
    <div class="materials-bg-compass hm-bg-compass" aria-hidden="true">
      <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.16)" stroke-width="1.5" stroke-dasharray="4 8" />
        <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.22)" stroke-width="1.2" />
        <circle cx="300" cy="300" r="140" stroke="rgba(229,145,47,0.16)" stroke-width="1.5" stroke-dasharray="2 6" />
        <circle cx="300" cy="300" r="60" stroke="rgba(229,145,47,0.24)" stroke-width="1.2" />
        <line x1="300" y1="10" x2="300" y2="590" stroke="rgba(229,145,47,0.2)" stroke-width="1" stroke-dasharray="6 6" />
        <line x1="10" y1="300" x2="590" y2="300" stroke="rgba(229,145,47,0.2)" stroke-width="1" stroke-dasharray="6 6" />
        <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.35)" />
        <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.25)" />
        <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.25)" />
        <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.25)" />
      </svg>
    </div>

    <!-- Top Content: Header & Row 1 -->
    <div class="theme-padding hm-theme-padding-top">

      <!-- Section Header -->
      <div class="extensions-head-wrap hm-head-wrap">
        <div class="about-ref-eyebrow mb-2 about-ref-eyebrow-center">
          <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
          <span class="about-eyebrow-text about-eyebrow-text-orange">HEAVY-DUTY MACHINERY</span>
          <span class="about-eyebrow-line about-eyebrow-line-orange"></span>
        </div>
        <h2 class="extensions-heading">
          <span class="word-mask"><span class="word-inner">Premier</span></span>
          <span class="word-mask"><span class="word-inner">Heavy-Duty</span></span>
          <span class="word-mask"><span class="word-inner">Machinery</span></span>
          <span class="word-mask"><span class="word-inner">Line:</span></span><br />
          <span class="ext-heading-accent">
            <span class="word-mask"><span class="word-inner text-secondary">Unmatched</span></span>
            <span class="word-mask"><span class="word-inner text-secondary">Excellence</span></span>
          </span>
        </h2>
      </div>

      <!-- Row 1: Left Image, Right Content -->
      <div class="ext-row-item">
        <div class="columns is-variable is-multiline is-vcentered">
          <!-- Left Image -->
          <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
            <div class="ext-image-card hm-image-card">
              <img src="<?php echo $imagesurl; ?>scrap-trading/heavy-transformer.jpg?v=<?php echo $version; ?>" alt="Copper Transformer Scrap" class="ext-card-img hm-card-img" loading="lazy" />
            </div>
          </div>
          <!-- Right Content -->
          <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
            <div class="ext-info-card">
              <!-- Compass Watermark -->
              <div class="ext-info-compass">
                <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.16)" stroke-width="1.5" stroke-dasharray="4 8" />
                  <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.22)" stroke-width="1.2" />
                  <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.35)" />
                  <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.25)" />
                  <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.25)" />
                  <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.25)" />
                </svg>
              </div>

              <h3 class="ext-item-title">Copper Transformer Scrap</h3>
              <div class="ext-info-accent-line"></div>
              <p class="ext-item-desc">
                "Copper transformer scrap" refers to discarded copper parts from transformers, valued for recycling due to copper's conductivity and sustainability. Recycling this scrap conserves resources, reduces mining, and minimizes environmental impact.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Full-Width Background Row 2: Right Image, Left Content -->
    <div class="ext-row-item hm-mid-row">
      <div class="theme-padding">
        <div class="columns is-variable is-multiline is-vcentered">
          <!-- Left Content -->
          <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen cols-order order-2">
            <div class="ext-info-card hm-info-card-alt">
              <h3 class="ext-item-title">Large Motor Scrap</h3>
              <div class="ext-info-accent-line"></div>
              <p class="ext-item-desc">
                Large motors scrap include discarded electric motors, often from industrial equipment and appliances, containing valuable ferrous and nonferrous materials. Recycling them reclaims resources, cuts landfill waste, and boosts sustainability.
              </p>
            </div>
          </div>
          <!-- Right Image -->
          <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
            <div class="ext-image-card hm-image-card">
              <img src="<?php echo $imagesurl; ?>scrap-trading/heavy-large-motor.jpg?v=<?php echo $version; ?>" alt="Large Motor Scrap" class="ext-card-img hm-card-img" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Content: Row 3 -->
    <div class="theme-padding hm-theme-padding-bottom">
      <!-- Row 3: Left Image, Right Content -->
      <div class="ext-row-item">
        <div class="columns is-variable is-multiline is-vcentered">
          <!-- Left Image -->
          <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
            <div class="ext-image-card hm-image-card">
              <img src="<?php echo $imagesurl; ?>scrap-trading/heavy-copper-stator.jpg?v=<?php echo $version; ?>" alt="Copper Winding Stator Scrap" class="ext-card-img hm-card-img" loading="lazy" />
            </div>
          </div>
          <!-- Right Content -->
          <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
            <div class="ext-info-card">
              <!-- Compass Watermark -->
              <div class="ext-info-compass hm-compass-alt">
                <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.16)" stroke-width="1.5" stroke-dasharray="4 8" />
                  <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.22)" stroke-width="1.2" />
                  <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.35)" />
                  <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.25)" />
                  <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.25)" />
                  <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.25)" />
                </svg>
              </div>

              <h3 class="ext-item-title">Copper Winding Stator Scrap</h3>
              <div class="ext-info-accent-line"></div>
              <p class="ext-item-desc">
                Discarded motor and generator parts with valuable copper windings for recycling, promoting sustainability and resource conservation.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>

  <!-- Page Specific GSAP Text & Scroll Animations -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        return;
      }

      gsap.registerPlugin(ScrollTrigger);

      // Check for reduced motion preference
      const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (prefersReducedMotion) return;

      /* ======================================================================
         1. Hero Banner Text Reveal (Friends Corp.)
         ====================================================================== */
      const heroBanner = document.querySelector('#section-banner') || document.querySelector('#secondary-scrap-banner');
      if (heroBanner) {
        const heroEyebrow = heroBanner.querySelector('.about-ref-eyebrow');
        const heroDivider = heroBanner.querySelector('.banner-divider');
        const heroWords = heroBanner.querySelectorAll('.banner-word-inner');
        const heroSub = heroBanner.querySelector('.banner-subtitle');

        const heroTl = gsap.timeline({
          delay: 0.15
        });

        if (heroEyebrow) {
          heroTl.fromTo(heroEyebrow, {
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
        if (heroDivider) {
          heroTl.fromTo(heroDivider, {
            scaleX: 0,
            opacity: 0
          }, {
            scaleX: 1,
            opacity: 1,
            duration: 0.7,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.1);
        }
        if (heroWords && heroWords.length) {
          heroTl.fromTo(heroWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.9,
            stagger: 0.08,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.2);
        }
        if (heroSub) {
          heroTl.fromTo(heroSub, {
            y: 24,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.75,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.4);
        }
      }

      /* ======================================================================
         2. Section: About & Core Pillars (Editorial Reveal)
         ====================================================================== */
      const aboutSec = document.getElementById('section-about');
      if (aboutSec) {
        const topRow = aboutSec.querySelector('.scrap-editorial-top-row');
        const mainWords = aboutSec.querySelectorAll('.scrap-editorial-main-title .word-inner');
        const bodyTexts = aboutSec.querySelectorAll('.scrap-editorial-body-text');
        const heroFrame = aboutSec.querySelector('.scrap-editorial-hero-frame');
        const bottomGrid = aboutSec.querySelector('.scrap-editorial-bottom-grid');
        const kickerCol = aboutSec.querySelector('.scrap-pillars-kicker-col');
        const pillarCards = aboutSec.querySelectorAll('.scrap-pillar-item-card');
        const bottomNote = aboutSec.querySelector('.scrap-editorial-bottom-note');

        const aboutTl = gsap.timeline({
          scrollTrigger: {
            trigger: topRow || aboutSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (mainWords && mainWords.length) {
          aboutTl.fromTo(mainWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0);
        }

        if (bodyTexts && bodyTexts.length) {
          aboutTl.fromTo(bodyTexts, {
            y: 24,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.7,
            stagger: 0.15,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.15);
        }

        if (heroFrame) {
          aboutTl.fromTo(heroFrame, {
            y: 35,
            opacity: 0,
            scale: 0.98
          }, {
            y: 0,
            opacity: 1,
            scale: 1,
            duration: 0.9,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.2);
        }

        // Bottom Grid ScrollTrigger
        if (bottomGrid) {
          const bottomTl = gsap.timeline({
            scrollTrigger: {
              trigger: bottomGrid,
              start: 'top 80%',
              toggleActions: 'play none none none'
            }
          });

          if (kickerCol) {
            bottomTl.fromTo(kickerCol, {
              y: 25,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.7,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0);
          }

          if (pillarCards && pillarCards.length) {
            bottomTl.fromTo(pillarCards, {
              y: 35,
              opacity: 0,
              scale: 0.97
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.7,
              stagger: 0.1,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.15);
          }

          if (bottomNote) {
            bottomTl.fromTo(bottomNote, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.65,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.35);
          }
        }
      }

      /* ======================================================================
         3. Section: Our Services (3 R's Stagger Reveal)
         ====================================================================== */
      const servicesSec = document.getElementById('our-service');
      if (servicesSec) {
        const eyebrowLines = servicesSec.querySelectorAll('.about-eyebrow-line');
        const eyebrowText = servicesSec.querySelector('.about-eyebrow-text');
        const srvWords = servicesSec.querySelectorAll('.section-title .word-inner');
        const cols = servicesSec.querySelectorAll('.services-3r-col');

        const srvTl = gsap.timeline({
          scrollTrigger: {
            trigger: servicesSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (eyebrowLines && eyebrowLines.length) {
          srvTl.fromTo(eyebrowLines, { scaleX: 0 }, { scaleX: 1, duration: 0.6, ease: 'power2.out', clearProps: 'all' }, 0);
        }
        if (eyebrowText) {
          srvTl.fromTo(eyebrowText, { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out', clearProps: 'all' }, 0.08);
        }
        if (srvWords && srvWords.length) {
          srvTl.fromTo(srvWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            stagger: 0.06,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.12);
        }

        if (cols && cols.length) {
          srvTl.fromTo(cols, {
            y: 35,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.7,
            stagger: 0.12,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.3);
        }

        const compassSvg = servicesSec.querySelector('.services-bg-compass svg');
        if (compassSvg) {
          gsap.to(compassSvg, {
            rotation: 160,
            ease: 'none',
            scrollTrigger: {
              trigger: servicesSec,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1.2
            }
          });
        }
      }

      /* ======================================================================
         4. Section: Ferrous Products Showcase (Stagger Reveal)
         ====================================================================== */
      const ferrousSec = document.getElementById('section-products');
      if (ferrousSec) {
        const eyebrowLines = ferrousSec.querySelectorAll('.about-eyebrow-line');
        const eyebrowText = ferrousSec.querySelector('.about-eyebrow-text');
        const fWords = ferrousSec.querySelectorAll('.scrap-ferrous-heading .word-inner');
        const fCards = ferrousSec.querySelectorAll('.scrap-ferrous-card');
        const fCta = ferrousSec.querySelector('.scrap-ferrous-cta-wrap');

        const ferrousTl = gsap.timeline({
          scrollTrigger: {
            trigger: ferrousSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (eyebrowLines && eyebrowLines.length) {
          ferrousTl.fromTo(eyebrowLines, { scaleX: 0 }, { scaleX: 1, duration: 0.6, ease: 'power2.out', clearProps: 'all' }, 0);
        }
        if (eyebrowText) {
          ferrousTl.fromTo(eyebrowText, { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out', clearProps: 'all' }, 0.08);
        }
        if (fWords && fWords.length) {
          ferrousTl.fromTo(fWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            stagger: 0.07,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.12);
        }

        if (fCards && fCards.length) {
          ferrousTl.fromTo(fCards, {
            y: 35,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.65,
            stagger: 0.08,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.25);
        }

        if (fCta) {
          ferrousTl.fromTo(fCta, {
            y: 20,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.6,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.45);
        }
      }

      /* ======================================================================
         5. Section: Non-Ferrous Products Showcase (Stagger Reveal)
         ====================================================================== */
      const nonFerrousSec = document.getElementById('section-non-ferrous-products');
      if (nonFerrousSec) {
        const eyebrowLines = nonFerrousSec.querySelectorAll('.about-eyebrow-line');
        const eyebrowText = nonFerrousSec.querySelector('.about-eyebrow-text');
        const nfWords = nonFerrousSec.querySelectorAll('.scrap-ferrous-heading .word-inner');
        const nfCards = nonFerrousSec.querySelectorAll('.scrap-ferrous-card');
        const nfCta = nonFerrousSec.querySelector('.scrap-ferrous-cta-wrap');

        const nfTl = gsap.timeline({
          scrollTrigger: {
            trigger: nonFerrousSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (eyebrowLines && eyebrowLines.length) {
          nfTl.fromTo(eyebrowLines, { scaleX: 0 }, { scaleX: 1, duration: 0.6, ease: 'power2.out', clearProps: 'all' }, 0);
        }
        if (eyebrowText) {
          nfTl.fromTo(eyebrowText, { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out', clearProps: 'all' }, 0.08);
        }
        if (nfWords && nfWords.length) {
          nfTl.fromTo(nfWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            stagger: 0.07,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.12);
        }

        if (nfCards && nfCards.length) {
          nfTl.fromTo(nfCards, {
            y: 35,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.65,
            stagger: 0.08,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.25);
        }

        if (nfCta) {
          nfTl.fromTo(nfCta, {
            y: 20,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.6,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.45);
        }

        const nfCompassSvg = nonFerrousSec.querySelector('.nonferrous-bg-compass svg');
        if (nfCompassSvg) {
          gsap.to(nfCompassSvg, {
            rotation: -160,
            ease: 'none',
            scrollTrigger: {
              trigger: nonFerrousSec,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1.2
            }
          });
        }
      }

      /* ======================================================================
         6. Section: Demolition & Dismantling (Text & Media Reveal)
         ====================================================================== */
      const demoSec = document.getElementById('section-demolition');
      if (demoSec) {
        const demoImg = demoSec.querySelector('.demolition-image-card');
        const eyebrowLines = demoSec.querySelectorAll('.about-eyebrow-line');
        const eyebrowText = demoSec.querySelector('.about-eyebrow-text');
        const demoWords = demoSec.querySelectorAll('.demolition-heading .word-inner');
        const demoParas = demoSec.querySelectorAll('.demolition-body-text p');

        const demoTl = gsap.timeline({
          scrollTrigger: {
            trigger: demoSec,
            start: 'top 78%',
            toggleActions: 'play none none none'
          }
        });

        if (demoImg) {
          demoTl.fromTo(demoImg, {
            x: -35,
            opacity: 0,
            scale: 0.98
          }, {
            x: 0,
            opacity: 1,
            scale: 1,
            duration: 0.85,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0);
        }

        if (eyebrowLines && eyebrowLines.length) {
          demoTl.fromTo(eyebrowLines, { scaleX: 0 }, { scaleX: 1, duration: 0.6, ease: 'power2.out', clearProps: 'all' }, 0.05);
        }
        if (eyebrowText) {
          demoTl.fromTo(eyebrowText, { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out', clearProps: 'all' }, 0.1);
        }
        if (demoWords && demoWords.length) {
          demoTl.fromTo(demoWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            stagger: 0.06,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.15);
        }

        if (demoParas && demoParas.length) {
          demoTl.fromTo(demoParas, {
            y: 25,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.7,
            stagger: 0.15,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.25);
        }
      }

      /* ======================================================================
         7. Section: Heavy-Duty Machinery Line (Header & Rows Stagger Reveal)
         ====================================================================== */
      const hmSec = document.getElementById('section-heavy-machinery');
      if (hmSec) {
        const eyebrowLines = hmSec.querySelectorAll('.hm-head-wrap .about-eyebrow-line');
        const eyebrowText = hmSec.querySelector('.hm-head-wrap .about-eyebrow-text');
        const hmWords = hmSec.querySelectorAll('.extensions-heading .word-inner');

        const hmHeaderTl = gsap.timeline({
          scrollTrigger: {
            trigger: hmSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (eyebrowLines && eyebrowLines.length) {
          hmHeaderTl.fromTo(eyebrowLines, { scaleX: 0 }, { scaleX: 1, duration: 0.6, ease: 'power2.out', clearProps: 'all' }, 0);
        }
        if (eyebrowText) {
          hmHeaderTl.fromTo(eyebrowText, { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out', clearProps: 'all' }, 0.08);
        }
        if (hmWords && hmWords.length) {
          hmHeaderTl.fromTo(hmWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            stagger: 0.06,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.12);
        }

        // Animate each of the 3 machinery rows individually on scroll
        const hmRows = hmSec.querySelectorAll('.ext-row-item');
        hmRows.forEach((row) => {
          const imgCard = row.querySelector('.ext-image-card');
          const infoCard = row.querySelector('.ext-info-card');
          const title = row.querySelector('.ext-item-title');
          const line = row.querySelector('.ext-info-accent-line');
          const desc = row.querySelector('.ext-item-desc');
          const compass = row.querySelector('.ext-info-compass');

          const rowTl = gsap.timeline({
            scrollTrigger: {
              trigger: row,
              start: 'top 78%',
              toggleActions: 'play none none none'
            }
          });

          if (imgCard) {
            rowTl.fromTo(imgCard, {
              y: 35,
              opacity: 0,
              scale: 0.98
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.85,
              ease: 'power3.out',
              clearProps: 'all'
            }, 0);
          }

          if (infoCard) {
            rowTl.fromTo(infoCard, {
              y: 30,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.12);
          }

          if (title) {
            rowTl.fromTo(title, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.18);
          }

          if (line) {
            rowTl.fromTo(line, {
              scaleX: 0,
              transformOrigin: 'left center'
            }, {
              scaleX: 1,
              duration: 0.5,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.25);
          }

          if (desc) {
            rowTl.fromTo(desc, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.65,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.3);
          }

          if (compass) {
            rowTl.fromTo(compass, {
              rotation: -30,
              opacity: 0
            }, {
              rotation: 0,
              opacity: 0.6,
              duration: 1,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.2);
          }
        });

        // Background compass watermark rotation on scroll
        const hmCompassSvg = hmSec.querySelector('.hm-bg-compass svg');
        if (hmCompassSvg) {
          gsap.to(hmCompassSvg, {
            rotation: 140,
            ease: 'none',
            scrollTrigger: {
              trigger: hmSec,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1.2
            }
          });
        }
      }

      window.addEventListener('load', function() {
        if (typeof ScrollTrigger !== 'undefined') {
          ScrollTrigger.refresh();
        }
      });
    });
  </script>

  <?php echo $block_body_end; ?>
</body>

</html>