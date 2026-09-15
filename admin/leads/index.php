<?php
  require_once ("../inc-admin-global.php");
  if (!isset($_SESSION['username']) || $_SESSION['username'] == '')
  {
    header("Location:".$siteurl);
  }
  $page = "admin-".$tablename1;
  $pagename = $tablename1;

  // Search functionality
  $search = isset($_GET['search']) ? mysqli_real_escape_string($connection, $_GET['search']) : '';
  $where_clause = '';
  if($search != '') {
    // Get all column names
    $cols_query = "SHOW COLUMNS FROM " . $tablename1;
    $cols_result = mysqli_query($connection, $cols_query);
    $search_conditions = array();
    while($col = mysqli_fetch_assoc($cols_result)) {
      $search_conditions[] = "`" . $col['Field'] . "` LIKE '%" . $search . "%'";
    }
    $where_clause = " WHERE " . implode(" OR ", $search_conditions);
  }

  // Pagination settings
  $records_per_page = 100;
  $page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  $offset = ($page_number - 1) * $records_per_page;

  // Get total records count with search
  $count_query = "SELECT COUNT(*) as total FROM ".$tablename1 . $where_clause;
  $count_result = mysqli_query($connection, $count_query);
  $total_records = mysqli_fetch_assoc($count_result)['total'];
  $total_pages = ceil($total_records / $records_per_page);

  // Get paginated records with search
  $query = "SELECT * FROM ".$tablename1 . $where_clause . " LIMIT $offset, $records_per_page";
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
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                  <a href="export.php" class="btn btn-primary">Export</a>
                </div>
                <div class="col-lg-12 col-md-12">
                  <!-- Global Search Form -->
                  <form method="GET" class="search-form">
                    <div class="input-group">
                      <input type="text" name="search" class="form-control" placeholder="Search in all records..." value="<?php echo htmlspecialchars($search); ?>">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Search</button>
                        <?php if($search != ''): ?>
                          <a href="?" class="btn btn-default">Clear</a>
                        <?php endif; ?>
                      </span>
                    </div>
                  </form>

                  <div class='data-table-wrapper wow fadeInUp animated' data-wow-delay="0.6s">
                    <div class="portlet light bordered">
                      <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" id="table-<?php echo $tablename1; ?>">
                          <thead>
                            <tr>
                              <?php
                              $res = mysqli_query($connection, $query);
                              if($res && mysqli_num_rows($res) > 0){
                                $row = mysqli_fetch_assoc($res);
                                foreach ($row as $col => $value) {
                                    echo "<th class='text-capitalize'>";
                                    echo str_replace('_', ' ', $col);
                                    echo "</th>";
                                }
                                mysqli_data_seek($res, 0);
                              }
                              ?>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if($res && mysqli_num_rows($res) > 0){
                              while($row = mysqli_fetch_assoc($res)) {
                                echo "<tr>";
                                foreach($row as $value){
                                    echo "<td>" . htmlspecialchars($value) . "</td>";
                                }
                                echo "</tr>";
                              }
                            } else {
                              echo "<tr><td colspan='100%' class='text-center'>No records found</td></tr>";
                            }
                            ?>
                          </tbody>
                        </table>

                        <!-- Pagination -->
                        <?php if($total_pages > 1): ?>
                        <div class="pagination-wrapper">
                          <ul class="pagination">
                            <?php
                            // Previous button
                            $prev_params = http_build_query(array_merge($_GET, array('page' => ($page_number-1))));
                            $next_params = http_build_query(array_merge($_GET, array('page' => ($page_number+1))));
                            $first_params = http_build_query(array_merge($_GET, array('page' => 1)));
                            $last_params = http_build_query(array_merge($_GET, array('page' => $total_pages)));

                            if($page_number > 1) {
                                echo "<li><a href='?$first_params'>&laquo; First</a></li>";
                                echo "<li><a href='?$prev_params'>Prev</a></li>";
                            } else {
                                echo "<li class='disabled'><span>&laquo; First</span></li>";
                                echo "<li class='disabled'><span>Prev</span></li>";
                            }

                            // Calculate the range of page numbers to show
                            $range = 2;
                            $start_page = max($page_number - $range, 1);
                            $end_page = min($page_number + $range, $total_pages);

                            // Show page numbers
                            for($i = $start_page; $i <= $end_page; $i++) {
                                $page_params = http_build_query(array_merge($_GET, array('page' => $i)));
                                if($i == $page_number) {
                                    echo "<li class='active'><a href='#'>$i</a></li>";
                                } else {
                                    echo "<li><a href='?$page_params'>$i</a></li>";
                                }
                            }

                            // Next button
                            if($page_number < $total_pages) {
                                echo "<li><a href='?$next_params'>Next</a></li>";
                                echo "<li><a href='?$last_params'>Last &raquo;</a></li>";
                            } else {
                                echo "<li class='disabled'><span>Next</span></li>";
                                echo "<li class='disabled'><span>Last &raquo;</span></li>";
                            }
                            ?>
                          </ul>
                        </div>
                        <?php endif; ?>

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
                      sortAscending: ": activate to sort column ascending",
                      sortDescending: ": activate to sort column descending"
                  },
                  emptyTable:"No data available in table",
                  info:"Showing _START_ to _END_ of _TOTAL_ entries",
                  infoEmpty:"No entries found",
                  infoFiltered:"(filtered1 from _MAX_ total entries)",
                  lengthMenu:"_MENU_ entries",
                  search:"Search in current page:",
                  zeroRecords:"No matching records found"
              },
              buttons:[],
              responsive: true,
              ordering: true,
              searching: true,
              paging: false,
              info: false,
              scrollX: true
          });
      };
      return {
          init:function() {
              jQuery().dataTable&&(n())
          }
      }
  }();
  
  jQuery(document).ready(function() {
      TableDatatablesResponsive.init()
  });
</script>
</body>
</html>