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
$popup = "yes";
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
       Section 2: About / Overview & Core Pillars (Friends Corp)
       ========================================================================== -->
  <section id="section-about" class="section section-about cream-bg section-stacked">
    <div class="scrap-about-bg-grid" aria-hidden="true"></div>

    <div class="theme-padding scrap-about-container">
      <!-- Section Header -->
      <div class="c-eyebrow mb-2">
        <span class="c-eyebrow__line"></span>
        <span>ABOUT FRIENDS CORP &bull; ESTD. 2008</span>
      </div>

      <div class="section-title mb-5">
        <h2 class="scrap-main-title">
          <span class="word-mask"><span class="word-inner">Pioneering</span></span>
          <span class="word-mask"><span class="word-inner">Secondary</span></span>
          <span class="word-mask"><span class="word-inner text-secondary">Metals</span></span>
          <span class="word-mask"><span class="word-inner text-secondary">Trade.</span></span>
        </h2>
      </div>

      <!-- Top Row: Narrative Split + Generated Supply Hub Media Frame -->
      <div class="columns is-variable is-8 is-vcentered scrap-overview-row mb-6">
        <div class="column is-6">
          <div class="scrap-story-content">
            <!-- Story Lead Callout -->
            <div class="scrap-story-intro-block mb-4">
              <div class="scrap-story-pill mb-2">
                <span class="scrap-story-pill-dot"></span>
                <span>Premier Metal Trading Enterprise &bull; Estd. 2008</span>
              </div>
              <p class="scrap-lead-p">
                <strong>Friends Corp.</strong> is primarily associated with the sourcing, processing, and trading of high-yield <strong>secondary ferrous and non-ferrous scrap</strong>. Founded in 2008, the company has rapidly evolved into one of the most trusted and fastest-growing names in the metals and industrial commodities trade.
              </p>
            </div>

            <!-- Procurement Footprint Widget -->
            <div class="scrap-sourcing-widget mb-4">
              <div class="scrap-sourcing-header">
                <div class="scrap-sourcing-icon-wrap" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="scrap-sourcing-title">Procurement &amp; Sourcing Footprint</h4>
                  <p class="scrap-sourcing-sub">Procuring locally across India and importing certified recyclable scrap from global markets:</p>
                </div>
              </div>
              <div class="scrap-sourcing-tags">
                <span class="sourcing-pill is-domestic">
                  <span class="pill-badge-flag">🇮🇳</span>
                  <span>Pan-India (Domestic)</span>
                </span>
                <span class="sourcing-pill">USA</span>
                <span class="sourcing-pill">UK</span>
                <span class="sourcing-pill">Europe</span>
                <span class="sourcing-pill">Japan</span>
                <span class="sourcing-pill">Russia</span>
                <span class="sourcing-pill is-more">&amp; Beyond</span>
              </div>
            </div>

            <!-- Circular Economy & Sustainability Mission Card -->
            <div class="scrap-mission-card">
              <div class="scrap-mission-icon-wrap" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67" />
                </svg>
              </div>
              <div class="scrap-mission-body">
                <h4 class="scrap-mission-title">Circular Economy &amp; Carbon Reduction Mission</h4>
                <p class="scrap-mission-desc">
                  Through strategic vision and relentless dedication, we supply raw materials to key industrial sectors while actively championing sustainability — drastically reducing industrial pollution and carbon footprints through responsible recycling and resource reclamation.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="column is-6">
          <div class="scrap-overview-media-frame">
            <img src="<?php echo $imagesurl; ?>scrap-trading/scrap-supply-hub.webp?v=<?php echo $version; ?>" alt="Friends Corp Secondary Scrap Trading Hub &amp; Yard Operations" class="scrap-overview-img" loading="lazy" />
            <div class="scrap-overview-media-badge">
              <span class="hub-badge-dot"></span>
              <span>Pan-India &bull; Global Sourcing &bull; Estd. 2008</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 1920x880 Parallax Industrial Media Banner -->
      <div class="scrap-parallax-banner-wrap mb-6">
        <div class="scrap-parallax-frame">
          <img src="<?php echo $imagesurl; ?>scrap-trading/scrap-parallax-operations.webp?v=<?php echo $version; ?>" alt="Friends Corp High-Capacity Scrap Terminal &amp; Rail Logistics Operations" class="scrap-parallax-img" loading="lazy" />
        </div>
      </div>

      <!-- Middle Section: What Makes Our Business Model Unique (Split Sticky 3-Column Layout as per Reference) -->
      <div class="scrap-pillars-split-stage mb-6">
        <div class="scrap-split-stage-container">
          <!-- Left Column: Sticky Title "What Makes" -->
          <div class="scrap-split-col scrap-split-col--left">
            <h3 class="scrap-split-title">What Makes</h3>
          </div>

          <!-- Center Column: Vertical Scrolling Cards Feed -->
          <div class="scrap-split-col scrap-split-col--center">
            <div class="scrap-center-cards-feed">
              <!-- Pillar 1: Truth -->
              <div class="scrap-feed-card-item">
                <div class="scrap-feed-card">
                  <div class="feed-card-header">
                    <span class="feed-card-num">01</span>
                    <span class="feed-card-icon" aria-hidden="true">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                      </svg>
                    </span>
                  </div>
                  <h4 class="feed-card-title">Truth</h4>
                  <p class="feed-card-desc">
                    Uncompromising metallurgical authenticity, genuine material origin disclosure, and certified grading without misrepresentation.
                  </p>
                  <div class="feed-card-footer">
                    <div class="feed-card-badge">
                      <span class="badge-dot"></span>
                      <span>Certified Metallurgical Origin</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pillar 2: Trust -->
              <div class="scrap-feed-card-item">
                <div class="scrap-feed-card">
                  <div class="feed-card-header">
                    <span class="feed-card-num">02</span>
                    <span class="feed-card-icon" aria-hidden="true">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                      </svg>
                    </span>
                  </div>
                  <h4 class="feed-card-title">Trust</h4>
                  <p class="feed-card-desc">
                    Building durable, decades-long partnerships with mills, foundries, and international recyclers through steadfast dependability.
                  </p>
                  <div class="feed-card-footer">
                    <div class="feed-card-badge">
                      <span class="badge-dot"></span>
                      <span>Decade-Long Mill Partnerships</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pillar 3: Transparency -->
              <div class="scrap-feed-card-item">
                <div class="scrap-feed-card">
                  <div class="feed-card-header">
                    <span class="feed-card-num">03</span>
                    <span class="feed-card-icon" aria-hidden="true">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                      </svg>
                    </span>
                  </div>
                  <h4 class="feed-card-title">Transparency</h4>
                  <p class="feed-card-desc">
                    Calibrated weighbridge receipts, clear commercial contracts, real-time dispatch tracking, and open chemical composition assays.
                  </p>
                  <div class="feed-card-footer">
                    <div class="feed-card-badge">
                      <span class="badge-dot"></span>
                      <span>Calibrated Weighbridge Slips</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pillar 4: Dedication -->
              <div class="scrap-feed-card-item">
                <div class="scrap-feed-card">
                  <div class="feed-card-header">
                    <span class="feed-card-num">04</span>
                    <span class="feed-card-icon" aria-hidden="true">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                      </svg>
                    </span>
                  </div>
                  <h4 class="feed-card-title">Dedication</h4>
                  <p class="feed-card-desc">
                    Relentless dedication to exact sizing specs, zero-defect delivery standards, and round-the-clock client support.
                  </p>
                  <div class="feed-card-footer">
                    <div class="feed-card-badge">
                      <span class="badge-dot"></span>
                      <span>Zero-Defect Quality Assurance</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column: Sticky Title "Our Business Model Unique" -->
          <div class="scrap-split-col scrap-split-col--right">
            <h3 class="scrap-split-title text-secondary">Our Business Model Unique</h3>
          </div>
        </div>
      </div>

      <!-- Bottom Row: Expanding Horizons & Torch Cutting Photo Showcase -->
      <div class="scrap-expansion-card">
        <div class="columns is-variable is-8 is-vcentered">
          <div class="column is-6">
            <div class="c-eyebrow mb-2">
              <span class="c-eyebrow__line"></span>
              <span>FROM FOUNDATION TO DIVERSIFICATION</span>
            </div>
            <h3 class="scrap-expansion-title">
              From Heavy Melting Base to Comprehensive Metal Streams
            </h3>
            <p class="scrap-expansion-p mb-4">
              <strong>Shredded 211 Scrap and Heavy Melting Scrap</strong> served as the foundational base of the company. Over the years, through persistent infrastructure growth, Friends Corp. has successfully expanded into an extensive multi-category trading portfolio.
            </p>
            <div class="scrap-streams-cloud mb-4">
              <span class="stream-chip">Shredded 211 Scrap</span>
              <span class="stream-chip">Heavy Melting Scrap (HMS 1 &amp; 2)</span>
              <span class="stream-chip">Stainless Steel Scrap</span>
              <span class="stream-chip">Aluminium Scrap</span>
              <span class="stream-chip">Electric Motors Scrap</span>
              <span class="stream-chip">Mix Material Scrap</span>
              <span class="stream-chip">Manganese Steel Scrap</span>
              <span class="stream-chip">Industrial Pipes</span>
              <span class="stream-chip">Cast Iron Scrap</span>
            </div>
            <div class="scrap-partner-callout">
              <p>
                <strong>Trusted Industry Partner:</strong> We serve as a trusted partner across the entire recycling value chain — from processors and refineries to manufacturers. In addition to ferrous lines, we serve all major categories of recycled non-ferrous metals, including <em>aluminium, copper, lead, nickel, and zinc</em>, with substantial interest in other non-ferrous metals.
              </p>
            </div>
          </div>

          <div class="column is-6">
            <div class="scrap-feature-media">
              <img src="<?php echo $imagesurl; ?>scrap-trading/torch-cutting.webp?v=<?php echo $version; ?>" alt="Industrial Heavy Scrap Torch Cutting - Friends Corp" class="scrap-media-img" loading="lazy" />
              <div class="scrap-media-badge">
                <span class="badge-icon">&#9679;</span>
                <span class="badge-text">Direct Processing &amp; Yard Sorting &bull; Bhavnagar</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       Section 3: Product Categories
       ========================================================================== -->
  <section id="section-products" class="section section-products white-bg section-stacked">
    <div class="theme-padding">
      <div class="about-ref-eyebrow mb-2">
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
        <span class="about-eyebrow-text" style="color: #e5912f;">OUR PRODUCTS</span>
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
      </div>
      <div class="section-title mb-5">
        <h2>
          <span>Materials &amp;</span> <span class="text-secondary">Scrap Categories</span>
        </h2>
      </div>
      <div class="columns is-multiline is-variable is-6">
        <!-- Category 1 -->
        <div class="column is-6-tablet is-3-desktop">
          <div class="card p-5" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 8px; height: 100%;">
            <h3 class="title is-5 mb-3" style="color: #111;">Ferrous Scrap</h3>
            <p style="color: #666; font-size: 15px; line-height: 1.6;">Heavy Melting Steel (HMS 1 &amp; 2), cast iron scrap, sheared ship plate cuts, and re-rollable structural scrap.</p>
          </div>
        </div>
        <!-- Category 2 -->
        <div class="column is-6-tablet is-3-desktop">
          <div class="card p-5" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 8px; height: 100%;">
            <h3 class="title is-5 mb-3" style="color: #111;">Non-Ferrous Metals</h3>
            <p style="color: #666; font-size: 15px; line-height: 1.6;">High-purity copper, brass, bronze, zinc, and aluminium scrap sorted and chemically tested for foundries.</p>
          </div>
        </div>
        <!-- Category 3 -->
        <div class="column is-6-tablet is-3-desktop">
          <div class="card p-5" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 8px; height: 100%;">
            <h3 class="title is-5 mb-3" style="color: #111;">Re-rollable Plates</h3>
            <p style="color: #666; font-size: 15px; line-height: 1.6;">Lloyds / DNV / BV certified high-tensile ship hull steel plates and offcuts suitable for direct re-rolling.</p>
          </div>
        </div>
        <!-- Category 4 -->
        <div class="column is-6-tablet is-3-desktop">
          <div class="card p-5" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 8px; height: 100%;">
            <h3 class="title is-5 mb-3" style="color: #111;">Reclaimed Machinery</h3>
            <p style="color: #666; font-size: 15px; line-height: 1.6;">Marine diesel engines, generators, bronze propellers, heavy industrial winches, anchors, and valves.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       Section 4: Quality & Sourcing
       ========================================================================== -->
  <section id="section-quality" class="section section-quality white-bg section-stacked">
    <div class="theme-padding">
      <div class="about-ref-eyebrow mb-2">
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
        <span class="about-eyebrow-text" style="color: #e5912f;">QUALITY ASSURANCE</span>
        <span class="about-eyebrow-line" style="background: rgba(229, 145, 47, 0.6);"></span>
      </div>
      <div class="section-title mb-5">
        <h2>
          <span>Certified Standards,</span> <span class="text-secondary">Strict Compliance</span>
        </h2>
      </div>
      <div class="columns is-variable is-6">
        <div class="column is-4">
          <div class="p-4" style="border-left: 3px solid #e5912f;">
            <h4 class="title is-6 mb-2">Radiation Screening</h4>
            <p style="color: #666; font-size: 14px;">Every consignment passes certified portal radiation detection monitors guaranteeing 100% safe material.</p>
          </div>
        </div>
        <div class="column is-4">
          <div class="p-4" style="border-left: 3px solid #e5912f;">
            <h4 class="title is-6 mb-2">Spectrometer Verification</h4>
            <p style="color: #666; font-size: 14px;">Handheld XRF spectrometers ensure instant, precise elemental composition before dispatch.</p>
          </div>
        </div>
        <div class="column is-4">
          <div class="p-4" style="border-left: 3px solid #e5912f;">
            <h4 class="title is-6 mb-2">Traceable Chain of Custody</h4>
            <p style="color: #666; font-size: 14px;">Direct sourcing from HKC-compliant green ship recycling yards with digital weighbridge transparency.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       Section 5: Call to Action / Enquiry
       ========================================================================== -->
  <section id="section-contact-cta" class="section section-contact-cta white-bg section-stacked has-text-centered">
    <div class="theme-padding">
      <h2 class="title is-3 mb-3">Looking to Source Secondary Scrap?</h2>
      <p class="subtitle is-6 mb-5" style="color: #666;">Get in touch with our trading desk for current market rates and consignment availability.</p>
      <a href="javascript:void(0)" class="theme-btn" onclick="openForm('enquire')">
        <span>Request a Quote</span>
      </a>
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
         2. Section 2: About / Overview & Narrative GSAP Text Animations
         ====================================================================== */
      const aboutSec = document.querySelector('#section-about');
      if (aboutSec) {
        const eyebrow = aboutSec.querySelector('.c-eyebrow');
        const titleWords = aboutSec.querySelectorAll('.scrap-main-title .word-inner');
        const storyIntro = aboutSec.querySelector('.scrap-story-intro-block');
        const sourcingWidget = aboutSec.querySelector('.scrap-sourcing-widget');
        const sourcingPills = aboutSec.querySelectorAll('.scrap-sourcing-tags .sourcing-pill');
        const missionCard = aboutSec.querySelector('.scrap-mission-card');
        const mediaFrame = aboutSec.querySelector('.scrap-overview-media-frame');
        const mediaBadge = aboutSec.querySelector('.scrap-overview-media-badge');

        // Header Reveal on Scroll
        const headerTl = gsap.timeline({
          scrollTrigger: {
            trigger: aboutSec,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });

        if (eyebrow) {
          headerTl.fromTo(eyebrow, {
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

        if (titleWords && titleWords.length) {
          headerTl.fromTo(titleWords, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            stagger: 0.08,
            ease: 'power3.out',
            clearProps: 'all'
          }, 0.12);
        }

        // Overview Row: Formatted Story Column + Supply Hub Visual Frame
        const overviewRow = aboutSec.querySelector('.scrap-overview-row');
        if (overviewRow) {
          const contentTl = gsap.timeline({
            scrollTrigger: {
              trigger: overviewRow,
              start: 'top 78%',
              toggleActions: 'play none none none'
            }
          });

          if (storyIntro) {
            contentTl.fromTo(storyIntro, {
              y: 28,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.75,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0);
          }

          if (sourcingWidget) {
            contentTl.fromTo(sourcingWidget, {
              y: 28,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.75,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.15);
          }

          if (sourcingPills && sourcingPills.length) {
            contentTl.fromTo(sourcingPills, {
              y: 12,
              opacity: 0,
              scale: 0.94
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.45,
              stagger: 0.04,
              ease: 'back.out(1.5)',
              clearProps: 'all'
            }, 0.28);
          }

          if (missionCard) {
            contentTl.fromTo(missionCard, {
              y: 28,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.75,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.3);
          }

          if (mediaFrame) {
            contentTl.fromTo(mediaFrame, {
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
            }, 0.1);
          }

          if (mediaBadge) {
            contentTl.fromTo(mediaBadge, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.4);
          }
        }

        // 1920x880 Parallax Industrial Media Banner Scroll Effect
        const parallaxImg = document.querySelector('.scrap-parallax-img');
        const parallaxWrap = document.querySelector('.scrap-parallax-banner-wrap') || document.querySelector('.scrap-parallax-frame');
        if (parallaxImg && parallaxWrap) {
          gsap.fromTo(parallaxImg, {
            yPercent: -20,
            scale: 1.08
          }, {
            yPercent: 20,
            scale: 1.02,
            ease: 'none',
            scrollTrigger: {
              trigger: parallaxWrap,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 0.8,
              invalidateOnRefresh: true
            }
          });
        }

        // 3-Column Split Stage Feed Cards Scroll Animation
        const splitStage = aboutSec.querySelector('.scrap-pillars-split-stage');
        const feedCards = aboutSec.querySelectorAll('.scrap-feed-card-item');
        if (splitStage && feedCards.length) {
          feedCards.forEach((cardItem, index) => {
            gsap.fromTo(cardItem, {
              y: 50,
              opacity: 0.15,
              scale: 0.96
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.7,
              ease: 'power2.out',
              scrollTrigger: {
                trigger: cardItem,
                start: 'top 85%',
                end: 'top 55%',
                scrub: 0.5
              }
            });
          });
        }

        // Materials Diversification Cloud
        const cloudCard = aboutSec.querySelector('.scrap-cloud-card');
        const materialTags = aboutSec.querySelectorAll('.scrap-materials-tags .material-tag');
        if (cloudCard) {
          gsap.fromTo(cloudCard, {
            y: 30,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.75,
            ease: 'power2.out',
            clearProps: 'all',
            scrollTrigger: {
              trigger: cloudCard,
              start: 'top 82%',
              toggleActions: 'play none none none'
            }
          });

          if (materialTags.length) {
            gsap.fromTo(materialTags, {
              y: 10,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.4,
              stagger: 0.03,
              ease: 'power1.out',
              clearProps: 'all',
              scrollTrigger: {
                trigger: cloudCard,
                start: 'top 80%',
                toggleActions: 'play none none none'
              }
            });
          }
        }
      }

      window.addEventListener('load', function () {
        if (typeof ScrollTrigger !== 'undefined') {
          ScrollTrigger.refresh();
        }
      });
    });
  </script>

  <?php echo $block_body_end; ?>
</body>

</html>