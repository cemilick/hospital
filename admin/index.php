<?php 
  include './database/koneksi.php';
  session_start();
  if(!$_SESSION['isLogin']){
    header('location: /hospital_website/admin/pages/login');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Admin RS Brayat Minulya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css" />
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/typicons/typicons.css" />
    <link
      rel="stylesheet"
      href="vendors/simple-line-icons/css/simple-line-icons.css"
    />
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"
    />
    <link rel="stylesheet" href="js/select.dataTables.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="images/logoRS.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav
        class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row"
      >
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start"
        >
          <div class="me-3">
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-bs-toggle="minimize"
            >
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="/hospital_website/admin/">
              <img src="images/logoRS.png" alt="logo" />
              <font size="2">RS Brayat Minulya</font>
            </a>
            <a class="navbar-brand brand-logo-mini" href="/hospital_website/admin/">
              <img src="images/logoRS.png" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">
                Rumah Sakit
                <span class="text-black fw-bold">Brayat Minulya</span>
              </h1>
              <h3 class="welcome-sub-text">
                Halaman khusus Admin RS Brayat Minulya
              </h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a
                class="nav-link"
                id="UserDropdown"
                href="#"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  class="img-xs rounded-circle"
                  src="images/faces/face8.jpg"
                  alt="Profile image"
                />
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="UserDropdown"
              >
                <div class="dropdown-header text-center">
                  <img
                    class="img-md rounded-circle"
                    src="images/faces/face8.jpg"
                    alt="Profile image"
                  />
                  <p class="mb-1 mt-3 font-weight-semibold">
                    Admin RS Brayat Minulya
                  </p>
                  <p class="fw-light text-muted mb-0">
                    brayat.minulya@gmail.com
                  </p>
                </div>
                <a class="dropdown-item"
                href="/hospital_website/admin/pages/login/logout.php"  
                ><i
                    class="dropdown-item-icon mdi mdi-power text-primary me-2"
                  ></i
                  >Sign Out</a
                >
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-bs-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/hospital_website/admin/">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hospital_website/admin/pages/dokter">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Kelola Jadwal Dokter</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hospital_website/admin/pages/berita">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Kelola Berita</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item nav-category">pages</li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth"
              >
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/hospital_website/admin/pages/login/logout.php">
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="tab-content tab-content-basic">
                    <div
                      class="tab-pane fade show active"
                      id="overview"
                      role="tabpanel"
                      aria-labelledby="overview"
                    >
                      <div class="row">
                        <div class="col-lg-8 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">
                                        Jadwal Operasional Dokter
                                      </h4>
                                      <p
                                        class="card-subtitle card-subtitle-dash"
                                      >
                                        Jadwal Dokter bisa ditemui oleh pasien
                                        dengan pelayanan terkait
                                      </p>
                                    </div>
                                  </div>
                                      <?php 

                                    $query = "SELECT * FROM `jadwal`";

                                    $result = mysqli_query($conn, $query);
                                    if($result->num_rows > 0):
                                    ?>
                          <div class="table-responsive mt-1">
                          <table class="table select-table">
                            <thead>
                              <tr>
                                <th>Dokter</th>
                                <th>Bidang Pelayanan</th>
                                <th>Jadwal Dokter</th>
                              </tr>
                            </thead>
                            <tbody>
                           <?php while($row = mysqli_fetch_assoc($result)): ?>    
                            <tr>
                            <td>
                              <input id="pelayanan<?= $row['id'] ?>" value="<?= $row['pelayanan'] ?>" hidden />
                              <h6 style="margin-top: -15px" id="nama<?= $row['id'] ?>"><?= $row['nama_dokter']; ?></h6>
                            </td>
                            <td>
                              <div>
                                <div>
                                  <ol>
                                    <?php
                                      $pelayanan = explode(', ', $row['pelayanan']);
                                      foreach($pelayanan as $pel):
                                    ?>
                                    <li>
                                      <p><?= $pel; ?></p>
                                    </li>
                                    <?php endforeach; ?>
                                  </ol>
                                </div>
                              </div>
                            </td>
                            <td>
                              <ul>
                                <li>
                                  <?php $masuk = date_create($row['jadwal_masuk']); ?>
                                  <?php $pulang = date_create($row['jadwal_pulang']); ?>
                                  <input id="tanggal<?= $row['id'] ?>" value="<?= date_format($masuk, 'Y-m-d') ?>" hidden>
                                  <h6><?= date_format($masuk, 'l, d-m-Y') ?></h6>
                                  <p><span id="masuk<?= $row['id'] ?>"><?= date_format($masuk, 'H:i') ?></span> WIB - <span id="pulang<?= $row['id'] ?>"><?= date_format($pulang, 'H:i') ?></span> WIB</p>
                                </li>
                              </ul>
                            </td>
                          </tr>
                                <?php endwhile; ?>
                              </tbody>
                            </table>
                            </div>
                                <?php else : ?>
                                  <div class="col-md-12 grid-margin stretch-card ">
                                  <div class="card alert alert-info mt-3">
                                    Belum ada Jadwal Dokter yang ditambahkan.
                                  </div>
                                </div>
                          <?php endif; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                          <h4 class="card-title card-title-dash">
                                            Daftar Berita Terkini
                                          </h4>
                                          <p
                                            class="card-subtitle card-subtitle-dash"
                                          >
                                          Berita terbaru yang sudah diterbitkan.
                                          </p>
                                        </div>
                                      </div>
                                      <div class="list-wrapper">
                                        <ul class="todo-list todo-list-rounded">
                                        <?php 
                    $query = "SELECT * FROM `berita`";
                    $result = mysqli_query($conn, $query);

                    if(mysqli_num_rows($result) > 0):
                      while($row = mysqli_fetch_assoc($result)):
                        ?>
                      <li class="d-block">
                      <div class="form-check w-100">
                        <label class="form-check-label">
                          <p
                            style="
                              font-weight: bold;
                              font-size: 14px;
                            "
                          >
                            <?= strtoupper($row['judul']) ?>
                          </p>
                          <?= $row['isi'] ?>
                        </label>
                        <div class="d-flex mt-2">
                          <div
                            class="ps-4 text-small me-3"
                            style="font-style: italic"
                          >
                            Admin, <?= date_format(date_create($row['created_at']), 'd M Y') ?>
                          </div>
                        </div>
                      </div>
                    </li>
                        <?php endwhile;
                        else :
                        ?>
                        <li class="d-block">
                        <div class="col-md-12 grid-margin stretch-card ">
                                  <div class="card alert alert-info mt-3">
                                    Belum ada Berita yang diterbitkan.
                                  </div>
                                </div>
                        </li>
                        <?php endif; ?>
                                          
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Premium
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >Bootstrap admin template</a
                >
                from BootstrapDash.</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Copyright ?? 2021. All rights reserved.</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
