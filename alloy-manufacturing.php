<?php require_once("inc-global.php"); ?>
<?php
$page = "alloy-manufacturing";
$pagetype = "onepage";
$pagename = "Alloy Manufacturing";
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

  <section id="section-banner" class="section section-banner p-0" style="height: auto !important; min-height: unset !important; position: relative !important;">
    <div class="banner-image" style="position: relative;">
      <picture>
        <source media="(max-width:400px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-xs.webp?v=<?php echo $version; ?>" type="image/webp">
        <source media="(max-width:600px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-sm.webp?v=<?php echo $version; ?>" type="image/webp">
        <source media="(max-width:1000px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-md.webp?v=<?php echo $version; ?>" type="image/webp">
        <source media="(max-width:1350px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-lg.webp?v=<?php echo $version; ?>" type="image/webp">
        <img src="<?php echo $imagesurl; ?>alloys/banner/banner-1-xl.webp?v=<?php echo $version; ?>" width="1920" height="880" alt="Alloy Manufacturing Banner" />
      </picture>
      <div class="banner-video-overlay"></div>

      <!-- Banner Content Overlay (Matches Reference Design) -->
      <div class="banner-overlay-wrap" style="padding-bottom: clamp(60px, 8vw, 110px);">
        <div class="theme-padding">
          <div class="about-ref-eyebrow">
            <span class="about-eyebrow-line"></span>
            <span class="about-eyebrow-text" style="color: #ffffff !important;">ALLOY MANUFACTURING</span>
          </div>
          <div class="banner-divider"></div>
          <div class="banner-content-row columns is-variable is-8 is-vcentered">
            <div class="column is-12">
              <div class="section-title">
                <h1 class="banner-title">
                  <span class="banner-word-mask"><span class="banner-word-inner">Baijnath</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner">Melaram</span></span><br>
                  <span class="banner-word-mask"><span class="banner-word-inner banner-italic text-secondary">Alloys</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner text-secondary">Pvt.</span></span>
                  <span class="banner-word-mask"><span class="banner-word-inner text-secondary">Ltd.</span></span>
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Timeline Section -->
  <section id="section-timeline" class="section section-timeline white-bg section-stacked">
    <!-- Square Grid Background (Matching Our Impact Grid) -->
    <div class="timeline-bg-grid" aria-hidden="true"></div>

    <div class="theme-padding">
      <!-- Centered Header -->
      <div class="timeline-header-wrap">
        <div class="c-eyebrow c-eyebrow--center">
          <span class="c-eyebrow__line"></span>
          <span>HERITAGE &amp; MILESTONES</span>
          <span class="c-eyebrow__line"></span>
        </div>
        <div class="section-title text-center">
          <h2 class="timeline-main-heading">
            <span class="timeline-word-mask"><span class="timeline-word-inner">Our</span></span>
            <span class="timeline-word-mask"><span class="timeline-word-inner text-secondary">Timeline</span></span>
          </h2>
        </div>
        <p class="timeline-lead-desc">
          Decades of proven leadership, pioneering metallurgy, and sustainable circular manufacturing at <strong>Baijnath Melaram.</strong>
        </p>
      </div>

      <!-- Timeline Interactive Spine Layout -->
      <div class="timeline-track-wrap">
        <!-- Center Progress Spine Line -->
        <div class="timeline-spine-line">
          <div class="timeline-spine-fill"></div>
        </div>

        <!-- Timeline Row 1: 1955 -->
        <div class="timeline-row">
          <div class="timeline-col-date">
            <h3 class="timeline-year-text">1955</h3>
          </div>
          <div class="timeline-node-wrap">
            <div class="timeline-node-dot"></div>
          </div>
          <div class="timeline-col-content">
            <div class="timeline-card">
              <span class="timeline-card-tag">Pioneering Foundation</span>
              <h4 class="timeline-card-title">BAIJNATH MELARAM (Parent company)</h4>
              <p class="timeline-card-desc">
                Since 1972, we've been leaders in ship recycling, conducting our first operation that year. With our extensive experience, we offer expert knowledge in ship recycling processes, regulations, and market dynamics, providing comprehensive solutions to our clients.
              </p>
            </div>
          </div>
        </div>

        <!-- Timeline Row 2: 1990's & 2000's -->
        <div class="timeline-row">
          <div class="timeline-col-date">
            <h3 class="timeline-year-text">1990's &amp; 2000's</h3>
          </div>
          <div class="timeline-node-wrap">
            <div class="timeline-node-dot"></div>
          </div>
          <div class="timeline-col-content">
            <div class="timeline-card">
              <span class="timeline-card-tag">Expansion &amp; Naval Dismantling</span>
              <h4 class="timeline-card-title">Dismantled Three Navy Vessels and Two Submarines</h4>
              <p class="timeline-card-desc">
                As importers of HR coils, CR coils, rods, and other primary steel products, we specialize in sourcing high-quality steel from global markets. With extensive industry knowledge, we provide reliable and cost-effective steel solutions tailored to our clients' requirements. Our strong network and adherence to international trade regulations make us a trusted partner in the steel trading market.
              </p>
            </div>
          </div>
        </div>

        <!-- Timeline Row 3: Till 2022 -->
        <div class="timeline-row">
          <div class="timeline-col-date">
            <h3 class="timeline-year-text">Till 2022</h3>
          </div>
          <div class="timeline-node-wrap">
            <div class="timeline-node-dot"></div>
          </div>
          <div class="timeline-col-content">
            <div class="timeline-card">
              <span class="timeline-card-tag">Proven Track Record</span>
              <h4 class="timeline-card-title">Our achievements</h4>
              <p class="timeline-card-desc">
                Decades of scaled operations and circular economy leadership:
              </p>
              <div class="timeline-highlight-list">
                <div class="timeline-highlight-item">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="timeline-highlight-text">Total Tonnage Recycled: 2 Million Tons</span>
                </div>
                <div class="timeline-highlight-item">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="timeline-highlight-text">325+ Ships Recycled</span>
                </div>
                <div class="timeline-highlight-item">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="timeline-highlight-text">Annual Capacity: 100,000 Tons</span>
                </div>
                <div class="timeline-highlight-item">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="timeline-highlight-text">Importers of Ferrous &amp; Non-Ferrous Scrap</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Timeline Row 4: 2022–2023 -->
        <div class="timeline-row">
          <div class="timeline-col-date">
            <h3 class="timeline-year-text">2022–2023</h3>
          </div>
          <div class="timeline-node-wrap">
            <div class="timeline-node-dot"></div>
          </div>
          <div class="timeline-col-content">
            <div class="timeline-card">
              <span class="timeline-card-tag">New Era of Metallurgy</span>
              <h4 class="timeline-card-title">Established in 2022 — BaijnathMelramAlloys Pvt. Ltd.</h4>
              <p class="timeline-card-desc">
                Expanding our production capabilities to deliver certified, high-grade alloy ingots and industrial metal casting.
              </p>
              <div class="timeline-highlight-list">
                <div class="timeline-highlight-item" style="grid-column: 1 / -1;">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="timeline-highlight-text">Installed Capacity of 18,000 MT Aluminium Alloy</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Quality Assurance for Customer Satisfaction Section -->
  <section id="section-qa" class="section section-qa white-bg section-stacked">
    <!-- Precision Quality & Standards Background Watermark (Top Left Corner) -->
    <div class="qa-bg-element" aria-hidden="true">
      <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Precision Calibration Rings -->
        <circle cx="160" cy="160" r="230" stroke="rgba(0, 0, 0, 0.035)" stroke-width="1" stroke-dasharray="4 6" />
        <circle cx="160" cy="160" r="170" stroke="rgba(229, 145, 47, 0.16)" stroke-width="1.5" />
        <circle cx="160" cy="160" r="115" stroke="rgba(0, 0, 0, 0.05)" stroke-width="1" />
        <circle cx="160" cy="160" r="65" stroke="rgba(229, 145, 47, 0.22)" stroke-width="1.5" stroke-dasharray="3 3" />
        <circle cx="160" cy="160" r="6" fill="#e5912f" fill-opacity="0.35" />
        <!-- Crosshair & Coordinate Rays -->
        <line x1="0" y1="160" x2="400" y2="160" stroke="rgba(229, 145, 47, 0.16)" stroke-width="1" stroke-dasharray="8 6" />
        <line x1="160" y1="0" x2="160" y2="400" stroke="rgba(229, 145, 47, 0.16)" stroke-width="1" stroke-dasharray="8 6" />
        <!-- Corner Technical Calibration Marks -->
        <path d="M 45 85 L 45 45 L 85 45" stroke="rgba(0, 0, 0, 0.12)" stroke-width="1.5" fill="none" />
        <circle cx="45" cy="45" r="2.5" fill="#e5912f" />
        <path d="M 275 45 L 275 85" stroke="rgba(229, 145, 47, 0.2)" stroke-width="1" />
        <path d="M 45 275 L 85 275" stroke="rgba(229, 145, 47, 0.2)" stroke-width="1" />
      </svg>
    </div>

    <div class="theme-padding">
      <!-- Centered Header -->
      <div class="qa-header-wrap">
        <div class="c-eyebrow c-eyebrow--center">
          <span class="c-eyebrow__line"></span>
          <span>STANDARDS &amp; EXCELLENCE</span>
          <span class="c-eyebrow__line"></span>
        </div>
        <div class="section-title text-center">
          <h2 class="qa-main-heading">
            <span class="qa-word-mask"><span class="qa-word-inner">Quality</span></span>
            <span class="qa-word-mask"><span class="qa-word-inner">Assurance</span></span>
            <span class="qa-word-mask"><span class="qa-word-inner">for</span></span><br>
            <span class="qa-word-mask"><span class="qa-word-inner text-secondary">Customer</span></span>
            <span class="qa-word-mask"><span class="qa-word-inner text-secondary">Satisfaction</span></span>
          </h2>
        </div>
        <p class="qa-lead-desc">
          Upholding uncompromising precision, rigorous metallurgical testing, and continuous process enhancement at <strong>Baijnath Melaram.</strong>
        </p>
      </div>
    </div>

    <!-- Full-Width QA Splide Carousel Container (Outside theme-padding) -->
    <div class="qa-slider-fullwidth">
      <div id="qa-slider" class="splide qa-splide">
        <div class="splide__track">
          <ul class="splide__list">

            <!-- Card 1 -->
            <li class="splide__slide">
              <div class="qa-slide-card">
                <div class="qa-slide-bg">
                  <img src="<?php echo $imagesurl; ?>alloys/qa/DSC_0264_JPG.webp" alt="Understand customers' needs and exceed expectations." />
                </div>
                <div class="qa-slide-overlay"></div>
                <div class="qa-slide-content">
                  <h3 class="qa-slide-title">Understand customers' needs and exceed expectations.</h3>
                  <p class="qa-slide-desc">Strive to understand our customers' needs and expectations and work closely with them to provide solutions that meet or exceed their requirements.</p>
                </div>
              </div>
            </li>

            <!-- Card 2 -->
            <li class="splide__slide">
              <div class="qa-slide-card">
                <div class="qa-slide-bg">
                  <img src="<?php echo $imagesurl; ?>alloys/qa/DSC_0288_JPG.webp" alt="Utilize state-of-the-art processes and equipment for top-quality products." />
                </div>
                <div class="qa-slide-overlay"></div>
                <div class="qa-slide-content">
                  <h3 class="qa-slide-title">Utilize state-of-the-art processes and equipment for top-quality products.</h3>
                  <p class="qa-slide-desc">To use state-of-the-art manufacturing processes and equipment to ensure that our products are of the highest quality and continuously improve our processes to enhance product quality and consistency.</p>
                </div>
              </div>
            </li>

            <!-- Card 3 -->
            <li class="splide__slide">
              <div class="qa-slide-card">
                <div class="qa-slide-bg">
                  <img src="<?php echo $imagesurl; ?>alloys/qa/DSC_0295_JPG.webp" alt="Maintain rigorous quality control to meet industry standards." />
                </div>
                <div class="qa-slide-overlay"></div>
                <div class="qa-slide-content">
                  <h3 class="qa-slide-title">Maintain rigorous quality control to meet industry standards.</h3>
                  <p class="qa-slide-desc">To maintain a rigorous quality control system that ensures all our products are thoroughly inspected and tested to meet industry standards.</p>
                </div>
              </div>
            </li>

            <!-- Card 4 -->
            <li class="splide__slide">
              <div class="qa-slide-card">
                <div class="qa-slide-bg">
                  <img src="<?php echo $imagesurl; ?>alloys/qa/A588%20GR%20A_.webp" alt="Comply with laws, regulations, and industry standards." />
                </div>
                <div class="qa-slide-overlay"></div>
                <div class="qa-slide-content">
                  <h3 class="qa-slide-title">Comply with laws, regulations, and industry standards.</h3>
                  <p class="qa-slide-desc">Committed to comply with all relevant laws, regulations, and industry standards, and continuously monitor and improve our processes to maintain compliance.</p>
                </div>
              </div>
            </li>

            <!-- Card 5 -->
            <li class="splide__slide">
              <div class="qa-slide-card">
                <div class="qa-slide-bg">
                  <img src="<?php echo $imagesurl; ?>alloys/qa/WhatsApp%20Image%202022-07-19%20at%203_19_58%20PM%20(1).webp" alt="Invest in employee training and development." />
                </div>
                <div class="qa-slide-overlay"></div>
                <div class="qa-slide-content">
                  <h3 class="qa-slide-title">Invest in employee training and development.</h3>
                  <p class="qa-slide-desc">Our employees are key to our success, and continuous investment in their training and development ensures they have the knowledge and skills to meet our high quality standards.</p>
                </div>
              </div>
            </li>

            <!-- Card 6 -->
            <li class="splide__slide">
              <div class="qa-slide-card">
                <div class="qa-slide-bg">
                  <img src="<?php echo $imagesurl; ?>alloys/qa/WhatsApp%20Image%202022-08-17%20at%208_50_edited.webp" alt="Value customer feedback for ongoing enhancement." />
                </div>
                <div class="qa-slide-overlay"></div>
                <div class="qa-slide-content">
                  <h3 class="qa-slide-title">Value customer feedback for ongoing enhancement.</h3>
                  <p class="qa-slide-desc">We are committed to continuously improving our products, processes, and services, and we welcome customer feedback to help us achieve this goal.</p>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <!-- Custom Navigation Arrows (Inside theme-padding at Bottom Left) -->
    <div class="theme-padding">
      <div class="qa-nav-arrows">
        <button type="button" class="qa-arrow qa-arrow--prev" aria-label="Previous Slide">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
          </svg>
        </button>
        <button type="button" class="qa-arrow qa-arrow--next" aria-label="Next Slide">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Automotive Die Casting (Sticky Split Section) -->
  <section id="section-die-casting" class="section section-die-casting white-bg section-stacked theme-padding pt-0">
    <!-- Square Grid Background (Moved from Files Section) -->
    <div class="die-casting-bg-grid" aria-hidden="true"></div>

    <div class="columns is-multiline die-casting-columns">
      <!-- Left Sticky Column -->
      <div class="column is-12-mobile is-12-tablet is-5-desktop is-4-widescreen die-casting-sticky-col">
        <div class="c-eyebrow">
          <span class="c-eyebrow__line"></span>
          <span>APPLICATION &amp; CAPABILITY</span>
        </div>
        <div class="section-title">
          <h2 class="die-casting-heading">Automotive <span class="text-secondary">Die Casting</span></h2>
        </div>
      </div>

      <!-- Right Scrolling Content Column -->
      <div class="column is-12-mobile is-12-tablet is-7-desktop is-8-widescreen die-casting-content-col">
        <div class="die-casting-content-block">
          <p class="die-casting-desc">
            Automotive Die Casting (ADC) is a highly versatile aluminum alloy used for manufacturing die-cast parts. It’s favored for its exceptional properties, such as excellent thermal and electrical conductivity, low density, high strength, and resistance to corrosion and oxidation. ADC finds applications in various industries, from automotive components like cylinder head covers and motor covers to electrical appliances, LED lighting, and communication equipment, thanks to its excellent conductivity and surface treatment characteristics.
          </p>

          <ul class="die-casting-points-list">
            <li class="die-casting-point-item">
              <span class="die-casting-point-bullet"></span>
              <span class="die-casting-point-text">ADC/LM – ALL SAME GRADES</span>
            </li>
            <li class="die-casting-point-item">
              <span class="die-casting-point-bullet"></span>
              <span class="die-casting-point-text">ADC REFERS TO JAPANESE STANDARDS</span>
            </li>
            <li class="die-casting-point-item">
              <span class="die-casting-point-bullet"></span>
              <span class="die-casting-point-text">LM REFERS TO INDIAN/UK STANDARDS</span>
            </li>
          </ul>

          <!-- General Uses of Aluminium Alloys Breakdown -->
          <div class="die-casting-subblock">
            <h3 class="die-casting-subheading">
              <span class="die-casting-subheading-line"></span>
              <span>General Uses of Aluminium Alloys</span>
            </h3>

            <ul class="die-casting-points-list">
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 0:</strong> <span class="die-casting-grade-desc">Sand Castings for Electrical, Chemical, Food Applications</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 2:</strong> <span class="die-casting-grade-desc">Widely used Alloy for all Types of Die Castings</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 4:</strong> <span class="die-casting-grade-desc">The most versatile Alloy with very good castings characteristics. UTS can be greatly increased after heat treatment</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 5:</strong> <span class="die-casting-grade-desc">Castings required maximum resistance to corrosion such as marine components can be casted in such and chill</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 6:</strong> <span class="die-casting-grade-desc">Very suitable for large intricate thin walled castings in all type of moulds</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 9:</strong> <span class="die-casting-grade-desc">Common to LM.6 characteristics but higher U.T.S. after heat treatment</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 10:</strong> <span class="die-casting-grade-desc">Suitable for sand and chill castings with high strength and shock resistance require special foundry technique; heat treated</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 11:</strong> <span class="die-casting-grade-desc">Suitable for die and centrifugal castings</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 12:</strong> <span class="die-casting-grade-desc">Mainly used where a very good machined surface finished and hardness is required</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 13:</strong> <span class="die-casting-grade-desc">Used in piston castings</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 16:</strong> <span class="die-casting-grade-desc">Castings requiring high mechanical properties can be casted in sand or chill process</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 18:</strong> <span class="die-casting-grade-desc">High resistance to corrosion with good foundry characteristics</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 22:</strong> <span class="die-casting-grade-desc">Used for chill castings requiring good foundry characteristics and ductility. Requires heat treatment</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 24:</strong> <span class="die-casting-grade-desc">One of the two most widely used alloys for all types of castings</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 25:</strong> <span class="die-casting-grade-desc">Suitable where good resistance to corrosion combined with high strength is required</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 28:</strong> <span class="die-casting-grade-desc">Piston alloy with lower coefficient of expansion than LM 13</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 29:</strong> <span class="die-casting-grade-desc">As LM 28 but lower coefficient of expansion</span></span>
              </li>
              <li class="die-casting-point-item">
                <span class="die-casting-point-bullet"></span>
                <span class="die-casting-point-text"><strong>LM. 30:</strong> <span class="die-casting-grade-desc">For unlined die cast cylinder block with low expansion and excellent wear resistance</span></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Files Download Section -->
  <section id="section-files" class="section section-files white-bg section-stacked theme-padding pt-0">
    <!-- Nautical Compass Background Watermark (Top Right Corner) -->
    <div class="files-bg-compass" aria-hidden="true">
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

    <div class="files-content-wrap">
      <div class="files-header">
        <div class="c-eyebrow">
          <span class="c-eyebrow__line"></span>
          <span>DOWNLOADS &amp; SPECIFICATIONS</span>
        </div>
        <div class="section-title">
          <h2 class="files-heading">Download <span class="text-secondary">Files</span></h2>
        </div>
      </div>

      <div class="files-table-wrap">
      <table class="files-table">
        <thead>
          <tr>
            <th scope="col" class="th-file-name">File Name</th>
            <th scope="col" class="th-file-desc">Description</th>
            <th scope="col" class="th-file-download">Download</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="td-file-name">
              Aluminium Alloys manufactured (under Baijnath Melaram alloys) 1
            </td>
            <td class="td-file-desc">
              Aluminium alloys, manufactured under Baijnath Melaram Alloys, are renowned for their exceptional properties and versatility. These alloys are meticulously crafted to offer superior strength, durability, and corrosion resistance, making them ideal for a wide range of applications across industries.
            </td>
            <td class="td-file-download">
              <a href="download/brochure.pdf" download="Aluminium-Alloys-manufactured-1.pdf" class="files-download-btn" aria-label="Download Aluminium Alloys manufactured (under Baijnath Melaram alloys) 1">
                <svg class="files-download-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="12" y1="4" x2="12" y2="16"></line>
                  <polyline points="7 11 12 16 17 11"></polyline>
                  <line x1="6" y1="20" x2="18" y2="20"></line>
                </svg>
              </a>
            </td>
          </tr>
          <tr>
            <td class="td-file-name">
              Aluminium Alloys manufactured (under Baijnath Melaram alloys) 2
            </td>
            <td class="td-file-desc">
              Whether used in automotive, aerospace, construction, or consumer goods, Baijnath Melaram Alloys' products consistently meet the highest standards of quality and performance. With a focus on innovation and precision engineering, these aluminium alloys play a vital role in driving progress and innovation in various sectors worldwide.
            </td>
            <td class="td-file-download">
              <a href="download/brochure.pdf" download="Aluminium-Alloys-manufactured-2.pdf" class="files-download-btn" aria-label="Download Aluminium Alloys manufactured (under Baijnath Melaram alloys) 2">
                <svg class="files-download-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="12" y1="4" x2="12" y2="16"></line>
                  <polyline points="7 11 12 16 17 11"></polyline>
                  <line x1="6" y1="20" x2="18" y2="20"></line>
                </svg>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

  <!-- Raw Materials Pinned Horizontal Scroll Section -->
  <section id="section-raw-materials" class="section section-raw-materials white-bg section-stacked pt-0">
    <!-- Orange Squares Grid Background -->
    <div class="raw-materials-bg-grid" aria-hidden="true"></div>

    <div class="raw-materials-pinned-container">
      <div class="theme-padding">
        <!-- Centered Header -->
        <div class="raw-materials-header-wrap">
          <div class="c-eyebrow c-eyebrow--center">
            <span class="c-eyebrow__line"></span>
            <span>SUSTAINABILITY &amp; SOURCING</span>
            <span class="c-eyebrow__line"></span>
          </div>
          <div class="section-title text-center">
            <h2 class="raw-materials-main-heading">
              <span class="word-mask"><span class="word-inner">Raw</span></span>
              <span class="word-mask"><span class="word-inner text-secondary">Materials</span></span>
            </h2>
          </div>
          <p class="raw-materials-lead-desc">
            High-quality recycled metals, furnace additives, and non-ferrous alloys sourced through sustainable circular recycling and open for global industrial trading.
          </p>
        </div>
      </div>

      <!-- Horizontal Cards Track -->
      <div class="raw-materials-track-wrapper">
        <div class="raw-materials-cards-track">

          <!-- Card 1: Metal Wheels -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/metal-wheels.webp" alt="Metal Wheels" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Metal Wheels</h3>
              <p class="raw-material-card-desc">At Baijnath Melaram Alloy, sustainability is paramount. We collect metal wheels and other components from recycling efforts, providing high-quality raw materials for trading.</p>
            </div>
          </div>

          <!-- Card 2: Copper -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/copper.webp" alt="Copper" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Copper</h3>
              <p class="raw-material-card-desc">We collect copper and other raw materials from recycling efforts, open for trading. Choose eco-friendly solutions and fulfill your industrial needs with our recycled materials.</p>
            </div>
          </div>

          <!-- Card 3: 99% Ingot -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/99-ingot.webp" alt="99% Ingot" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">99% Ingot</h3>
              <p class="raw-material-card-desc">We collect 99% ingots and other raw materials from recycling efforts, open for trading. Choose eco-friendly solutions with our recycled materials.</p>
            </div>
          </div>

          <!-- Card 4: Zorba -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/zorba.webp" alt="Zorba" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Zorba</h3>
              <p class="raw-material-card-desc">Discover high-quality Zorba metal parts sourced from our recycled cells, now available for trading. Choose sustainable solutions for your needs.</p>
            </div>
          </div>

          <!-- Card 5: Tense -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/tense.webp" alt="Tense" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Tense</h3>
              <p class="raw-material-card-desc">Explore high-quality Tense metal parts from our recycled cells, open for trading. Choose sustainability with our recycled materials. Together, let's shape a better future.</p>
            </div>
          </div>

          <!-- Card 6: Trump -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/trump.webp" alt="Trump" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Trump</h3>
              <p class="raw-material-card-desc">Explore our selection of high-quality Trump metal pipes sourced from our recycled cells, now available for trading. Opt for sustainable solutions with our recycled materials and join us in building a greener future together.</p>
            </div>
          </div>

          <!-- Card 7: Twitch -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/twitch.webp" alt="Twitch" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Twitch</h3>
              <p class="raw-material-card-desc">Discover Twitch metal parts from recycled cells, open for trading. Choose sustainability and build a greener future with us.</p>
            </div>
          </div>

          <!-- Card 8: Silicon -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/silicon.webp" alt="Silicon" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Silicon</h3>
              <p class="raw-material-card-desc">Silicon metal is a nonferroalloy product that has a silvery gray appearance with a metallic luster. Silicon metal is a very important furnace additive in the production of aluminum products, which can effectively enhance the plasticity and wear resistance of aluminum products. We trade silicon metal 551, 443.</p>
            </div>
          </div>

          <!-- Card 9: Taint Tabor -->
          <div class="raw-material-card">
            <div class="raw-material-card-bg">
              <img src="<?php echo $imagesurl; ?>alloys/raw-materials/taint-tabor.webp" alt="Taint Tabor" loading="lazy" />
            </div>
            <div class="raw-material-card-overlay"></div>
            <div class="raw-material-card-content">
              <h3 class="raw-material-card-title">Taint Tabor</h3>
              <p class="raw-material-card-desc">Clean, mixed old alloy sheet aluminium.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <?php echo $block_body_end; ?>



</body>

</html>