<?php require_once("inc-global.php"); ?>
<?php
$page = "home";
$pagetype = "onepage";
$pagename = "Home";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "yes";
$sliderautoscroll = "yes";
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

  <section id="section-banner" class="section section-banner p-0">
    <!-- Banner Video Background with Smooth Seamless Loop -->
    <div class="banner-video-wrap">
      <video id="banner-video-1" class="banner-video banner-video--1" autoplay muted playsinline preload="auto">
        <source src="<?php echo $imagesurl; ?>banner/banner-new-video.mp4" type="video/mp4">
      </video>
      <video id="banner-video-2" class="banner-video banner-video--2" muted playsinline preload="auto">
        <source src="<?php echo $imagesurl; ?>banner/banner-new-video.mp4" type="video/mp4">
      </video>
      <div class="banner-video-overlay"></div>
    </div>

    <!-- Banner Content Overlay Directly on Video (Matches Reference Layout) -->
    <div class="banner-overlay-wrap">
      <div class="theme-padding">
        <div class="banner-hero-main">
          <div class="section-title">
            <h1 class="banner-title">
              <span class="banner-word-mask"><span class="banner-word-inner">GREEN</span></span><br>
              <span class="banner-word-mask"><span class="banner-word-inner">RECYCLING</span></span><br>
              <span class="banner-word-mask"><span class="banner-word-inner banner-italic text-secondary">NAVIGATE</span></span> <span class="banner-word-mask"><span class="banner-word-inner">FUTURE</span></span>
            </h1>
          </div>
        </div>

        <div class="banner-ref-divider"></div>

        <div class="banner-bottom-row">
          <div class="banner-scroll-label">[ Scroll Down ]</div>
          <div class="banner-ref-right">
            <p class="banner-ref-desc">
              Pioneering sustainable ship recycling &amp; engineered alloy casting for a clean, circular maritime future.
            </p>
            <div class="banner-ref-cta">
              <a href="javascript:void(0)" class="banner-ref-btn" onclick="openForm('enquire')"><span>Contact Us</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Partners Section -->
  <section id="section-partners" class="section section-partners theme-padding">

    <!-- Header Wrap -->
    <div class="partners-head-wrap text-center">
      <div class="partners-pre-tag">
        <span class="pre-tag-dash">&mdash;</span>
        <span class="partner-tag-mask"><span class="partner-tag-inner">OUR</span></span>
        <span class="partner-tag-mask"><span class="partner-tag-inner">GLOBAL</span></span>
        <span class="pre-tag-dash">&mdash;</span>
      </div>
      <div class="section-title">
        <h2 class="partners-main-title">
          <span class="partner-word-mask"><span class="partner-word-inner">Part</span></span><span class="partner-word-mask"><span class="partner-word-inner text-secondary">ners</span></span>
        </h2>
      </div>
      <p class="partners-ref-subtitle">
        <span class="partner-sub-mask"><span class="partner-sub-inner">Collaborating</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">with</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">industry</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">leaders</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">to</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">build</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">smarter,</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">stronger</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">and</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">more</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">sustainable</span></span>
        <span class="partner-sub-mask"><span class="partner-sub-inner">solutions.</span></span>
      </p>
    </div>

    <!-- Carousel Slider -->
    <div id="partners-slider" class="splide partners-slider">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/cnco-black-logo.png" alt="China Navigation" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/International-Seaways-1080x675.png" alt="International Seaways, Inc." class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/Maersk-Logo_edited.png" alt="Maersk" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/Saipem_logo_svg.png" alt="Saipem" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/2560px-Evergreen_Logo_svg.png" alt="Evergreen" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/Berge-Bulk_edited.png" alt="Berge Bulk" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/BWO_full-version-logo---gradient.png" alt="BW Offshore" class="partner-logo-img" />
            </div>
          </li>
          <!-- Duplicate set for seamless continuous loop -->
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/cnco-black-logo.png" alt="China Navigation" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/International-Seaways-1080x675.png" alt="International Seaways, Inc." class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/Maersk-Logo_edited.png" alt="Maersk" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/Saipem_logo_svg.png" alt="Saipem" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/2560px-Evergreen_Logo_svg.png" alt="Evergreen" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/Berge-Bulk_edited.png" alt="Berge Bulk" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/BWO_full-version-logo---gradient.png" alt="BW Offshore" class="partner-logo-img" />
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>



  <section id="section-about-us" class="section section-about-us pb-0">
    <!-- Subtle Background World Map Watermark -->
    <div class="about-bg-map-pattern" aria-hidden="true"></div>

    <!-- Subtle Sweeping Curved Lines on Bottom Right -->
    <div class="about-bg-curves" aria-hidden="true">
      <svg viewBox="0 0 1000 300" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M 0,280 Q 400,240 700,290 T 1000,180" stroke="rgba(234,143,40,0.22)" stroke-width="1.5" />
        <path d="M 100,295 Q 500,260 780,295 T 1000,210" stroke="rgba(234,143,40,0.15)" stroke-width="1.2" />
        <path d="M 200,300 Q 600,280 850,300 T 1000,240" stroke="rgba(234,143,40,0.08)" stroke-width="1.0" />
      </svg>
    </div>

    <div class="theme-padding pl-0">
      <div class="columns is-vcentered is-variable is-5-desktop about-columns-layout">

        <!-- FIRST COLUMN: Our Ship Image -->
        <div class="column is-6-widescreen is-6-desktop is-12-tablet is-12-mobile about-col-ship">
          <div class="about-hero-ship-box">
            <img src="<?php echo $imagesurl; ?>about/transparent-ship.webp"
              class="about-hero-ship-img"
              alt="Global Container Vessel - Safer Seas Stronger Connections"
              loading="lazy">
          </div>
        </div>

        <!-- SECOND COLUMN: Content (Section Title H2, Description, 4 Badges) -->
        <div class="column is-6-widescreen is-6-desktop is-12-tablet is-12-mobile about-col-content">
          <div class="about-ref-center">
            <!-- Eyebrow Tag -->
            <div class="about-ref-eyebrow">
              <span class="about-eyebrow-line"></span>
              <span class="about-eyebrow-text">GLOBAL SHIPPING SOLUTIONS</span>
            </div>

            <!-- Section Title H2 (Standard) -->
            <div class="section-title">
              <h2>Connecting Markets, <span class="text-secondary">Delivering Tomorrow</span></h2>
            </div>

            <!-- Description -->
            <p class="about-ref-paragraph">
              To become the world's most respected, valued, and Innovative organization in the Ship Recycling Industry. To be the world's leading Green Ship Recycler by exploring and utilizing new recycling methods and technologies for greater cost-effectiveness.
            </p>

            <!-- 4 Badges Row -->
            <div class="about-ref-badges">

              <div class="about-badge-card">
                <div class="about-badge-circle">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>
                </div>
                <span class="about-badge-name">Global<br>Reach</span>
              </div>

              <div class="about-badge-sep"></div>

              <div class="about-badge-card">
                <div class="about-badge-circle">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <polyline points="9 12 11 14 15 10"></polyline>
                  </svg>
                </div>
                <span class="about-badge-name">Safe & Secure<br>Transport</span>
              </div>

              <div class="about-badge-sep"></div>

              <div class="about-badge-card">
                <div class="about-badge-circle">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 20a2.4 2.4 0 0 0 2 1 2.4 2.4 0 0 0 2-1 2.4 2.4 0 0 1 2-1 2.4 2.4 0 0 1 2 1 2.4 2.4 0 0 0 2 1 2.4 2.4 0 0 0 2-1 2.4 2.4 0 0 1 2-1 2.4 2.4 0 0 1 2 1 2.4 2.4 0 0 0 2 1 2.4 2.4 0 0 0 2-1"></path>
                    <path d="M4 18L3 12h18l-1 6"></path>
                    <path d="M12 12V3"></path>
                    <path d="M8 7h8"></path>
                  </svg>
                </div>
                <span class="about-badge-name">Efficient<br>Operations</span>
              </div>

              <div class="about-badge-sep"></div>

              <div class="about-badge-card">
                <div class="about-badge-circle">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 18a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2"></path>
                    <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                    <circle cx="12" cy="10" r="2"></circle>
                    <line x1="8" y1="2" x2="8" y2="4"></line>
                    <line x1="16" y1="2" x2="16" y2="4"></line>
                  </svg>
                </div>
                <span class="about-badge-name">Trusted<br>Partnerships</span>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Our Anchors Section -->
  <section id="section-anchors" class="section section-anchors orange-bg">
    <!-- Rich Background Maritime & Ambient Elements -->
    <div class="anchors-bg-ambient" aria-hidden="true"></div>
    <div class="anchors-bg-grid" aria-hidden="true"></div>
    
    <!-- Nautical Compass & Coordinate Watermark -->
    <div class="anchors-bg-compass" aria-hidden="true">
      <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.08)" stroke-width="1.5" stroke-dasharray="4 8" />
        <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.12)" stroke-width="1" />
        <circle cx="300" cy="300" r="140" stroke="rgba(229,145,47,0.09)" stroke-width="1.5" stroke-dasharray="2 6" />
        <circle cx="300" cy="300" r="60" stroke="rgba(229,145,47,0.14)" stroke-width="1" />
        <!-- Compass Crosshairs & Navigation Marks -->
        <line x1="300" y1="10" x2="300" y2="590" stroke="rgba(229,145,47,0.1)" stroke-width="1" stroke-dasharray="6 6" />
        <line x1="10" y1="300" x2="590" y2="300" stroke="rgba(229,145,47,0.1)" stroke-width="1" stroke-dasharray="6 6" />
        <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.25)" />
        <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.18)" />
        <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.18)" />
        <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.18)" />
        <!-- Dial ticks -->
        <g stroke="rgba(229,145,47,0.15)" stroke-width="1">
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

    <!-- Sweeping Maritime Wave Curves -->
    <div class="anchors-bg-curves" aria-hidden="true">
      <svg viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 240 C320 300, 640 180, 960 260 C1200 320, 1360 200, 1440 220" stroke="rgba(229,145,47,0.16)" stroke-width="1.5" />
        <path d="M0 270 C360 320, 720 220, 1080 290 C1280 330, 1380 250, 1440 260" stroke="rgba(229,145,47,0.10)" stroke-width="1.2" stroke-dasharray="8 6" />
        <path d="M0 200 C280 150, 580 260, 920 190 C1180 140, 1340 220, 1440 180" stroke="rgba(229,145,47,0.08)" stroke-width="1" />
      </svg>
    </div>
    <!-- Top Zone: Title (WITH theme-padding) -->
    <div class="theme-padding anchors-top-wrap text-center">
      <div class="about-ref-eyebrow" style="justify-content: center; margin-bottom: 12px;">
        <span class="about-eyebrow-line"></span>
        <span class="about-eyebrow-text">OUR CORE PILLARS</span>
        <span class="about-eyebrow-line"></span>
      </div>
      <div class="section-title js-anchors-title text-center">
        <h2>
          <span class="word-mask"><span class="word-inner">Our</span></span>
          <span class="word-mask"><span class="word-inner text-secondary">Anchors</span></span>
          <span class="word-mask"><span class="word-inner">&amp;</span></span>
          <span class="word-mask"><span class="word-inner">Core</span></span>
          <span class="word-mask"><span class="word-inner">Strengths</span></span>
        </h2>
      </div>
    </div>

    <!-- 4 Cards Fan-Out Showcase with 3D TiltedCard Effect -->
    <div class="anchor-cards-scroll-wrap" id="anchor-cards-scroll-wrap">
      <div class="theme-padding">
        <div class="anchor-cards-fan-outer">
          <div class="columns is-variable is-4-desktop anchor-cards-fan-columns">
            <!-- Card 1: Environment -->
            <div class="column is-3-desktop is-6-tablet is-12-mobile anchor-fan-col">
              <div class="anchor-card anchor-card-pillar anchor-fan-card js-tilted-card card-1" data-card="1">
                <span class="anchor-tilt-tooltip">HKC & EUSRR</span>
                <span class="anchor-card-watermark" aria-hidden="true">01</span>
                <div class="anchor-card-top">
                  <span class="anchor-tag">ENVIRONMENT</span>
                  <span class="anchor-glyph">&#x267B;</span>
                </div>
                <h3 class="anchor-card-title">We Value Our Environment</h3>
                <p class="anchor-card-desc">
                  Accomplishing SOC for HKC from Class NK, AP-Moller Maersk RSRS Compliant, and EUSRR Application filed with CLASSNK, we recognize the key environmental parameters that matter most to ship owners.
                </p>
                <div class="anchor-card-accent-bar"></div>
              </div>
            </div>

            <!-- Card 2: Safety -->
            <div class="column is-3-desktop is-6-tablet is-12-mobile anchor-fan-col">
              <div class="anchor-card anchor-card-pillar anchor-fan-card js-tilted-card card-2" data-card="2">
                <span class="anchor-tilt-tooltip">Zero Harm</span>
                <span class="anchor-card-watermark" aria-hidden="true">02</span>
                <div class="anchor-card-top">
                  <span class="anchor-tag">SAFETY</span>
                  <span class="anchor-glyph">&#x25C7;</span>
                </div>
                <h3 class="anchor-card-title">We Value Safety</h3>
                <p class="anchor-card-desc">
                  Ship Recycling is a labor-intensive industry where safety is non-negotiable. We approach hazard mitigation through systematic preventive measures, stringent yard protocols, and certified safety gear.
                </p>
                <div class="anchor-card-accent-bar"></div>
              </div>
            </div>

            <!-- Card 3: Worker Welfare -->
            <div class="column is-3-desktop is-6-tablet is-12-mobile anchor-fan-col">
              <div class="anchor-card anchor-card-pillar anchor-fan-card js-tilted-card card-3" data-card="3">
                <span class="anchor-tilt-tooltip">Worker Voice</span>
                <span class="anchor-card-watermark" aria-hidden="true">03</span>
                <div class="anchor-card-top">
                  <span class="anchor-tag">WELFARE</span>
                  <span class="anchor-glyph">&#x2661;</span>
                </div>
                <h3 class="anchor-card-title">We Value Worker's Welfare</h3>
                <p class="anchor-card-desc">
                  3 distinct worker committees formed through open elections connect Management, HSE, and our workforce. Monthly meetings review suggestion boxes across yard and dormitories to elevate working conditions.
                </p>
                <div class="anchor-card-accent-bar"></div>
              </div>
            </div>

            <!-- Card 4: Today & Core Values -->
            <div class="column is-3-desktop is-6-tablet is-12-mobile anchor-fan-col">
              <div class="anchor-card anchor-card-values anchor-fan-card js-tilted-card card-4" data-card="4">
                <span class="anchor-tilt-tooltip">Our Values</span>
                <span class="anchor-card-watermark" aria-hidden="true">04</span>
                <div class="anchor-card-top">
                  <span class="anchor-tag">VALUES</span>
                  <span class="anchor-glyph">&#x2726;</span>
                </div>
                <h3 class="anchor-card-title">Today & Core Values</h3>
                <p class="anchor-card-desc">
                  Core Values include Honesty, Excellence, Leading Change, and Respect. With Statement of Compliance (SOC) from Class NK, we cut complex vessels under the highest global safety and eco-standards.
                </p>
                <div class="anchor-card-accent-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Proven Track Record Parallax Stats Section -->
  <section id="section-stats" class="section section-stats p-0">
    <!-- Parallax Background Image with Cinematic Overlay -->
    <div class="stats-parallax-bg-wrap" aria-hidden="true">
      <img src="<?php echo $imagesurl; ?>about/shipyard-crane-ref.jpg" class="stats-parallax-img" alt="Baijnath Melaram Shipyard Operations" loading="lazy">
      <div class="stats-parallax-overlay"></div>
    </div>

    <div class="theme-padding stats-content-wrap">
      <div class="stats-head text-center">
        <div class="about-ref-eyebrow" style="justify-content: center; margin-bottom: 12px;">
          <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
          <span class="about-eyebrow-text" style="color: #e5912f;">PROVEN TRACK RECORD</span>
          <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
        </div>
        <div class="section-title js-stats-title text-center">
          <h2 style="color: #ffffff;">
            <span class="word-mask"><span class="word-inner">Decades</span></span>
            <span class="word-mask"><span class="word-inner">of</span></span>
            <span class="word-mask"><span class="word-inner">Leadership</span></span>
            <span class="word-mask"><span class="word-inner">in</span></span>
            <span class="word-mask"><span class="word-inner text-secondary">Green</span></span>
            <span class="word-mask"><span class="word-inner text-secondary">Recycling</span></span>
          </h2>
        </div>
      </div>

      <div class="columns is-variable is-4-desktop stats-columns-grid">
        <!-- Stat 1 -->
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
          <div class="stats-glass-card">
            <span class="stats-stat-num">
              <span data-target="350" class="stats-stat-count">0</span><span class="stat-plus">+</span>
            </span>
            <span class="stats-stat-label">Ships Recycled</span>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
          <div class="stats-glass-card">
            <span class="stats-stat-num">
              <span data-target="2.5" data-decimals="1" class="stats-stat-count">0</span><span class="stat-unit">M</span>
            </span>
            <span class="stats-stat-label">Tonnes Steel Recycled</span>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
          <div class="stats-glass-card">
            <span class="stats-stat-num">
              <span data-target="5" class="stats-stat-count">0</span><span class="stat-plus">+</span>
            </span>
            <span class="stats-stat-label">Navy Ships Recycled</span>
          </div>
        </div>

        <!-- Stat 4 -->
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
          <div class="stats-glass-card">
            <span class="stats-stat-num">
              <span data-target="2" class="stats-stat-count">0</span>
            </span>
            <span class="stats-stat-label">Submarines Recycled</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Explore Extensions Section -->
  <section id="section-extensions" class="section section-extensions theme-padding">
    <div class="extensions-head-wrap">
      <div class="section-title">
        <h2 class="extensions-heading">
          <span class="ext-word-mask"><span class="ext-word-inner">Explore</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">the</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">various</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">extensions</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">of</span></span><br>
          <span class="ext-heading-accent"><span class="ext-word-mask"><span class="ext-word-inner">Baijnath</span></span> <span class="ext-word-mask"><span class="ext-word-inner">Melaram.</span></span></span>
        </h2>
      </div>
    </div>

    <!-- 4 Columns Showcase Grid -->
    <div class="extensions-columns-grid">
      <!-- Column 01: Alloys -->
      <div class="ext-column-item" data-col="0">
        <div class="ext-col-bg" style="background-image: url('<?php echo $imagesurl; ?>extensions/1.webp');"></div>
        <div class="ext-col-overlay"></div>
        <div class="ext-col-content ext-pos-1">
          <div class="ext-col-badge"><span>01</span></div>
          <h3 class="ext-col-title">Baijnath Melaram Alloys</h3>
          <p class="ext-col-desc">Pioneering circular economy solutions, trading high-grade alloy metals and processed scrap.</p>
        </div>
      </div>

      <!-- Column 02: B Melaram & Sons -->
      <div class="ext-column-item" data-col="1">
        <div class="ext-col-bg" style="background-image: url('<?php echo $imagesurl; ?>extensions/2.webp');"></div>
        <div class="ext-col-overlay"></div>
        <div class="ext-col-content ext-pos-2">
          <div class="ext-col-badge"><span>02</span></div>
          <h3 class="ext-col-title">B Melaram &amp; Sons</h3>
          <p class="ext-col-desc">Strategic trading of finished steel products, acting as a prime importer and stockist across India.</p>
        </div>
      </div>

      <!-- Column 03: Friends Corp -->
      <div class="ext-column-item" data-col="2">
        <div class="ext-col-bg" style="background-image: url('<?php echo $imagesurl; ?>extensions/3.webp');"></div>
        <div class="ext-col-overlay"></div>
        <div class="ext-col-content ext-pos-3">
          <div class="ext-col-badge"><span>03</span></div>
          <h3 class="ext-col-title">Friends Corp.</h3>
          <p class="ext-col-desc">Specialising in alloy metals and scrap sourced from certified green ship recycling operations.</p>
        </div>
      </div>

      <!-- Column 04: BM Educon LLP -->
      <div class="ext-column-item" data-col="3">
        <div class="ext-col-bg" style="background-image: url('<?php echo $imagesurl; ?>extensions/4.webp');"></div>
        <div class="ext-col-overlay"></div>
        <div class="ext-col-content ext-pos-4">
          <div class="ext-col-badge"><span>04</span></div>
          <h3 class="ext-col-title">BM Educon LLP (TED)</h3>
          <p class="ext-col-desc">Toddlers Entertainment Den, educational venture for early learning, creative play, and cognitive growth.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Legacy Section -->
  <section id="section-legacy" class="section section-legacy">
    <div class="legacy-sticky-stage">
      <!-- Full Screen Aerial Drone Image -->
      <div class="legacy-bg-frame">
        <img src="<?php echo $imagesurl; ?>legacy/legacy-banner.webp" alt="Baijnath Melaram Ship Recycling Yard No. 13 Alang" class="legacy-bg-img" />
        <!-- Black Overlay -->
        <div class="legacy-black-overlay"></div>
      </div>

      <!-- Title on top of overlay -->
      <div class="legacy-title-layer theme-padding">
        <div class="section-title has-text-centered">
          <h2 class="white-text">
            <span class="legacy-word-mask"><span class="legacy-word-inner">Our</span></span>
            <span class="legacy-word-mask"><span class="legacy-word-inner">Legacy</span></span>
          </h2>
        </div>
      </div>

      <!-- Inner Scroll Content: Diagonal Pairs (Top-Left & Bottom-Right) -->
      <div class="legacy-inner-scroll-wrap">
        <div class="legacy-diagonal-track">
          <!-- Pair 01: Top-Left & Bottom-Right -->
          <div class="legacy-pair-stage legacy-pair-1">
            <!-- Card 01: Top-Left -->
            <div class="legacy-card legacy-card-top-left">
              <div class="legacy-card-badge">
                <span class="legacy-card-dot"></span>
                <span class="legacy-card-tag">Ship Recycling</span>
              </div>
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="350" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <div class="legacy-card-body">
                <h3 class="legacy-card-title">Ships recycled</h3>
              </div>
            </div>

            <!-- Card 02: Bottom-Right -->
            <div class="legacy-card legacy-card-bottom-right">
              <div class="legacy-card-badge">
                <span class="legacy-card-dot"></span>
                <span class="legacy-card-tag">Experience</span>
              </div>
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="60" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <div class="legacy-card-body">
                <h3 class="legacy-card-title">Years in business</h3>
              </div>
            </div>
          </div>

          <!-- Pair 02: Top-Left & Bottom-Right -->
          <div class="legacy-pair-stage legacy-pair-2">
            <!-- Card 03: Top-Left -->
            <div class="legacy-card legacy-card-top-left">
              <div class="legacy-card-badge">
                <span class="legacy-card-dot"></span>
                <span class="legacy-card-tag">Gross Volume</span>
              </div>
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="2.5" data-decimals="1">0.0</span><span class="legacy-stat-suffix"> Mn</span>
              </div>
              <div class="legacy-card-body">
                <h3 class="legacy-card-title">Tonnes recycled</h3>
              </div>
            </div>

            <!-- Card 04: Bottom-Right -->
            <div class="legacy-card legacy-card-bottom-right">
              <div class="legacy-card-badge">
                <span class="legacy-card-dot"></span>
                <span class="legacy-card-tag">Defense Sector</span>
              </div>
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="5" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <div class="legacy-card-body">
                <h3 class="legacy-card-title">Naval vessels recycled</h3>
              </div>
            </div>
          </div>

          <!-- Pair 03: Top-Left & Bottom-Right -->
          <div class="legacy-pair-stage legacy-pair-3">
            <!-- Card 05: Top-Left -->
            <div class="legacy-card legacy-card-top-left">
              <div class="legacy-card-badge">
                <span class="legacy-card-dot"></span>
                <span class="legacy-card-tag">Green Standards</span>
              </div>
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="5" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <div class="legacy-card-body">
                <h3 class="legacy-card-title">Years of HKC Compliance</h3>
              </div>
            </div>

            <!-- Card 06: Bottom-Right -->
            <div class="legacy-card legacy-card-bottom-right">
              <div class="legacy-card-badge">
                <span class="legacy-card-dot"></span>
                <span class="legacy-card-tag">Offshore Assets</span>
              </div>
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="1" data-decimals="0">0</span>
              </div>
              <div class="legacy-card-body">
                <h3 class="legacy-card-title">FPSOs recycled</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Impact Section (Horizontal Scroll from Right to Left) -->
  <section id="section-impact" class="section section-impact theme-padding">
    <div class="impact-head-wrap">
      <div class="section-title">
        <h2>
          <span class="impact-word-mask"><span class="impact-word-inner">Our</span></span>
          <span class="impact-word-mask"><span class="impact-word-inner">Impact</span></span>
        </h2>
        <p class="impact-tagline">Recycling steel from ships to make new steel saves (Per Tonne):</p>
      </div>
    </div>

    <div class="impact-cards-outer">
      <div class="impact-cards-track">
        <!-- Card 1: Energy -->
        <div class="impact-card">
          <div class="impact-card-count-wrap">
            <span class="impact-stat-count" data-target="68" data-decimals="0">0</span><span class="impact-stat-suffix">%</span>
          </div>
          <div class="impact-card-body">
            <h3 class="impact-card-title">Energy</h3>
          </div>
        </div>

        <!-- Card 2: CO2 -->
        <div class="impact-card">
          <div class="impact-card-count-wrap">
            <span class="impact-stat-count" data-target="1.7" data-decimals="1">0.0</span><span class="impact-stat-suffix"> Mt</span>
          </div>
          <div class="impact-card-body">
            <h3 class="impact-card-title">of Co2</h3>
          </div>
        </div>

        <!-- Card 3: Iron Ore -->
        <div class="impact-card">
          <div class="impact-card-count-wrap">
            <span class="impact-stat-count" data-target="1.4" data-decimals="1">0.0</span><span class="impact-stat-suffix"> Mt</span>
          </div>
          <div class="impact-card-body">
            <h3 class="impact-card-title">of Iron Ore</h3>
          </div>
        </div>

        <!-- Card 4: Coal -->
        <div class="impact-card">
          <div class="impact-card-count-wrap">
            <span class="impact-stat-count" data-target="750" data-decimals="0">0</span><span class="impact-stat-suffix"> Kgs</span>
          </div>
          <div class="impact-card-body">
            <h3 class="impact-card-title">of Coal</h3>
          </div>
        </div>

        <!-- Card 5: Limestone -->
        <div class="impact-card">
          <div class="impact-card-count-wrap">
            <span class="impact-stat-count" data-target="150" data-decimals="0">0</span><span class="impact-stat-suffix"> Kgs</span>
          </div>
          <div class="impact-card-body">
            <h3 class="impact-card-title">Of limestone</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Milestones Achieved & Certificates Section -->
  <section id="section-milestones" class="section section-milestones p-0">
    <!-- Cinematic Landscape Background Image with Overlay -->
    <div class="milestones-bg-wrap">
      <img src="<?php echo $imagesurl; ?>milestones/milestones-bg.jpg" alt="Baijnath Melaram Milestones & Environmental Certifications" class="milestones-bg-img" />
      <div class="milestones-dark-overlay"></div>
      <div class="milestones-crosshair-grid"></div>
    </div>

    <div class="milestones-container theme-padding">
      <div class="milestones-layout-grid">
        <!-- Left Column: Content & Badges -->
        <div class="milestones-left-col">
          <div class="milestones-tag-pill">
            <span>CERTIFICATES & COMPLIANCE</span>
          </div>

          <div class="section-title">
            <h2 class="milestones-heading white-text">
              <span class="ms-word-mask"><span class="ms-word-inner">Milestones</span></span><br>
              <span class="ms-word-mask"><span class="ms-word-inner">Achieved</span></span>
            </h2>
          </div>

          <p class="milestones-subtitle">
            Explore our certificates and documentsâ€”a testament to our excellence, transparency, and responsible practices.
          </p>
        </div>

        <!-- Right Column: Frosted Glass Certificates Card -->
        <div class="milestones-right-col">
          <div class="milestones-glass-card">
            <div class="cert-card-header">
              <div class="cert-header-meta">
                <span class="cert-meta-label">DOCUMENTATION</span>
              </div>
            </div>

            <div class="cert-list">
              <!-- Item 1: COC for EU SSR -->
              <div class="cert-item-row" onclick="openForm('enquire')">
                <div class="cert-info">
                  <span class="cert-issuer">EU SHIP RECYCLING REGULATION</span>
                  <h4 class="cert-name">COC (Certificate of Compliance) for EU SSR</h4>
                </div>
                <div class="cert-action-wrap">
                  <a href="<?php echo $siteurl; ?>download/brochure.pdf" download class="cert-download-btn" title="Download COC Certificate" onclick="event.stopPropagation();">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
              </div>

              <!-- Item 2: SOC for HKC -->
              <div class="cert-item-row" onclick="openForm('enquire')">
                <div class="cert-info">
                  <span class="cert-issuer">IMO HONG KONG CONVENTION</span>
                  <h4 class="cert-name">SOC (Statement of Compliance) for HKC</h4>
                </div>
                <div class="cert-action-wrap">
                  <a href="<?php echo $siteurl; ?>download/brochure.pdf" download class="cert-download-btn" title="Download SOC Certificate" onclick="event.stopPropagation();">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
              </div>

              <!-- Item 3: SCI's Certification -->
              <div class="cert-item-row" onclick="openForm('enquire')">
                <div class="cert-info">
                  <span class="cert-issuer">SHIPPING CORPORATION OF INDIA</span>
                  <h4 class="cert-name">SCI's Certification: Advance Fire Fighting</h4>
                </div>
                <div class="cert-action-wrap">
                  <a href="<?php echo $siteurl; ?>download/brochure.pdf" download class="cert-download-btn" title="Download SCI Certificate" onclick="event.stopPropagation();">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
              </div>

              <!-- Item 4: LLOYD's Certification -->
              <div class="cert-item-row" onclick="openForm('enquire')">
                <div class="cert-info">
                  <span class="cert-issuer">LLOYD'S REGISTER</span>
                  <h4 class="cert-name">LLOYD's Certification: Hazardous Waste Handling, Oil Spillage Gas Cutting</h4>
                </div>
                <div class="cert-action-wrap">
                  <a href="<?php echo $siteurl; ?>download/brochure.pdf" download class="cert-download-btn" title="Download Lloyd's Certificate" onclick="event.stopPropagation();">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
              </div>

              <!-- Item 5: ISO 9000, 14000, 45000 -->
              <div class="cert-item-row" onclick="openForm('enquire')">
                <div class="cert-info">
                  <span class="cert-issuer">MANAGEMENT & SAFETY SYSTEMS</span>
                  <h4 class="cert-name">ISO 9000, ISO 14000, ISO 45000</h4>
                </div>
                <div class="cert-action-wrap">
                  <a href="<?php echo $siteurl; ?>download/brochure.pdf" download class="cert-download-btn" title="Download ISO Certificates" onclick="event.stopPropagation();">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
              </div>

              <!-- Item 6: ISO 30000 -->
              <div class="cert-item-row" onclick="openForm('enquire')">
                <div class="cert-info">
                  <span class="cert-issuer">SHIPS & MARINE TECHNOLOGY</span>
                  <h4 class="cert-name">ISO 30000 (Ship Recycling Management)</h4>
                </div>
                <div class="cert-action-wrap">
                  <a href="<?php echo $siteurl; ?>download/brochure.pdf" download class="cert-download-btn" title="Download ISO 30000 Certificate" onclick="event.stopPropagation();">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <script>
    if (document.querySelector('#main-slider')) {
      new Splide('#main-slider', {
        gap: '0px',
        type: 'fade',
        autoplay: true,
        arrows: false,
        perPage: 1,
        pagination: false,
        pauseOnHover: false,
        speed: 3000,
        lazyLoad: 'nearby',
      }).mount();
    }

    ,
        breakpoints: {
          1400: {
            perPage: 3,
            gap: '20px',
          },
          1024: {
            perPage: 2.2,
            gap: '16px',
          },
          768: {
            perPage: 1.3,
            gap: '14px',
          },
        },
      }).mount(window.splide?.Extensions || {});
    }

    if (document.querySelector('#partners-slider')) {
      new Splide('#partners-slider', {
        type: 'loop',
        drag: 'free',
        focus: false,
        arrows: false,
        pagination: false,
        perPage: 5,
        gap: '40px',
        autoScroll: {
          speed: 1.0,
          pauseOnHover: true,
          pauseOnFocus: false,
        },
        breakpoints: {
          1400: {
            perPage: 4.5,
            gap: '32px',
          },
          1024: {
            perPage: 3.5,
            gap: '24px',
          },
          768: {
            perPage: 2.5,
            gap: '20px',
          },
          480: {
            perPage: 2,
            gap: '16px',
          },
        },
      }).mount(window.splide?.Extensions || {});
    }
  </script>
  <?php echo $block_body_end; ?>
</body>

</html>