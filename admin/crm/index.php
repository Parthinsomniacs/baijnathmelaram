 <?php
  	require_once ("../inc-admin-global.php");
  	if (!isset($_SESSION['username']) || $_SESSION['username'] == '')
  	{
    	header("Location:".$siteurl);
  	}
 	$page = "admin-".$tablename2;
  	$pagename = $tablename2;

	$filepath = "../../include/inc-crm.php";	
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php require_once $head; ?>
<title><?php echo $sitename;?>: <?php echo $pagename; ?></title>
<script type="text/javascript" src="<?php echo $jsurl; ?>iziToast.min.js"></script>
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
<?php
if(isset($_POST['submit'])){			
	$myfile = fopen($filepath, "w") or die("Unable to open file!");
	$txt = $_POST['crm-content'];
	fwrite($myfile, $txt);
	fclose($myfile);
	echo "<script> 
			iziToast.success({ title: 'OK', message: 'Code updated successfully', position: 'topRight' ,transitionIn: 'fadeInDown'});
		</script>";	
}
?>
<!-- Document Wrapper -->

<div id="wrapper" class="clearfix">
  	<?php require_once $header; ?>
  	<main class="page">
	    <section id="content">
	      	<div class="content-wrap">
		        <div class="row clearfix">
			        <div class="col-lg-12 col-md-12">
			            <h1 class="title wow fadeInUp animated text-capitalize" data-wow-delay="0.3s">CRM Integration</h1>
			            <hr/>
			        </div>
		          	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              	<form id="site-setting" class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			              	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			               		<label for="control-crm-content">CRM Integration Content</label>
			              		<textarea class="form-control" id="control-crm-content" name="crm-content" rows="28">
			              			<?php echo file_get_contents($filepath); ?>
			              		</textarea>
			              	</div>
			                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">								
			                  <button type="submit" name="submit" class="btn btn-primary btn-lg mt-4">Submit</button>
			                </div>
		              	</form>
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