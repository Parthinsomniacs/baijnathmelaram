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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300..800;1,300..800&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>smruti.css?v=<?php echo time(); ?>">
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
          <span class="section-kicker-text">GREENSHIP RECYCLING</span>
        </div>
        <div class="banner-divider"></div>
        <div class="banner-content-row columns is-vcentered">
          <div class="column is-12-mobile is-12-tablet is-10-desktop">
            <div class="section-title">
              <h1 class="banner-title">
                A Commitment to<br>
                <span class="text-secondary">Green Ship</span> Recycling
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- We Value Our Environment Section (Sticky Stacking Cards Showcase matching Priya Blue) -->
  <section id="section-environment" class="section section-environment">
    <div class="theme-padding">
      
      <!-- Top Title & Description Header -->
      <div class="bm-env-header">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">SUSTAINABLE MARITIME RECYCLING</span>
        </div>
        <div class="section-title">
          <h2 class="bm-env-main-heading">We value <span class="bm-env-highlight">our Environment</span></h2>
        </div>
        <p class="bm-env-main-desc">
          By accomplishing <strong>SOC for HKC, COC for EU SRR from Class NK and AP-Moller Maersk RSRS Compliance</strong>, Baijnath Melaram has made a critical stride towards moving up to the perfect Green Ship Recycling Yard.
        </p>
      </div>

      <!-- Sticky Stacking Cards Container -->
      <div class="bm-env-sticky-cards">

        <!-- Card 1 -->
        <div class="bm-env-sticky-card">
          <div class="bm-env-card-grid">
            <div class="bm-env-card-content">
              <div class="bm-env-card-meta">
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
  <section id="section-welfare" class="section section-welfare">
    <div class="theme-padding">
      
      <!-- Top Title & Description Header (Matching We value our Environment) -->
      <div class="bm-env-header bm-welfare-header">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">WORKFORCE EMPOWERMENT &amp; WELFARE</span>
        </div>
        <div class="section-title">
          <h2 class="bm-env-main-heading">We value <span class="bm-env-highlight">our Worker's Welfare</span></h2>
        </div>
        <p class="bm-env-main-desc">
          At our Baijnath Melaram Ship Recycling Yard, we deeply value the welfare of our workers at the ship recycling yard. Ensuring their well-being is our top priority. <span class="bm-welfare-line-break"><strong>Our commitment to our workers' welfare is integral to our organisation, as their satisfaction directly contributes to our overall success.</strong></span>
        </p>
      </div>

      <div class="bm-welfare-cards-grid-v3">

        <!-- Card 1: Medical Facility -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Medical Facility</h3>
              <p class="bm-welfare-card-desc">First Aid Room, Ambulance and First Aid Kits in case of Emergencies.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare.jpg" alt="Medical Facility - Baijnath Melaram" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

        <!-- Card 2: Policies and Agreements -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Policies and Agreements</h3>
              <p class="bm-welfare-card-desc">The yard manager will ensure that the worker has undergone training at CMB as per his designation and possesses a GMB Certificate.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/policy-training.jpg" alt="Policies and Agreements" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

        <!-- Card 3: Inward/Exit forms -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Inward/Exit forms</h3>
              <p class="bm-welfare-card-desc">If the worker wants to leave, he has to fill resignation letter and get the full and final exit form.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Inward/Exit forms" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

        <!-- Card 4: Induction of Workers -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Induction of Workers</h3>
              <p class="bm-welfare-card-desc">Workers are provided with induction training before they start working in the yard.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/safety-standards.jpg" alt="Induction of Workers" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

        <!-- Card 5: Issuing PPE to Workers -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Issuing PPE to Workers</h3>
              <p class="bm-welfare-card-desc">After induction as well as the appointment, all workers are handed proper NEBOSH-approved PPE.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/workers-welfare-cage.jpg" alt="Issuing PPE to Workers" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

        <!-- Card 6: Dormitory -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Dormitory</h3>
              <p class="bm-welfare-card-desc">A dormitory, fulfilling all ILO Standards, has been provided for all the workers working for the organisation.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>banner/showcase-tech.jpg" alt="Dormitory" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

        <!-- Card 7: Transport -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Transport</h3>
              <p class="bm-welfare-card-desc">Bus Service has been provided for all the workers staying in the dormitory to travel to and fro from the Yard.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/environment-green.jpg" alt="Transport" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

        <!-- Card 8: Emergency Preparedness for Dormitory -->
        <div class="bm-welfare-tilt-card">
          <div class="bm-welfare-card-glow"></div>
          <div class="bm-welfare-card-inner">
            <div class="bm-welfare-card-body">
              <h3 class="bm-welfare-card-title">Emergency Preparedness for Dormitory</h3>
              <p class="bm-welfare-card-desc">Fire Alarms are placed to intimate others. Evacuation Plan, Emergency lights, Muster point and Emergency exits strategically placed.</p>
            </div>
            <div class="bm-welfare-card-media">
              <img src="<?php echo $imagesurl; ?>banner/showcase-steel.jpg" alt="Emergency Preparedness for Dormitory" class="bm-welfare-card-img" loading="lazy" />
              <div class="bm-welfare-media-overlay"></div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- We Value Safety Section -->
  <section id="section-safety" class="section section-safety">
    <div class="theme-padding">
      <!-- Centered Header: Big Title & Lead Description -->
      <div class="safety-header-wrap">
        <div class="section-kicker is-centered">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">SAFETY PROTOCOLS &amp; COMPLIANCE</span>
        </div>
        <div class="section-title">
          <h2 class="safety-main-heading">We value <span class="text-orange">Safety</span></h2>
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
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="Tested and Certified Equipment" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Tested and Certified Equipment</h3>
            <p class="safety-reveal-desc">All heavy machinery, lifting tackle, wire ropes, and gas apparatus undergo mandatory testing and certification by Government Approved and recognized 3rd party inspection agencies before deployment.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="safety-reveal-card" data-safety-card="2">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="Flashback arrestor" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Flashback arrestor</h3>
            <p class="safety-reveal-desc">Installed on all cylinders and torch manifolds to mitigate explosion and fire hazards during cutting operations.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="safety-reveal-card" data-safety-card="3">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="Three-way Gas Torches" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Three-way Gas Torches</h3>
            <p class="safety-reveal-desc">Long and short specialized torches for easy, controlled, and secure gas cutting on vessel shell plates.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="safety-reveal-card" data-safety-card="4">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="Asbestos Removal" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Asbestos Removal</h3>
            <p class="safety-reveal-desc">Certified Hazmat specialists assist approved vendors to safely remove, package, and dispose of asbestos.</p>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="safety-reveal-card" data-safety-card="5">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="NEBOSH Approved PPE" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">NEBOSH Approved PPE</h3>
            <p class="safety-reveal-desc">3M Masks 6300 with 2091 filters, fire-retardant boiler suits, safety helmets, protective boots, and gloves.</p>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="safety-reveal-card" data-safety-card="6">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="HSE Training Programs" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">HSE Training Programs</h3>
            <p class="safety-reveal-desc">A scheduled blend of internal drills and certified external modules given to all employees and yard workers.</p>
          </div>
        </div>

        <!-- Card 7 -->
        <div class="safety-reveal-card" data-safety-card="7">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="Emergency Preparedness & Mock Drills" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Emergency Preparedness &amp; Mock Drills</h3>
            <p class="safety-reveal-desc">Dedicated rescue boats, certified firefighting stations, and medical first-aid stations are permanently deployed across the yard. Periodic live mock drills ensure rapid response readiness in any critical scenario.</p>
          </div>
        </div>

        <!-- Card 8: Confined Space & Gas Free Certification (Fills 4th slot in row 2) -->
        <div class="safety-reveal-card" data-safety-card="8">
          <div class="safety-reveal-icon-wrap">
            <img src="<?php echo $imagesurl; ?>greenship-recycling/icon-certificate1.svg" width="84" height="84" alt="Gas-Free & Confined Space Entry" class="safety-reveal-icon safety-icon-svg" />
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Gas-Free &amp; Confined Space Entry</h3>
            <p class="safety-reveal-desc">Mandatory atmospheric gas testing and certification by approved marine chemists prior to hot work or entry into enclosed compartments.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Policy and Training Section (Wallem Split Sticky Timeline Pattern) -->
  <section id="section-policy" class="section section-policy">
    <div class="theme-padding">
      <div class="policy-wallem-wrap">
        
        <!-- Left Column: Sticky Showcase Card -->
        <div class="policy-sticky-card">
          <div class="policy-sticky-card-inner">
            <div class="policy-sticky-media">
              <img src="<?php echo $imagesurl; ?>greenship-recycling/policy-training.jpg" alt="Policy and Training - Baijnath Melaram" class="policy-sticky-img" />
              <div class="policy-sticky-media-overlay"></div>
            </div>
            <div class="policy-sticky-body">
              <div class="section-kicker">
                <span class="section-kicker-line"></span>
                <span class="section-kicker-text">POLICY &amp; COMPLIANCE</span>
              </div>
              <h2 class="policy-sticky-title">Policy and <span class="policy-highlight">Training</span></h2>
              <p class="policy-sticky-desc">
                Fostering an ethical, transparent, and legally safeguarded workplace through strict compliance, international maritime conventions, and continuous workforce empowerment at Baijnath Melaram.
              </p>
            </div>
          </div>
        </div>

        <!-- Right Column: Scrolling Cards with Connected Progress Timeline -->
        <div class="policy-scroll-col">
          <div class="policy-timeline-container">
            <!-- Vertical Timeline Tracker Line -->
            <div class="policy-timeline-track" aria-hidden="true">
              <div class="policy-timeline-fill"></div>
            </div>

            <!-- List of Policy Step Cards -->
            <div class="policy-step-cards-list">

              <!-- Card 1 -->
              <div class="policy-step-card is-active" data-step="1">
                <div class="policy-timeline-node">
                  <div class="policy-node-ring"></div>
                  <div class="policy-node-dot"></div>
                </div>
                <div class="policy-card-box">
                  <h3 class="policy-step-title">200% over time</h3>
                  <p class="policy-step-desc">“200% over time” means working or earning twice the usual rate during overtime or surpassing expectations with exceptional effort.</p>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="policy-step-card" data-step="2">
                <div class="policy-timeline-node">
                  <div class="policy-node-ring"></div>
                  <div class="policy-node-dot"></div>
                </div>
                <div class="policy-card-box">
                  <h3 class="policy-step-title">Employee leave benefits</h3>
                  <p class="policy-step-desc">Employee leave benefits are provisions that allow employees to take time off work for personal reasons, such as vacations, illness, or family obligations, ensuring work-life balance and job security.</p>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="policy-step-card" data-step="3">
                <div class="policy-timeline-node">
                  <div class="policy-node-ring"></div>
                  <div class="policy-node-dot"></div>
                </div>
                <div class="policy-card-box">
                  <h3 class="policy-step-title">Employee provident fund</h3>
                  <p class="policy-step-desc">Employee Provident Fund (EPF) is a government-mandated savings scheme where employees and employers contribute regularly. The funds accumulate with interest and provide employees financial security and retirement benefits.</p>
                </div>
              </div>

              <!-- Card 4 -->
              <div class="policy-step-card" data-step="4">
                <div class="policy-timeline-node">
                  <div class="policy-node-ring"></div>
                  <div class="policy-node-dot"></div>
                </div>
                <div class="policy-card-box">
                  <h3 class="policy-step-title">Weekly off (6-W, 1-O)</h3>
                  <p class="policy-step-desc">All workers enjoy a weekly off, ensuring work-life balance and promoting employee well-being.</p>
                </div>
              </div>

              <!-- Card 5 -->
              <div class="policy-step-card" data-step="5">
                <div class="policy-timeline-node">
                  <div class="policy-node-ring"></div>
                  <div class="policy-node-dot"></div>
                </div>
                <div class="policy-card-box">
                  <h3 class="policy-step-title">Zero child labour</h3>
                  <p class="policy-step-desc">We are firmly against child labour in our yard, promoting a safe and ethical work environment.</p>
                </div>
              </div>

              <!-- Card 6 -->
              <div class="policy-step-card" data-step="6">
                <div class="policy-timeline-node">
                  <div class="policy-node-ring"></div>
                  <div class="policy-node-dot"></div>
                </div>
                <div class="policy-card-box">
                  <h3 class="policy-step-title">Worker's needs and complaints</h3>
                  <p class="policy-step-desc">Worker's committees, formed through open elections, connect management, HSE, and workers to improve the working environment. They meet monthly, addressing suggestions and complaints from the yard and dormitory to find solutions.</p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Our Yard Section (Custom Orange Themed Showcase matching Reference Mockup) -->
  <section id="section-yard" class="section section-yard">
    <!-- Subtle Coastal Background Ambient Elements -->
    <div class="yard-bg-curves" aria-hidden="true">
      <svg class="yard-bg-arc" viewBox="0 0 600 600" fill="none">
        <circle cx="300" cy="300" r="280" stroke="rgba(229, 145, 47, 0.07)" stroke-width="1.5" />
        <circle cx="300" cy="300" r="230" stroke="rgba(229, 145, 47, 0.04)" stroke-width="1" />
      </svg>
    </div>

    <div class="theme-padding">
      
      <!-- Centered Section Header Bar -->
      <div class="yard-header-wrap">
        <!-- Keyword above Title -->
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">FACILITY &amp; LOCATION</span>
        </div>

        <!-- Main Heading & Sub-motto -->
        <h2 class="yard-main-heading">Our <span class="yard-highlight">Yard</span></h2>
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
                <path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"/>
                <circle cx="12" cy="10" r="3"/>
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
                  <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.25 1.02l-2.2 2.19z"/>
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

  <!-- Interactive 3D Tilt & Spotlight Glow Script (Pure Vanilla JS) -->
  <script>
    (function() {
      const isTouch = window.matchMedia('(pointer: coarse)').matches;
      if (isTouch) return;

      // 1. Safety Cards Hover & Touch Reveal Interaction
      const safetyCards = document.querySelectorAll('.safety-reveal-card');
      const safetyGrid = document.querySelector('.safety-reveal-grid');

      if (safetyCards.length) {
        safetyCards.forEach(card => {
          card.addEventListener('mouseenter', () => {
            safetyCards.forEach(c => c.classList.remove('is-active'));
            card.classList.add('is-active');
          });

          // Touch device support
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
            // Keep card 1 active on desktop mouse leave matching reference design
            safetyCards.forEach(c => c.classList.remove('is-active'));
            if (safetyCards[0]) safetyCards[0].classList.add('is-active');
          });
        }
      }

      // 3. Policy and Training Wallem-Style Scroll Progress & Card Activation
      const policySection = document.querySelector('#section-policy');
      const policyCards = document.querySelectorAll('.policy-step-card');
      const policyFill = document.querySelector('.policy-timeline-fill');

      if (policySection && policyCards.length) {
        let isPolicyTicking = false;

        const updatePolicyTimeline = () => {
          const viewportHeight = window.innerHeight;
          const focusPoint = viewportHeight * 0.42;

          let activeIndex = 0;
          let minDistance = Infinity;

          policyCards.forEach((card, index) => {
            const rect = card.getBoundingClientRect();
            const cardCenter = rect.top + (rect.height / 2);
            const dist = Math.abs(cardCenter - focusPoint);

            if (dist < minDistance && rect.bottom > 60 && rect.top < viewportHeight - 60) {
              minDistance = dist;
              activeIndex = index;
            }
          });

          policyCards.forEach((card, index) => {
            if (index === activeIndex) {
              card.classList.add('is-active');
            } else {
              card.classList.remove('is-active');
            }
          });

          // Update timeline fill height
          if (policyFill) {
            const trackContainer = document.querySelector('.policy-timeline-container');
            const activeNode = policyCards[activeIndex].querySelector('.policy-timeline-node');
            if (trackContainer && activeNode) {
              const containerTop = trackContainer.getBoundingClientRect().top;
              const activeNodeTop = activeNode.getBoundingClientRect().top;
              const fillHeight = Math.max(16, (activeNodeTop - containerTop) + 21);
              policyFill.style.height = `${fillHeight}px`;
            }
          }

          isPolicyTicking = false;
        };

        window.addEventListener('scroll', () => {
          if (!isPolicyTicking) {
            window.requestAnimationFrame(updatePolicyTimeline);
            isPolicyTicking = true;
          }
        }, { passive: true });

        // Click on node/card to smoothly scroll to focal center
        policyCards.forEach((card) => {
          card.addEventListener('click', () => {
            const rect = card.getBoundingClientRect();
            const targetY = window.pageYOffset + rect.top - (window.innerHeight * 0.28);
            window.scrollTo({ top: targetY, behavior: 'smooth' });
          });
        });

        // Initial setup
        updatePolicyTimeline();
      }
    })();
  </script>

  <?php echo $block_body_end; ?>
</body>

</html>