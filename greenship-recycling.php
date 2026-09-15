<?php require_once("inc-global.php"); ?>
<?php
$page = "greenship-recycling";
$pagetype = "onepage";
$pagename = "Greenship Recycling";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "no";
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
        <source media="(max-width:600px)" srcset="<?php echo $imagesurl; ?>greenship-recycling/banner/banner-1-sm.webp" type="image/webp">
        <source media="(max-width:1000px)" srcset="<?php echo $imagesurl; ?>greenship-recycling/banner/banner-1-md.webp" type="image/webp">
        <source media="(max-width:1350px)" srcset="<?php echo $imagesurl; ?>greenship-recycling/banner/banner-1-lg.webp" type="image/webp">
        <img src="<?php echo $imagesurl; ?>greenship-recycling/banner/banner-1-xl.webp" width="1920" height="880" alt="Banner" />
      </picture>
    </div>

    <!-- Banner Content Overlay (Matches Reference Design) -->
    <div class="banner-overlay-wrap">
      <div class="theme-padding">
        <div class="banner-tag">
          <span class="banner-tag-plus">+</span>
          <span class="banner-tag-text">GREENSHIP RECYCLING</span>
        </div>
        <div class="banner-divider"></div>
        <div class="banner-content-row columns is-variable is-8 is-vcentered">
          <div class="column is-12-mobile is-12-tablet is-7-desktop is-7-widescreen">
            <div class="section-title">
              <h1 class="banner-title">
                <span class="banner-word-mask"><span class="banner-word-inner">A</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Commitment</span></span> <span class="banner-word-mask"><span class="banner-word-inner">to</span></span><br>
                <span class="banner-word-mask"><span class="banner-word-inner text-primary">Green</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Ship</span></span> <span class="banner-word-mask"><span class="banner-word-inner">Recycling</span></span>
              </h1>
            </div>
          </div>
          <div class="column is-12-mobile is-12-tablet is-5-desktop is-5-widescreen banner-right-col">
            <div class="banner-desc">
              <span class="banner-desc-arrow">&#x21B3;</span>
              <p>
                <span class="banner-line-mask"><span class="banner-line-inner">Recycle. Reclaim. Renew:</span></span>
                <span class="banner-line-mask"><span class="banner-line-inner">Our Green Ship Recycling Initiative</span></span>
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

  <!-- We Value Our Environment Section -->
  <section id="section-environment" class="section section-environment">
    <div class="theme-padding">
      <!-- Centered Header: Big Title & Lead Description -->
      <div class="env-header-wrap">
        <div class="section-title">
          <h2 class="env-main-heading">
            <span class="env-word-mask"><span class="env-word-inner">We</span></span>
            <span class="env-word-mask"><span class="env-word-inner">value</span></span>
            <span class="env-word-mask"><span class="env-word-inner">our</span></span>
            <span class="env-word-mask"><span class="env-word-inner">Environment</span></span>
          </h2>
        </div>

        <p class="env-lead-desc">
          By accomplishing <strong>SOC for HKC, COC for EU SRR from Class NK and AP-Moller Maersk RSRS Compliance</strong>, Baijnath Melaram has made a critical stride towards moving up to the perfect Green Ship Recycling Yard.
        </p>
      </div>

      <!-- Features Layout: 3 Columns Top, 2 Centered Bottom -->
      <div class="env-features-wrap">
        <div class="env-feature-card">
          <h4 class="env-feature-title">Zero Intertidal Spillage</h4>
          <p class="env-feature-text">Taking measures to avoid metal slag touching the intertidal zone</p>
        </div>

        <div class="env-feature-card">
          <h4 class="env-feature-title">Impermeable Floor</h4>
          <p class="env-feature-text">100 % concrete yard &amp; 30 metre Jetty. A vessel lands 5 metres from the Jetty.</p>
        </div>

        <div class="env-feature-card">
          <h4 class="env-feature-title">Metal Slag Collector</h4>
          <p class="env-feature-text">100% collection of metal slag while cutting side shells</p>
        </div>

        <div class="env-feature-card">
          <h4 class="env-feature-title">Environmental Impact Assessment</h4>
          <p class="env-feature-text">Intertidal Zone water, RO water, Intertidal Zone soil, Noise and Ambient Air are tested quarterly.</p>
        </div>

        <div class="env-feature-card">
          <h4 class="env-feature-title">100% Lifting</h4>
          <p class="env-feature-text">Zero contact with the intertidal zone using 150 Tons and 250 tons capacity cranes</p>
        </div>
      </div>
    </div>

    <!-- Full-View Edge-to-Edge Cinematic Parallax Image Showcase (Outside theme-padding) -->
    <div class="env-full-image-wrap">
      <div class="env-full-image-card">
        <img src="<?php echo $imagesurl; ?>greenship-recycling/environment-green.jpg" alt="We value our Environment - Green Ship Recycling" class="env-parallax-img" />
      </div>
    </div>
  </section>

  <!-- We Value Our Worker's Welfare Section -->
  <section id="section-welfare" class="section section-welfare">
    <div class="theme-padding">
      <!-- Centered Header: Big Title & Lead Description -->
      <div class="welfare-header-wrap">
        <div class="section-title">
          <h2 class="welfare-main-heading">
            <span class="welfare-word-mask"><span class="welfare-word-inner">We</span></span>
            <span class="welfare-word-mask"><span class="welfare-word-inner">value</span></span>
            <span class="welfare-word-mask"><span class="welfare-word-inner">our</span></span>
            <span class="welfare-word-mask"><span class="welfare-word-inner">Worker's</span></span>
            <span class="welfare-word-mask"><span class="welfare-word-inner">Welfare</span></span>
          </h2>
        </div>

        <p class="welfare-lead-desc">
          At our Baijnath Melaram Ship Recycling Yard, we deeply value the welfare of our workers at the ship recycling yard. Ensuring their well-being is our top priority. <strong>Our commitment to our workers' welfare is integral to our organisation, as their satisfaction directly contributes to our overall success.</strong>
        </p>
      </div>

      <!-- Welfare Features Layout: 4 Columns Minimalist Centered Layout -->
      <div class="welfare-features-wrap">
        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Medical Facility</h4>
          <p class="welfare-feature-text">First Aid Room, Ambulance and First Aid Kits in case of Emergencies.</p>
        </div>

        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Policies and Agreements</h4>
          <p class="welfare-feature-text">The yard manager will ensure that the worker has undergone training at GMB as per his designation and possesses a GMB Certificate.</p>
        </div>

        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Inward/Exit forms</h4>
          <p class="welfare-feature-text">If the worker wants to leave, he has to fill resignation letter and get the full and final exit form.</p>
        </div>

        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Induction of Workers</h4>
          <p class="welfare-feature-text">Workers are provided with induction training before they start working in the yard.</p>
        </div>

        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Issuing PPE to Workers</h4>
          <p class="welfare-feature-text">After induction as well as the appointment, all workers are handed proper NEBOSH-approved PPE.</p>
        </div>

        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Dormitory</h4>
          <p class="welfare-feature-text">A dormitory, fulfilling all ILO Standards, has been provided for all the workers working for the organisation.</p>
        </div>

        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Transport</h4>
          <p class="welfare-feature-text">Bus Service has been provided for all the workers staying in the dormitory to travel to and fro from the Yard.</p>
        </div>

        <div class="welfare-feature-card">
          <h4 class="welfare-feature-title">Emergency Preparedness</h4>
          <p class="welfare-feature-text">Fire Alarms are placed to intimate others. Evacuation Plan, Emergency lights, Muster point and Emergency exits have been strategically placed.</p>
        </div>
      </div>
    </div>

    <!-- Full-View Edge-to-Edge Cinematic Parallax Image Showcase (Outside theme-padding) -->
    <div class="welfare-full-image-wrap">
      <div class="welfare-full-image-card">
        <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare.jpg" alt="We value our Worker's Welfare - Safety Equipment" class="welfare-parallax-img" />
      </div>
    </div>
  </section>

  <!-- We Value Safety Section -->
  <section id="section-safety" class="section section-safety">
    <div class="theme-padding">
      <!-- Centered Header: Big Title & Lead Description -->
      <div class="safety-header-wrap">
        <div class="section-title">
          <h2 class="safety-main-heading">
            <span class="safety-word-mask"><span class="safety-word-inner">We</span></span>
            <span class="safety-word-mask"><span class="safety-word-inner">value</span></span>
            <span class="safety-word-mask"><span class="safety-word-inner">Safety</span></span>
          </h2>
        </div>

        <p class="safety-lead-desc">
          Ship Recycling is a labour-intensive industry. Therefore, the chances of an accident are always present. However, at <strong>Baijnath Melaram, we scientifically approach this and reduce the Hazard by taking preventive measures.</strong>
        </p>
      </div>

      <!-- Safety Features Layout: 4 Columns Top, 3 Centered Bottom -->
      <div class="safety-features-wrap">
        <div class="safety-feature-card">
          <h4 class="safety-feature-title">Tested and Certified Equipment</h4>
          <p class="safety-feature-text">All tests are by Government Approved and Recognised 3rd party vendors</p>
        </div>

        <div class="safety-feature-card">
          <h4 class="safety-feature-title">Flashback arrestor</h4>
          <p class="safety-feature-text">Installed on all the cylinders and torch side to reduce the fire hazard.</p>
        </div>

        <div class="safety-feature-card">
          <h4 class="safety-feature-title">Three-way Long/Short gas-cutting torches</h4>
          <p class="safety-feature-text">Performs easy and safe gas cutting on the vessel.</p>
        </div>

        <div class="safety-feature-card">
          <h4 class="safety-feature-title">Asbestos Removal &amp; Disposal (Best Practice)</h4>
          <p class="safety-feature-text">Hazmat Expert employees help Approved 3rd Party vendors to remove and dispose of Asbestos</p>
        </div>

        <div class="safety-feature-card">
          <h4 class="safety-feature-title">NEBOSH Approved PPE</h4>
          <p class="safety-feature-text">3M Masks 6300 &amp; Filter 2091, Fire Retardant Boiler Suits, Helmet, and more.</p>
        </div>

        <div class="safety-feature-card">
          <h4 class="safety-feature-title">HSE training</h4>
          <p class="safety-feature-text">A mix of Internal training is given at regular intervals to all Employees and Workers.</p>
        </div>

        <div class="safety-feature-card">
          <h4 class="safety-feature-title">Emergency Preparedness</h4>
          <p class="safety-feature-text">Rescue Boats, Fire Fighting and First Aid sets are available at several locations. Mock Drills are conducted at regular intervals.</p>
        </div>
      </div>
    </div>

    <!-- Full-View Edge-to-Edge Cinematic Parallax Image Showcase (Outside theme-padding) -->
    <div class="safety-full-image-wrap">
      <div class="safety-full-image-card">
        <img src="<?php echo $imagesurl; ?>greenship-recycling/safety-standards.jpg" alt="We value Safety - Ship Recycling Yard Safety Operations" class="safety-parallax-img" />
      </div>
    </div>
  </section>

  <!-- Policy and Training Section -->
  <section id="section-policy" class="section section-policy">
    <div class="theme-padding">
      <!-- Centered Header: Big Title & Lead Description -->
      <div class="policy-header-wrap">
        <div class="section-title">
          <h2 class="policy-main-heading">
            <span class="policy-word-mask"><span class="policy-word-inner">Policy</span></span>
            <span class="policy-word-mask"><span class="policy-word-inner">and</span></span>
            <span class="policy-word-mask"><span class="policy-word-inner">Training</span></span>
          </h2>
        </div>

        <p class="policy-lead-desc">
          Fostering an ethical, transparent, and legally safeguarded workplace through strict compliance and <strong>continuous workforce empowerment at Baijnath Melaram.</strong>
        </p>
      </div>

      <!-- Wide Hero Visual Banner with Glassmorphic Pill -->
      <div class="policy-hero-banner-wrap">
        <div class="policy-hero-card">
          <img src="<?php echo $imagesurl; ?>greenship-recycling/policy-training.jpg" alt="Policy and Training - Workforce Empowerment Briefing" class="policy-hero-img" />
          <div class="policy-hero-overlay"></div>
          <div class="policy-hero-pill">
            <span class="policy-hero-pill-text">GOVERNANCE &amp; WORKFORCE TRAINING</span>
          </div>
        </div>
      </div>

      <!-- 3-Column Policy Matrix Grid (6 Items) -->
      <div class="policy-grid-wrap">

        <!-- Item 1 -->
        <div class="policy-card">
          <div class="policy-card-top">
            <div class="policy-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
            </div>
            <span class="policy-num">01</span>
          </div>
          <span class="policy-category-tag">Compensation</span>
          <h3 class="policy-card-title">200% over time</h3>
          <p class="policy-card-desc">“200% over time” means working or earning twice the usual rate during overtime or surpassing expectations with exceptional effort.</p>
        </div>

        <!-- Item 2 -->
        <div class="policy-card">
          <div class="policy-card-top">
            <div class="policy-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
            </div>
            <span class="policy-num">02</span>
          </div>
          <span class="policy-category-tag">Benefits &amp; Wellbeing</span>
          <h3 class="policy-card-title">Employee leave benefits</h3>
          <p class="policy-card-desc">Employee leave benefits are provisions that allow employees to take time off work for personal reasons, such as vacations, illness, or family obligations, ensuring work-life balance and job security.</p>
        </div>

        <!-- Item 3 -->
        <div class="policy-card">
          <div class="policy-card-top">
            <div class="policy-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <span class="policy-num">03</span>
          </div>
          <span class="policy-category-tag">Financial Security</span>
          <h3 class="policy-card-title">Employee provident fund</h3>
          <p class="policy-card-desc">Employee Provident Fund (EPF) is a government-mandated savings scheme where employees and employers contribute regularly. The funds accumulate with interest and provide employees financial security and retirement benefits.</p>
        </div>

        <!-- Item 4 -->
        <div class="policy-card">
          <div class="policy-card-top">
            <div class="policy-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
              </svg>
            </div>
            <span class="policy-num">04</span>
          </div>
          <span class="policy-category-tag">Work-Life Balance</span>
          <h3 class="policy-card-title">Weekly off (6-W, 1-O)</h3>
          <p class="policy-card-desc">All workers enjoy a weekly off, ensuring work-life balance and promoting employee well-being.</p>
        </div>

        <!-- Item 5 -->
        <div class="policy-card">
          <div class="policy-card-top">
            <div class="policy-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
              </svg>
            </div>
            <span class="policy-num">05</span>
          </div>
          <span class="policy-category-tag">Ethical Governance</span>
          <h3 class="policy-card-title">Zero child labour</h3>
          <p class="policy-card-desc">We are firmly against child labour in our yard, promoting a safe and ethical work environment.</p>
        </div>

        <!-- Item 6 -->
        <div class="policy-card">
          <div class="policy-card-top">
            <div class="policy-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="3"></circle>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
              </svg>
            </div>
            <span class="policy-num">06</span>
          </div>
          <span class="policy-category-tag">Communication &amp; Forum</span>
          <h3 class="policy-card-title">Worker's needs and complaints</h3>
          <p class="policy-card-desc">Worker's committees, formed through open elections, connect management, HSE, and workers to improve the working environment. They meet monthly, addressing suggestions and complaints from the yard and dormitory to find solutions.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Our Yard Section (Image on Top, Text Below) -->
  <section id="section-yard" class="section section-yard pt-0">
    <div class="theme-padding">
      <!-- Centered Header -->
      <div class="yard-header-wrap">
        <div class="section-title">
          <h2 class="yard-main-heading">
            <span class="yard-word-mask"><span class="yard-word-inner">Our</span></span>
            <span class="yard-word-mask"><span class="yard-word-inner">Yard</span></span>
          </h2>
        </div>

        <p class="yard-lead-desc">
          State-of-the-art green ship recycling facility located at <strong>Alang, Gujarat, operating under stringent Class NK HKC &amp; EU SRR standards.</strong>
        </p>
      </div>

      <!-- 1. Image on Top Showcase with Parallax -->
      <div class="yard-top-image-wrap">
        <div class="yard-top-image-card">
          <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Our Yard - Ship Recycling Yard No. 13, Alang, Gujarat" class="yard-parallax-img" />
          <div class="yard-image-overlay"></div>
          <div class="yard-image-pill">
            <span class="yard-pill-text">YARD NO. 13 &bull; S.B.Y. ALANG, GUJARAT</span>
          </div>
        </div>
      </div>

      <!-- 2. Text Below Details Grid -->
      <div class="yard-details-grid">

        <!-- Card 1: Address -->
        <div class="yard-detail-card">
          <div class="yard-detail-top">
            <div class="yard-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </div>
            <span class="yard-detail-num">01</span>
          </div>
          <span class="yard-category-tag">Plot Location</span>
          <h3 class="yard-card-title">Ship Recycling Yard no. 13</h3>
          <p class="yard-card-text">S.B.Y., Alang - 364150<br>Dist. Bhavnagar, Gujarat, India.</p>
        </div>

        <!-- Card 2: Direct Contact -->
        <div class="yard-detail-card">
          <div class="yard-detail-top">
            <div class="yard-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
            </div>
            <span class="yard-detail-num">02</span>
          </div>
          <span class="yard-category-tag">Direct Helpline</span>
          <h3 class="yard-card-title">Phone</h3>
          <p class="yard-card-text">Reach our yard manager directly for vessel intake and operational support:</p>
          <a href="tel:+919879787952" class="yard-phone-link">
            <span>M: +91 9879787952</span>
          </a>
        </div>

        <!-- Card 3: Yard Capabilities -->
        <div class="yard-detail-card">
          <div class="yard-detail-top">
            <div class="yard-icon-badge">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              </svg>
            </div>
            <span class="yard-detail-num">03</span>
          </div>
          <span class="yard-category-tag">Infrastructure</span>
          <h3 class="yard-card-title">Yard Infrastructure</h3>
          <p class="yard-card-text">100% concrete impermeable yard, 30m jetty landing, heavy-tonnage cranes, and zero-intertidal-contact operations.</p>
        </div>

      </div>
    </div>
  </section>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <?php echo $block_body_end; ?>
</body>

</html>