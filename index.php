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

  <section id="section-banner" class="section-banner">
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
  <section id="section-partners" class="section section-partners white-bg section-stacked theme-padding">

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



  <section id="section-about-us" class="section section-about-us white-bg section-stacked pb-0">
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
      <div class="columns is-vcentered is-variable about-columns-layout">

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
        <div class="column is-12-mobile is-12-tablet is-6-widescreen is-6-desktop about-col-content">
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
  <section id="section-anchors" class="section section-anchors white-bg section-stacked">
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




  <!-- Telha Clarke Inspired Dynamic Ship Showcase Section (Sticky Width-Shrink Scrub) -->
  <section id="section-ship-showcase" class="section section-ship-showcase section-stacked">
    <div class="ship-showcase-stage">
      <div class="ship-showcase-container">

        <!-- Left Editorial Content Column (Revealed on Scrub) -->
        <div class="ship-showcase-left-col">

          <!-- Nautical Compass Element Centered in Left Column -->
          <div class="ship-showcase-bg-compass" aria-hidden="true">
            <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.18)" stroke-width="1.5" stroke-dasharray="4 8" />
              <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.22)" stroke-width="1.2" />
              <circle cx="300" cy="300" r="140" stroke="rgba(229,145,47,0.18)" stroke-width="1.5" stroke-dasharray="2 6" />
              <circle cx="300" cy="300" r="60" stroke="rgba(229,145,47,0.25)" stroke-width="1.2" />
              <!-- Compass Crosshairs & Navigation Marks -->
              <line x1="300" y1="10" x2="300" y2="590" stroke="rgba(229,145,47,0.2)" stroke-width="1" stroke-dasharray="6 6" />
              <line x1="10" y1="300" x2="590" y2="300" stroke="rgba(229,145,47,0.2)" stroke-width="1" stroke-dasharray="6 6" />
              <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.35)" />
              <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.28)" />
              <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.28)" />
              <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.28)" />
              <g stroke="rgba(229,145,47,0.25)" stroke-width="1">
                <line x1="300" y1="70" x2="300" y2="85" />
                <line x1="300" y1="515" x2="300" y2="530" />
                <line x1="70" y1="300" x2="85" y2="300" />
                <line x1="515" y1="300" x2="530" y2="300" />
                <line x1="137" y1="137" x2="148" y2="148" />
                <line x1="463" y1="463" x2="452" y2="452" />
                <line x1="463" y1="137" x2="452" y2="148" />
                <line x1="137" y1="463" x2="148" y2="452" />
              </g>
              <circle cx="300" cy="300" r="4" fill="rgba(229,145,47,0.4)" />
            </svg>
          </div>

          <div class="ship-showcase-content-inner">
            <div class="about-ref-eyebrow ship-eyebrow mb-2">
              <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
              <span class="about-eyebrow-text" style="color: #e5912f;">PROVEN TRACK RECORD</span>
              <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
            </div>

            <h2 class="ship-showcase-heading">
              <span class="ship-word-mask"><span class="ship-word-inner">Decades</span></span>
              <span class="ship-word-mask"><span class="ship-word-inner">of</span></span>
              <span class="ship-word-mask"><span class="ship-word-inner">Leadership</span></span>
              <span class="ship-word-mask"><span class="ship-word-inner">in</span></span>
              <span class="ship-word-mask"><span class="ship-word-inner" style="color: #e5912f;">Green</span></span>
              <span class="ship-word-mask"><span class="ship-word-inner" style="color: #e5912f;">Recycling</span></span>
            </h2>

            <p class="ship-showcase-desc">
              Pioneering sustainable maritime decommissioning, ethical steel reclamation, and world-class environmental compliance at Alang Yard 129.
            </p>

            <div class="ship-showcase-stats-grid">
              <div class="ship-stat-card">
                <div class="ship-stat-num">
                  <span class="ship-stat-count" data-target="350">0</span><span class="ship-stat-plus">+</span>
                </div>
                <div class="ship-stat-label">Ships Recycled</div>
              </div>

              <div class="ship-stat-card">
                <div class="ship-stat-num">
                  <span class="ship-stat-count" data-target="2.5" data-decimals="1">0</span><span class="ship-stat-unit">M</span>
                </div>
                <div class="ship-stat-label">Tonnes Steel Recycled</div>
              </div>

              <div class="ship-stat-card">
                <div class="ship-stat-num">
                  <span class="ship-stat-count" data-target="5">0</span><span class="ship-stat-plus">+</span>
                </div>
                <div class="ship-stat-label">Navy Ships Recycled</div>
              </div>

              <div class="ship-stat-card">
                <div class="ship-stat-num">
                  <span class="ship-stat-count" data-target="2">0</span>
                </div>
                <div class="ship-stat-label">Submarines Recycled</div>
              </div>
            </div>


          </div>
        </div>

        <!-- Right Dynamic Shrinking Ship Image Column -->
        <div class="ship-showcase-right-col">
          <div class="ship-showcase-image-frame">
            <img src="<?php echo $imagesurl; ?>about/ship-yard-showcase.jpg?v=<?php echo $version; ?>" alt="Vessel Recycling Operations - Baijnath Melaram" class="ship-showcase-img" />
            <div class="ship-showcase-img-overlay"></div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Our Capabilities Section (Telha Clarke Inspired Sticky Showcase) -->
  <section id="section-capabilities" class="section section-capabilities section-stacked">

    <!-- Top Large Editorial Statement Quote -->
    <div class="cap-statement-wrapper">
      <div class="cap-statement-inner">
        <h2 class="cap-statement-text">
          <span class="cap-quote-mark">&ldquo;</span><span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">Each</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">project</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">reflects</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">the</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">vision</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">and</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">expertise</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">of</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">our</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">team,</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">transforming</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">maritime</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">giants</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">into</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">sustainable</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">green</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">steel</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">with</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">precision</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">and</span></span> <span class="cap-stmt-word-mask"><span class="cap-stmt-word-inner">purpose.</span></span><span class="cap-quote-mark">&rdquo;</span>
        </h2>
      </div>
    </div>

    <!-- 3-Column Showcase Track -->
    <div class="cap-three-col-wrapper">
      <div class="columns">

        <!-- Left Column: Section Indicator (Sticky) -->
        <div class="column is-3-widescreen is-3-desktop is-12-tablet is-12-mobile cap-col-meta">
          <div class="cap-meta-header-wrap">
            <span class="cap-meta-index">01</span>
            <span class="cap-meta-label">OUR CAPABILITIES</span>
          </div>

          <!-- Nautical Compass in Left Column -->
          <div class="cap-left-compass" aria-hidden="true">
            <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="300" cy="300" r="280" stroke="rgba(229,145,47,0.22)" stroke-width="1.5" stroke-dasharray="4 8" />
              <circle cx="300" cy="300" r="220" stroke="rgba(229,145,47,0.28)" stroke-width="1.2" />
              <circle cx="300" cy="300" r="140" stroke="rgba(229,145,47,0.22)" stroke-width="1.5" stroke-dasharray="2 6" />
              <circle cx="300" cy="300" r="60" stroke="rgba(229,145,47,0.32)" stroke-width="1.2" />
              <!-- Compass Crosshairs & Navigation Marks -->
              <line x1="300" y1="10" x2="300" y2="590" stroke="rgba(229,145,47,0.25)" stroke-width="1" stroke-dasharray="6 6" />
              <line x1="10" y1="300" x2="590" y2="300" stroke="rgba(229,145,47,0.25)" stroke-width="1" stroke-dasharray="6 6" />
              <path d="M300 20 L310 50 L300 42 L290 50 Z" fill="rgba(229,145,47,0.45)" />
              <path d="M580 300 L550 310 L558 300 L550 290 Z" fill="rgba(229,145,47,0.35)" />
              <path d="M300 580 L290 550 L300 558 L310 550 Z" fill="rgba(229,145,47,0.35)" />
              <path d="M20 300 L50 290 L42 300 L50 310 Z" fill="rgba(229,145,47,0.35)" />
              <!-- Dial ticks -->
              <g stroke="rgba(229,145,47,0.28)" stroke-width="1">
                <line x1="300" y1="70" x2="300" y2="85" />
                <line x1="300" y1="515" x2="300" y2="530" />
                <line x1="70" y1="300" x2="85" y2="300" />
                <line x1="515" y1="300" x2="530" y2="300" />
                <line x1="137" y1="137" x2="148" y2="148" />
                <line x1="463" y1="463" x2="452" y2="452" />
                <line x1="463" y1="137" x2="452" y2="148" />
                <line x1="137" y1="463" x2="148" y2="452" />
              </g>
              <circle cx="300" cy="300" r="4" fill="rgba(229,145,47,0.55)" />
            </svg>
          </div>
        </div>

        <!-- Center Column: Vertical Capability List (Scrolls) -->
        <div class="column is-5-widescreen is-5-desktop is-7-tablet is-12-mobile cap-col-list">
          <ul class="cap-items-list">
            <li class="cap-item is-active" data-index="0">
              <span class="cap-item-text">Bulk Carrier</span>
            </li>
            <li class="cap-item" data-index="1">
              <span class="cap-item-text">General Cargo</span>
            </li>
            <li class="cap-item" data-index="2">
              <span class="cap-item-text">Container</span>
            </li>
            <li class="cap-item" data-index="3">
              <span class="cap-item-text">Tanker</span>
            </li>
            <li class="cap-item" data-index="4">
              <span class="cap-item-text">Roro &amp; Crew</span>
            </li>
            <li class="cap-item" data-index="5">
              <span class="cap-item-text">FPSO</span>
            </li>
            <li class="cap-item" data-index="6">
              <span class="cap-item-text">Military</span>
            </li>
            <li class="cap-item" data-index="7">
              <span class="cap-item-text">Research Vessel</span>
            </li>
            <li class="cap-item" data-index="8">
              <span class="cap-item-text">Others</span>
            </li>
          </ul>
        </div>

        <!-- Right Column: Vessel Photos Stack (Sticky) -->
        <div class="column is-4-widescreen is-4-desktop is-5-tablet is-12-mobile cap-col-visual">
          <div class="cap-sticky-visual-holder">
            <div class="cap-visual-frame">
              <img src="<?php echo $imagesurl; ?>capabilities/bulk-carrier.jpg" alt="Bulk Carrier" class="cap-visual-img is-active" data-index="0" />
              <img src="<?php echo $imagesurl; ?>capabilities/general-cargo.jpg" alt="General Cargo" class="cap-visual-img" data-index="1" />
              <img src="<?php echo $imagesurl; ?>capabilities/container.jpg" alt="Container" class="cap-visual-img" data-index="2" />
              <img src="<?php echo $imagesurl; ?>capabilities/tanker.jpg" alt="Tanker" class="cap-visual-img" data-index="3" />
              <img src="<?php echo $imagesurl; ?>capabilities/roro-crew.jpg" alt="Roro &amp; Crew" class="cap-visual-img" data-index="4" />
              <img src="<?php echo $imagesurl; ?>capabilities/fpso.jpg" alt="FPSO" class="cap-visual-img" data-index="5" />
              <img src="<?php echo $imagesurl; ?>capabilities/military.jpg" alt="Military" class="cap-visual-img" data-index="6" />
              <img src="<?php echo $imagesurl; ?>capabilities/research-vessel.jpg" alt="Research Vessel" class="cap-visual-img" data-index="7" />
              <img src="<?php echo $imagesurl; ?>capabilities/others.jpg" alt="Others" class="cap-visual-img" data-index="8" />
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

  </section>

  <!-- Explore Extensions Section -->
  <section id="section-extensions" class="section section-extensions cream-bg section-stacked theme-padding">
    <div class="extensions-head-wrap has-text-centered">
      <div class="about-ref-eyebrow mb-2" style="justify-content: center; display: inline-flex;">
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
        <span class="about-eyebrow-text" style="color: #e5912f;">OUR EXTENSIONS</span>
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
      </div>
      <div class="section-title has-text-centered">
        <h2 class="extensions-heading has-text-centered">
          <span class="ext-word-mask"><span class="ext-word-inner">Explore</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">the</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">various</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">extensions</span></span>
          <span class="ext-word-mask"><span class="ext-word-inner">of</span></span><br>
          <span class="ext-heading-accent" style="color: #e5912f;"><span class="ext-word-mask"><span class="ext-word-inner">Baijnath</span></span> <span class="ext-word-mask"><span class="ext-word-inner">Melaram.</span></span></span>
        </h2>
      </div>
    </div>

    <!-- Extensions Alternating 2-Column Showcase -->
    <!-- Extensions Alternating 2-Column Showcase -->
    <div class="extensions-rows-container">

      <!-- Item 01: Left Image + Right Content -->
      <div class="ext-row-item">
        <div class="columns is-vcentered is-variable is-6">
          <div class="column is-6 ext-col-media">
            <div class="ext-image-card">
              <img src="<?php echo $imagesurl; ?>extensions/1.jpg?v=<?php echo $version; ?>" alt="Baijnath Melaram Alloys Pvt Ltd" class="ext-card-img" />
              <div class="ext-image-overlay"></div>
              <div class="ext-image-curtain"></div>
            </div>
          </div>
          <div class="column is-6 ext-col-info">
            <div class="ext-info-card">
              <div class="ext-info-accent-line"></div>
              <h3 class="ext-item-title"><span class="ext-title-word-mask"><span class="ext-title-word-inner">Baijnath</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Melaram</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Alloys</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Pvt</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Ltd</span></span></h3>
              <p class="ext-item-desc">With over 50 years of experience in scrap processing, primarily ship recycling, Baijnath Melaram is thrilled to introduce its newly established sister company, Baijnath Melaram Alloys Pvt Ltd. Our new recycling plant, located in Mamsa, Bhavnagar, Gujarat, boasts an 18,000 MTPA production capacity. Committed to sustainability and innovative recycling solutions, we aim to create a circular economy that benefits both our clients and the environment.</p>
              <div class="ext-item-btn-wrap">
                <a href="<?php echo $siteurl; ?>alloy-manufacturing.php" class="ext-item-btn"><span>Visit <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 02: Left Content + Right Image -->
      <div class="ext-row-item is-reversed">
        <div class="columns is-vcentered is-variable is-6">
          <div class="column is-6 ext-col-info">
            <div class="ext-info-card">
              <div class="ext-info-accent-line"></div>
              <h3 class="ext-item-title"><span class="ext-title-word-mask"><span class="ext-title-word-inner">B</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Melaram</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">&amp;</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Sons</span></span></h3>
              <p class="ext-item-desc">We originally started as a ship-breaking company located in Mumbai. However, in light of rising operational expenses and the industry's diminishing feasibility, we made a strategic shift in 2008 and transitioned into the trading of finished steel products.</p>
              <div class="ext-item-btn-wrap">
                <a href="javascript:void(0)" class="ext-item-btn" onclick="openForm('enquire')"><span>Visit <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg></span></a>
              </div>
            </div>
          </div>
          <div class="column is-6 ext-col-media">
            <div class="ext-image-card">
              <img src="<?php echo $imagesurl; ?>extensions/2.jpg?v=<?php echo $version; ?>" alt="B Melaram & Sons" class="ext-card-img" />
              <div class="ext-image-overlay"></div>
              <div class="ext-image-curtain"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 03: Left Image + Right Content -->
      <div class="ext-row-item">
        <div class="columns is-vcentered is-variable is-6">
          <div class="column is-6 ext-col-media">
            <div class="ext-image-card">
              <img src="<?php echo $imagesurl; ?>extensions/3.jpg?v=<?php echo $version; ?>" alt="Friends Corp." class="ext-card-img" />
              <div class="ext-image-overlay"></div>
              <div class="ext-image-curtain"></div>
            </div>
          </div>
          <div class="column is-6 ext-col-info">
            <div class="ext-info-card">
              <div class="ext-info-accent-line"></div>
              <h3 class="ext-item-title"><span class="ext-title-word-mask"><span class="ext-title-word-inner">Friends</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Corp.</span></span></h3>
              <p class="ext-item-desc">We are a scrap trading firm headquartered in Bhavnagar, primarily specialising in the trade of alloy metals and various grades of scrap sourced from ship-breaking operations.</p>
              <div class="ext-item-btn-wrap">
                <a href="<?php echo $siteurl; ?>secondary-scrap-trading.php" class="ext-item-btn"><span>Visit <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 04: Left Content + Right Image -->
      <div class="ext-row-item is-reversed">
        <div class="columns is-vcentered is-variable is-6">
          <div class="column is-6 ext-col-info">
            <div class="ext-info-card">
              <div class="ext-info-accent-line"></div>
              <h3 class="ext-item-title"><span class="ext-title-word-mask"><span class="ext-title-word-inner">BM</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">Educon</span></span> <span class="ext-title-word-mask"><span class="ext-title-word-inner">LLP</span></span></h3>
              <p class="ext-item-desc">Toddlers Entertainment Den (TED), an educational venture by BM Educon LLP, is a Play Arena &amp; a Toy Library. It is a world where laughter echoes, creativity flows, and imagination knows no bounds. Our fully air conditioned indoor play area boasts of a myriad of activities and attractions that cater to children\'s physical, cognitive, and social development.</p>
              <div class="ext-item-btn-wrap">
                <a href="javascript:void(0)" class="ext-item-btn" onclick="openForm('enquire')"><span>Visit <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg></span></a>
              </div>
            </div>
          </div>
          <div class="column is-6 ext-col-media">
            <div class="ext-image-card">
              <img src="<?php echo $imagesurl; ?>extensions/4.webp?v=<?php echo $version; ?>" alt="BM Educon LLP (TED)" class="ext-card-img" />
              <div class="ext-image-overlay"></div>
              <div class="ext-image-curtain"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Our Legacy Section (Sticky Split Showcase - Left Sticky / Right Cards Stack) -->
  <section id="section-legacy" class="section section-legacy section-stacked">
    <!-- Pinned Background Backdrop (Fixed in viewport during section scroll, zero image movement) -->
    <div class="legacy-bg-pin-wrap" aria-hidden="true">
      <div class="legacy-bg-media">
        <img src="<?php echo $imagesurl; ?>legacy/legacy-custom-bg.webp?v=<?php echo $version; ?>" alt="Our Legacy Background" class="legacy-bg-img" />
        <div class="legacy-bg-overlay"></div>
      </div>

      <!-- Ambient Glow / Background Gradient Effects -->
      <div class="legacy-ambient-glow">
        <div class="legacy-glow-blob legacy-glow-1"></div>
        <div class="legacy-glow-blob legacy-glow-2"></div>
        <div class="legacy-grid-overlay"></div>
      </div>
    </div>

    <div class="container legacy-content-wrap">
      <div class="columns is-variable is-8 legacy-columns">

        <!-- Left Column: Sticky Title -->
        <div class="column is-5-desktop is-12-tablet legacy-col-left">
          <div class="legacy-sticky-content">
            <h2 class="legacy-main-heading">
              <span class="legacy-word-mask"><span class="legacy-word-inner">OUR</span></span><br>
              <span class="legacy-word-mask"><span class="legacy-word-inner text-secondary">LEGACY</span></span>
            </h2>
          </div>
        </div>

        <!-- Right Column: Glass Counter Cards Stack -->
        <div class="column is-7-desktop is-12-tablet legacy-col-right">
          <div class="legacy-cards-stack">
            <!-- Card 01: Ships Recycled -->
            <div class="legacy-stack-card">
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="350" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <h3 class="legacy-card-title">Ships recycled</h3>
            </div>

            <!-- Card 02: Years in Business -->
            <div class="legacy-stack-card">
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="60" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <h3 class="legacy-card-title">Years in business</h3>
            </div>

            <!-- Card 03: Tonnes Recycled -->
            <div class="legacy-stack-card">
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="2.5" data-decimals="1">0.0</span><span class="legacy-stat-suffix"> Mn</span>
              </div>
              <h3 class="legacy-card-title">Tonnes recycled</h3>
            </div>

            <!-- Card 04: Naval Vessels Recycled -->
            <div class="legacy-stack-card">
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="5" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <h3 class="legacy-card-title">Naval vessels recycled</h3>
            </div>

            <!-- Card 05: Years of HKC Compliance -->
            <div class="legacy-stack-card">
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="5" data-decimals="0">0</span><span class="legacy-stat-suffix">+</span>
              </div>
              <h3 class="legacy-card-title">Years of HKC Compliance</h3>
            </div>

            <!-- Card 06: FPSOs Recycled -->
            <div class="legacy-stack-card">
              <div class="legacy-card-counter-wrap">
                <span class="legacy-stat-count" data-target="1" data-decimals="0">0</span>
              </div>
              <h3 class="legacy-card-title">FPSOs recycled</h3>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Our Impact Section (Horizontal Scroll from Right to Left) -->
  <section id="section-impact" class="section section-impact cream-bg section-stacked theme-padding">
    <!-- Square Grid Background Pattern in the middle / background -->
    <div class="impact-bg-grid" aria-hidden="true"></div>

    <div class="impact-head-wrap">
      <div class="about-ref-eyebrow mb-2">
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
        <span class="about-eyebrow-text" style="color: #e5912f;">OUR IMPACT</span>
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
      </div>
      <div class="section-title">
        <h2>
          <span class="impact-word-mask"><span class="impact-word-inner">Our</span></span>
          <span class="impact-word-mask"><span class="impact-word-inner text-secondary">Impact</span></span>
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
  <section id="section-milestones" class="section section-milestones section-stacked p-0">
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