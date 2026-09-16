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

    <!-- Banner Content Overlay Directly on Video -->
    <div class="banner-overlay-wrap">
      <div class="theme-padding">
        <div class="banner-title-center text-center">
          <div class="section-title">
            <h1 class="banner-title">
              <span class="banner-word-mask"><span class="banner-word-inner text-secondary">Green</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Recycling</span></span><br>
              <span class="banner-word-mask"><span class="banner-word-inner">To</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Navigate</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Future</span></span>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="section-about-us" class="section section-about-us">
    <div class="theme-padding pr-0">
      <div class="columns is-multiline is-variable is-6 is-vcentered">
        <div class="column is-12-mobile is-12-tablet is-6-desktop is-4-widescreen">
          <div class="about-desc">
            <p>
              To become the world’s most respected, valued, and Innovative organization in the <span class="about-inline-pill"><img src="<?php echo $imagesurl; ?>banner/banner-1-xl.webp" alt="Ship Recycling Yard"></span> Ship Recycling Industry. To be the world’s leading Green Ship Recycler <span class="about-inline-pill"><img src="<?php echo $imagesurl; ?>banner/banner-3-xl.webp" alt="Sustainable Technologies"></span> by exploring and utilizing new recycling methods and technologies for greater cost-effectiveness.
            </p>
          </div>
        </div>
        <div class="column is-12-mobile is-12-tablet is-6-desktop is-8-widescreen">

          <div class="about-ship-wrapper">
            <img src="<?php echo $imagesurl; ?>about/ship-transparent.webp" class="about-ship-img" alt="Green Ship Recycling" width="1463" height="387">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Anchors Section -->
  <section id="section-anchors" class="section section-anchors p-0">
    <!-- Top Zone: Title & Counters (WITH theme-padding) -->
    <div class="theme-padding anchors-top-wrap">
      <div class="section-title js-anchors-title">
        <h2>
          <span class="anchor-word-mask"><span class="anchor-word-inner">Our</span></span>
          <span class="anchor-word-mask"><span class="anchor-word-inner">Anchors</span></span>
        </h2>
      </div>

      <div class="anchors-subgrid-stats">
        <div class="anchor-card anchor-card-stat">
          <span class="anchor-stat-num">
            <span data-target="350" data-purecounter-end="350" class="anchor-stat-count">0</span><span class="stat-plus">+</span>
          </span>
          <span class="anchor-stat-label">Ships Recycled</span>
        </div>
        <div class="anchor-card anchor-card-stat">
          <span class="anchor-stat-num">
            <span data-target="2.5" data-decimals="1" data-purecounter-end="2.5" data-purecounter-decimals="1" class="anchor-stat-count">0</span><span class="stat-unit">M</span>
          </span>
          <span class="anchor-stat-label">Tonnes Steel Recycled</span>
        </div>
        <div class="anchor-card anchor-card-stat">
          <span class="anchor-stat-num">
            <span data-target="5" data-purecounter-end="5" class="anchor-stat-count">0</span><span class="stat-plus">+</span>
          </span>
          <span class="anchor-stat-label">Navy Ships Recycled</span>
        </div>
        <div class="anchor-card anchor-card-stat">
          <span class="anchor-stat-num">
            <span data-target="2" data-purecounter-end="2" class="anchor-stat-count">0</span>
          </span>
          <span class="anchor-stat-label">Submarines Recycled</span>
        </div>
      </div>
    </div>

    <!-- Video Showcase (NO theme-padding, Full Width, Pinned until shrunk) -->
    <div class="anchor-video-pin-wrap" id="anchor-video-pin-wrap">
      <div class="anchor-video-scaler">
        <video class="anchor-bg-video" autoplay loop muted playsinline preload="auto">
          <source src="<?php echo $imagesurl; ?>anchor/anchor-video.mp4" type="video/mp4">
        </video>
      </div>
    </div>

    <!-- 4 Cards Horizontal Showcase (WITH theme-padding) -->
    <div class="anchor-cards-scroll-wrap" id="anchor-cards-scroll-wrap">
      <div class="theme-padding">
        <div class="anchor-cards-horizontal-outer">
          <div class="anchor-cards-horizontal-track">
            <!-- Card 1: Environment -->
            <div class="anchor-card anchor-card-pillar anchor-card-slide">
              <div class="anchor-card-top">
                <span class="anchor-tag">+ 01 ENVIRONMENT</span>
                <span class="anchor-glyph">&#x267B;</span>
              </div>
              <h3 class="anchor-card-title">We Value Our Environment</h3>
              <p class="anchor-card-desc">
                Baijnath Melaram trusts that by accomplishing a SOC for HKC from Class NK, we have made a critical stride towards moving to the perfect Green Ship Recycling Yard. Accomplishing AP-Moller Maersk RSRS Compliant and EUSRR Application filed with CLASSNK, we recognize the key environmental parameters that matter most to ship owners.
              </p>
            </div>

            <!-- Card 2: Safety -->
            <div class="anchor-card anchor-card-pillar anchor-card-slide">
              <div class="anchor-card-top">
                <span class="anchor-tag">+ 02 SAFETY</span>
                <span class="anchor-glyph">&#x25C7;</span>
              </div>
              <h3 class="anchor-card-title">We Value Safety</h3>
              <p class="anchor-card-desc">
                Ship Recycling is a labor-intensive industry where safety is non-negotiable. At Baijnath Melaram, we scientifically approach hazard mitigation through systematic preventive measures, stringent yard protocols, and certified safety gear for every single worker.
              </p>
            </div>

            <!-- Card 3: Worker Welfare -->
            <div class="anchor-card anchor-card-pillar anchor-card-slide">
              <div class="anchor-card-top">
                <span class="anchor-tag">+ 03 WELFARE</span>
                <span class="anchor-glyph">&#x2661;</span>
              </div>
              <h3 class="anchor-card-title">We Value Worker's Welfare</h3>
              <p class="anchor-card-desc">
                3 distinct worker committees formed through open elections connect Management, HSE, and our workforce. Meeting monthly to open suggestion and complaint boxes placed across yard and dormitories, we proactively resolve concerns and continuously elevate working conditions.
              </p>
            </div>

            <!-- Card 4: Today & Core Values -->
            <div class="anchor-card anchor-card-values anchor-card-slide">
              <div class="anchor-card-top">
                <span class="anchor-tag">+ TODAY & VALUES</span>
              </div>
              <h3 class="anchor-card-title">Today</h3>
              <p class="anchor-card-desc">
                Baijnath Melaram’s Core Values include Honesty, Excellence, Leading Change, and Respect. With our Statement of Compliance (SOC) from Class NK, we have successfully cut complex vessels under the highest global safety and eco-standards.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Capabilities Section -->
  <section id="section-capabilities" class="section section-capabilities theme-padding">
    <div class="capabilities-head-wrap">
      <div class="section-title js-capabilities-title">
        <h2>
          <span class="cap-word-mask"><span class="cap-word-inner">Our</span></span>
          <span class="cap-word-mask"><span class="cap-word-inner">Capabilities</span></span>
        </h2>
        <p class="cap-tagline">Comprehensive expertise across diverse maritime and offshore vessel classes.</p>
      </div>
    </div>

    <div id="capabilities-slider" class="splide capabilities-slider">
      <div class="splide__track">
        <ul class="splide__list">
          <!-- Item 1: Bulk Carrier -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M2 17l2 4h16l2-4H2z"></path>
                  <path d="M4 17V9a1 1 0 0 1 1-1h4v9"></path>
                  <path d="M13 11v6"></path>
                  <path d="M17 11v6"></path>
                  <line x1="2" y1="13" x2="22" y2="13"></line>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">Bulk Carrier</h3>
                <p class="capability-desc">High-capacity dry bulk transport and sustainable green recycling solutions.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 2: General Cargo -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="8" height="8" rx="1.5"></rect>
                  <rect x="13" y="3" width="8" height="8" rx="1.5"></rect>
                  <rect x="3" y="13" width="8" height="8" rx="1.5"></rect>
                  <rect x="13" y="13" width="8" height="8" rx="1.5"></rect>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">General Cargo</h3>
                <p class="capability-desc">Versatile multi-purpose freight vessels handled with high precision and safety.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 3: Container -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                  <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                  <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">Container</h3>
                <p class="capability-desc">Global standard container carriers processed under Class NK certified protocols.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 4: Tanker -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">Tanker</h3>
                <p class="capability-desc">Crude, product, and chemical tankers managed with zero-pollution standards.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 5: Roro & Crew -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 2.1l4 4-4 4"></path>
                  <path d="M3 12.2v-2a4 4 0 0 1 4-4h14"></path>
                  <path d="M7 21.9l-4-4 4-4"></path>
                  <path d="M21 11.8v2a4 4 0 0 1-4 4H3"></path>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">Roro &amp; Crew</h3>
                <p class="capability-desc">Specialized roll-on/roll-off vehicle vessels and offshore crew transport carriers.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 6: FPSO -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 22h16"></path>
                  <path d="M12 2v20"></path>
                  <path d="M7 16h10"></path>
                  <path d="M9 10h6"></path>
                  <path d="M6 6l6-4 6 4"></path>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">FPSO</h3>
                <p class="capability-desc">Large floating production storage and offloading offshore structure handling.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 7: Military -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">Military</h3>
                <p class="capability-desc">Naval and defense vessels dismantled with maximum security and compliance.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 8: Research Vessel -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">Research Vessel</h3>
                <p class="capability-desc">High-tech oceanographic and hydrographic surveying vessels processed safely.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!-- Item 9: Others -->
          <li class="splide__slide">
            <div class="capability-card" onclick="openForm('enquire')">
              <div class="capability-icon-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="9" cy="9" r="6"></circle>
                  <circle cx="15" cy="15" r="6"></circle>
                </svg>
              </div>
              <div class="capability-bottom">
                <h3 class="capability-name">Others</h3>
                <p class="capability-desc">Specialized tugs, barges, offshore utility craft, and custom maritime assets.</p>
                <div class="capability-link">
                  <span>View List of Ships</span>
                  <svg class="cap-arrow" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </li>
        </ul>
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

  <!-- Our Partners Section -->
  <section id="section-partners" class="section section-partners theme-padding pt-0">
    <div class="partners-head-wrap">
      <div class="section-title has-text-centered">
        <h2>
          <span class="partner-word-mask"><span class="partner-word-inner">Our</span></span>
          <span class="partner-word-mask"><span class="partner-word-inner">Partners</span></span>
        </h2>
      </div>
    </div>

    <div id="partners-slider" class="splide partners-slider">
      <div class="splide__track">
        <ul class="splide__list">
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
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/cnco-black-logo.png" alt="China Navigation Co" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/International-Seaways-1080x675.png" alt="International Seaways" class="partner-logo-img" />
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
          <!-- Duplicate set for seamless continuous loop -->
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
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/cnco-black-logo.png" alt="China Navigation Co" class="partner-logo-img" />
            </div>
          </li>
          <li class="splide__slide">
            <div class="partner-logo-item">
              <img src="<?php echo $imagesurl; ?>out-partner/International-Seaways-1080x675.png" alt="International Seaways" class="partner-logo-img" />
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
        </ul>
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
            Explore our certificates and documents—a testament to our excellence, transparency, and responsible practices.
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

    if (document.querySelector('#capabilities-slider')) {
      new Splide('#capabilities-slider', {
        type: 'loop',
        drag: 'free',
        focus: false,
        arrows: false,
        pagination: false,
        perPage: 3.5,
        gap: '24px',
        autoScroll: {
          speed: 1.0,
          pauseOnHover: true,
          pauseOnFocus: false,
        },
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