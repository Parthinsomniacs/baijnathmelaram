<?php

  require_once ("../inc-admin-global.php");
  if (!isset($_SESSION['username']) || $_SESSION['username'] == '')
  {
    header("Location:".$siteurl);
  }
  $page = "admin-".$tablename1;
  $pagename = $tablename1;
  $query = "SELECT * FROM ".$tablename1;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php require_once $head; ?>
<title><?php echo $sitename;?>: <?php echo $pagename; ?></title>
</head>
<!-- Document Title -->
<body id="<?php echo $page;?>" class="scrollbar stretched admin admin-detail">
<!-- Document Wrapper -->
<div id="wrapper" class="clearfix">
  <?php require_once $header; ?>
  <main class="page">
    <section id="content">
      <div class="content-wrap">
            <div id="data" class="clearfix">
              <div class="row clearfix">
                <div class="col-lg-6 col-md-6">
                  <h1 class="title wow fadeInUp animated text-capitalize" data-wow-delay="0.3s"><?php echo $pagename; ?></h1>
                  <?php	
                      $res = mysqli_query($connection,$query);
                  ?>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                  <a href="export.php" class="btn btn-primary">Export</a>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class='data-table-wrapper wow fadeInUp animated' data-wow-delay="0.6s">
                    <div class="portlet light bordered">
                      <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" id="table-<?php echo $tablename1; ?>">
                          <thead>
                            <tr>
                              <?php
                if($res){

                              if(mysqli_num_rows($res) > 0){
                                $row = mysqli_fetch_assoc($res);
                                foreach ($row as $col => $value) {
                                    echo "<th class='text-capitalize'>";
                                    echo str_replace('_', ' ', $col);
                                    echo "</th>";
                                }
                              }
                              }
                              ?>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                          // Write rows
                if($res){

                          mysqli_data_seek($res, 0);
                          if(mysqli_num_rows($res) > 0){
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                            <tr>
                              <?php         
                            foreach($row as $key => $value){
                                echo "<td>";
                                echo $value;
                                echo "</td>";
                            }
                            ?>
                            </tr>
                            <?php }
                            }} ?>
                          </tbody>
                        </table>
                      </div>
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
<script type="text/javascript">
    var TableDatatablesResponsive=function() {
      
      n=function() {
          var e=$("#table-<?php echo $tablename1; ?>");
          e.dataTable( {
              language: {
                  aria: {
                      sortAscending: ": activate to sort column ascending", sortDescending: ": activate to sort column descending"
                  }
                  , emptyTable:"No data available in table", info:"Showing _START_ to _END_ of _TOTAL_ entries", infoEmpty:"No entries found", infoFiltered:"(filtered1 from _MAX_ total entries)", lengthMenu:"_MENU_ entries", search:"Search:", zeroRecords:"No matching records found"
              }
              , buttons:[ {
                  //extend: "print", className: "btn default"
              }
              , {
                 // extend: "pdf", className: "btn default"
              }
              , {
                 // extend: "csv", className: "btn default"
              }
              ], responsive: false
              , order:[[0, "asc"]], lengthMenu:[[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"]], pageLength:10, dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
          }
          )
      };
      return {
          init:function() {
              jQuery().dataTable&&(n())
          }
      }
  }
  ();
  jQuery(document).ready(function() {
      TableDatatablesResponsive.init()
  }

  );
</script>
</body>
</html>