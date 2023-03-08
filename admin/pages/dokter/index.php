<?php 
  include '../../database/koneksi.php';
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
    <link rel="stylesheet" href="../../vendors/feather/feather.css" />
    <link
      rel="stylesheet"
      href="../../vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="../../vendors/ti-icons/css/themify-icons.css"
    />
    <link rel="stylesheet" href="../../vendors/typicons/typicons.css" />
    <link
      rel="stylesheet"
      href="../../vendors/simple-line-icons/css/simple-line-icons.css"
    />
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/logoRS.png" />
  </head>

  <body>
    <div class="container-scroller">
      <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">
                Tambah Jadwal Dokter Baru
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="formDokter" class="forms-sample" action="/hospital_website/admin/pages/dokter/add.php" method="POST">
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputUsername1">Nama Dokter</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    name="nama"
                    placeholder="Nama Dokter"
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Bidang Pelayanan</label>
                  <input
                    type="text"
                    class="form-control"
                    id="pelayanan"
                    name="pelayanan"
                    placeholder="Pelayanan 1, Pelayanan 2, dst"
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jadwal Dokter</label>
                  <div class="row">
                    <div class="col-md-4">
                    <p class="text-sm text-secondary">Tanggal</p>
                      <input
                        type="date"
                        class="form-control"
                        id="tanggal"
                        name="tanggal"
                        placeholder="Date"
                      />
                    </div>
                    <div class="col-md-4">
                      <p class="text-sm text-secondary">Waktu Masuk</p>
                      <input
                        type="time"
                        class="form-control"
                        id="masuk"
                        name="masuk"
                        placeholder="Waktu"
                      />
                    </div>
                    <div class="col-md-4">
                      <p class="text-sm text-secondary">Waktu Pulang</p>
                      <input
                        type="time"
                        class="form-control"
                        id="pulang"
                        name="pulang"
                        placeholder="Waktu"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btnForm">
                  Simpan
                </button>
                <button
                  type="button"
                  class="btn btn-light"
                  data-dismiss="modal"
                >
                  Batal
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- partial:../../partials/_navbar.html -->
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
              <img src="../../images/logoRS.png" alt="logo" />
              <font size="2">RS Brayat Minulya</font>
            </a>
            <a class="navbar-brand brand-logo-mini" href="/hospital_website/admin/">
              <img src="../../images/logoRS.png" alt="logo" />
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
                  src="../../images/faces/face8.jpg"
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
                    src="../../images/faces/face8.jpg"
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
        <!-- partial:../../partials/_sidebar.html -->
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
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                  <div class="card-body">
                    <div
                      class="d-sm-flex justify-content-between align-items-start"
                    >
                      <div>
                        <h4 class="card-title card-title-dash">
                          Jadwal Operasional Dokter
                        </h4>
                        <p class="card-subtitle card-subtitle-dash">
                          Jadwal Dokter bisa ditemui oleh pasien dengan
                          pelayanan terkait
                        </p>
                      </div>
                      <div>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-toggle="modal"
                          data-target="#exampleModal"
                        >
                          Tambah Jadwal Baru
                        </button>
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
                                <th>Action</th>
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
                            <td>
                                <div class="mb-2">
                                  <button 
                                  onclick="editButton(<?= $row['id']; ?>)"
                                  data-toggle="modal"
                                  data-target="#exampleModal"
                                  class="btn btn-sm btn-warning">Edit</button>
                                </div>
                                <div>
                                  <button 
                                  onclick="alertDelete(<?= $row['id'] ?>)"
                                  class="btn btn-sm btn-danger">Hapus</button>
                                </div>
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
                          <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial -->
          <!-- partial:../../partials/_footer.html -->
        </div>
        <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            > <span></span>
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Created By
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >Swarna Dwi Jaya Wardhana</a
                > | Copyright © 2023. All rights reserved.</span
              >
            </div>
          </footer>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <script>
      const editButton = (id) => {
        if(id){
          const nama = $("#nama"+id).html();
          const pelayanan = $("#pelayanan"+id).val();
          const tanggal = $("#tanggal"+id).val();
          const masuk = $("#masuk"+id).html();
          const pulang = $("#pulang"+id).html();

          $("#formDokter").attr('action','/hospital_website/admin/pages/dokter/edit.php');
          $("#nama").val(nama);
          $("#pelayanan").val(pelayanan);
          $("#tanggal").val(tanggal);
          $("#masuk").val(masuk);
          $("#pulang").val(pulang);
          $("#formDokter").append('<input id="editId" name="id" value="' + id + '" hidden />');
        } else {
          $("#formDokter").attr('action','/hospital_website/admin/pages/dokter/add.php');
          $("#nama").val('');
          $("#pelayanan").val('');
          $("#tanggal").val('');
          $("#masuk").val('');
          $("#pulang").val('');
          $("#editId").remove();
        }
      }
      
      const alertDelete = (id) => {
        swal({
              title: "Hapus Jadwal Dokter",
              text: "Yakin ingin menghapus jadwal dokter?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                $.post("/hospital_website/admin/pages/dokter/delete.php",
                {
                  id: id,
                },
                function(data, status){
                  location.href = '/hospital_website/admin/pages/dokter';
                });
              } 
            });
      }
    </script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>
