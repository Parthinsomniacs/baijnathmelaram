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
  <section id="section-banner" class="section section-banner p-0" style="height: auto !important; min-height: unset !important; position: relative !important;">
    <div class="banner-image" style="position: relative;">
      <picture>
        <source media="(max-width:600px)" srcset="<?php echo $imagesurl; ?>banner/scrap-trading-banner.webp?v=<?php echo $version; ?>" type="image/webp">
        <img src="<?php echo $imagesurl; ?>banner/scrap-trading-banner.webp?v=<?php echo $version; ?>" width="1920" height="880" alt="Secondary Scrap Trading - Friends Corp." />
      </picture>
      <div class="banner-video-overlay"></div>

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
                <p class="banner-subtitle" style="color: rgba(255, 255, 255, 0.85); font-size: clamp(16px, 1.4vw, 22px); margin-top: 16px; max-width: 780px; line-height: 1.5;">
                  Specialising in high-grade ferrous, non-ferrous, and alloy metal scrap responsibly sourced from green ship recycling operations in Bhavnagar &amp; Alang.
                </p>
              </div>
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
    <div class="theme-padding">
      
      <!-- TOP TIER: Editorial About Intro & Hero Frame -->
      <div class="scrap-editorial-top-row">
        <!-- Left Column: Big Headline & Editorial Narrative Split -->
        <div class="scrap-editorial-left">
          <h2 class="scrap-editorial-main-title">ABOUT</h2>

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
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
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
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
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
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
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
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
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
          <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
          <span class="about-eyebrow-text" style="color: #e5912f;">OUR SERVICES</span>
          <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
        </div>
        <div class="section-title">
          <h2>
            <span>A Commitment to the 3 R's:</span><br />
            <span class="text-secondary">Pioneering Sustainability in Our Expertise</span>
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
    <!-- Atmospheric Ambient Background & Blueprint Decor -->
    <div class="scrap-ferrous-bg-decor" aria-hidden="true">
      <div class="scrap-ferrous-glow scrap-ferrous-glow-1"></div>
      <div class="scrap-ferrous-glow scrap-ferrous-glow-2"></div>
      <div class="scrap-ferrous-glow scrap-ferrous-glow-3"></div>
      <div class="scrap-ferrous-bg-grid"></div>
      <div class="scrap-ferrous-plus scrap-ferrous-plus-1">+</div>
      <div class="scrap-ferrous-plus scrap-ferrous-plus-2">+</div>
      <div class="scrap-ferrous-plus scrap-ferrous-plus-3">+</div>
    </div>

    <div class="theme-padding" style="position: relative; z-index: 2;">
      <div class="scrap-ferrous-container">
        
        <!-- Section Header Block -->
        <div class="scrap-ferrous-header text-center">
          <div class="about-ref-eyebrow mb-2" style="justify-content: center;">
            <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
            <span class="about-eyebrow-text" style="color: #e5912f;">MATERIALS WE TRADE-IN</span>
            <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
          </div>
          <div class="section-title">
            <h2 class="scrap-ferrous-heading">
              <span>Materials We Trade-In</span> <span class="text-secondary">(Ferrous)</span>
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
          <a href="javascript:void(0)" class="scrap-ferrous-cta-btn" onclick="openForm('enquire')">
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
  <section id="section-non-ferrous-products" class="section section-scrap-ferrous-products section-stacked">
    <!-- Nautical Compass Background Watermark (Clean background) -->
    <div class="materials-bg-compass nonferrous-bg-compass" aria-hidden="true">
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
          <div class="about-ref-eyebrow mb-2" style="justify-content: center;">
            <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
            <span class="about-eyebrow-text" style="color: #e5912f;">MATERIALS WE TRADE-IN</span>
            <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
          </div>
          <div class="section-title">
            <h2 class="scrap-ferrous-heading">
              <span>Materials We Trade-In</span> <span class="text-secondary">(Non-Ferrous)</span>
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
          <a href="javascript:void(0)" class="scrap-ferrous-cta-btn" onclick="openForm('enquire')">
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
    <!-- Atmospheric Ambient Background & Blueprint Decor -->
    <div class="demolition-bg-decor" aria-hidden="true">
      <div class="demolition-glow demolition-glow-1"></div>
      <div class="demolition-glow demolition-glow-2"></div>
      <div class="demolition-glow demolition-glow-3"></div>
      <div class="demolition-bg-grid"></div>
      <div class="demolition-plus demolition-plus-1">+</div>
      <div class="demolition-plus demolition-plus-2">+</div>
      <div class="demolition-plus demolition-plus-3">+</div>
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
            <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
            <span class="about-eyebrow-text" style="color: #e5912f;">DISMANTLING &amp; RECOVERY</span>
            <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
          </div>
          <h2 class="demolition-heading">
            <span>Demol</span><span class="text-secondary">ition</span>
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
  <section id="section-heavy-machinery" class="section section-extensions section-stacked" style="background-color: transparent; background-image: none; padding: 0;">
    
    <!-- Top Content: Header & Row 1 -->
    <div class="theme-padding" style="position: relative; z-index: 2; padding-top: clamp(70px, 7vw, 110px);">
      
      <!-- Section Header -->
      <div class="extensions-head-wrap" style="margin-bottom: 60px;">
        <div class="about-ref-eyebrow mb-2" style="justify-content: center;">
          <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
          <span class="about-eyebrow-text" style="color: #e5912f;">HEAVY-DUTY MACHINERY</span>
          <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
        </div>
        <h2 class="extensions-heading">
          Premier Heavy-Duty Machinery Line:<br/>
          <span class="ext-heading-accent">Unmatched Excellence</span>
        </h2>
      </div>
        
      <!-- Row 1: Left Image, Right Content -->
      <div class="ext-row-item" style="margin-bottom: clamp(48px, 6.5vh, 76px);">
        <div class="columns is-variable is-6 is-vcentered">
          <!-- Left Image -->
          <div class="column is-6">
            <div class="ext-image-card" style="background: transparent; box-shadow: none; height: auto;">
              <img src="<?php echo $imagesurl; ?>scrap-trading/heavy-transformer.jpg?v=<?php echo $version; ?>" alt="Copper Transformer Scrap" class="ext-card-img" style="border-radius: 12px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.1);" loading="lazy" />
            </div>
          </div>
          <!-- Right Content -->
          <div class="column is-6">
            <div class="ext-info-card" style="padding: 20px 40px; min-height: auto;">
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
    <div class="ext-row-item" style="background: linear-gradient(180deg, #fcfbfa 0%, #f7f3ed 50%, #fcfbfa 100%); width: 100%; padding: 60px 0;">
      <div class="theme-padding">
        <div class="columns is-variable is-6 is-vcentered">
          <!-- Left Content -->
          <div class="column is-6">
            <div class="ext-info-card" style="padding: 20px 40px 20px 0; min-height: auto;">
              <h3 class="ext-item-title">Large Motor Scrap</h3>
              <div class="ext-info-accent-line"></div>
              <p class="ext-item-desc">
                Large motors scrap include discarded electric motors, often from industrial equipment and appliances, containing valuable ferrous and nonferrous materials. Recycling them reclaims resources, cuts landfill waste, and boosts sustainability.
              </p>
            </div>
          </div>
          <!-- Right Image -->
          <div class="column is-6">
            <div class="ext-image-card" style="background: transparent; box-shadow: none; height: auto;">
              <img src="<?php echo $imagesurl; ?>scrap-trading/heavy-large-motor.jpg?v=<?php echo $version; ?>" alt="Large Motor Scrap" class="ext-card-img" style="border-radius: 12px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.1);" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Content: Row 3 -->
    <div class="theme-padding" style="position: relative; z-index: 2; padding-top: clamp(48px, 6.5vh, 76px); padding-bottom: clamp(70px, 7vw, 110px);">
      <!-- Row 3: Left Image, Right Content -->
      <div class="ext-row-item">
        <div class="columns is-variable is-6 is-vcentered">
          <!-- Left Image -->
          <div class="column is-6">
            <div class="ext-image-card" style="background: transparent; box-shadow: none; height: auto;">
              <img src="<?php echo $imagesurl; ?>scrap-trading/heavy-copper-stator.jpg?v=<?php echo $version; ?>" alt="Copper Winding Stator Scrap" class="ext-card-img" style="border-radius: 12px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.1);" loading="lazy" />
            </div>
          </div>
          <!-- Right Content -->
          <div class="column is-6">
            <div class="ext-info-card" style="padding: 20px 40px; min-height: auto;">
              <!-- Compass Watermark -->
              <div class="ext-info-compass" style="right: auto; left: -60px;">
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
      const heroBanner = document.querySelector('#secondary-scrap-banner');
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
        const mainTitle = aboutSec.querySelector('.scrap-editorial-main-title');
        const bodyText = aboutSec.querySelector('.scrap-editorial-body-text');
        const heroFrame = aboutSec.querySelector('.scrap-editorial-hero-frame');
        const kickerCol = aboutSec.querySelector('.scrap-pillars-kicker-col');
        const pillarCards = aboutSec.querySelectorAll('.scrap-pillar-item-card');

        const aboutTl = gsap.timeline({
          scrollTrigger: {
            trigger: topRow || aboutSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (mainTitle) {
          aboutTl.fromTo(mainTitle, {
            y: 30,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.8,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0);
        }

        if (bodyText) {
          aboutTl.fromTo(bodyText, {
            y: 20,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.6,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.25);
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
          }, 0.15);
        }

        // Bottom Grid ScrollTrigger
        const bottomGrid = aboutSec.querySelector('.scrap-editorial-bottom-grid');
        if (bottomGrid) {
          const bottomTl = gsap.timeline({
            scrollTrigger: {
              trigger: bottomGrid,
              start: 'top 82%',
              toggleActions: 'play none none none'
            }
          });

          if (kickerCol) {
            bottomTl.fromTo(kickerCol, {
              y: 24,
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
              y: 30,
              opacity: 0,
              scale: 0.97
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.65,
              stagger: 0.08,
              ease: 'back.out(1.3)',
              clearProps: 'all'
            }, 0.15);
          }
        }
      }

      /* ======================================================================
         3. Section: Our Services (3 R's Stagger Reveal)
         ====================================================================== */
      const servicesSec = document.getElementById('our-service');
      if (servicesSec) {
        const header = servicesSec.querySelector('.services-3r-header');
        const cols = servicesSec.querySelectorAll('.services-3r-col');

        const srvTl = gsap.timeline({
          scrollTrigger: {
            trigger: servicesSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (header) {
          srvTl.fromTo(header, {
            y: 30,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.75,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0);
        }

        if (cols && cols.length) {
          srvTl.fromTo(cols, {
            y: 35,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.65,
            stagger: 0.12,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.2);
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
        const fHeader = ferrousSec.querySelector('.scrap-ferrous-header');
        const fCards = ferrousSec.querySelectorAll('.scrap-ferrous-card');

        const ferrousTl = gsap.timeline({
          scrollTrigger: {
            trigger: ferrousSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (fHeader) {
          ferrousTl.fromTo(fHeader, {
            y: 30,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.75,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0);
        }

        if (fCards && fCards.length) {
          ferrousTl.fromTo(fCards, {
            y: 40,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.7,
            stagger: 0.1,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.2);
        }

        const fCompassSvg = ferrousSec.querySelector('.ferrous-bg-compass svg');
        if (fCompassSvg) {
          gsap.to(fCompassSvg, {
            rotation: 160,
            ease: 'none',
            scrollTrigger: {
              trigger: ferrousSec,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1.2
            }
          });
        }
      }

      /* ======================================================================
         5. Section: Non-Ferrous Products Showcase (Stagger Reveal)
         ====================================================================== */
      const nonFerrousSec = document.getElementById('section-non-ferrous-products');
      if (nonFerrousSec) {
        const nfHeader = nonFerrousSec.querySelector('.scrap-ferrous-header');
        const nfCards = nonFerrousSec.querySelectorAll('.scrap-ferrous-card');

        const nfTl = gsap.timeline({
          scrollTrigger: {
            trigger: nonFerrousSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (nfHeader) {
          nfTl.fromTo(nfHeader, {
            y: 30,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.75,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0);
        }

        if (nfCards && nfCards.length) {
          nfTl.fromTo(nfCards, {
            y: 40,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.7,
            stagger: 0.1,
            ease: 'power2.out',
            clearProps: 'all'
          }, 0.2);
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
         6. Section: Demolition & Dismantling (Split-Column Stagger Reveal)
         ====================================================================== */
      const demoSec = document.getElementById('section-demolition');
      if (demoSec) {
        const demoImg = demoSec.querySelector('.demolition-media-col');
        const demoContent = demoSec.querySelector('.demolition-content-col');

        const demoTl = gsap.timeline({
          scrollTrigger: {
            trigger: demoSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (demoImg) {
          demoTl.fromTo(demoImg, {
            x: -40,
            opacity: 0
          }, {
            x: 0,
            opacity: 1,
            duration: 0.85,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0);
        }

        if (demoContent) {
          demoTl.fromTo(demoContent, {
            x: 40,
            opacity: 0
          }, {
            x: 0,
            opacity: 1,
            duration: 0.85,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.15);
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