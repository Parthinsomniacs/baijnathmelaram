<form class="nobottommargin" id="scontactform" name="scontactform" action="inc-integration.php" novalidate="novalidate" method="post">
        <div class="columns is-multiline is-tablet m-0"> 
          <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form p-0">
            <input type="text" class="sm-form-control fname" name="fname" id="inquiry-fname" placeholder="First Name" min-length="1" max-length="100" required="" autocomplete="off">
            <label class="error-msg" id="inquiryformerror-1"></label>
          </div>
          <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form p-0">
            <input type="text" class="sm-form-control lname" name="lname" id="inquiry-lname" placeholder="Last Name" min-length="1" max-length="100" required="">
            <label class="error-msg" id="inquiryformerror-2"></label>
          </div>
          <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form p-0">
            <input type="text" class="sm-form-control email" name="email" id="inquiry-email" placeholder="Email ID" required="">
            <label class="error-msg" id="inquiryformerror-4"></label>
          </div>
          <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form p-0">
            <input type="text" class="sm-form-control phone numeric custom-phone-control" name="phone" id="inquiry-phone" maxlength="10" placeholder="Phone Number" pattern="^[6-9]{6,14}$" required="">
            <label class="error-msg" id="inquiryformerror-3"></label>
          </div>
          <input type="hidden" name="site_url" value="https://example.com/">
          <input type="hidden" name="contact" value="">
          <input type="hidden" name="tracker_code" value="<?php echo isset($_GET['tracker_code'])?$_GET['tracker_code']:''; ?>">
          <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form-btn p-0">
            <button class="btn btn-white inquiry-submit full-width" type="submit" id="inquiry-submit" name="submit" value="submit">
              <span>Submit</span>
            </button>
          </div>
        </div>
      <input type="hidden" name="USOURCE" value="Google">
      <input type="hidden" name="UMEDIUM" value="CPC">
      <input type="hidden" name="UCAMPAIGN" value="Search_Brand">
      <input type="hidden" name="UCONTENT" value="">
      <input type="hidden" name="UTERM" value="">
      <input type="hidden" name="IREFERRER" value="https%3A//sg2plzcpnl490951.prod.sin2.secureserver.net%3A2083/">
      <input type="hidden" name="LREFERRER" value="direct">
      <input type="hidden" name="ILANDPAGE" value="https%3A//theabsolutecollection.in/">
      <input type="hidden" name="VISITS" value="5">
    </form>