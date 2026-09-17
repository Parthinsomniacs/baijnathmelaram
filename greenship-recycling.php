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
        <div class="safety-reveal-card span-4-cols is-active" data-safety-card="1">
          <div class="safety-reveal-icon-wrap">
            <svg class="safety-reveal-icon" width="84" height="84" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <!-- Lifting Swivel Ring & Heavy Hook -->
              <circle cx="26" cy="11" r="5"></circle>
              <path d="M26 16v6"></path>
              <path d="M21 22h10"></path>
              <path d="M26 22c7 0 10 4 10 10 0 9-7 15-15 15-7.5 0-13-5.5-13-13 0-5 3.5-9 8-9 2.5 0 4.5 1.5 4.5 4 0 2-1.5 3.5-3.5 3.5"></path>
              <line x1="26" y1="22" x2="20" y2="35"></line>
              <!-- Certified Inspection Badge with Checkmark -->
              <circle cx="46" cy="30" r="10"></circle>
              <path d="M42 30l3 3 6-6" class="icon-accent-ray" stroke-width="2.5"></path>
              <path d="M43 40l-2 7 5-2.5 5 2.5-2-7"></path>
            </svg>
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Tested and Certified Equipment</h3>
            <p class="safety-reveal-desc">All heavy machinery, lifting tackle, wire ropes, and gas apparatus undergo mandatory testing and certification by Government Approved and recognized 3rd party inspection agencies before deployment.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="safety-reveal-card span-4-cols" data-safety-card="2">
          <div class="safety-reveal-icon-wrap">
            <svg class="safety-reveal-icon" width="84" height="84" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <!-- Industrial Gas Cylinder -->
              <rect x="12" y="24" width="16" height="32" rx="4"></rect>
              <path d="M16 24v-6h8v6"></path>
              <line x1="15" y1="14" x2="25" y2="14"></line>
              <circle cx="26" cy="19" r="3.5"></circle>
              <!-- High-Pressure Supply Line -->
              <path d="M24 19h13v10"></path>
              <!-- Flashback Arrestor Quenching Unit -->
              <rect x="31" y="29" width="22" height="13" rx="3"></rect>
              <line x1="38" y1="29" x2="38" y2="42"></line>
              <line x1="45" y1="29" x2="45" y2="42"></line>
              <!-- Safe Gas Outlet -->
              <path d="M53 35.5h4v12"></path>
              <!-- Flame Arrest & Directional Barrier -->
              <path d="M42 9c-2 2.5-4 4.5-4 7a4 4 0 0 0 8 0c0-2.5-2-4.5-4-7z" class="icon-accent-ray"></path>
              <line x1="35" y1="20" x2="49" y2="12" class="icon-accent-ray" stroke-width="2.2"></line>
            </svg>
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Flashback arrestor</h3>
            <p class="safety-reveal-desc">Installed on all cylinders and torch manifolds to mitigate explosion and fire hazards during cutting operations.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="safety-reveal-card span-4-cols" data-safety-card="3">
          <div class="safety-reveal-icon-wrap">
            <svg class="safety-reveal-icon" width="84" height="84" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <!-- Torch Grip Handle -->
              <path d="M10 50l7-7 4 4-7 7z"></path>
              <line x1="7" y1="53" x2="10" y2="50"></line>
              <!-- Dual Gas Inlets & Control Knobs -->
              <circle cx="19" cy="41" r="2.5"></circle>
              <circle cx="23" cy="45" r="2.5"></circle>
              <!-- 3-Way Delivery Tubes -->
              <path d="M20 37l20-17"></path>
              <path d="M23 40l20-17"></path>
              <path d="M26 43l20-17"></path>
              <!-- High Pressure Oxygen Cutting Lever -->
              <path d="M21 34l15-12"></path>
              <!-- Cutting Head Nozzle Tip -->
              <path d="M43 18l5-4 4 4-4 5z"></path>
              <path d="M49 16l5-4"></path>
              <!-- Focused Cutting Flame Jet & Sparks -->
              <path d="M54 12l5-4-2 5z" class="icon-accent-ray" stroke-width="2.2"></path>
              <line x1="58" y1="6" x2="56" y2="9" class="icon-accent-ray"></line>
              <line x1="62" y1="12" x2="59" y2="13" class="icon-accent-ray"></line>
            </svg>
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Three-way Gas Torches</h3>
            <p class="safety-reveal-desc">Long and short specialized torches for easy, controlled, and secure gas cutting on vessel shell plates.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="safety-reveal-card span-4-cols" data-safety-card="4">
          <div class="safety-reveal-icon-wrap">
            <svg class="safety-reveal-icon" width="84" height="84" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <!-- Respirator Facepiece Silicone Seal -->
              <path d="M32 15c-6 0-11 5-13 13 0 10 5 18 13 22 8-4 13-12 13-22 0-8-5-13-13-13z"></path>
              <!-- Central Exhaust Valve -->
              <circle cx="32" cy="38" r="4.5"></circle>
              <line x1="32" y1="35" x2="32" y2="41"></line>
              <line x1="29" y1="38" x2="35" y2="38"></line>
              <!-- Left P100 Filter Canister -->
              <rect x="8" y="27" width="11" height="18" rx="4"></rect>
              <line x1="19" y1="35" x2="22" y2="35"></line>
              <line x1="12" y1="32" x2="15" y2="32"></line>
              <line x1="12" y1="40" x2="15" y2="40"></line>
              <!-- Right P100 Filter Canister -->
              <rect x="45" y="27" width="11" height="18" rx="4"></rect>
              <line x1="42" y1="35" x2="45" y2="35"></line>
              <line x1="49" y1="32" x2="52" y2="32"></line>
              <line x1="49" y1="40" x2="52" y2="40"></line>
              <!-- Secure Harness Straps -->
              <path d="M23 20l-10-8"></path>
              <path d="M41 20l10-8"></path>
              <path d="M21 44l-8 7"></path>
              <path d="M43 44l8 7"></path>
              <!-- Particulate Dust Hazard Shield Accent -->
              <circle cx="32" cy="9" r="1.5" class="icon-accent-ray" fill="currentColor"></circle>
              <circle cx="24" cy="11" r="1.2" class="icon-accent-ray" fill="currentColor"></circle>
              <circle cx="40" cy="11" r="1.2" class="icon-accent-ray" fill="currentColor"></circle>
            </svg>
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Asbestos Removal</h3>
            <p class="safety-reveal-desc">Certified Hazmat specialists assist approved vendors to safely remove, package, and dispose of asbestos.</p>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="safety-reveal-card span-3-cols" data-safety-card="5">
          <div class="safety-reveal-icon-wrap">
            <svg class="safety-reveal-icon" width="84" height="84" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <!-- Hard Hat Dome -->
              <path d="M14 36c0-11 8-19 18-19s18 8 18 19"></path>
              <!-- Top Impact Ridges -->
              <path d="M28 17v-4h8v4"></path>
              <path d="M24 24c3-4 5-6 8-6s5 2 8 6"></path>
              <!-- Protective Helmet Brim -->
              <path d="M10 36h44c2 0 3 1.5 2 3l-3 4H11l-3-4c-1-1.5 0-3 2-3z"></path>
              <!-- Ergonomic Chin Strap -->
              <path d="M20 43l8 9c2.5 1.5 5.5 1.5 8 0l8-9"></path>
              <!-- Quality Compliance Accents -->
              <line x1="32" y1="6" x2="32" y2="10" class="icon-accent-ray" stroke-width="2.5"></line>
              <line x1="48" y1="12" x2="45" y2="15" class="icon-accent-ray"></line>
              <line x1="16" y1="12" x2="19" y2="15" class="icon-accent-ray"></line>
            </svg>
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">NEBOSH Approved PPE</h3>
            <p class="safety-reveal-desc">3M Masks 6300 with 2091 filters, fire-retardant boiler suits, safety helmets, protective boots, and gloves.</p>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="safety-reveal-card span-3-cols" data-safety-card="6">
          <div class="safety-reveal-icon-wrap">
            <svg class="safety-reveal-icon" width="84" height="84" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <!-- Training Presentation Board -->
              <rect x="10" y="10" width="44" height="32" rx="3"></rect>
              <line x1="6" y1="42" x2="58" y2="42"></line>
              <!-- Stand Legs -->
              <line x1="22" y1="42" x2="15" y2="56"></line>
              <line x1="42" y1="42" x2="49" y2="56"></line>
              <line x1="32" y1="42" x2="32" y2="52"></line>
              <!-- HSE Safety Emblem -->
              <rect x="17" y="18" width="13" height="13" rx="2"></rect>
              <path d="M23.5 20v9 M19 24.5h9" class="icon-accent-ray" stroke-width="2.4"></path>
              <!-- Curriculum Checklist / Training Progress Chart -->
              <line x1="36" y1="20" x2="47" y2="20"></line>
              <line x1="36" y1="26" x2="45" y2="26"></line>
              <path d="M35 34l3-3 4 3 5-5" class="icon-accent-ray" stroke-width="2.2"></path>
            </svg>
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">HSE Training Programs</h3>
            <p class="safety-reveal-desc">A scheduled blend of internal drills and certified external modules given to all employees and yard workers.</p>
          </div>
        </div>

        <!-- Card 7 -->
        <div class="safety-reveal-card span-3-cols" data-safety-card="7">
          <div class="safety-reveal-icon-wrap">
            <svg class="safety-reveal-icon" width="84" height="84" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <!-- Lifebuoy Ring Outer & Inner -->
              <circle cx="32" cy="32" r="22"></circle>
              <circle cx="32" cy="32" r="10"></circle>
              <!-- 4 Reflective Quarter Straps -->
              <path d="M32 10v12" class="icon-accent-ray" stroke-width="3"></path>
              <path d="M32 42v12" class="icon-accent-ray" stroke-width="3"></path>
              <path d="M10 32h12" class="icon-accent-ray" stroke-width="3"></path>
              <path d="M42 32h12" class="icon-accent-ray" stroke-width="3"></path>
              <!-- Perimeter Lifeline Grab Rope Loops -->
              <path d="M47.5 16.5c3.5 3.5 4.5 7.5 4 11.5"></path>
              <path d="M51.5 36c.5 4-.5 8-4 11.5"></path>
              <path d="M36 51.5c-4 .5-8-.5-11.5-4"></path>
              <path d="M16.5 47.5c-3.5-3.5-4.5-7.5-4-11.5"></path>
              <path d="M12.5 28c-.5-4 .5-8 4-11.5"></path>
              <path d="M28 12.5c4-.5 8 .5 11.5 4"></path>
              <!-- Emergency Rapid Alert Beacon -->
              <circle cx="32" cy="32" r="3.5" class="icon-accent-ray" fill="currentColor"></circle>
            </svg>
          </div>
          <div class="safety-reveal-content">
            <h3 class="safety-reveal-title">Emergency Preparedness &amp; Mock Drills</h3>
            <p class="safety-reveal-desc">Dedicated rescue boats, certified firefighting stations, and medical first-aid stations are permanently deployed across the yard. Periodic live mock drills ensure rapid response readiness in any critical scenario.</p>
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

  <!-- Our Yard Section (Original Clean Design) -->
  <section id="section-yard" class="section section-yard">
    <div class="theme-padding">
      
      <!-- Clean Section Header -->
      <div class="yard-header-wrap">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">FACILITY &amp; LOCATION</span>
        </div>
        <h2 class="yard-main-heading">Our <span class="yard-highlight">Yard</span></h2>
      </div>

      <!-- Main Split Showcase -->
      <div class="yard-showcase-grid">
        
        <!-- Left: Clean Natural Yard Photograph -->
        <div class="yard-visual-card">
          <img src="<?php echo $imagesurl; ?>greenship-recycling/our-yard.jpg" alt="Our Yard - Ship Recycling Yard no. 13, Alang, Gujarat" class="yard-visual-img" loading="lazy" />
        </div>

        <!-- Right: Original Clean Info Card -->
        <div class="yard-info-master-card">
          <h3 class="yard-sub-heading">Yard</h3>
          
          <div class="yard-original-content">
            <div class="yard-original-address">
              <p class="yard-address-lines">
                Ship Recycling Yard no. 13,<br>
                S.B.Y., Alang - 364150 Dist. Bhavnagar, Gujarat.<br>
                India.
              </p>
            </div>
            
            <div class="yard-original-phone">
              <span class="yard-phone-label">Phone</span>
              <a href="tel:+919879787952" class="yard-phone-val">M: +91 9879787952</a>
            </div>
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