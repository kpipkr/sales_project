<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Sales Project</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
  <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo_2/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/econ.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-2 col-12 p-0">
        <div class="container">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            </div>
            <img style="float:left width: 50%; height: 50%" src="../assets/images/econ.png"  alt="image" />
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar" >
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a class="nav-link" href="target">
                <i class="mdi mdi-target menu-icon"></i>
                <span class="menu-title">Target Kunjungan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="capaian">
                <i class="mdi mdi-chart-bar menu-icon"></i>
                <span class="menu-title">Capaian</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Laporan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title"><b>Customer</b></span>
              </a>
            </li>
            <li class="nav-item">
              <div class="nav-link d-flex">
                <a class="text-white"><i class="mdi mdi-logout"></i></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper pb-0">
          <!-- table row starts here -->
          <!-- doughnut chart row starts -->
          <div class="card">
            <div class="card-body">
              <div>
                <button type="kembali" class="btn-primary"><a class="text-white" href="customer"><i class="mdi mdi-arrow-left-bold"></i></a></button>
              </div>
              <br>
              <h4 class="card-title"></h4>
              <form class="forms-sample">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaperusahaan" placeholder="Nama Perusahaan" disabled />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                  <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="alamatperusahaan" placeholder="Alamat Perusahaan" disabled>
                  </textarea>
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kontak Perusahaan</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="kontakperusahaan" disabled />
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama PIC</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="namapic" disabled />
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Email PIC</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="emailpic" disabled />
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kontak PIC</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="kontakpic" disabled />
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Sosial Media</label>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="col-sm-10 input-group-prepend">
                        <span class="input-group-text bg-dark text-white"><i class="mdi mdi-whatsapp"></i></span>
                        <input type="text" class="form-control" disabled />
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="col-sm-10 input-group-prepend">
                        <span class="input-group-text bg-dark text-white"><i class="mdi mdi-facebook"></i></span>
                        <input type="text" class="form-control" disabled />
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="col-sm-10 input-group-prepend">
                        <span class="input-group-text bg-dark text-white"><i class="mdi mdi-twitter"></i></span>
                        <input type="text" class="form-control" disabled />
                      </div>
                    </div>
                  </div>
                  <div>
                 <!--  <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                  <button class="btn btn-light">Clear</button> -->
                </form>
              </div>
            </div>
          </div>
        </div>
          <!-- last row starts here -->
          <div class="row">
            <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
              <div></div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © KPI Pakerin 2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://www.pakerin.co.id/" target="_blank">PT. Pakerin</a></span>
              </div>
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
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
  </html>