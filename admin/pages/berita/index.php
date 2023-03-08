<?php 
  include '../../database/koneksi.php';
  session_start();
  if(!$_SESSION['isLogin']){
    header('location: /hospital_website/admin/pages/login');
  }
?>

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
      <div class="modal" tabindex="-1" role="dialog" id="beritaModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">
                Tambah Berita/Artikel Baru
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
            <form id="formBerita" class="forms-sample" action="/hospital_website/admin/pages/berita/add.php" method="POST">
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputUsername1">Judul Artikel</label>
                  <input
                    type="text"
                    class="form-control"
                    id="judul"
                    placeholder="Username"
                    name="judul"
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Isi Artikel</label>
                  <textarea
                    name="isi"
                    id="editor"
                    cols="30"
                    rows="10"
                    class="form-control"
                    style="height: max-content"
                  ></textarea>
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
              <a class="nav-link active" href="/hospital_website/admin/">
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
                    <a class="nav-link" href="pages/samples/login.html">
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
            <div class="card card-rounded">
              <div class="card-body">
                <div
                  class="d-sm-flex justify-content-between align-items-start"
                >
                  <div>
                    <h4 class="card-title card-title-dash">Kelola Berita</h4>
                    <p class="card-subtitle card-subtitle-dash">
                      Kelola berita dan artikel RS Brayat Minulya
                    </p>
                  </div>
                  <div>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-toggle="modal"
                      data-target="#beritaModal"
                      onclick="editButton(null)"
                    >
                      Tambah Berita Baru
                    </button>
                  </div>
                </div>
                <div class="row">
                  <?php 
                    $query = "SELECT * FROM `berita`";
                    $result = mysqli_query($conn, $query);

                    if(mysqli_num_rows($result) > 0):
                      while($row = mysqli_fetch_assoc($result)):
                        ?>
                        <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title" id="judul<?= $row['id'] ?>"><?= $row['judul']; ?></h4>
                          <p class="card-description">Admin, <?= $row['created_at'];  ?></p>
                          <div class="template-demo">
                            <p id="isi<?= $row['id'] ?>"><?= $row['isi']; ?></p>
                          </div>
                          <hr />
                          <div class="d-flex justify-content-end">
                            <button
                                class="btn btn-sm btn-warning"
                                style="margin-right: 10px"
                                onclick="editButton(<?= $row['id'] ?>)"
                                data-toggle="modal"
                                data-target="#beritaModal"
                              >
                                Edit
                              </button>
                              <button class="btn btn-sm btn-danger" onclick="alertDelete(<?= $row['id'] ?>)">
                                Delete
                              </button>
                          </div>
                        </div>
                      </div>
                    </div>
                      <?php
                      endwhile;
                     else :
                     ?>
                     <div class="col-md-12 grid-margin stretch-card ">
                      <div class="card alert alert-info mt-3">
                        Belum ada Berita yang diterbitkan.
                      </div>
                  </div>
                     <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
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
          <!-- partial -->
        </div>
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
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
      src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"
      referrerpolicy="origin"
    ></script>
    <script>
      tinymce.init({
        selector: "textarea#editor",
        skin: "bootstrap",
        plugins: "lists, link, image, media",
        toolbar:
          "h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help",
        menubar: false,
      });
    </script>
    <script>
      const editButton = (id) => {
        if(id){

          const judul = $("#judul"+id).html();
          const isi = $("#isi"+id).html();
          $("#formBerita").attr('action','/hospital_website/admin/pages/berita/edit.php');
          $("#judul").val(judul);
          $("#editor").html(isi);
          $("#formBerita").append('<input id="editId" name="id" value="' + id + '" hidden />');
        } else {
          $("#formBerita").attr('action','/hospital_website/admin/pages/berita/add.php');
          $("#judul").val('');
          $("#editor").html('');
          $("#editId").remove();
        }
      }
      const alertDelete = (id) => {
        swal({
              title: "Yakin ingin menghapus berita?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                $.post("/hospital_website/admin/pages/berita/delete.php",
                {
                  id: id,
                },
                function(data, status){
                  location.href = '/hospital_website/admin/pages/berita';
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
