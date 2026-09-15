<?php

    require_once ("inc-admin-global.php");
    
    $fail = isset ($_GET['fail']) ? $_GET['fail'] : '';
	  $page = "adminlogin";
  	
    if(isset($_SESSION['username']))
  	{
  		header("Location:dashboard/");
  	}
    
	if (isset($_POST['submit']))
	{
    $md5password = md5($_POST['login-form-password']);
		$res=mysqli_query($connection,"SELECT * FROM ".$tableloginname." WHERE username = '".$_POST['login-form-username']."' AND password like '".$md5password."'");
		$row=mysqli_fetch_array($res);
		$fail=0;
		$success="fail";
		if($_POST['login-form-username'] == $row['username'] && md5($_POST['login-form-password']) == $row['password']) {
			$success="success";
			$_SESSION['username'] = $row['username'];
      $_SESSION['userrole'] = $row['userrole'];
			header('location:dashboard/');
		} else {
			$success="fail";
			if(!isset($_GET['fail']) && $_GET['fail'] != '') { 
				$fail = 1;
			} else {
				if(ctype_digit($_GET['fail'])) {
					$fail = $_GET['fail'] + 1;
				} else {
					$fail = 1;
				}
			}
			if($fail > 3) {
				header('location:'.$siteurl);
			} else {
				header('location:'.$siteurl.'?fail='.$fail.'');
			}
		}
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php require_once $head; ?>
<title>Admin Panel Login</title>
</head>
<!-- Document Title -->
<body id="<?php echo $page;?>" class="scrollbar stretched admin">
<!-- Document Wrapper -->
<div id="wrapper" class="clearfix"> 
	<?php require_once $header; ?>
	<main class="page">
  	<section id="content">
      <div class="content-wrap">
        <div class="container clearfix">
          <div class="section-login col-middle">
              <div class="col-middle-inner">
                  <div class="login-detail card  fadeInUp animated" >
                    <div class="login-title login-title-bg">
                      <div class="login-title-overlay"></div>
                      <div class="login-title-inner-bg"></div>
                      <h1 class=" fadeInUp animated" >Admin Login</h1>
                    </div>
                    <div class="login-form clearfix">
                      <form class="nomargin clearfix" id="login-form" name="login-form" action="#" method="post">
                        <div class="register-wrap">
                          <?php
                            if ($fail==1) {
                              echo '<h5 class="message-fail">Please try again.</h5>';
                            }
                          ?>
                          <div class="row clearfix">
                            <div class="col-sm-12 col-form  fadeInUp animated" >
                              <div class="form-group theme-input required">
                                <label for="login-form-username" class="capitalize t600">Username*</label>
                                <input type="text" id="login-form-username" name="login-form-username" value="" class="sm-form-control" required />
                              </div>
                            </div>
                            <div class="col-sm-12 col-form  fadeInUp animated" >
                              <div class="form-group theme-input required">
                                <label for="login-form-password" class="capitalize t600">Password*</label>
                                <input class="sm-form-control" type="password" id="login-form-password" name="login-form-password" value="" required />
                              </div>
                            </div>
                            <div class="col-sm-12  fadeInUp animated" >
                              <div class="btn-wrap text-center">
                                <button type="submit" class="btn" name="submit" value="login" id="login-form-submit">Login</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
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
</body>
</html>