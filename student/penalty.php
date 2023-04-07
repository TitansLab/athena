<?php
session_start();
if ($_SESSION['role'] != "Law") {
  header("Location: ../index.php");
} else {
  include_once("../config.php");
  $_SESSION["userrole"] = "Student";
  $id = $_SESSION['id'];
  $iqur = "SELECT * FROM student_master WHERE Username = '$id'";
  $iqurres = mysqli_query($conn, $iqur);
  $iqurrow = mysqli_fetch_assoc($iqurres);
  $pqur = "SELECT Student_id,sum(penalty_amount) as penalty_sum FROM penalty group by Student_id having Student_id = '$id'";
  $pqurres = mysqli_query($conn, $pqur);
  $pqurrow = mysqli_fetch_assoc($pqurres);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("../head.php"); ?>
</head>

<body>
  <?php $nav_role = "Penalty"; ?>
  <!-- NAVIGATION -->
  <?php include_once("nav.php"); ?>
  <!-- MAIN CONTENT -->
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <!-- HEADER -->
    <div class="header">
      <div class="container-fluid">
        <!-- Body -->
        <div class="header-body">

          <div class="row align-items-end">
            <div class="col">
              <h5 class="header-pretitle">
                <a class="btn-link btn-outline" onclick="history.back()"><i class="fe uil-angle-double-left"></i>Back</a>
              </h5>
              <h5 class="header-pretitle">
                Penalty
              </h5>
              <!-- Title -->
              <h1 class="header-title">
                Dashboard
              </h1>
            </div>
          </div>
          <!-- / .row -->
        </div>
        <!-- / .header-body -->
      </div>
    </div>
    <div class="container-fluid">
      <div class="page-header min-height-100 border-radius-xl mt-4">
      </div>
      <!-- Card -->
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">

              <!-- Avatar -->
              <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                <img src="../src/uploads/stuprofile/<?php echo $iqurrow['user_image'] . "?t"; ?>" alt="..." class="avatar-img rounded">

              </a>

            </div>
            <div class="col ml-n2">

              <!-- Title -->
              <h3 class="mb-1">
                <a href="project-overview.html"><?php echo $pqurrow['penalty_sum']; ?> ₹</a>
              </h3>

              <!-- Text -->
              <p class="small text-muted mb-1">
                <time datetime="2018-06-21">Total Penalty</time>
              </p>

              <!-- Progress -->
              <div class="row align-items-center g-0">
                <div class="col-auto">

                  <!-- Value -->
                  <div class="small mr-2">100%</div>

                </div>
                <div class="col">

                  <!-- Progress -->
                  <div class="progress progress-sm">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                </div>
              </div> <!-- / .row -->

            </div>
            <div class="col-auto">
              <!-- Button -->
              <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                Click to Pay
              </a>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .card-body -->
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <?php include("context.php"); ?>
  <!-- / .main-content -->
  <!-- JAVASCRIPT -->
  <!-- Map JS -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
  <!-- Vendor JS -->
  <script src="../assets/js/vendor.bundle.js"></script>
  <!-- Theme JS -->
  <script src="../assets/js/theme.bundle.js"></script>
  <!-- Delete Popup -->

</body>

</html>