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

  <section id="section-banner" class="section section-banner p-0">
    <div class="banner-image">
      <picture>
        <source media="(max-width:400px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-xs.webp" type="image/webp">
        <source media="(max-width:600px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-sm.webp" type="image/webp">
        <source media="(max-width:1000px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-md.webp" type="image/webp">
        <source media="(max-width:1350px)" srcset="<?php echo $imagesurl; ?>alloys/banner/banner-1-lg.webp" type="image/webp">
        <img src="<?php echo $imagesurl; ?>alloys/banner/banner-1-xl.webp" width="1920" height="880" alt="Alloy Manufacturing Banner" />
      </picture>
    </div>

    <!-- Banner Content Overlay (Matches Reference Design) -->
    <div class="banner-overlay-wrap">
      <div class="theme-padding">
        <div class="banner-tag">
          <span class="banner-tag-plus">+</span>
          <span class="banner-tag-text">ALLOY MANUFACTURING</span>
        </div>
        <div class="banner-divider"></div>
        <div class="banner-content-row columns is-variable is-8 is-vcentered">
          <div class="column is-12-mobile is-12-tablet is-7-desktop is-7-widescreen">
            <div class="section-title">
              <h1 class="banner-title">
                <span class="banner-word-mask"><span class="banner-word-inner">Precision</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Engineered</span></span><br>
                <span class="banner-word-mask"><span class="banner-word-inner">Alloy</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Casting</span></span> <span class="banner-word-mask"><span class="banner-word-inner">&amp;</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Supply</span></span>
              </h1>
            </div>
          </div>
          <div class="column is-12-mobile is-12-tablet is-5-desktop is-5-widescreen banner-right-col">
            <div class="banner-desc">
              <span class="banner-desc-arrow">&#x21B3;</span>
              <p>
                <span class="banner-line-mask"><span class="banner-line-inner">Pioneering circular metallurgy,</span></span>
                <span class="banner-line-mask"><span class="banner-line-inner">high-grade alloy processing, &amp; industrial solutions.</span></span>
              </p>
            </div>
            <div class="banner-cta">
              <a href="javascript:void(0)" class="banner-btn" onclick="openForm('enquire')"><span>Contact Us</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Timeline Section -->
  <section id="section-timeline" class="section section-timeline">
    <div class="theme-padding">
      <!-- Centered Header -->
      <div class="timeline-header-wrap">
        <span class="timeline-tag">+ HERITAGE &amp; MILESTONES</span>
        <div class="section-title">
          <h2 class="timeline-main-heading white-text">
            <span class="timeline-word-mask"><span class="timeline-word-inner">Our</span></span>
            <span class="timeline-word-mask"><span class="timeline-word-inner">Timeline</span></span>
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
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </span>
                  <span class="timeline-highlight-text">Total Tonnage Recycled: 2 Million Tons</span>
                </div>
                <div class="timeline-highlight-item">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </span>
                  <span class="timeline-highlight-text">325+ Ships Recycled</span>
                </div>
                <div class="timeline-highlight-item">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </span>
                  <span class="timeline-highlight-text">Annual Capacity: 100,000 Tons</span>
                </div>
                <div class="timeline-highlight-item">
                  <span class="timeline-highlight-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
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
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
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
  <section id="section-qa" class="section section-qa">
    <div class="theme-padding">
      <!-- Centered Header -->
      <div class="qa-header-wrap">
        <span class="qa-tag">+ STANDARDS &amp; EXCELLENCE</span>
        <div class="section-title">
          <h2 class="qa-main-heading">
            <span class="qa-word-mask"><span class="qa-word-inner">Quality</span></span>
            <span class="qa-word-mask"><span class="qa-word-inner">Assurance</span></span>
            <span class="qa-word-mask"><span class="qa-word-inner">for</span></span><br>
            <span class="qa-word-mask"><span class="qa-word-inner">Customer</span></span>
            <span class="qa-word-mask"><span class="qa-word-inner">Satisfaction</span></span>
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
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <button type="button" class="qa-arrow qa-arrow--next" aria-label="Next Slide">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Automotive Die Casting (Sticky Split Section) -->
  <section id="section-die-casting" class="section section-die-casting theme-padding">
    <div class="columns is-multiline die-casting-columns">
      <!-- Left Sticky Column -->
      <div class="column is-12-mobile is-12-tablet is-5-desktop is-4-widescreen die-casting-sticky-col">
        <div class="section-title">
          <h2 class="die-casting-heading">Automotive Die Casting</h2>
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
        </div>
      </div>
    </div>
  </section>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <?php echo $block_body_end; ?>


  
</body>

</html>
