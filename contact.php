<?php require_once("inc-global.php"); ?>
<?php
$page = "contact";
$pagetype = "onepage";
$pagename = "Contact Us";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "no";
$sliderautoscroll = "no";
$swiperjs = "no";
$popup = "no";
$counter = "no";
$accordian = "no";
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

  <!-- Contact Us Hero Banner (Matching Website Banner Theme) -->
  <section id="contact-banner" class="section section-banner p-0">
    <div class="banner-image">
      <picture>
        <img src="<?php echo $imagesurl; ?>banner/contact-us-banner-new.jpg" width="1920" height="750" alt="Contact Baijnath Melaram" class="contact-banner-img" />
      </picture>
    </div>

    <!-- Banner Content Overlay -->
    <div class="banner-overlay-wrap">
      <div class="theme-padding">
        <div class="section-kicker">
          <span class="section-kicker-line"></span>
          <span class="section-kicker-text">GET IN TOUCH</span>
        </div>
        <div class="banner-divider"></div>
        <div class="banner-content-row columns is-variable is-8 is-vcentered">
          <div class="column is-12">
            <div class="section-title">
              <h1 class="banner-title">
                <span class="banner-word-mask"><span class="banner-word-inner">Contact</span></span>
                <span class="banner-word-mask"><span class="banner-word-inner banner-italic text-secondary">Us</span></span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main id="contact-page">
    <!-- ==========================================================================
         Section 1: Contact Highlight Cards (Matching Screenshot Top 3 Cards)
         ========================================================================== -->
    <section class="section-contact-cards">
      <!-- Square Grid Background -->
      <div class="contact-section-bg-square bg-decor-square" aria-hidden="true"></div>

      <div class="bm-cards-fullwidth-wrap">
        <div class="bm-cards-row">

          <!-- Card 1: Office Location -->
          <div class="bm-info-card">
            <div class="bm-info-card-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </div>
            <h3 class="bm-info-card-title">Office Location</h3>
            <p class="bm-info-card-desc">
              204, Kamla Space, S.V Road Khira Nagar, Santacruz (West), Mumbai 400054.
            </p>
          </div>

          <!-- Card 2: Email Address -->
          <div class="bm-info-card">
            <div class="bm-info-card-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                <circle cx="12" cy="12" r="3"></circle>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
              </svg>
            </div>
            <h3 class="bm-info-card-title">
              <a href="mailto:info@baijnathmelaram.com" class="bm-card-link">info@baijnathmelaram.com</a>
            </h3>
            <p class="bm-info-card-desc">
              Email us anytime for any kind of query.
            </p>
          </div>

          <!-- Card 3: Hotline Support -->
          <div class="bm-info-card">
            <div class="bm-info-card-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                <path d="M14.5 2a8.5 8.5 0 0 1 7.5 7.5"></path>
                <path d="M14.5 6a4.5 4.5 0 0 1 3.5 3.5"></path>
              </svg>
            </div>
            <h3 class="bm-info-card-title">
              <a href="tel:+912226604642" class="bm-card-link">Hot: +91 22 26604642</a>
            </h3>
            <p class="bm-info-card-desc">
              Call us for any support, we will wait for it.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================================================
         Section 2: Map & Get in Touch Form (Matching Screenshot 2-Column Layout)
         ========================================================================== -->
    <section class="section-touch-interactive">
      <!-- Nautical Compass Background Watermark -->
      <div class="touch-bg-compass" aria-hidden="true">
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

      <div class="bm-touch-fullwidth-wrap">
        <div class="bm-touch-grid">

          <!-- Left Column: Google Map Embed -->
          <div class="bm-touch-map-col">
            <div class="bm-map-card">
              <!-- Location Switcher Tabs -->
              <div class="bm-map-switch-bar">
                <button type="button" class="bm-map-btn is-active" data-query="Kamla+Space,+S.V+Road,+Santacruz+West,+Mumbai,+Maharashtra+400054" data-title="Administrative Office - Mumbai">Mumbai HQ</button>
                <button type="button" class="bm-map-btn" data-query="Sarthik+Complex,+Atabhai+Chowk,+Bhavnagar,+Gujarat+364002" data-title="Branch Office - Bhavnagar">Bhavnagar</button>
                <button type="button" class="bm-map-btn" data-query="Alang+Ship+Breaking+Yard+13,+Gujarat,+India" data-title="Ship Recycling Yard 13 - Alang">Alang Yard</button>
              </div>

              <!-- Google Map Frame Wrapper -->
              <div class="bm-map-frame-wrapper">
                <iframe
                  id="touch-google-map"
                  class="bm-map-frame"
                  src="https://maps.google.com/maps?q=Kamla+Space,+S.V+Road,+Santacruz+West,+Mumbai,+Maharashtra+400054&t=&z=14&ie=UTF8&iwloc=&output=embed"
                  width="100%"
                  height="100%"
                  style="border:0;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  title="Baijnath Melaram Office Location">
                </iframe>
              </div>
            </div>
          </div>

          <!-- Right Column: Get in Touch Form -->
          <div class="bm-touch-form-col">
            <div class="bm-touch-kicker">
              <span class="bm-touch-kicker-line"></span>
              <span class="bm-touch-kicker-text">Contact Us</span>
            </div>
            <h2 class="bm-touch-heading">
              <span class="word-mask"><span class="word-inner">Get</span></span>
              <span class="word-mask"><span class="word-inner text-secondary">in</span></span>
              <span class="word-mask"><span class="word-inner">Touch</span></span>
            </h2>

            <div class="theme-modal-card-body">
              <form class="nobottommargin" id="inquiry" name="scontactform" onsubmit="validateInquiryForm('inquiry')&disableButton()" action="<?php echo $siteurl; ?>include/inc-leads.php" method="post" novalidate autocomplete="off">
                <div class="columns is-multiline is-mobile is-vcentered row-register">
                  <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen col-register">
                    <div class="col-form">
                      <input type="text" class="form-control fname" name="fname" id="inquiry-fname" placeholder="First Name*" min-length="1" max-length="100" required />
                      <label class="error-msg fnameerror" id="inquiryformerror-1"></label>
                    </div>
                  </div>
                  <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen col-register">
                    <div class="col-form">
                      <input type="text" class="form-control lname" name="lname" id="inquiry-lname" placeholder="Last Name*" min-length="1" max-length="100" required />
                      <label class="error-msg" id="inquiryformerror-2"></label>
                    </div>
                  </div>
                  <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-register">
                    <div class="col-form custom-mobile-number mobile-with-country-code">
                      <div class="country-code">
                        <?php require_once $countrycode_inc; ?>
                      </div>
                      <div class="control phone-input-control">
                        <input type="tel" class="form-control phone numeric custom-phone-control" name="phone" id="inquiry-phone" placeholder="Phone Number*" required>
                      </div>
                      <label class="error-msg" id="inquiryformerror-3"></label>
                    </div>
                  </div>
                  <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-register">
                    <div class="col-form">
                      <input type="text" class="form-control email" name="email" id="inquiry-email" placeholder="Email Address*" required>
                      <label class="error-msg" id="inquiryformerror-4"></label>
                    </div>
                  </div>
                  <?php if ($captcha) { ?>
                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen">
                      <div class="col-form">
                        <span class="captcha-sticky-query"><?= $math1 ?>+<?= $math2 ?>=</span>
                        <input type="text" class="form-control captcha pl-80" name="captcha" id="inquiry-captcha" oninput="getvalue('inquiry',this.value)" placeholder="" required>
                        <label class="error-msg" id="inquiryformerror-5"></label>
                      </div>
                      <input type="hidden" id="inquiry-query_result" name="query_result" value="<?= $captcharesult ?>">
                    </div>
                  <?php } ?>
                  <input type="hidden" name="formtype" id="formtype" value="enquire" />
                  <input type="hidden" name="tracker_code" value="<?php echo isset($_GET['tracker_code']) ? $_GET['tracker_code'] : ''; ?>">
                  <input type="hidden" name="gclid" value="<?php echo isset($_GET['gclid']) ? $_GET['gclid'] : ''; ?>">
                  <input type="hidden" name="site_url" value="<?= $url; ?>">
                  <input type="hidden" name="contact" value="">
                  <input type="hidden" name="random_val" value="<?php echo $random_val; ?>">
                  <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-register">
                    <button class="btn btn-white full-width inquiry-submit" type="submit" id="inquiry-submit" name="submit" value="submit"><span>Submit</span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         Section 3: Contacts Directory (Bespoke Editorial Architecture)
         ========================================================================== -->
    <section class="section-contacts-directory">
      <!-- Square Grid Background -->
      <div class="contact-section-bg-square bg-decor-square" aria-hidden="true"></div>

      <div class="bm-directory-fullwidth-wrap">
        <div class="contacts-layout">

          <!-- Left Column: Title -->
          <div class="contacts-title-col">
            <div class="bm-touch-kicker">
              <span class="bm-touch-kicker-line"></span>
              <span class="bm-touch-kicker-text">DIRECTORY</span>
            </div>
            <h2 class="contacts-heading">
              <span class="word-mask"><span class="word-inner">Contacts</span></span>
            </h2>
            <p class="contacts-sub-desc">
              Direct communication lines for our registered offices, corporate headquarters, ship recycling yards, and key executive leadership.
            </p>
          </div>

          <!-- Right: 3 Architectural Columns -->
          <div class="contacts-grid">

            <!-- Column 1: Registered Office, Ship Recycling Yard, Connect (Nitesh Agarwal) -->
            <div class="contacts-column">

              <!-- 1. Registered Office -->
              <div class="contacts-block">
                <span class="contacts-city-kicker">MUMBAI &bull; REGISTERED</span>
                <h3 class="contacts-block-title">Registered Office — B<br>Melaram &amp; Sons</h3>
                <p class="contacts-block-address">
                  43, Ramwadi, Kalbadevi Road, Maharashtra, India.
                </p>
              </div>

              <div class="contacts-block-divider"></div>

              <!-- 2. Ship Recycling Yard -->
              <div class="contacts-block">
                <span class="contacts-city-kicker">ALANG &bull; YARD 13</span>
                <h3 class="contacts-block-title">Ship Recycling Yard</h3>
                <p class="contacts-block-address">
                  Ship Recycling Yard no. 13,<br>
                  S.B.Y., Alang - 364150 Dist. Bhavnagar, Gujarat, India.
                </p>
                <div class="contacts-meta-list">
                  <div class="contacts-meta-item">
                    <span class="contacts-meta-tag">M :</span>
                    <a href="tel:+919879787952" class="contacts-meta-link">+91 9879787952</a>
                  </div>
                </div>
              </div>

              <div class="contacts-block-divider"></div>

              <!-- 3. Connect: Nitesh Agarwal -->
              <div class="contacts-block">
                <span class="contacts-connect-kicker">Connect</span>
                <div class="contacts-person-group">
                  <h4 class="contacts-person-name">Nitesh Agarwal</h4>
                  <div class="contacts-meta-list">
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">M :</span>
                      <a href="tel:+919825229713" class="contacts-meta-link">+91 9825229713</a>
                    </div>
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">E :</span>
                      <a href="mailto:nitesh@baijnathmelaram.com" class="contacts-meta-link">nitesh@baijnathmelaram.com</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Column 2: Branch Office, Connect (Vinod Kumar Agarwal) -->
            <div class="contacts-column">

              <!-- 1. Branch Office -->
              <div class="contacts-block">
                <span class="contacts-city-kicker">BHAVNAGAR &bull; GUJARAT</span>
                <h3 class="contacts-block-title">Branch Office</h3>
                <p class="contacts-block-address">
                  302, Sarthik Complex, Above A to Z Shop, Atabhai Chowk, Bhavnagar - 364002 Gujarat, India.
                </p>
              </div>

              <div class="contacts-block-divider"></div>

              <!-- 2. Connect: Vinod Kumar Agarwal -->
              <div class="contacts-block">
                <span class="contacts-connect-kicker">Connect</span>
                <div class="contacts-person-group">
                  <h4 class="contacts-person-name">Vinod Kumar Agarwal</h4>
                  <div class="contacts-meta-list">
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">M :</span>
                      <a href="tel:+919820037048" class="contacts-meta-link">+91 9820037048</a>
                    </div>
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">E :</span>
                      <a href="mailto:vkagarwalship@gmail.com" class="contacts-meta-link">vkagarwalship@gmail.com</a>
                    </div>
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">E :</span>
                      <a href="mailto:info@bmelaramandsons.com" class="contacts-meta-link">info@bmelaramandsons.com</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Column 3: Administrative Office, Connect (Bhupendra Kumar Agarwal & Madhur Agarwal) -->
            <div class="contacts-column">

              <!-- 1. Administrative Office -->
              <div class="contacts-block">
                <span class="contacts-city-kicker">MUMBAI &bull; CORPORATE HQ</span>
                <h3 class="contacts-block-title">Administrative Office</h3>
                <p class="contacts-block-address">
                  204, Kamla Space, S.V Road Khira Nagar, Santacruz (West), Mumbai,<br>
                  Maharashtra, India. 400054
                </p>
                <div class="contacts-meta-list">
                  <div class="contacts-meta-item">
                    <span class="contacts-meta-tag">M :</span>
                    <a href="tel:+912226604642" class="contacts-meta-link">+91 22 26604642</a>
                  </div>
                  <div class="contacts-meta-item">
                    <span class="contacts-meta-tag">M :</span>
                    <a href="tel:+912226618160" class="contacts-meta-link">+91 22 26618160</a>
                  </div>
                </div>
              </div>

              <div class="contacts-block-divider"></div>

              <!-- 2. Connect: Bhupendra Kumar Agarwal & Madhur Agarwal -->
              <div class="contacts-block">
                <span class="contacts-connect-kicker">Connect</span>

                <!-- Bhupendra Kumar Agarwal -->
                <div class="contacts-person-group">
                  <h4 class="contacts-person-name">Bhupendra Kumar Agarwal</h4>
                  <div class="contacts-meta-list">
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">M :</span>
                      <a href="tel:+919825205013" class="contacts-meta-link">+91 9825205013</a>
                    </div>
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">P :</span>
                      <a href="tel:+912782569986" class="contacts-meta-link">+91 278 2569986</a>
                    </div>
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">E :</span>
                      <a href="mailto:info@baijnathmelaram.com" class="contacts-meta-link">info@baijnathmelaram.com</a>
                    </div>
                  </div>
                </div>

                <!-- Madhur Agarwal -->
                <div class="contacts-person-group contacts-person-group-spaced">
                  <h4 class="contacts-person-name">Madhur Agarwal</h4>
                  <div class="contacts-meta-list">
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">M :</span>
                      <a href="tel:+919820063127" class="contacts-meta-link">+91 9820063127</a>
                    </div>
                    <div class="contacts-meta-item">
                      <span class="contacts-meta-tag">E :</span>
                      <a href="mailto:madhur@baijnathmelaram.com" class="contacts-meta-link">madhur@baijnathmelaram.com</a>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>
      </div>
    </section>

  </main>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>

  <!-- Contact Page Interactive Scripts -->
  <script>
    (function() {
      // 1. Form Validation is now handled by validateInquiryForm() in inc-foot-scripts.php

      // 2. Interactive Map Switcher
      const mapIframe = document.getElementById('touch-google-map');
      const mapButtons = document.querySelectorAll('.bm-map-btn');

      if (mapButtons.length && mapIframe) {
        mapButtons.forEach(function(btn) {
          btn.addEventListener('click', function() {
            mapButtons.forEach(function(b) {
              b.classList.remove('is-active');
            });
            this.classList.add('is-active');

            const query = this.getAttribute('data-query');
            if (query) {
              mapIframe.src = 'https://maps.google.com/maps?q=' + encodeURIComponent(query) + '&t=&z=14&ie=UTF8&iwloc=&output=embed';
            }
          });
        });
      }

      // 3. GSAP Text & ScrollTrigger Animations (Matching index.php)
      function initContactGsapAnimations() {
        if (typeof gsap === 'undefined') return;
        if (typeof ScrollTrigger !== 'undefined') {
          gsap.registerPlugin(ScrollTrigger);
        }

        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReducedMotion) {
          document.querySelectorAll('.banner-word-inner, .word-inner').forEach(function(el) {
            el.style.opacity = '1';
            el.style.transform = 'none';
          });
          return;
        }

        /* ------------------------------------------------------------------------
           A. Hero Banner Text Animation on Load (Matches index.php)
        ------------------------------------------------------------------------ */
        const banner = document.querySelector('#contact-banner');
        if (banner) {
          const wordInners = banner.querySelectorAll('.banner-word-inner');
          const kicker = banner.querySelector('.section-kicker');
          const divider = banner.querySelector('.banner-divider');
          const bannerImg = banner.querySelector('.contact-banner-img');

          const heroTl = gsap.timeline({
            delay: 0.15
          });

          if (bannerImg) {
            heroTl.fromTo(bannerImg, {
              scale: 1.07,
              opacity: 0.8
            }, {
              scale: 1,
              opacity: 1,
              duration: 1.4,
              ease: 'power2.out',
              clearProps: 'transform'
            }, 0);
          }

          if (kicker) {
            heroTl.fromTo(kicker, {
              y: 20,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.6,
              ease: 'power2.out',
              clearProps: 'all'
            }, 0.12);
          }

          if (divider) {
            heroTl.fromTo(divider, {
              scaleX: 0,
              transformOrigin: 'left center'
            }, {
              scaleX: 1,
              duration: 0.8,
              ease: 'power2.out'
            }, '-=0.35');
          }

          // Title words reveal with mask stagger (Matches index.php)
          if (wordInners.length) {
            heroTl.fromTo(wordInners, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.95,
              stagger: 0.08,
              ease: 'power3.out'
            });
          }

          // Fast-forward if scrolled down on page refresh
          const currentScroll = window.scrollY || window.pageYOffset || 0;
          if (currentScroll > 80) {
            heroTl.progress(1);
          }
        }

        /* ------------------------------------------------------------------------
           B. Section 1: Contact Highlight Cards Stagger Reveal
        ------------------------------------------------------------------------ */
        if (typeof ScrollTrigger !== 'undefined') {
          const infoCards = document.querySelectorAll('.section-contact-cards .bm-info-card');
          if (infoCards.length) {
            gsap.fromTo(infoCards, {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              stagger: 0.12,
              ease: 'power2.out',
              clearProps: 'all',
              scrollTrigger: {
                trigger: '.section-contact-cards',
                start: 'top 85%',
                once: true
              }
            });
          }

          /* ------------------------------------------------------------------------
             C. Section 2: Get in Touch Heading & Columns Reveal
          ------------------------------------------------------------------------ */
          const touchHeading = document.querySelector('.bm-touch-heading');
          const touchWords = touchHeading ? touchHeading.querySelectorAll('.word-inner') : [];
          if (touchWords.length) {
            gsap.fromTo(touchWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out',
              scrollTrigger: {
                trigger: touchHeading,
                start: 'top 85%',
                once: true
              }
            });
          }

          const mapCard = document.querySelector('.bm-map-card');
          const touchForm = document.querySelector('.bm-touch-form-col');
          if (mapCard && touchForm) {
            gsap.fromTo([mapCard, touchForm], {
              y: 35,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.9,
              stagger: 0.15,
              ease: 'power2.out',
              clearProps: 'all',
              scrollTrigger: {
                trigger: '.section-touch-interactive',
                start: 'top 82%',
                once: true
              }
            });
          }

          const touchCompassSvg = document.querySelector('.touch-bg-compass svg');
          if (touchCompassSvg) {
            gsap.to(touchCompassSvg, {
              rotation: 140,
              ease: 'none',
              scrollTrigger: {
                trigger: '.section-touch-interactive',
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1.2
              }
            });
          }

          /* ------------------------------------------------------------------------
             D. Section 3: Directory Heading & Columns Reveal
          ------------------------------------------------------------------------ */
          const dirHeading = document.querySelector('.contacts-heading');
          const dirWords = dirHeading ? dirHeading.querySelectorAll('.word-inner') : [];
          if (dirWords.length) {
            gsap.fromTo(dirWords, {
              y: '115%',
              opacity: 0
            }, {
              y: '0%',
              opacity: 1,
              duration: 0.85,
              stagger: 0.06,
              ease: 'power3.out',
              scrollTrigger: {
                trigger: dirHeading,
                start: 'top 85%',
                once: true
              }
            });
          }

          const dirCols = document.querySelectorAll('.contacts-grid .contacts-column');
          if (dirCols.length) {
            gsap.fromTo(dirCols, {
              y: 30,
              opacity: 0
            }, {
              y: 0,
              opacity: 1,
              duration: 0.8,
              stagger: 0.12,
              ease: 'power2.out',
              clearProps: 'all',
              scrollTrigger: {
                trigger: '.contacts-grid',
                start: 'top 82%',
                once: true
              }
            });
          }
        }
      }

      // Initialize GSAP animations
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initContactGsapAnimations);
      } else {
        initContactGsapAnimations();
      }
    })();
  </script>
</body>

</html>