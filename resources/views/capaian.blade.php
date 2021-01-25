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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo_2/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/pakerin.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-img">
                    <img src="../assets/images/faces/face1.jpg" alt="image" />
                  </div>
                  <div class="nav-profile-text">
                    <p class="text-black font-weight-semibold m-0"> Atasan </p>
                    <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                  </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Ganti Password </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
                    </div>
                  </li>
                </ul>
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
                    <span class="menu-title"><b>Capaian</b></span>
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
                    <i class="mdi mdi-menu menu-icon"></i>
                    <span class="menu-title">Customer</span>
                  </a>
                </li>
                <li class="nav-item">
                  <div class="nav-link d-flex">
                    <a class="text-white" onClick="document.location.reload(true)"><i class="mdi mdi-refresh"></i></a>
                    <script>
                      function reloadpage()
                      {
                        location.reload()
                      }
                    </script>
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
                  <h4 class="card-title">Nama Karyawan</h4>
                  <select name="namakaryawan" class="selectpicker form-control" data-live-search="true">
                    <option value="namakaryawan">A</option>
                    <option value="namakaryawan">B</option>
                    <option value="namakaryawan">C</option>
                    <option value="namakaryawan">D</option>
                  </select>
                  <br>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th><center>No.</center></th>
                          <th><center>Nama Perusahaan</center></th>
                          <th><center>Catatan</center></th>
                          <th><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <center>1</center>
                          </td>
                          <td>PT. Maju Bersama</td>
                          <td>
                            <div class="catatan">
                              -
                            </div>
                          </td>
                          <td><center><button type="button" class="btn btn-secondary">Detail</button></center></button></td>
                        </tr>
                        <tr>
                          <td>
                            <center>2</center>
                          </td>
                          <td></td>
                          <td>
                            <div class="catatan">
                              Tidak bisa kunjungan karena ...
                            </div>
                          </td>
                          <td>
                            <center>
                              <button type="button" class="btn btn-success"><a><span class="mdi mdi-check"></span></a></button>
                              <button type="button" class="btn btn-danger"><a><span class="mdi mdi-close"></span></a></button>
                            </center>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- last row starts here -->
            <div class="row">
              <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                <div class="card">

                </div>
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
      <script src="../../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
      <!-- Custom js for this page -->
      <script src="../assets/js/dashboard.js"></script>
      <script src="../../../assets/js/file-upload.js"></script>
      <script src="../../../assets/js/typeahead.js"></script>
      <!-- End custom js for this page -->
    </body>
    </html>