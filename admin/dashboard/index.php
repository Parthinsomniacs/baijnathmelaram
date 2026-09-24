<?php
	
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
<script type="text/javascript" src="<?php echo $jsurl; ?>chart.min.js"></script>
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<title>Admin Dashboard</title>
</head>
<body id="<?php echo $page;?>" class="scrollbar stretched admin">
<div id="wrapper" class="clearfix">
	<?php require_once $header; ?>
    <main class="page">
      <div class="card primary wow fadeInUp animated" data-wow-delay="0.3s">
        <h1 class="title">Welcome to the Midnight Admin!</h1>
        <span><a href="#" class="link" target="_blank" style="color: #fff;">View Homepage <i class="icon fas fa-arrow-right"></i></a></span>
      </div>
      <div class="card chart wow fadeInUp animated" data-wow-delay="0.3s" id="views-chart">
          <?php
            $query1 = "SELECT count(*) AS count, date(created_at) as day  FROM ".$tablename1." group by date(created_at)";
            $result = mysqli_query($connection, $query1);
            $totalleads = 0;
            $dataPoints = array();
            $dataLabels = array();
            
            if($result){
              while ($row = mysqli_fetch_assoc($result)) {
                $temp = array();
                foreach($row as $key => $value){
                  array_push($temp, $value);
                }
                array_push($dataLabels, $temp[1]);
                array_push($dataPoints, floatval($temp[0]));
                // array_push($dataPoints, array("label"=> $temp[1], "y"=> floatval($temp[0])));
                $totalleads += floatval($temp[0]);
              }
            }
          ?>
          <h1 class="title"><a href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/"><?php echo $totalleads; ?> Leads</a></h1>
          <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
          <div class="chart-Container p-4">
            <canvas id="chartContainer" style="height: 370px; width: 100%;"></canvas>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
          <div id="source" class="card wow fadeInUp animated" data-wow-delay="0.3s">
            <h1 class="title">Source</h1>
            <div class="bar-graph">
              <?php
                $query = "SELECT utm_source, count(*) as views FROM ".$tablename1." GROUP BY utm_source";
                $res = mysqli_query($connection, $query);
                if($res){
                  while ($row = mysqli_fetch_assoc($res)) {
                      $temp = array();
                      foreach($row as $key => $value){
                          
                          array_push($temp, $value);
                      }
                      $percentage = (floatval($temp[1])*100)/$maxleadbar;
                      echo "<div class='line wow fadeInLeft animated' data-wow-delay='0.3s' data-toggle='tooltip' data-placement='top' title='".$temp[1]." Views'><label>".$temp[0]."</label><span style='max-width: ".$percentage."%;'></span></div>";
                      //print_r($temp);
                  }
                }
              ?>
              <?php /*
              <div class="line wow fadeInLeft animated" data-wow-delay="0.3s" data-toggle="tooltip" data-placement="top" title="31 Views">
                <label>Google</label>
                <span style="max-width: 100%;"></span>
              </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.9s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>Facebook</label>
                <span style="max-width: 5.88235294117647%;"></span>
              </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>Direct</label>
                <span style="max-width: 5.88235294117647%;"></span> 
              </div>*/ ?>
            </div> 
          </div>
          <div id="referrers" class="card wow fadeInUp animated" data-wow-delay="0.3s">
            <h1 class="title">Initial Referrer</h1>
            <div class="bar-graph">
              <?php
                $query = "SELECT utm_medium, count(*) as views FROM ".$tablename1." GROUP BY utm_medium";
                $res = mysqli_query($connection, $query);
                if($res){
                  while ($row = mysqli_fetch_assoc($res)) {
                      $temp = array();
                      foreach($row as $key => $value){
                          array_push($temp, $value);
                      }
                      $percentage = (floatval($temp[1])*100)/$maxleadbar;
                      echo "<div class='line wow fadeInLeft animated' data-wow-delay='0.3s' data-toggle='tooltip' data-placement='top' title='".$temp[1]." Views'><label>".$temp[0]."</label><span style='max-width: ".$percentage."%;'></span></div>";
                      //print_r($temp);
                  }
                }                
              ?>
              <?php /*
              <div class="line wow fadeInLeft animated" data-wow-delay="0.3s" data-toggle="tooltip" data-placement="top" title="31 Views">
                <label>https%3A//www.google.com/</label>
                <span style="max-width: 100%;"></span> </div>
                <div class="line wow fadeInLeft animated" data-wow-delay="0.9s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>https%3A//www.google.co.in</label>
                <span style="max-width: 5.88235294117647%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.6s" data-toggle="tooltip" data-placement="top" title="20 Views">
                <label>https%3A//l.facebook.com/</label>
                <span style="max-width: 14.705882352941178%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>direct</label>
                <span style="max-width: 5.88235294117647%;"></span> 
              </div> */ ?>
            </div>
          </div>
          <div id="devices" class="card wow fadeInUp animated" data-wow-delay="0.3s">
            <h1 class="title">Devices</h1>
            <div class="bar-graph">
              <?php
                $query = "SELECT browser_platform, count(*) as views FROM ".$tablename1." GROUP BY browser_platform";
                $res = mysqli_query($connection, $query);
                if($res){
                while ($row = mysqli_fetch_assoc($res)) {
                    $temp = array();
                    foreach($row as $key => $value){
                        array_push($temp, $value);
                    }
                    $percentage = (floatval($temp[1])*100)/$maxleadbar;
                    echo "<div class='line wow fadeInLeft animated' data-wow-delay='0.3s' data-toggle='tooltip' data-placement='top' title='".$temp[1]." Views'><label>".$temp[0]."</label><span style='max-width: ".$percentage."%;'></span></div>";
                    //print_r($temp);
                }
                }
              ?>
              <?php /* 
              <div class="line wow fadeInLeft animated" data-wow-delay="0.3s" data-toggle="tooltip" data-placement="top" title="2,989 Views">
                <label>Desktop</label>
                <span style="max-width: 100%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.6s" data-toggle="tooltip" data-placement="top" title="1,271 Views">
                <label>Mobile</label>
                <span style="max-width: 42.52258280361325%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.9s" data-toggle="tooltip" data-placement="top" title="77 Views">
                <label>Tablet</label>
                <span style="max-width: 2.576112412177986%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="73 Views">
                <label>Bot</label>
                <span style="max-width: 2.4422883907661426%;"></span> 
              </div> */ ?>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
          <div id="medium" class="card wow fadeInUp animated" data-wow-delay="0.3s">
            <h1 class="title">Medium</h1>
            <div class="bar-graph">
              <?php
                $query = "SELECT utm_medium, count(*) as views FROM ".$tablename1." GROUP BY utm_medium";
                $res = mysqli_query($connection, $query);
                if($res){
                while ($row = mysqli_fetch_assoc($res)) {
                    $temp = array();
                    foreach($row as $key => $value){
                        array_push($temp, $value);
                    }
                    $percentage = (floatval($temp[1])*100)/$maxleadbar;
                    echo "<div class='line wow fadeInLeft animated' data-wow-delay='0.3s' data-toggle='tooltip' data-placement='top' title='".$temp[1]." Views'><label>".$temp[0]."</label><span style='max-width: ".$percentage."%;'></span></div>";
                    //print_r($temp);
                }}
              ?>
              <?php /* 
              <div class="line wow fadeInLeft animated" data-wow-delay="0.3s" data-toggle="tooltip" data-placement="top" title="31 Views">
                <label>Search</label>
                <span style="max-width: 100%;"></span> </div>
                <div class="line wow fadeInLeft animated" data-wow-delay="0.9s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>Lead_Gen</label>
                <span style="max-width: 5.88235294117647%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>Direct</label>
                <span style="max-width: 5.88235294117647%;"></span> 
              </div> */ ?>
            </div>
          </div>
          <div id="browsers" class="card wow fadeInUp animated" data-wow-delay="0.3s">
            <h1 class="title">Browser Name</h1>
            <div class="bar-graph">
              <?php
                $query = "SELECT browser_name, count(*) as views FROM ".$tablename1." GROUP BY browser_name";
                $res = mysqli_query($connection, $query);
                if($res){
                while ($row = mysqli_fetch_assoc($res)) {
                    $temp = array();
                    foreach($row as $key => $value){
                        array_push($temp, $value);
                    }
                    $percentage = (floatval($temp[1])*100)/$maxleadbar;
                    echo "<div class='line wow fadeInLeft animated' data-wow-delay='0.3s' data-toggle='tooltip' data-placement='top' title='".$temp[1]." Views'><label>".$temp[0]."</label><span style='max-width: ".$percentage."%;'></span></div>";
                    //print_r($temp);
                }
                }
              ?>
              <?php /* 
              <div class="line wow fadeInLeft animated" data-wow-delay="0.3s" data-toggle="tooltip" data-placement="top" title="2,444 Views">
                <label>Chrome</label>
                <span style="max-width: 100%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.6s" data-toggle="tooltip" data-placement="top" title="891 Views">
                <label>Safari</label>
                <span style="max-width: 36.45662847790507%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.9s" data-toggle="tooltip" data-placement="top" title="285 Views">
                <label>Internet Explorer</label>
                <span style="max-width: 11.661211129296236%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="262 Views">
                <label>Firefox</label>
                <span style="max-width: 10.72013093289689%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.5s" data-toggle="tooltip" data-placement="top" title="196 Views">
                <label>Firefox Mobile</label>
                <span style="max-width: 8.01963993453355%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.8s" data-toggle="tooltip" data-placement="top" title="58 Views">
                <label>Samsung Internet</label>
                <span style="max-width: 2.3731587561374794%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="2.1s" data-toggle="tooltip" data-placement="top" title="36 Views">
                <label>Opera</label>
                <span style="max-width: 1.4729950900163666%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="2.4s" data-toggle="tooltip" data-placement="top" title="33 Views">
                <label>Yandex Browser</label>
                <span style="max-width: 1.3502454991816693%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="2.7s" data-toggle="tooltip" data-placement="top" title="25 Views">
                <label>Android Browser</label>
                <span style="max-width: 1.0229132569558101%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="3s" data-toggle="tooltip" data-placement="top" title="17 Views">
                <label>Facebook</label>
                <span style="max-width: 0.6955810147299509%;"></span> 
              </div>
              */ ?>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
          <div id="campaign" class="card wow fadeInUp animated" data-wow-delay="0.3s">
            <h1 class="title">Campaign</h1>
            <div class="bar-graph">
              <?php
                $query = "SELECT utm_campaign, count(*) as views FROM ".$tablename1." GROUP BY utm_campaign";
                $res = mysqli_query($connection, $query);
                if($res){
                while ($row = mysqli_fetch_assoc($res)) {
                    $temp = array();
                    foreach($row as $key => $value){
                        array_push($temp, $value);
                    }
                    $percentage = (floatval($temp[1])*100)/$maxleadbar;
                    echo "<div class='line wow fadeInLeft animated' data-wow-delay='0.3s' data-toggle='tooltip' data-placement='top' title='".$temp[1]." Views'><label>".$temp[0]."</label><span style='max-width: ".$percentage."%;'></span></div>";
                    //print_r($temp);
                }
                }
              ?>
              <?php /*
              <div class="line wow fadeInLeft animated" data-wow-delay="0.3s" data-toggle="tooltip" data-placement="top" title="31 Views">
                <label>1_BHK</label>
                <span style="max-width: 100%;"></span> </div>
                <div class="line wow fadeInLeft animated" data-wow-delay="0.9s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>2_BHK</label>
                <span style="max-width: 5.88235294117647%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.6s" data-toggle="tooltip" data-placement="top" title="20 Views">
                <label>3_BHK</label>
                <span style="max-width: 14.705882352941178%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>Mumbai</label>
                <span style="max-width: 5.88235294117647%;"></span> </div>
                <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="8 Views">
                <label>Thane</label>
                <span style="max-width: 5.88235294117647%;"></span> </div>
              */ ?>
            </div>
          </div>
          <div id="platform" class="card wow fadeInUp animated" data-wow-delay="0.3s">
            <h1 class="title">Browser Platform</h1>
            <div class="bar-graph">
              <?php
                $query = "SELECT utm_landing_page, count(*) as views FROM ".$tablename1." GROUP BY utm_landing_page";
                $res = mysqli_query($connection, $query);
                if($res){
                while ($row = mysqli_fetch_assoc($res)) {
                    $temp = array();
                    foreach($row as $key => $value){
                        array_push($temp, $value);
                    }
                    $percentage = (floatval($temp[1])*100)/$maxleadbar;
                    echo "<div class='line wow fadeInLeft animated' data-wow-delay='0.3s' data-toggle='tooltip' data-placement='top' title='".$temp[1]." Views'><label>".$temp[0]."</label><span style='max-width: ".$percentage."%;'></span></div>";
                    //print_r($temp);
                }
                }
              ?>
              <?php /*
              <div class="line wow fadeInLeft animated" data-wow-delay="0.3s" data-toggle="tooltip" data-placement="top" title="2,655 Views">
                <label>Windows</label>
                <span style="max-width: 100%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.6s" data-toggle="tooltip" data-placement="top" title="777 Views">
                <label>iOS</label>
                <span style="max-width: 29.155722326454033%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="0.9s" data-toggle="tooltip" data-placement="top" title="562 Views">
                <label>Android</label>
                <span style="max-width: 21.088180112570356%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.2s" data-toggle="tooltip" data-placement="top" title="224 Views">
                <label>OS X</label>
                <span style="max-width: 8.405253283302065%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.5s" data-toggle="tooltip" data-placement="top" title="68 Views">
                <label>Linux</label>
                <span style="max-width: 2.551594746716698%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="1.8s" data-toggle="tooltip" data-placement="top" title="16 Views">
                <label>Ubuntu</label>
                <span style="max-width: 0.600375234521576%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="2.1s" data-toggle="tooltip" data-placement="top" title="15 Views">
                <label>Chrome OS</label>
                <span style="max-width: 0.5628517823639775%;"></span> </div>
              <div class="line wow fadeInLeft animated" data-wow-delay="2.4s" data-toggle="tooltip" data-placement="top" title="10 Views">
                <label>FireOS</label>
                <span style="max-width: 0.37523452157598497%;"></span> 
              </div>
               */ ?>
            </div>
          </div>
        </div>
      </div>
      <?php /*?><?php include $db; ?>                     
      <div class="row dashboard justify-content-center">
          <?php if($tablename1 != ""){ 
              $query1 = "SELECT count(*) AS count FROM ".$tablename1;
              $count1 = mysqli_fetch_assoc(mysqli_query($connection, $query1));
          ?>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-export">
              <div class="card export-detail">
                  <h2 class="huge wow fadeInUp animated" data-wow-delay="0.3s"><a href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/"><?php echo $count1['count']; ?></a></h2>
                  <h3 class="export-page-name wow fadeInUp animated" data-wow-delay="0.4s"><a href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/"><?php echo $tablename1; ?></a></h3>
                  <h5 class="export-link wow fadeInUp animated" data-wow-delay="0.5s"><a href="<?php echo $siteurl; ?><?php echo $tablename1; ?>/export.php">Export</a></h5>
              </div>
          </div>
          <?php } ?>

          <?php if($tablename2 != ""){
              $query2 = "SELECT count(*) AS count FROM ".$tablename2;
              $count2 = mysqli_fetch_assoc(mysqli_query($connection, $query2));
          ?>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-export">
              <div class="card export-detail">
                  <h2 class="huge wow fadeInUp animated" data-wow-delay="0.3s"><a href="<?php echo $siteurl; ?><?php echo $tablename2; ?>/"><?php echo $count2['count']; ?></a></h2>
                  <h3 class="export-page-name wow fadeInUp animated" data-wow-delay="0.4s"><a href="<?php echo $siteurl; ?><?php echo $tablename2; ?>/"><?php echo $tablename1; ?></a></h3>
                  <h5 class="export-link wow fadeInUp animated" data-wow-delay="0.5s"><a href="<?php echo $siteurl; ?><?php echo $tablename2; ?>/export.php">Export</a></h5>
              </div>
          </div>
          <?php } ?>
          <?php if($tablename3 != ""){
              $query3 = "SELECT count(*) AS count FROM ".$tablename3;
              $count3 = mysqli_fetch_assoc(mysqli_query($connection, $query3));
          ?>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-export">
              <div class="card export-detail">
                  <h2 class="huge wow fadeInUp animated" data-wow-delay="0.3s"><a href="<?php echo $siteurl; ?><?php echo $tablename3; ?>/"><?php echo $count3['count']; ?></a></h2>
                  <h3 class="export-page-name wow fadeInUp animated" data-wow-delay="0.4s"><a href="<?php echo $siteurl; ?><?php echo $tablename3; ?>/"><?php echo $tablename1; ?></a></h3>
                  <h5 class="export-link wow fadeInUp animated" data-wow-delay="0.5s"><a href="<?php echo $siteurl; ?><?php echo $tablename3; ?>/export.php">Export</a></h5>
              </div>
          </div>
          <?php } ?>
      </div><?php */?>
      <?php require_once $footer; ?>
    </main>
</div>
<?php require_once $footscripts; ?>
<script src="https://npmcdn.com/chart.js@latest/dist/chart.min.js"></script>
<script>
window.onload = function () {
  //  canvas chart
  // var chart = new CanvasJS.Chart("chartContainer", {
  //   title: {
  //     text: "Daywise Leads Statistics"
  //   },
  //   axisY: {
  //     title: "Number of Leads"
  //   },
  //   data: [{
  //     type: "line",
  //     lineDashType: "dot",
  //     markerColor: "#008000",
  //     showInLegend: false,
  //     options: {
  //        legend: {
  //           display: false
  //        }
  //     },
  //     dataPoints: <?php /*/echo json_encode($dataPoints, JSON_NUMERIC_CHECK);/*/ ?>
  //   }]
  // });
  // chart.render();

  // chart.js

  var ctx = document.getElementById("chartContainer");
  var myChart = new Chart(ctx, {
    // type: "line",
    type: "line",
    data: {      
      labels: <?php echo json_encode($dataLabels, JSON_NUMERIC_CHECK);?>,
      datasets: [
        {
          label: "Number of Leads",
          data: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK);?> ,
        }
      ]
    },
    options: {
      scales: {
        y: {
          ticks: {
            beginAtZero: true
          }
        }
      }
    }
  });


}
</script>
</body>
</html>