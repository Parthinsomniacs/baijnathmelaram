<?php
  require_once ("../inc-admin-global.php");
  if (!isset($_SESSION['username']) || $_SESSION['username'] == '')
  {
    header("Location:".$siteurl);
  }
  $page = "admin-".$tablename2;
  $pagename = $tablename2;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php require_once $head; ?>
<title><?php echo $sitename;?>: <?php echo $pagename; ?></title>
<style>
  .modal-body textarea {
            display: block;
            overflow: auto;
            resize: none;
        }
</style>
</head>
<!-- Document Title -->
<body id="<?php echo $page;?>" class="scrollbar stretched admin admin-detail">
<!-- Document Wrapper -->
<div id="wrapper" class="clearfix">
  <?php require_once $header; ?>
  <main class="page">
    <section id="content">
      <div class="content-wrap">
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12">
            <h1 class="title wow fadeInUp animated text-capitalize" data-wow-delay="0.3s"><?php echo $pagename; ?></h1>
            <hr/>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">General Settings</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-email-tab" data-toggle="pill" href="#pills-email" role="tab" aria-controls="pills-email" aria-selected="false">Email Settings</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-site-tab" data-toggle="pill" href="#pills-site" role="tab" aria-controls="pills-site" aria-selected="false">Site Settings</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-seo-smo-tab" data-toggle="pill" href="#pills-seo-smo" role="tab" aria-controls="pills-seo-smo" aria-selected="false">SEO & SMO Settings</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                <?php 
                    $query = "SELECT * FROM ".$tablename2." where status = 1 and settings_group in ('Company Settings','Contact Settings','Copyright Settings') order by settings_group";
                      $res = mysqli_query($connection,$query);
                  ?>
                  <form id="site-setting1" class="site-setting row" novalidate="">
                    <?php
                          // Write rows
                        mysqli_data_seek($res, 0);
                        $heading = "";
                        while ($row = mysqli_fetch_assoc($res)) {
                          if($heading != $row['settings_group']){
                            $heading = $row['settings_group'];
                    ?>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                          <h4><b><?php echo $row['settings_group']; ?></b></h4>
                          <hr/>
                        </div>
                    <?php
                          }
                    ?>
                        <?php if($row['settings_input_type'] == "text"){ ?>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                          
                          <input type="text" class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>"  <?php echo $row['settings_required']?'required':''; echo $row['settings_key']=='site'?' readonly':''; ?> value="<?php echo $row['settings_value']; ?>">
                          <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                        </div>
                          <?php }else{ ?>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                              <textarea class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>" <?php echo $row['settings_required']?'required':''; ?> rows="16"><?php echo $row['settings_value']; ?></textarea>
                              <a href="#" data-toggle="modal" data-target="#<?php echo $row['settings_key']; ?>exm">View Example</a>
                              <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                              </div>
                          <?php } ?>
                   <?php 
                      }
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button type="submit" class="btn btn-primary btn-lg mt-4">Submit</button>
                    </div>
                  </form>
              </div>
              <div class="tab-pane fade" id="pills-email" role="tabpanel" aria-labelledby="pills-email-tab">
                <?php 
                      $query = "SELECT * FROM ".$tablename2." where status = 1 and settings_group in ('Email Settings') order by settings_group";
                      $res = mysqli_query($connection,$query);
                  ?>
                  <form id="site-setting2" class="site-setting row" novalidate="">
                    <?php
                          // Write rows
                        mysqli_data_seek($res, 0);
                        $heading = "";
                        while ($row = mysqli_fetch_assoc($res)) {
                          if($heading != $row['settings_group']){
                            $heading = $row['settings_group'];
                    ?>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                          <h4><b><?php echo $row['settings_group']; ?></b></h4>
                          <hr/>
                        </div>
                    <?php
                          }
                    ?>
                        <?php if($row['settings_input_type'] == "text"){ ?>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                          
                          <input type="text" class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>"  <?php echo $row['settings_required']?'required':''; echo $row['settings_key']=='site'?' readonly':''; ?> value="<?php echo $row['settings_value']; ?>">
                          <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                        </div>
                          <?php }else{ ?>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                              <textarea class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>" <?php echo $row['settings_required']?'required':''; ?> rows="16"><?php echo $row['settings_value']; ?></textarea>
                              <a href="#" data-toggle="modal" data-target="#<?php echo $row['settings_key']; ?>exm">View Example</a>
                              <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                              </div>
                          <?php } ?>
                   <?php 
                      }
                    ?>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                      <button type="submit" class="btn btn-primary btn-lg mt-4 pull-left">Submit</button>
                      <?php /*
                      <button type="button" id="send-email" class="btn btn-info btn-lg mt-4 pull-left ml-3">Send Test Email</button>
                      */ ?>
                    </div>
                  </form>
              </div>
              <div class="tab-pane fade" id="pills-site" role="tabpanel" aria-labelledby="pills-site-tab">
                <?php 
                      $query = "SELECT * FROM ".$tablename2." where status = 1 and settings_group in ('Site Settings') order by settings_group";
                      $res = mysqli_query($connection,$query);
                  ?>
                  <form id="site-setting3" class="site-setting row" novalidate="">
                    <?php
                          // Write rows
                        mysqli_data_seek($res, 0);
                        $heading = "";
                        $pagespeedsiteurl = "";
                        while ($row = mysqli_fetch_assoc($res)) {
                          if($row['settings_key']=='url'){
                                $pagespeedsiteurl = $row['settings_value'];
                              }
                          if($heading != $row['settings_group']){
                            $heading = $row['settings_group'];
                    ?>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                          <h4><b><?php echo $row['settings_group']; ?></b></h4>
                          <hr/>
                        </div>
                    <?php
                          }
                    ?>
                        <?php if($row['settings_input_type'] == "text"){ ?>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                          
                          <input type="text" class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>"  <?php echo $row['settings_required']?'required':''; ?> value="<?php echo $row['settings_value']; ?>">
                          <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                        </div>
                          <?php }else{ 
                            ?>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                              <textarea class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>" <?php echo $row['settings_required']?'required':''; ?> rows="16"><?php echo $row['settings_value']; ?></textarea>
                              <a href="#" data-toggle="modal" data-target="#<?php echo $row['settings_key']; ?>exm">View Example</a>
                              <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                              </div>
                          <?php } ?>
                   <?php 
                      }
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button type="submit" class="btn btn-primary btn-lg mt-4">Submit</button>
                    </div>
                  </form>
                  <br/>
                  <p><a class="text-danger" href="<?php echo 'https://developers.google.com/speed/pagespeed/insights/?url='.urlencode($pagespeedsiteurl); ?>" target="_blank">Check Page Speed Now</a></p>
              </div>
              <div class="tab-pane fade" id="pills-seo-smo" role="tabpanel" aria-labelledby="pills-seo-smo-tab">
                <?php 
                      $query = "SELECT * FROM ".$tablename2." where status = 1 and settings_group in ('Social Media','Tracking Settings') order by settings_id, settings_group";
                      $res = mysqli_query($connection,$query);
                  ?>
                  <form id="site-setting4" class="site-setting row" novalidate="">
                    <?php
                          // Write rows
                        mysqli_data_seek($res, 0);
                        $heading = "";
                        while ($row = mysqli_fetch_assoc($res)) {
                          if($heading != $row['settings_group']){
                            $heading = $row['settings_group'];
                    ?>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                          <h4><b><?php echo $row['settings_group']; ?></b></h4>
                          <hr/>
                        </div>
                    <?php
                          }
                    ?>
                        <?php if($row['settings_input_type'] == "text"){ ?>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                          
                          <input type="text" class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>"  <?php echo $row['settings_required']?'required':''; echo $row['settings_key']=='site'?' readonly':''; ?> value="<?php echo $row['settings_value']; ?>">
                          <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                        </div>
                          <?php }else{ ?>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <label for="control-<?php echo $row['settings_title']; ?>"><?php echo $row['settings_title']; echo $row['settings_required']?'&nbsp;&nbsp;<span class="text-danger">*</span>':''; ?></label>
                              <textarea class="form-control" id="control-<?php echo $row['settings_key']; ?>" name="<?php echo $row['settings_key']; ?>" <?php echo $row['settings_required']?'required':''; ?> rows="16"><?php echo $row['settings_value']; ?></textarea>
                              <a href="#" data-toggle="modal" data-target="#<?php echo $row['settings_key']; ?>exm">View Example</a>
                              <small id="emailHelp" class="form-text text-muted"><?php echo $row['settings_help_text']; ?></small>
                              </div>
                          <?php } ?>
                   <?php 
                      }
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button type="submit" class="btn btn-primary btn-lg mt-4">Submit</button>
                    </div>
                  </form>
                  <p><a class="text-danger" href="https://developers.facebook.com/tools/debug/" target="_blank">Facebook Debugger</a></p>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>


    <?php require_once $footer; ?>
  </main>
</div>
<!-- #wrapper end -->
<?php require_once $footscripts; ?>
    
    
    <!-- Modal for Head -->
    <div class="modal fade" id="block_head_all_pageexm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Head All Pages</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" readonly="readonly" id="block_headexm_block" rows="30">
              <script async src='https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXXX'></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                  gtag('config', 'G-XXXXXXXXXXX');
                  console.log ('googleanalytics');
                  gtag('config', 'AW-XXXXXXXXXXX');
                  console.log ('googleadwords'); 
                </script>

                <script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', 'XXXXXXXXXXXXXXXXXXXXXX');
                  fbq('track', 'PageView');
                  console.log ('facebookpixel');
                </script>

                <script type='text/javascript'>
                  window._tfa = window._tfa || [];
                  window._tfa.push({notify: 'event', name: 'page_view', id: XXXXXXXXXXX});
                  !function (t, f, a, x) {
                         if (!document.getElementById(x)) {
                            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                         }
                  }(document.createElement('script'),
                  document.getElementsByTagName('script')[0],
                  '//cdn.taboola.com/libtrc/unip/XXXXXXXXXXX/tfa.js',
                  'tb_tfa_script');
                  console.log ('taboolapixel');
                </script>

                <script> !function(px){function e(t,e,c){var n="",r="";try{""!=(n=function(t,e){try{var c={};e.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(t,e,n){c[e]=n});return c.hasOwnProperty(t)?c[t]:""}catch(t){return""}}(t,c))?function(t,e,c){try{var n,r;c?((n=new Date).setTime(n.getTime()+864e5),r="; expires="+n.toGMTString()):r="",document.cookie=t+"="+e+r+";Path=/"}catch(t){}}(e,n,1):n=function(t){try{var e=document.cookie.match(new RegExp("(^| )"+t+"=([^;]+)"));if(e)return e[2]}catch(t){}return null}(e),r=""!=n&&null!=n?"&"+t+"="+n:"&"+t+"="}catch(t){}return r}var c="",n="",r="";try{n=e("ad","acf",c=window.location.href),r=e("col_ci","col_ci",c)}catch(t){console.log(t)}var a="https://ade.clmbtech.com/cde/eventTracking.htm?pixelId="+px+"&_w=1"+n+r+"&rd="+(new Date).getTime();(new Image).src=a}('XXXXXXXXXXX');console.log ('columbiapixel'); </script>
            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary copytoclipboard" onclick="copyToClipboard('block_headexm_block')">Copy to Clipboard</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Head -->
    <div class="modal fade" id="block_head_index_pageexm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Head Index Page</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" readonly="readonly" id="block_headexm_block" rows="30">
              <script async src='https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXXX'></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                  gtag('config', 'G-XXXXXXXXXXX');
                  console.log ('googleanalytics');
                  gtag('config', 'AW-XXXXXXXXXXX');
                  console.log ('googleadwords'); 
                </script>

                <script>
                  !function(f,b,e,v,n,t,s)
                  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                  n.queue=[];t=b.createElement(e);t.async=!0;
                  t.src=v;s=b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t,s)}(window, document,'script',
                  'https://connect.facebook.net/en_US/fbevents.js');
                  fbq('init', 'XXXXXXXXXXXXXXXXXXXXXX');
                  fbq('track', 'PageView');
                  console.log ('facebookpixel');
                </script>

                <script type='text/javascript'>
                  window._tfa = window._tfa || [];
                  window._tfa.push({notify: 'event', name: 'page_view', id: XXXXXXXXXXX});
                  !function (t, f, a, x) {
                         if (!document.getElementById(x)) {
                            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                         }
                  }(document.createElement('script'),
                  document.getElementsByTagName('script')[0],
                  '//cdn.taboola.com/libtrc/unip/XXXXXXXXXXX/tfa.js',
                  'tb_tfa_script');
                  console.log ('taboolapixel');
                </script>

                <script> !function(px){function e(t,e,c){var n="",r="";try{""!=(n=function(t,e){try{var c={};e.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(t,e,n){c[e]=n});return c.hasOwnProperty(t)?c[t]:""}catch(t){return""}}(t,c))?function(t,e,c){try{var n,r;c?((n=new Date).setTime(n.getTime()+864e5),r="; expires="+n.toGMTString()):r="",document.cookie=t+"="+e+r+";Path=/"}catch(t){}}(e,n,1):n=function(t){try{var e=document.cookie.match(new RegExp("(^| )"+t+"=([^;]+)"));if(e)return e[2]}catch(t){}return null}(e),r=""!=n&&null!=n?"&"+t+"="+n:"&"+t+"="}catch(t){}return r}var c="",n="",r="";try{n=e("ad","acf",c=window.location.href),r=e("col_ci","col_ci",c)}catch(t){console.log(t)}var a="https://ade.clmbtech.com/cde/eventTracking.htm?pixelId="+px+"&_w=1"+n+r+"&rd="+(new Date).getTime();(new Image).src=a}('XXXXXXXXXXX');console.log ('columbiapixel'); </script>
            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary copytoclipboard" onclick="copyToClipboard('block_headexm_block')">Copy to Clipboard</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Head -->
    <div class="modal fade" id="block_body_startexm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Body Start</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" readonly="readonly" id="block_body_startexm_block" rows="10">
              <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=XXXXXXXXXXXXXXXXXXXXXX&ev=PageView&noscript=1"/></noscript>
              <noscript><img src="https://trc.taboola.com/XXXXXXXXXXX/log/3/unip?en=page_view" width="0" height="0" style="display:none"/></noscript>
              <noscript><img height="1" width="1" style="display:none" src="https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=XXXXXXXXXXX&_w=1"/> </noscript>
            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary copytoclipboard" onclick="copyToClipboard('block_body_startexm_block')">Copy to Clipboard</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Head -->
    <div class="modal fade" id="block_body_endexm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Body End</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" readonly="readonly" id="block_body_endexm_block" rows="10">
              <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=XXXXXXXXXXXXXXXXXXXXXX&ev=PageView&noscript=1"/></noscript>
              <noscript><img src="https://trc.taboola.com/XXXXXXXXXXX/log/3/unip?en=page_view" width="0" height="0" style="display:none"/></noscript>
              <noscript><img height="1" width="1" style="display:none" src="https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=XXXXXXXXXXX&_w=1"/> </noscript>
            </textarea> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary copytoclipboard" onclick="copyToClipboard('block_body_endexm_block')">Copy to Clipboard</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Head -->
    <div class="modal fade" id="block_conv_headexm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Conversion Head</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" readonly="readonly" id="block_conv_headexm_block" rows="25">
              <script>
                gtag("event", "conversion", {"send_to": "AW-XXXXXXXXXXX/XXXXXXXXXXXXXXXXXXXXXX"});
                console.log ("googleadwordsconversion");
              </script>
              <script>
                fbq("track", "Lead");
                console.log ("facebookpixelconversionlead");
              </script>
              <script> !function(px){function e(t,e,c){var n="",r="";try{""!=(n=function(t,e){try{var c={};e.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(t,e,n){c[e]=n});return c.hasOwnProperty(t)?c[t]:""}catch(t){return""}}(t,c))?function(t,e,c){try{var n,r;c?((n=new Date).setTime(n.getTime()+864e5),r="; expires="+n.toGMTString()):r="",document.cookie=t+"="+e+r+";Path=/"}catch(t){}}(e,n,1):n=function(t){try{var e=document.cookie.match(new RegExp("(^| )"+t+"=([^;]+)"));if(e)return e[2]}catch(t){}return null}(e),r=""!=n&&null!=n?"&"+t+"="+n:"&"+t+"="}catch(t){}return r}var c="",n="",r="";try{n=e("ad","acf",c=window.location.href),r=e("col_ci","col_ci",c)}catch(t){console.log(t)}var a="https://ade.clmbtech.com/cde/eventTracking.htm?pixelId="+px+"&_w=1"+n+r+"&rd="+(new Date).getTime();(new Image).src=a}('XXXXXXXXXXX');console.log ('columbiapixelconversion'); 
              </script>
            </textarea> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary copytoclipboard" onclick="copyToClipboard('block_conv_headexm_block')">Copy to Clipboard</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal for Head -->
    <div class="modal fade" id="block_conv_body_endexm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Conversion Body End</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" readonly="readonly" id="block_conv_body_endexm_block" rows="10">
              <noscript>
                <img height="1" width="1" style="display:none" src="https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=XXXXXXXXXXX&_w=1"/>
              </noscript>
            </textarea> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary copytoclipboard" onclick="copyToClipboard('block_conv_body_endexm_block')">Copy to Clipboard</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      function copyToClipboard(dataobj) {
        var copyText = document.getElementById(dataobj);
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);
      }

    </script>


</body>
</html>