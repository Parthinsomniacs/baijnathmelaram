<?php if ($captcha) { ?>
  <style>
    .sticky-bottom-form .col-form {
      position: relative;
      width: 16.5%;
      float: left;
      padding: 0 15px;
      margin: 0 0 10px !important;
    }

    @media screen and (max-width: 1024px) {
      .sticky-bottom-form .col-form {
        width: 50%;
        margin: 0 0 15px !important;
      }

      .sticky-bottom-form-inner {
        bottom: -220px;
      }
    }
  </style>
<?php } ?>


<?php


function getRandomValueFromArray($array)
{
  $randomKey = array_rand($array);
  $randomValue = $array[$randomKey];
  return $randomValue;
}

$random_val = getRandomValueFromArray($a);

$message = "Notice: ";
if (!$crmintegration) {
  $message .= "Website has no CRM API integrated. ";
}
if (!$trackercodeintegration) {
  $message .= "Website has no tracker conversion. ";
}
$message .= "Please contact admin.";
if (!$crmintegration || !$trackercodeintegration) { ?>
  <div class="sticky-notice"><span>
      <?= $message; ?>
    </span></div>
<?php } ?>


<header id="header">
  <div class="columns is-vcentered is-mobile is-gapless">
    <div class="column col-header">
      <a href="<?php echo $siteurl; ?>" class="theme-logo">
        <picture>
          <img src="<?php echo $imagesurl; ?>logo-black.svg" alt="<?php echo $sitename; ?> Logo" width="145" height="70" />
        </picture>
      </a>
    </div>
    <div class="column col-header has-text-centered">
      <div class="theme-menu-wrapper">
        <div id="menu-trigger" class="menu-trigger insomenu-bars" onclick="menuresponsive()"> <span></span> </div>
        <nav class="theme-menu fleet-menu-drawer" data-lenis-prevent>
          <div class="fleet-menu-container">

            <!-- Top Area: Main Links & Contact Action -->
            <div class="fleet-menu-top columns is-multiline is-mobile">
              <!-- Main Links Section -->
              <div class="fleet-menu-main column is-7-mobile is-7-tablet is-7-desktop is-8-widescreen">
                <span class="fleet-menu-label">MAIN</span>
                <div class="fleet-nav-grid">
                  <ul class="fleet-nav-col">
                    <li class="fleet-nav-item">
                      <div class="fleet-nav-link-wrap"><a class="fleet-nav-link" href="<?php echo $siteurl; ?>" onclick="menuresponsiveclose()">Home</a></div>
                    </li>
                    <li class="fleet-nav-item">
                      <div class="fleet-nav-link-wrap"><a class="fleet-nav-link" href="<?php echo $siteurl; ?>greenship-recycling.php" onclick="menuresponsiveclose()">Greenship Recycling</a></div>
                    </li>
                    <li class="fleet-nav-item">
                      <div class="fleet-nav-link-wrap"><a class="fleet-nav-link" href="<?php echo $siteurl; ?>alloy-manufacturing.php" onclick="menuresponsiveclose()">Alloy Manufacturing</a></div>
                    </li>
                  </ul>
                  <ul class="fleet-nav-col">
                    <li class="fleet-nav-item">
                      <div class="fleet-nav-link-wrap"><a class="fleet-nav-link" href="<?php echo $siteurl; ?>prime-trading.php" onclick="menuresponsiveclose()">Prime Trading</a></div>
                    </li>
                    <li class="fleet-nav-item">
                      <div class="fleet-nav-link-wrap"><a class="fleet-nav-link" href="<?php echo $siteurl; ?>secondary-scrap-trading.php" onclick="menuresponsiveclose()">Secondary Scrap Trading</a></div>
                    </li>
                    <li class="fleet-nav-item">
                      <div class="fleet-nav-link-wrap"><a class="fleet-nav-link" href="<?php echo $siteurl; ?>contact.php" onclick="menuresponsiveclose()">Contact Us</a></div>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Right: Contact CTA Buttons & Information -->
              <div class="fleet-menu-contact column is-5-mobile is-5-tablet is-5-desktop is-4-widescreen">
                <span class="fleet-menu-label">CONTACT</span>
                <div class="fleet-contact-details">
                  <div class="fleet-contact-item">
                    <span class="fleet-contact-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-mobile">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" />
                        <path d="M11 4h2" />
                        <path d="M12 17v.01" />
                      </svg>
                    </span>
                    <a href="tel:+919879787950" class="fleet-contact-link">+ 91 9879787950</a>
                  </div>
                  <div class="fleet-contact-item">
                    <span class="fleet-contact-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                      </svg>
                    </span>
                    <a href="tel:+912782569986" class="fleet-contact-link">+ 91 278 2569986</a>
                  </div>
                  <div class="fleet-contact-item">
                    <span class="fleet-contact-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-printer">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                        <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                      </svg>
                    </span>
                    <a href="tel:+912783005513" class="fleet-contact-link">+ 91 278 3005513</a>
                  </div>
                  <div class="fleet-contact-item">
                    <span class="fleet-contact-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                        <path d="M3 7l9 6l9 -6" />
                      </svg>
                    </span>
                    <a href="mailto:info@baijnathmelaram.com" class="fleet-contact-link">info@baijnathmelaram.com</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer Area: Divider & Bottom Details -->
            <div class="fleet-menu-footer">
              <!-- Divider Line -->
              <div class="fleet-menu-divider"></div>

              <!-- Bottom Area: Quick Contact, Address, Brand Logo -->
              <div class="fleet-menu-bottom">

                <!-- Quick Contact / Social Icons -->
                <div class="fleet-bottom-col fleet-bottom-social">
                  <span class="fleet-menu-label">QUICK CONTACT</span>
                  <div class="fleet-social-row">
                    <?php if (!empty($instagramurl)) { ?>
                      <a href="<?php echo $instagramurl; ?>" target="_blank" class="fleet-social-box" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                      </a>
                    <?php } ?>
                    <?php if (!empty($youtubeurl)) { ?>
                      <a href="<?php echo $youtubeurl; ?>" target="_blank" class="fleet-social-box" aria-label="YouTube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8" />
                          <path d="M10 9l5 3l-5 3l0 -6" />
                        </svg>
                      </a>
                    <?php } ?>
                    <?php if (!empty($facebookurl)) { ?>
                      <a href="<?php echo $facebookurl; ?>" target="_blank" class="fleet-social-box" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                      </a>
                    <?php } ?>
                    <?php if (!empty($twitterurl)) { ?>
                      <a href="<?php echo $twitterurl; ?>" target="_blank" class="fleet-social-box" aria-label="X">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                          <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                        </svg>
                      </a>
                    <?php } ?>
                    <?php if (!empty($linkedinurl)) { ?>
                      <a href="<?php echo $linkedinurl; ?>" target="_blank" class="fleet-social-box" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                          <rect x="2" y="9" width="4" height="12"></rect>
                          <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                      </a>
                    <?php } ?>
                    <?php if (empty($instagramurl) && empty($facebookurl) && empty($twitterurl) && empty($linkedinurl) && empty($youtubeurl)) { ?>
                      <a href="javascript:void(0)" class="fleet-social-box" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                      </a>
                      <a href="javascript:void(0)" class="fleet-social-box" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                      </a>
                      <a href="javascript:void(0)" class="fleet-social-box" aria-label="X">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                          <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                        </svg>
                      </a>
                      <a href="javascript:void(0)" class="fleet-social-box" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                          <rect x="2" y="9" width="4" height="12"></rect>
                          <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                      </a>
                      <a href="javascript:void(0)" class="fleet-social-box" aria-label="Youtube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8" />
                          <path d="M10 9l5 3l-5 3l0 -6" />
                        </svg>
                      </a>
                    <?php } ?>
                  </div>
                </div>

                <!-- Address -->
                <div class="fleet-bottom-col fleet-bottom-address">
                  <span class="fleet-menu-label">ADDRESS</span>
                  <div class="fleet-address-text">
                    <?php if (!empty($siteaddress)) { ?>
                      <p><?php echo nl2br($siteaddress); ?></p>
                    <?php } else { ?>
                      <p>Branch Office: 302, Karthik Complex, Above A to Z Shop,<br> Atabhai Chowk, Bhavnagar - 364002 Gujarat, India.</p>
                    <?php } ?>
                  </div>
                </div>

                <!-- Brand Logo / Watermark -->
                <div class="fleet-bottom-col fleet-bottom-brand">
                  <picture>
                    <img src="<?php echo $imagesurl; ?>logo-black.svg" alt="<?php echo $sitename; ?> Logo" width="180" height="70" class="fleet-watermark-logo" />
                  </picture>
                </div>

              </div>
            </div>

          </div>
        </nav>
        <div class="fleet-menu-backdrop" onclick="menuresponsiveclose()"></div>
      </div>
    </div>
    <div class="column col-header has-text-right">
      <a href="contact.php" class="header-contact-btn">Contact Us</a>
    </div>
  </div>
</header>


<?php if ($page == "home" || $page == "greenship-recycling") { ?>

  <?php if ($callingnumber != "") { ?>
    <a href="tel:<?php echo $callingnumber; ?>" class="call-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
        </path>
      </svg>
    </a>
  <?php } ?>
  <?php /*/?><a href="javascript:void(0)" class="btn btn-primary sticky-btn-enquire" onclick="openForm('enquire')">Enquire Now</a>
  <a href="javascript:void(0)" class="btn btn-primary sticky-btn-enquire sticky-brochure" onclick="openForm('brochure')">Download Brochure</a><?php /*/ ?>

  <div id="register-modal" class="theme-modal">
    <div class="theme-modal-background"></div>
    <div class="theme-modal-card">
      <button class="close" aria-label="close" onclick="closeForm()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
      <div class="theme-modal-card-body">
        <form class="nobottommargin" id="inquiry" name="scontactform" onsubmit="validateInquiryForm('inquiry')&disableButton()" action="<?php echo $siteurl; ?>include/inc-leads.php" method="post" novalidate autocomplete="off">
          <h3 id="leadmodaltitle" class="modal-title">Enquire Now</h3>
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
              <div class="col-form">
                <input type="text" class="form-control phone numeric custom-phone-control" name="phone" id="inquiry-phone" maxlength="10" placeholder="Mobile Number*" pattern="^[6-9]{6,14}$" required>
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
<?php } ?>