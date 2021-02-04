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
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Customer</span>
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
              <h4 class="card-title">Nama Karyawan</h4>
              <form class="forms-sample">
                <div class="container">
                  <div class="panel-body">
                    <div class="form-group">
                      <select name="namakaryawan" class="selectpicker form-control" data-live-search="true">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
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
                    </tr>
                      <td><center><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalSaya">Detail</button></center></td>
                      <!-- Modal Pop-Up -->
                      <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalSayaLabel">Perusahaan X</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="nama_pic">Nama PIC yang ditemui</label>
                                  <input type="text" class="form-control" id="nama_pic" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="nama_pic">Kontak PIC yang ditemui</label>
                                  <input type="text" class="form-control" id="contact_no_pic" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="nama_pic">Produk yang akan dibeli</label>
                                  <textarea class="form-control" id="produk" readonly></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="nama_pic">Kisaran Harga</label>
                                  <input type="text" class="form-control" id="harga" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="nama_pic">Perkiraan Waktu Pembelian</label>
                                  <input type="text" class="form-control" id="waktu_pembelian" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="nama_pic">Lain - Lain</label>
                                  <textarea type="text" class="form-control" id="lainlain" readonly></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="nama_pic">Foto saat kunjungan</label>
                                  <img id="foto" src="../assets/images/salesproject.jpg" alt="image" />
                                  <input type="text" class="form-control" id="nama_pic" readonly>
                                </div>
                              </form>
                            </div>
                              <div class="modal-footer">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
  <!-- Custom js for this page -->
  <script src="../assets/js/dashboard.js"></script>
  <script src="../../../assets/js/file-upload.js"></script>
  <script src="../../../assets/js/typeahead.js"></script>
  <!-- End custom js for this page -->
</body>
</html>