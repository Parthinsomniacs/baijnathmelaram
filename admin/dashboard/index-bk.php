<?php
	ob_start();
	session_start();
	require_once ("../inc-admin-global.php");
	if(!isset($_SESSION['username'])) {
		header("Location:".$siteurl."admin/");
	}
	$page = "admin-dashboard";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php require_once $head; ?>
<title>Admin Dashboard</title>
</head>
<body id="<?php echo $page;?>" class="scrollbar stretched admin">
<div id="wrapper" class="clearfix">
	<?php require_once $header; ?>
	<section id="content">
        <div class="content-wrap">
            <div id="data">
                <div class="container clearfix">
                    <div class="section-admin-dashboard full-height col-middle">
                      <div class="col-middle-inner">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 center">
                                <h1>Admin Dashboard</h1>
                                <?php include $db; ?>                     
                                <div class="row dashboard justify-content-center">
                                    <?php if($tablename1 != ""){ 
                                        $query1 = "SELECT count(*) AS count FROM ".$tablename1;
                                        $count1 = mysqli_fetch_assoc(mysqli_query($connection, $query1));
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-export">
                                        <div class="export-detail">
                                            <h2 class="huge"><a href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/"><?php echo $count1['count']; ?></a></h2>
                                            <h3 class="export-page-name"><a href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/"><?php echo $tablename1; ?></a></h3>
                                            <h5 class="export-link"><a href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/export.php">Export</a></h5>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php if($tablename2 != ""){
                                        $query2 = "SELECT count(*) AS count FROM ".$tablename2;
                                        $count2 = mysqli_fetch_assoc(mysqli_query($connection, $query2));
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-export">
                                        <div class="export-detail">
                                            <h2 class="huge"><a href="<?php echo $siteurl; ?><?php echo $tablename2; ?>/"><?php echo $count2['count']; ?></a></h2>
                                            <h3 class="export-page-name"><a href="<?php echo $siteurl; ?><?php echo $tablename2; ?>/"><?php echo $tablename1; ?></a></h3>
                                            <h5 class="export-link"><a href="<?php echo $siteurl; ?><?php echo $tablename2; ?>/export.php">Export</a></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if($tablename3 != ""){
                                        $query3 = "SELECT count(*) AS count FROM ".$tablename3;
                                        $count3 = mysqli_fetch_assoc(mysqli_query($connection, $query3));
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-export">
                                        <div class="export-detail">
                                            <h2 class="huge"><a href="<?php echo $siteurl; ?><?php echo $tablename3; ?>/"><?php echo $count3['count']; ?></a></h2>
                                            <h3 class="export-page-name"><a href="<?php echo $siteurl; ?><?php echo $tablename3; ?>/"><?php echo $tablename1; ?></a></h3>
                                            <h5 class="export-link"><a href="<?php echo $siteurl; ?><?php echo $tablename3; ?>/export.php">Export</a></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<?php require_once $footer; ?>
</div>
<?php require_once $footscripts; ?>
</body>
</html>