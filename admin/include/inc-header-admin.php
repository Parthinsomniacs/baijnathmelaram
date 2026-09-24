<div id="menu-trigger" class="menu-trigger insomenu-bars wow fadeInLeft animated" data-wow-delay="0.3s"><span></span></div>
<nav class="sidebar wow fadeInLeft animated" data-wow-delay="0.3s">
  <img class="logo" src="<?php echo $imagesurl; ?>theme-icon-transparent.svg" alt="<?php echo $sitename; ?> Logo">
  <?php if($page == "adminlogin"){ ?>   
  <img class="inso-logo" src="<?php echo $imagesurl; ?>logo.svg" alt="<?php echo $sitename; ?> Logo">
  <?php } ?>   
  <?php if(isset($_SESSION['username'])) { ?>
  <ul class="menu">
    <a href="<?php echo $siteurl; ?>dashboard/" class="<?php if($page == "admin-dashboard"){echo 'active';} ?> wow fadeInLeft animated" data-wow-delay="0.6s"> <i class="icon fas fa-chart-line"></i> Dashboard</a>
    <?php if($tablename1 != ""){ ?>   
    <a class="wow fadeInLeft animated text-capitalize" data-wow-delay="0.9s" href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/">
      <i class="icon fas fa-user-friends"></i> <?php echo $tablename1; ?>
    </a>
    <?php } if($tablename2 != "" && $_SESSION['userrole'] == 'admin'){?>
      <a class="wow fadeInLeft animated text-capitalize" data-wow-delay="1.2s" href="<?php echo $siteurl; ?>crm/">
      <i class="icon fas fa-code"></i>CRM Integration
    </a>
    <a class="wow fadeInLeft animated text-capitalize" data-wow-delay="1s" href="<?php echo $siteurl; ?><?php echo $tablename2; ?>/">
      <i class="icon fas fa-sliders-h"></i> <?php echo $tablename2; ?>
    </a>
    <?php } if($tablename3 != "" && $_SESSION['userrole'] == 'admin'){?>
    <a class="wow fadeInLeft animated text-capitalize" data-wow-delay="1.2s" href="<?php echo $siteurl; ?><?php echo $tablename3; ?>/">
      <i class="icon fas fa-code"></i> <?php echo $tablename3; ?>
    </a>
    <?php } ?>
  <?php /*/ if($_SESSION['userrole'] == 'admin') { ?>
  <a class="wow fadeInLeft animated text-capitalize" data-wow-delay="1.2s" href="<?php echo $siteurl; ?>filemanager/">
      <i class="icon fas fa-code"></i> File Manager
    </a>
  <?php } /*/?>
    <a href="<?php echo $siteurl; ?>logout/" class="wow fadeInLeft animated" data-wow-delay="1.5s"> <i class="icon fas fa-sign-out-alt"></i> Logout</a>
  </ul>
  <?php } ?>
</nav>