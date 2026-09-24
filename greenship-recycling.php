<?php require_once("inc-global.php"); ?>
<?php
$page = "greenship-recycling";
$pagetype = "onepage";
$pagename = "Greenship Recycling";
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

  <section id="greenship-banner" class="section section-banner p-0">
    <div class="banner-image">
      <img src="<?php echo $imagesurl; ?>greenship-recycling/Banner%20image%20greeny.jpg" width="1980" height="1000" alt="Green Ship Recycling - Baijnath Melaram" class="greenship-banner-img" />
    </div>

    <!-- Banner Content Overlay (Matches Reference Design) -->
    <div class="banner-overlay-wrap">
      <div class="theme-padding">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text" style="color: #ffffff !important;">GREENSHIP RECYCLING</span>
        </div>
        <div class="banner-divider"></div>
        <div class="banner-content-row columns is-vcentered">
          <div class="column is-12-mobile is-12-tablet is-10-desktop">
            <div class="section-title">
              <h1 class="banner-title">
                <span class="banner-word-mask"><span class="banner-word-inner">A</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">Commitment</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">to</span></span><br>
                <span class="banner-word-mask"><span class="banner-word-inner text-secondary">Green</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner text-secondary">Ship</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner">Recycling</span></span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- We Value Our Environment Section (Sticky Stacking Cards Showcase matching Priya Blue) -->
  <section id="section-environment" class="section section-environment section-stacked">

    <!-- Minimal Background Design Elements -->
    <div class="bm-env-bg-decor" aria-hidden="true">
      <!-- Ambient Atmospheric Light Blooms -->
      <div class="bm-env-glow bm-env-glow-1"></div>
      <div class="bm-env-glow bm-env-glow-2"></div>
      <div class="bm-env-glow bm-env-glow-3"></div>

      <!-- Architectural Dot Matrix Grid with Radial Fade -->
      <div class="bm-env-dot-grid"></div>

      <!-- Minimal Geometric Plus Markers -->
      <div class="bm-env-plus bm-env-plus-1">+</div>
      <div class="bm-env-plus bm-env-plus-2">+</div>
      <div class="bm-env-plus bm-env-plus-3">+</div>
    </div>

    <div class="theme-padding">

      <!-- Top Title & Description Header -->
      <div class="bm-env-header">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">SUSTAINABLE MARITIME RECYCLING</span>
        </div>
        <div class="section-title">
          <h2 class="bm-env-main-heading">
            <span class="bm-word-mask"><span class="bm-word-inner">We</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner">value</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner bm-env-highlight">our</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner bm-env-highlight">Environment</span></span>
          </h2>
        </div>
        <h6 class="mb-5">
          By accomplishing <b>SOC for HKC, COC for EU SRR from Class NK and AP-Moller Maersk RSRS Compliance</b>, Baijnath Melaram has made a critical stride towards moving up to the perfect Green Ship Recycling Yard.
        </h6>
      </div>

      <!-- Sticky Stacking Cards Container -->
      <div class="bm-env-sticky-cards">

        <!-- Card 1 -->
        <div class="bm-env-sticky-card">
          <div class="bm-env-card-grid">
            <div class="bm-env-card-content">
              <div class="bm-env-card-meta">
                <span class="bm-env-card-index">01</span>
                <span class="bm-env-card-tag">Containment &amp; Clean Zone</span>
              </div>
              <h3 class="bm-env-card-title">Zero Intertidal Spillage</h3>
              <p class="bm-env-card-desc">Taking comprehensive measures to avoid metal slag touching the intertidal zone, ensuring total marine life preservation and pristine seabed protection.</p>
            </div>
            <div class="bm-env-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/environment-green.jpg" alt="Zero Intertidal Spillage" class="bm-env-card-img" />
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bm-env-sticky-card">
          <div class="bm-env-card-grid">
            <div class="bm-env-card-content">
              <div class="bm-env-card-meta">
                <span class="bm-env-card-index">02</span>
                <span class="bm-env-card-tag">Yard Infrastructure</span>
              </div>
              <h3 class="bm-env-card-title">Impermeable Floor</h3>
              <p class="bm-env-card-desc">100% impermeable reinforced concrete yard with a 30-metre dedicated jetty landing. A vessel lands safely 5 metres from the jetty, preventing any substrate contamination.</p>
            </div>
            <div class="bm-env-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Impermeable Floor" class="bm-env-card-img" />
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bm-env-sticky-card">
          <div class="bm-env-card-grid">
            <div class="bm-env-card-content">
              <div class="bm-env-card-meta">
                <span class="bm-env-card-index">03</span>
                <span class="bm-env-card-tag">Marine Protection</span>
              </div>
              <h3 class="bm-env-card-title">Metal Slag Collector</h3>
              <p class="bm-env-card-desc">100% capture and containment of metal slag while cutting vessel side shells, guaranteeing zero toxic residual discharge into the oceanic environment.</p>
            </div>
            <div class="bm-env-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/safety-standards.jpg" alt="Metal Slag Collector" class="bm-env-card-img" />
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="bm-env-sticky-card">
          <div class="bm-env-card-grid">
            <div class="bm-env-card-content">
              <div class="bm-env-card-meta">
                <span class="bm-env-card-index">04</span>
                <span class="bm-env-card-tag">3rd Party Audits</span>
              </div>
              <h3 class="bm-env-card-title">Environmental Impact Assessment</h3>
              <p class="bm-env-card-desc">Rigorous quarterly laboratory testing of Intertidal Zone water, RO water, Intertidal Zone soil, Noise levels, and Ambient Air quality by government-approved testing agencies.</p>
            </div>
            <div class="bm-env-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/policy-training.jpg" alt="Environmental Impact Assessment" class="bm-env-card-img" />
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="bm-env-sticky-card">
          <div class="bm-env-card-grid">
            <div class="bm-env-card-content">
              <div class="bm-env-card-meta">
                <span class="bm-env-card-index">05</span>
                <span class="bm-env-card-tag">Heavy-Duty Operations</span>
              </div>
              <h3 class="bm-env-card-title">100% lifting</h3>
              <p class="bm-env-card-desc">Zero contact with the intertidal zone using 150-ton and 250-ton capacity high-tonnage cranes to lift and transfer cut sections directly onto the impermeable concrete yard.</p>
            </div>
            <div class="bm-env-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare.jpg" alt="100% Lifting" class="bm-env-card-img" />
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- We Value Our Worker's Welfare Section (With Matching Header) -->
  <section id="section-welfare" class="section section-welfare section-stacked">

    <!-- Minimal Background Design Elements -->
    <div class="bm-welfare-bg-decor" aria-hidden="true">
      <!-- Ambient Atmospheric Light Blooms -->
      <div class="bm-welfare-glow bm-welfare-glow-1"></div>
      <div class="bm-welfare-glow bm-welfare-glow-2"></div>
      <div class="bm-welfare-glow bm-welfare-glow-3"></div>

      <!-- Architectural Dot Matrix Grid with Center Radial Fade -->
      <div class="bm-welfare-dot-grid"></div>

      <!-- Minimal Geometric Plus Markers -->
      <div class="bm-welfare-plus bm-welfare-plus-1">+</div>
      <div class="bm-welfare-plus bm-welfare-plus-2">+</div>
      <div class="bm-welfare-plus bm-welfare-plus-3">+</div>
    </div>

    <div class="theme-padding">

      <!-- Top Title & Description Header (Matching We value our Environment) -->
      <div class="bm-env-header bm-welfare-header">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">WORKFORCE EMPOWERMENT &amp; WELFARE</span>
        </div>
        <div class="section-title">
          <h2 class="bm-env-main-heading">
            <span class="bm-word-mask"><span class="bm-word-inner">We</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner">value</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner bm-env-highlight">our</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner bm-env-highlight">Worker's</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner bm-env-highlight">Welfare</span></span>
          </h2>
        </div>
        <p class="bm-env-main-desc">
          At our Baijnath Melaram Ship Recycling Yard, we deeply value the welfare of our workers at the ship recycling yard. Ensuring their well-being is our top priority. <span class="bm-welfare-line-break"><strong>Our commitment to our workers' welfare is integral to our organisation, as their satisfaction directly contributes to our overall success.</strong></span>
        </p>
      </div>

      <!-- Worker's Welfare Carousel Slider (Matching Reference Design) -->
      <div class="welfare-slider-wrap">
        <div id="welfare-slider" class="splide welfare-slider" aria-label="Worker's Welfare Carousel">
          <div class="splide__track">
            <ul class="splide__list">

              <!-- Slide 1: Medical Facility -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">01</span>
                      <h3 class="bm-welfare-slide-title">Medical Facility</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">First Aid Room, Ambulance and First Aid Kits ready in case of emergencies.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare.jpg" alt="Medical Facility - Baijnath Melaram" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

              <!-- Slide 2: Policies and Agreements -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">02</span>
                      <h3 class="bm-welfare-slide-title">Policies and Agreements</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">The yard manager ensures workers complete CMB training with certified credentials.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>greenship-recycling/policy-training.jpg" alt="Policies and Agreements" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

              <!-- Slide 3: Inward & Exit Forms -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">03</span>
                      <h3 class="bm-welfare-slide-title">Inward &amp; Exit Forms</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">Clear departure processes with structured resignation letters and final exit forms.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Inward and Exit Forms" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

              <!-- Slide 4: Induction of Workers -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">04</span>
                      <h3 class="bm-welfare-slide-title">Induction of Workers</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">Comprehensive mandatory safety induction provided before yard operations begin.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>greenship-recycling/safety-standards.jpg" alt="Induction of Workers" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

              <!-- Slide 5: Issuing Certified PPE -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">05</span>
                      <h3 class="bm-welfare-slide-title">Issuing Certified PPE</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">Every worker receives complete NEBOSH-approved personal protective equipment.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare-cage.jpg" alt="Issuing Certified PPE" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

              <!-- Slide 6: Modern Dormitory -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">06</span>
                      <h3 class="bm-welfare-slide-title">Modern Dormitory</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">Clean living facilities fully adhering to international ILO standards.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>banner/showcase-tech.jpg" alt="Modern Dormitory" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

              <!-- Slide 7: Dedicated Transport -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">07</span>
                      <h3 class="bm-welfare-slide-title">Dedicated Transport</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">Daily bus service for workers traveling safely between dormitory and yard.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>greenship-recycling/environment-green.jpg" alt="Dedicated Transport" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

              <!-- Slide 8: Emergency Preparedness -->
              <li class="splide__slide">
                <div class="bm-welfare-slide-card">
                  <div class="bm-welfare-slide-top">
                    <div class="bm-welfare-slide-header">
                      <span class="bm-welfare-slide-index">08</span>
                      <h3 class="bm-welfare-slide-title">Emergency Preparedness</h3>
                    </div>
                    <p class="bm-welfare-slide-desc">Fire alarms, evacuation plans, emergency lights and muster points strategically placed.</p>
                  </div>
                  <div class="bm-welfare-slide-media">
                    <img src="<?php echo $imagesurl; ?>banner/showcase-steel.jpg" alt="Emergency Preparedness" class="bm-welfare-slide-img" loading="lazy" />
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>

        <!-- Centered Navigation Arrows (Reference Design Match) -->
        <div class="bm-welfare-slider-nav">
          <button type="button" class="bm-welfare-nav-arrow bm-welfare-nav-arrow--prev" aria-label="Previous Slide">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="19" y1="12" x2="5" y2="12"></line>
              <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
          </button>
          <button type="button" class="bm-welfare-nav-arrow bm-welfare-nav-arrow--next" aria-label="Next Slide">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </div>
      </div>

    </div>
  </section>

  <!-- We Value Safety Section -->
  <section id="section-safety" class="section section-safety section-stacked">
    <!-- Minimal Background Design Elements -->
    <div class="bm-safety-bg-decor" aria-hidden="true">
      <!-- Ambient Atmospheric Light Blooms -->
      <div class="bm-safety-glow bm-safety-glow-1"></div>
      <div class="bm-safety-glow bm-safety-glow-2"></div>
      <div class="bm-safety-glow bm-safety-glow-3"></div>

      <!-- Architectural Dot Matrix Grid with Center Radial Fade -->
      <div class="bm-safety-dot-grid"></div>

      <!-- Minimal Geometric Plus Markers -->
      <div class="bm-safety-plus bm-safety-plus-1">+</div>
      <div class="bm-safety-plus bm-safety-plus-2">+</div>
      <div class="bm-safety-plus bm-safety-plus-3">+</div>
    </div>

    <div class="theme-padding">
      <!-- Centered Header: Big Title & Lead Description -->
      <div class="safety-header-wrap">
        <div class="section-kicker is-centered">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">SAFETY PROTOCOLS &amp; COMPLIANCE</span>
          <span class="section-kicker-line"></span>
        </div>
        <div class="section-title">
          <h2 class="safety-main-heading">
            <span class="bm-word-mask"><span class="bm-word-inner">We</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner">value</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner text-orange">Safety</span></span>
          </h2>
        </div>

        <p class="safety-lead-desc">
          Ship Recycling is a labour-intensive industry. Therefore, the chances of an accident are always present. However, at <strong>Baijnath Melaram, we scientifically approach this and reduce the Hazard by taking preventive measures.</strong>
        </p>
      </div>

      <!-- Minimalist Architectural Safety Grid (Hover Reveal Details) -->
      <div class="safety-reveal-grid">

        <!-- Card 1 -->
        <div class="safety-reveal-card is-active" data-safety-card="1">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/1.svg" width="84" height="84" alt="Tested and Certified Equipment" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">01</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">STANDARDS</div>
            <h3 class="safety-reveal-title">Tested and Certified Equipment</h3>
            <p class="safety-reveal-desc">All heavy machinery, lifting tackle, wire ropes, and gas apparatus undergo mandatory testing and certification by Government Approved and recognized 3rd party inspection agencies before deployment.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="safety-reveal-card" data-safety-card="2">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/2.svg" width="84" height="84" alt="Flashback arrestor" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">02</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">PREVENTION</div>
            <h3 class="safety-reveal-title">Flashback arrestor</h3>
            <p class="safety-reveal-desc">Installed on all cylinders and torch manifolds to mitigate explosion and fire hazards during cutting operations.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="safety-reveal-card" data-safety-card="3">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/3.svg" width="84" height="84" alt="Three-way Gas Torches" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">03</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">GAS CUTTING</div>
            <h3 class="safety-reveal-title">Three-way Gas Torches</h3>
            <p class="safety-reveal-desc">Long and short specialized torches for easy, controlled, and secure gas cutting on vessel shell plates.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="safety-reveal-card" data-safety-card="4">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/4.svg" width="84" height="84" alt="Asbestos Removal" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">04</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">HAZMAT</div>
            <h3 class="safety-reveal-title">Asbestos Removal</h3>
            <p class="safety-reveal-desc">Certified Hazmat specialists assist approved vendors to safely remove, package, and dispose of asbestos.</p>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="safety-reveal-card" data-safety-card="5">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/5.svg" width="84" height="84" alt="NEBOSH Approved PPE" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">05</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">PROTECTION</div>
            <h3 class="safety-reveal-title">NEBOSH Approved PPE</h3>
            <p class="safety-reveal-desc">3M Masks 6300 with 2091 filters, fire-retardant boiler suits, safety helmets, protective boots, and gloves.</p>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="safety-reveal-card" data-safety-card="6">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/6.svg" width="84" height="84" alt="HSE Training Programs" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">06</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">EMPOWERMENT</div>
            <h3 class="safety-reveal-title">HSE Training Programs</h3>
            <p class="safety-reveal-desc">A scheduled blend of internal drills and certified external modules given to all employees and yard workers.</p>
          </div>
        </div>

        <!-- Card 7 -->
        <div class="safety-reveal-card" data-safety-card="7">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/7.svg" width="84" height="84" alt="Emergency Preparedness & Mock Drills" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">07</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">READINESS</div>
            <h3 class="safety-reveal-title">Emergency Preparedness &amp; Mock Drills</h3>
            <p class="safety-reveal-desc">Dedicated rescue boats, certified firefighting stations, and medical first-aid stations are permanently deployed across the yard. Periodic live mock drills ensure rapid response readiness in any critical scenario.</p>
          </div>
        </div>

        <!-- Card 8: Confined Space & Gas Free Certification (Fills 4th slot in row 2) -->
        <div class="safety-reveal-card" data-safety-card="8">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="Gas-Free & Confined Space Entry" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-card-watermark" aria-hidden="true">08</div>
          <div class="safety-reveal-content">
            <div class="safety-card-kicker">COMPLIANCE</div>
            <h3 class="safety-reveal-title">Gas-Free &amp; Confined Space Entry</h3>
            <p class="safety-reveal-desc">Mandatory atmospheric gas testing and certification by approved marine chemists prior to hot work or entry into enclosed compartments.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       [COMMENTED OUT] Policy and Training Section - Option 1
       ========================================================================== -->
  <?php /*
  <section id="section-policy-opt1" class="section section-policy">
    <div class="theme-padding">
      
      <!-- Top Title & Description Header -->
      <div class="bm-env-header bm-policy-header">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">POLICY &amp; COMPLIANCE</span>
        </div>
        <div class="section-title">
          <h2 class="bm-env-main-heading">
            <span class="bm-word-mask"><span class="bm-word-inner">Policy</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner">and</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner bm-env-highlight">Training</span></span>
          </h2>
        </div>
        <p class="bm-env-main-desc">
          Fostering an ethical, transparent, and legally safeguarded workplace through strict compliance, international maritime conventions, and continuous workforce empowerment at Baijnath Melaram.
        </p>
      </div>

      <!-- 6 Policy Cards in Worker's Welfare Style (Balanced 3-Column Grid) -->
      <div class="bm-policy-cards-grid">

        <!-- Card 1: 200% over time -->
        <div class="bm-welfare-slide-card bm-policy-card">
          <div class="bm-welfare-slide-top">
            <div class="bm-welfare-slide-header">
              <h3 class="bm-welfare-slide-title">200% over time</h3>
            </div>
            <p class="bm-welfare-slide-desc">“200% over time” means working or earning twice the usual rate during overtime or surpassing expectations with exceptional effort.</p>
          </div>
          <div class="bm-welfare-slide-media">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/policy-training.jpg" alt="200% over time - Baijnath Melaram" class="bm-welfare-slide-img" loading="lazy" />
          </div>
        </div>

        <!-- Card 2: Employee leave benefits -->
        <div class="bm-welfare-slide-card bm-policy-card">
          <div class="bm-welfare-slide-top">
            <div class="bm-welfare-slide-header">
              <h3 class="bm-welfare-slide-title">Employee leave benefits</h3>
            </div>
            <p class="bm-welfare-slide-desc">Employee leave benefits are provisions that allow employees to take time off work for personal reasons, vacations, illness, or family obligations.</p>
          </div>
          <div class="bm-welfare-slide-media">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare.jpg" alt="Employee leave benefits - Baijnath Melaram" class="bm-welfare-slide-img" loading="lazy" />
          </div>
        </div>

        <!-- Card 3: Employee provident fund -->
        <div class="bm-welfare-slide-card bm-policy-card">
          <div class="bm-welfare-slide-top">
            <div class="bm-welfare-slide-header">
              <h3 class="bm-welfare-slide-title">Employee provident fund</h3>
            </div>
            <p class="bm-welfare-slide-desc">Employee Provident Fund (EPF) is a government-mandated savings scheme ensuring continuous financial security and retirement benefits.</p>
          </div>
          <div class="bm-welfare-slide-media">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/safety-standards.jpg" alt="Employee provident fund - Baijnath Melaram" class="bm-welfare-slide-img" loading="lazy" />
          </div>
        </div>

        <!-- Card 4: Weekly off (6-W, 1-O) -->
        <div class="bm-welfare-slide-card bm-policy-card">
          <div class="bm-welfare-slide-top">
            <div class="bm-welfare-slide-header">
              <h3 class="bm-welfare-slide-title">Weekly off (6-W, 1-O)</h3>
            </div>
            <p class="bm-welfare-slide-desc">All workers enjoy a weekly off, ensuring optimal work-life balance, adequate rest, and promoting holistic employee well-being.</p>
          </div>
          <div class="bm-welfare-slide-media">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Weekly off (6-W, 1-O) - Baijnath Melaram" class="bm-welfare-slide-img" loading="lazy" />
          </div>
        </div>

        <!-- Card 5: Zero child labour -->
        <div class="bm-welfare-slide-card bm-policy-card">
          <div class="bm-welfare-slide-top">
            <div class="bm-welfare-slide-header">
              <h3 class="bm-welfare-slide-title">Zero child labour</h3>
            </div>
            <p class="bm-welfare-slide-desc">We are firmly committed against child labour in our yard, maintaining strict age verification and promoting a safe, ethical work environment.</p>
          </div>
          <div class="bm-welfare-slide-media">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/environment-green.jpg" alt="Zero child labour - Baijnath Melaram" class="bm-welfare-slide-img" loading="lazy" />
          </div>
        </div>

        <!-- Card 6: Worker's needs & complaints -->
        <div class="bm-welfare-slide-card bm-policy-card">
          <div class="bm-welfare-slide-top">
            <div class="bm-welfare-slide-header">
              <h3 class="bm-welfare-slide-title">Worker's needs &amp; complaints</h3>
            </div>
            <p class="bm-welfare-slide-desc">Worker committees formed through open elections meet monthly with management and HSE, addressing suggestions and complaints transparently.</p>
          </div>
          <div class="bm-welfare-slide-media">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare-cage.jpg" alt="Worker's needs and complaints - Baijnath Melaram" class="bm-welfare-slide-img" loading="lazy" />
          </div>
        </div>

      </div>

    </div>
  </section>
  */ ?>

  <!-- ==========================================================================
       Policy and Training Section (Architectural Staggered Layout)
       ========================================================================== -->
  <section id="section-policy" class="section section-policy section-policy-option2 section-stacked">
    <!-- Minimal Background Design Elements -->
    <div class="bm-policy-bg-decor" aria-hidden="true">
      <!-- Ambient Atmospheric Light Blooms -->
      <div class="bm-policy-glow bm-policy-glow-1"></div>
      <div class="bm-policy-glow bm-policy-glow-2"></div>
      <div class="bm-policy-glow bm-policy-glow-3"></div>

      <!-- Architectural Dot Matrix Grid with Center Radial Fade -->
      <div class="bm-policy-dot-grid"></div>

      <!-- Minimal Geometric Plus Markers -->
      <div class="bm-policy-plus bm-policy-plus-1">+</div>
      <div class="bm-policy-plus bm-policy-plus-2">+</div>
      <div class="bm-policy-plus bm-policy-plus-3">+</div>
    </div>

    <div class="theme-padding">

      <!-- Header -->
      <div class="bm-env-header bm-policy-header">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">POLICY &amp; COMPLIANCE</span>
        </div>
        <div class="section-title">
          <h2 class="bm-env-main-heading">
            <span class="bm-word-mask"><span class="bm-word-inner">Policy</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner">and</span></span>
            <span class="bm-word-mask"><span class="bm-word-inner bm-env-highlight">Training</span></span>
          </h2>
        </div>
        <p class="bm-env-main-desc">
          Fostering an ethical, transparent, and legally safeguarded workplace through strict compliance, international maritime conventions, and continuous workforce empowerment at Baijnath Melaram.
        </p>
      </div>

      <!-- Sarip Architectural Showcase: Top 3 Cards + Middle Image + Bottom 3 Cards -->
      <div class="sarip-showcase-wrap">

        <!-- Top 3 Staggered Cards (Almond - Orange - Almond) -->
        <div class="sarip-cards-row sarip-cards-top">

          <!-- Card 1 (Almond) -->
          <div class="sarip-box sarip-box-almond sarip-box-01">
            <div class="sarip-box-top">
              <span class="sarip-kicker">OVERTIME POLICY</span>
              <p class="sarip-box-desc">“200% over time” means working or earning twice the usual rate during overtime or surpassing expectations with exceptional effort.</p>
            </div>
            <div class="sarip-box-bottom">
              <div class="sarip-num-wrap">
                <span class="sarip-num">200%</span>
              </div>
              <div class="sarip-num-label">Overtime Pay Rate</div>
            </div>
          </div>

          <!-- Card 2 (Orange - Extended Down) -->
          <div class="sarip-box sarip-box-orange sarip-box-02">
            <div class="sarip-box-top">
              <span class="sarip-kicker" style="color: #ffffff !important;">EMPLOYEE BENEFITS</span>
              <p class="sarip-box-desc">Comprehensive leave provisions allowing employees to take time off work for personal reasons, vacations, illness, or family obligations.</p>
            </div>
            <div class="sarip-box-bottom">
              <div class="sarip-num-wrap">
                <span class="sarip-num">100%</span>
              </div>
              <div class="sarip-num-label">Paid Leave Provisions</div>
            </div>
          </div>

          <!-- Card 3 (Almond - Elevated Up) -->
          <div class="sarip-box sarip-box-almond sarip-box-03">
            <div class="sarip-box-top">
              <span class="sarip-kicker">SOCIAL SECURITY</span>
              <p class="sarip-box-desc">Government-mandated savings scheme ensuring continuous financial security and retirement benefits for all yard workers.</p>
            </div>
            <div class="sarip-box-bottom">
              <div class="sarip-num-wrap">
                <span class="sarip-num">EPF+</span>
              </div>
              <div class="sarip-num-label">Provident Fund Guarantee</div>
            </div>
          </div>

        </div>

        <!-- Middle Full-Width Cinematic Yard Image -->
        <div class="sarip-main-img-wrap">
          <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Baijnath Melaram Ship Recycling Yard" class="sarip-main-img" loading="lazy" />
          <div class="sarip-img-overlay"></div>
        </div>

        <!-- Bottom 3 Staggered Cards (Orange - Almond - Orange) -->
        <div class="sarip-cards-row sarip-cards-bottom">

          <!-- Card 4 (Orange - Extended into Image) -->
          <div class="sarip-box sarip-box-orange sarip-box-04">
            <div class="sarip-box-top">
              <span class="sarip-kicker" style="color: #ffffff !important;">WORK-LIFE BALANCE</span>
              <p class="sarip-box-desc">Guaranteed weekly rest day (6 days working, 1 day off) ensuring optimal physical recovery, rest, and holistic employee well-being.</p>
            </div>
            <div class="sarip-box-bottom">
              <div class="sarip-num-wrap">
                <span class="sarip-num">6:1</span>
              </div>
              <div class="sarip-num-label">Weekly Rest Schedule</div>
            </div>
          </div>

          <!-- Card 5 (Almond - Lower Level) -->
          <div class="sarip-box sarip-box-almond sarip-box-05">
            <div class="sarip-box-top">
              <span class="sarip-kicker">ETHICAL STANDARDS</span>
              <p class="sarip-box-desc">Firm zero-tolerance commitment against child labour in our yard, maintaining strict age verification and ethical standards.</p>
            </div>
            <div class="sarip-box-bottom">
              <div class="sarip-num-wrap">
                <span class="sarip-num">0%</span>
              </div>
              <div class="sarip-num-label">Child Labour Tolerance</div>
            </div>
          </div>

          <!-- Card 6 (Orange - Extended into Image) -->
          <div class="sarip-box sarip-box-orange sarip-box-06">
            <div class="sarip-box-top">
              <span class="sarip-kicker" style="color: #ffffff !important;">WORKER COMMITTEE</span>
              <p class="sarip-box-desc">Democratic worker committees meeting monthly with management and HSE, addressing suggestions and complaints transparently.</p>
            </div>
            <div class="sarip-box-bottom">
              <div class="sarip-num-wrap">
                <span class="sarip-num">24/7</span>
              </div>
              <div class="sarip-num-label">Grievance Redressal</div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Our Yard Section (Custom Orange Themed Showcase matching Reference Mockup) -->
  <section id="section-yard" class="section section-yard section-stacked">
    <!-- Minimal Background Design Elements -->
    <div class="bm-yard-bg-decor" aria-hidden="true">
      <!-- Ambient Atmospheric Light Blooms -->
      <div class="bm-yard-glow bm-yard-glow-1"></div>
      <div class="bm-yard-glow bm-yard-glow-2"></div>
      <div class="bm-yard-glow bm-yard-glow-3"></div>

      <!-- Architectural Dot Matrix Grid with Center Radial Fade -->
      <div class="bm-yard-dot-grid"></div>

      <!-- Minimal Geometric Plus Markers -->
      <div class="bm-yard-plus bm-yard-plus-1">+</div>
      <div class="bm-yard-plus bm-yard-plus-2">+</div>
      <div class="bm-yard-plus bm-yard-plus-3">+</div>
    </div>

    <div class="theme-padding">

      <!-- Centered Section Header Bar -->
      <div class="yard-header-wrap">
        <!-- Keyword above Title -->
        <div class="section-kicker is-centered">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">FACILITY &amp; LOCATION</span>
          <span class="section-kicker-line"></span>
        </div>

        <!-- Main Heading & Sub-motto -->
        <h2 class="yard-main-heading">
          <span class="bm-word-mask"><span class="bm-word-inner">Our</span></span>
          <span class="bm-word-mask"><span class="bm-word-inner yard-highlight">Yard</span></span>
        </h2>
        <p class="yard-sub-motto">WHERE RESPONSIBLE RECYCLING BEGINS</p>
      </div>

      <!-- Main 2-Column Showcase Grid -->
      <div class="yard-showcase-grid">

        <!-- Left: Clean Natural Yard Photo Card -->
        <div class="yard-photo-card-wrap">
          <div class="yard-photo-card">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Our Yard - Ship Recycling Yard no. 13, Alang, Gujarat" class="yard-photo-img" loading="lazy" />
          </div>
        </div>

        <!-- Right: Light Theme Showcase Card with Animated India Map -->
        <div class="yard-light-master-card">

          <!-- Content Left Inside Light Card -->
          <div class="yard-card-content">

            <!-- Category Tag -->
            <div class="yard-card-tag">
              <svg class="yard-card-tag-icon" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
              <span class="yard-card-tag-text">YARD</span>
            </div>

            <!-- Heading inside card -->
            <h3 class="yard-card-title">Ship Recycling Yard <span class="yard-card-title-highlight">No. 13,</span></h3>

            <!-- Address Lines -->
            <p class="yard-card-address">
              S.B.Y., Alang - 364150 Dist. Bhavnagar,<br>
              Gujarat. India.
            </p>

            <!-- Accent Orange Line -->
            <div class="yard-card-divider" aria-hidden="true"></div>

            <!-- Phone Call Block with Clear Title & Description Hierarchy -->
            <div class="yard-phone-container">
              <a href="tel:+919879787952" class="yard-phone-circle-btn" aria-label="Call Yard">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                  <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.25 1.02l-2.2 2.19z" />
                </svg>
              </a>
              <div class="yard-phone-info">
                <span class="yard-phone-title">Phone</span>
                <a href="tel:+919879787952" class="yard-phone-number">+91 9879787952</a>
              </div>
            </div>

          </div>

          <!-- Graphic Right Inside Light Card (India Vector Map with Pulsing Alang Beacon) -->
          <div class="yard-card-map-area">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/india-map.svg" alt="India Map highlighting Alang, Gujarat" class="yard-card-map-graphic" loading="lazy" />
          </div>

        </div>

      </div>

    </div>
  </section>



  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>

  <!-- GSAP ScrollTrigger & Interactive Experience Scripts (Strictly at End of Page) -->
  <script>
    (function() {
      // 1. Accessibility: Check for reduced motion
      const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      // 2. Initialize GSAP & ScrollTrigger Animations
      function initGreenshipAnimations() {
        if (typeof gsap === "undefined") return;
        if (typeof ScrollTrigger !== "undefined") {
          gsap.registerPlugin(ScrollTrigger);
        }

        if (prefersReducedMotion) {
          // If reduced motion is preferred, immediately ensure everything is visible
          document.querySelectorAll('.banner-word-inner, .bm-word-inner').forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'none';
          });
          return;
        }

        /* ------------------------------------------------------------------------
           A. Hero Banner Animation (On Load)
        ------------------------------------------------------------------------ */
        const banner = document.querySelector('#greenship-banner');
        if (banner) {
          const kicker = banner.querySelector('.section-kicker');
          const bannerWords = banner.querySelectorAll('.banner-word-inner');

          const heroTl = gsap.timeline({
            delay: 0.15
          });

          if (kicker) {
            heroTl.fromTo(kicker, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out'
            }, 0.1);
          }

          if (bannerWords.length) {
            heroTl.fromTo(bannerWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.95,
              stagger: 0.07,
              ease: 'power3.out'
            }, 0.2);
          }
        }

        /* ------------------------------------------------------------------------
           B. Environment Section Animation
        ------------------------------------------------------------------------ */
        const envSec = document.querySelector('#section-environment');
        if (envSec) {
          const envKicker = envSec.querySelector('.section-kicker');
          const envWords = envSec.querySelectorAll('.bm-word-inner');
          const envDesc = envSec.querySelector('.bm-env-main-desc');
          const envCards = envSec.querySelectorAll('.bm-env-sticky-card');

          const envTl = gsap.timeline({
            scrollTrigger: {
              trigger: envSec,
              start: 'top 80%',
              once: true
            }
          });

          if (envKicker) {
            envTl.fromTo(envKicker, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.5,
              ease: 'power2.out'
            }, 0);
          }
          if (envWords.length) {
            envTl.fromTo(envWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          }
          if (envDesc) {
            envTl.fromTo(envDesc, {
              y: 25,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.7,
              ease: 'power2.out'
            }, 0.25);
          }

          // Individual sticky card entrance
          if (envCards.length) {
            envCards.forEach((card) => {
              gsap.fromTo(card, {
                y: 50,
                opacity: 0,
                scale: 0.97
              }, {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: 'power2.out',
                clearProps: 'transform,opacity',
                scrollTrigger: {
                  trigger: card,
                  start: 'top 86%',
                  once: true
                }
              });
            });
          }
        }

        /* ------------------------------------------------------------------------
           C. Worker's Welfare Section Animation
        ------------------------------------------------------------------------ */
        const welfareSec = document.querySelector('#section-welfare');
        if (welfareSec) {
          const welfareKicker = welfareSec.querySelector('.section-kicker');
          const welfareWords = welfareSec.querySelectorAll('.bm-word-inner');
          const welfareDesc = welfareSec.querySelector('.bm-env-main-desc');
          const welfareSlider = welfareSec.querySelector('.welfare-slider-wrap');

          const welfareTl = gsap.timeline({
            scrollTrigger: {
              trigger: welfareSec,
              start: 'top 80%',
              once: true
            }
          });

          if (welfareKicker) {
            welfareTl.fromTo(welfareKicker, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.5,
              ease: 'power2.out'
            }, 0);
          }
          if (welfareWords.length) {
            welfareTl.fromTo(welfareWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          }
          if (welfareDesc) {
            welfareTl.fromTo(welfareDesc, {
              y: 25,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.7,
              ease: 'power2.out'
            }, 0.25);
          }

          if (welfareSlider) {
            gsap.fromTo(welfareSlider, {
              y: 40,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.85,
              ease: 'power2.out',
              clearProps: 'transform,opacity',
              scrollTrigger: {
                trigger: welfareSlider,
                start: 'top 85%',
                once: true
              }
            });
          }
        }

        /* ------------------------------------------------------------------------
           D. Safety Section Animation
        ------------------------------------------------------------------------ */
        const safetySec = document.querySelector('#section-safety');
        if (safetySec) {
          const safetyKicker = safetySec.querySelector('.section-kicker');
          const safetyWords = safetySec.querySelectorAll('.bm-word-inner');
          const safetyDesc = safetySec.querySelector('.safety-lead-desc');
          const safetyCards = safetySec.querySelectorAll('.safety-reveal-card');

          const safetyTl = gsap.timeline({
            scrollTrigger: {
              trigger: safetySec,
              start: 'top 80%',
              once: true
            }
          });

          if (safetyKicker) {
            safetyTl.fromTo(safetyKicker, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.5,
              ease: 'power2.out'
            }, 0);
          }
          if (safetyWords.length) {
            safetyTl.fromTo(safetyWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          }
          if (safetyDesc) {
            safetyTl.fromTo(safetyDesc, {
              y: 25,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.7,
              ease: 'power2.out'
            }, 0.25);
          }

          if (safetyCards.length) {
            gsap.fromTo(safetyCards, {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.7,
              stagger: 0.06,
              ease: 'power2.out',
              clearProps: 'all',
              scrollTrigger: {
                trigger: '.safety-reveal-grid',
                start: 'top 82%',
                once: true
              }
            });
          }
        }

        /* ------------------------------------------------------------------------
           E. Policy and Training Section Animation
        ------------------------------------------------------------------------ */
        const policySec = document.querySelector('#section-policy');
        if (policySec) {
          const policyKicker = policySec.querySelector('.section-kicker');
          const policyWords = policySec.querySelectorAll('.bm-word-inner');
          const policyDesc = policySec.querySelector('.bm-env-main-desc');
          const policyCards = policySec.querySelectorAll('.bm-policy-card');

          const policyTl = gsap.timeline({
            scrollTrigger: {
              trigger: policySec,
              start: 'top 80%',
              once: true
            }
          });

          if (policyKicker) {
            policyTl.fromTo(policyKicker, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.5,
              ease: 'power2.out'
            }, 0);
          }
          if (policyWords.length) {
            policyTl.fromTo(policyWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          }
          if (policyDesc) {
            policyTl.fromTo(policyDesc, {
              y: 25,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.7,
              ease: 'power2.out'
            }, 0.25);
          }

          if (policyCards.length) {
            gsap.fromTo(policyCards, {
              y: 40,
              opacity: 0,
              scale: 0.96
            }, {
              y: 0,
              opacity: 1,
              scale: 1,
              duration: 0.75,
              stagger: 0.08,
              ease: 'power2.out',
              clearProps: 'transform,opacity',
              scrollTrigger: {
                trigger: '.bm-policy-cards-grid',
                start: 'top 82%',
                once: true
              }
            });
          }
        }

        /* ------------------------------------------------------------------------
           E. Policy & Training Section (Sarip Staggered) Animation
        ------------------------------------------------------------------------ */
        const policyOpt2Sec = document.querySelector('.section-policy-option2') || document.querySelector('#section-policy');
        if (policyOpt2Sec) {
          const p2Kicker = policyOpt2Sec.querySelector('.section-kicker');
          const p2Words = policyOpt2Sec.querySelectorAll('.bm-word-inner');
          const p2Desc = policyOpt2Sec.querySelector('.bm-env-main-desc');
          const topBoxes = policyOpt2Sec.querySelectorAll('.sarip-cards-top .sarip-box');
          const bottomBoxes = policyOpt2Sec.querySelectorAll('.sarip-cards-bottom .sarip-box');
          const mainImg = policyOpt2Sec.querySelector('.sarip-main-img');

          const p2Tl = gsap.timeline({
            scrollTrigger: {
              trigger: policyOpt2Sec,
              start: 'top 80%',
              once: true
            }
          });

          if (p2Kicker) p2Tl.fromTo(p2Kicker, {
            y: 15,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.5,
            ease: 'power2.out'
          }, 0);
          if (p2Words.length) p2Tl.fromTo(p2Words, {
            y: '115%',
            opacity: 0
          }, {
            y: '0%',
            opacity: 1,
            duration: 0.85,
            stagger: 0.06,
            ease: 'power3.out'
          }, 0.1);
          if (p2Desc) p2Tl.fromTo(p2Desc, {
            y: 25,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: 0.7,
            ease: 'power2.out'
          }, 0.25);

          if (topBoxes.length) {
            gsap.fromTo(topBoxes, {
              y: 45,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              stagger: 0.1,
              ease: 'power2.out',
              clearProps: 'transform,opacity',
              scrollTrigger: {
                trigger: '.sarip-cards-top',
                start: 'top 85%',
                once: true
              }
            });
          }

          const mainImgWrap = policyOpt2Sec.querySelector('.sarip-main-img-wrap');
          if (mainImgWrap && mainImg) {
            /* Container entrance animation */
            gsap.fromTo(mainImgWrap, {
              opacity: 0,
              y: 40,
              scale: 0.97
            }, {
              opacity: 1,
              y: 0,
              scale: 1,
              duration: 1,
              ease: 'power2.out',
              scrollTrigger: {
                trigger: mainImgWrap,
                start: 'top 85%',
                once: true
              }
            });

            /* Continuous Parallax & Depth Zoom on Scroll - Zero Gap Safe */
            gsap.fromTo(mainImg, {
              scale: 1.12
            }, {
              scale: 1.0,
              ease: 'none',
              scrollTrigger: {
                trigger: mainImgWrap,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1.2
              }
            });
          }

          if (bottomBoxes.length) {
            gsap.fromTo(bottomBoxes, {
              y: 45,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              stagger: 0.1,
              ease: 'power2.out',
              clearProps: 'transform,opacity',
              scrollTrigger: {
                trigger: '.sarip-cards-bottom',
                start: 'top 85%',
                once: true
              }
            });
          }
        }

        /* ------------------------------------------------------------------------
           F. Our Yard Section Animation
        ------------------------------------------------------------------------ */
        const yardSec = document.querySelector('#section-yard');
        if (yardSec) {
          const yardKicker = yardSec.querySelector('.section-kicker');
          const yardWords = yardSec.querySelectorAll('.bm-word-inner');
          const yardMotto = yardSec.querySelector('.yard-sub-motto');
          const photoCard = yardSec.querySelector('.yard-photo-card-wrap');
          const masterCard = yardSec.querySelector('.yard-light-master-card');

          const yardTl = gsap.timeline({
            scrollTrigger: {
              trigger: yardSec,
              start: 'top 78%',
              once: true
            }
          });

          if (yardKicker) {
            yardTl.fromTo(yardKicker, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.5,
              ease: 'power2.out'
            }, 0);
          }
          if (yardWords.length) {
            yardTl.fromTo(yardWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out'
            }, 0.1);
          }
          if (yardMotto) {
            yardTl.fromTo(yardMotto, {
              y: 15,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out'
            }, 0.2);
          }

          if (photoCard) {
            gsap.fromTo(photoCard, {
              x: -45,
              opacity: 0
            }, {
              x: 0,
              opacity: 1,
              duration: 0.9,
              ease: 'power3.out',
              clearProps: 'transform,opacity',
              scrollTrigger: {
                trigger: '.yard-showcase-grid',
                start: 'top 82%',
                once: true
              }
            });
          }

          if (masterCard) {
            gsap.fromTo(masterCard, {
              x: 45,
              opacity: 0
            }, {
              x: 0,
              opacity: 1,
              duration: 0.9,
              ease: 'power3.out',
              clearProps: 'transform,opacity',
              scrollTrigger: {
                trigger: '.yard-showcase-grid',
                start: 'top 82%',
                once: true
              }
            });
          }
        }

        // Refresh ScrollTrigger after elements settle
        setTimeout(() => {
          if (typeof ScrollTrigger !== "undefined") {
            ScrollTrigger.refresh();
          }
        }, 150);
      }

      /* ------------------------------------------------------------------------
         3. Safety Cards Hover & Touch Reveal Interaction
      ------------------------------------------------------------------------ */
      const safetyCards = document.querySelectorAll('.safety-reveal-card');
      const safetyGrid = document.querySelector('.safety-reveal-grid');

      if (safetyCards.length) {
        safetyCards.forEach(card => {
          card.addEventListener('mouseenter', () => {
            safetyCards.forEach(c => c.classList.remove('is-active'));
            card.classList.add('is-active');
          });

          card.addEventListener('click', () => {
            const wasActive = card.classList.contains('is-active');
            safetyCards.forEach(c => c.classList.remove('is-active'));
            if (!wasActive) {
              card.classList.add('is-active');
            }
          });
        });

        if (safetyGrid) {
          safetyGrid.addEventListener('mouseleave', () => {
            safetyCards.forEach(c => c.classList.remove('is-active'));
            if (safetyCards[0]) safetyCards[0].classList.add('is-active');
          });
        }
      }



      /* ------------------------------------------------------------------------
         4. Worker's Welfare Splide Slider Initialization (Reference Design)
      ------------------------------------------------------------------------ */
      function initWelfareSlider() {
        const sliderEl = document.querySelector('#welfare-slider');
        if (!sliderEl || typeof Splide === 'undefined') return;

        const welfareSplide = new Splide('#welfare-slider', {
          type: 'loop',
          perPage: 3,
          perMove: 1,
          focus: 'center',
          trimSpace: false,
          gap: '30px',
          padding: {
            left: 0,
            right: 0
          },
          arrows: false,
          pagination: false,
          speed: 650,
          easing: 'cubic-bezier(0.25, 1, 0.5, 1)',
          updateOnMove: true,
          breakpoints: {
            1216: {
              perPage: 2,
              gap: '20px',
              focus: 0
            },
            768: {
              perPage: 1,
              gap: '16px',
              focus: 'center'
            }
          }
        });

        welfareSplide.mount();

        // Frevanta Interaction: Clicking any side card immediately slides it into center
        welfareSplide.on('click', (slide) => {
          if (slide && typeof slide.index === 'number') {
            welfareSplide.go(slide.index);
          }
        });

        const prevBtn = document.querySelector('.bm-welfare-nav-arrow--prev');
        const nextBtn = document.querySelector('.bm-welfare-nav-arrow--next');

        if (prevBtn) {
          prevBtn.addEventListener('click', () => welfareSplide.go('<'));
        }
        if (nextBtn) {
          nextBtn.addEventListener('click', () => welfareSplide.go('>'));
        }
      }

      // Initialize all animations & sliders when document is ready
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
          initGreenshipAnimations();
          initWelfareSlider();
        });
      } else {
        initGreenshipAnimations();
        initWelfareSlider();
      }
    })();
  </script>

  <?php echo $block_body_end; ?>
</body>

</html>