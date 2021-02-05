<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <style type="text/css">
    /* Table */
    @media screen and (max-width: 520px) {
      table {
        width: 100%;
      }
      thead th.column-primary {
        width: 100%;
      }

      thead th:not(.column-primary) {
        display:none;
      }

      th[scope="row"] {
        vertical-align: top;
      }

      td {
        display: block;
        width: auto;
        text-align: right;
      }
      thead th::before {
        text-transform: uppercase;
        font-weight: bold;
        content: attr(data-header);
      }
      thead th:first-child span {
        display: none;
      }
      td::before {
        float: left;
        text-transform: uppercase;
        font-weight: bold;
        content: attr(data-header);
      }
    }
  </style>
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
  <link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/includes/assets/css/site.css?r=1612421743"/>
  <link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/includes/assets/css/icomoon/style.css?r=1612421743"/>
  <link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/includes/assets/fonts/font-awesome/fontawesome-all.min.css?r=1612421743"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/membuat-tabel-responsive-dengan-css/font-awesome/css/font-awesome.min.css?r=1612421743"/>
  <link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/membuat-tabel-responsive-dengan-css/css/main.css?r=1612421743"/><script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=P41oijxkfFScRkDH3sZOq6PCJIyx-bBNQV5jsRespHKxIPa_remlMKVb6dvpAnOxJj-spdH_AsZpfbCBZ3MeSe-MZrmSj9dbDuCopgtR1SBevXg-ZuGmS09QJ4Yj_c9K" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9qYWdvd2ViZGV2LmNvbS93cC1jb250ZW50L2RlbW8vbWVtYnVhdC10YWJlbC1yZXNwb25zaXZlLWRlbmdhbi1jc3Mv"/><script type="text/javascript" src="https://jagowebdev.com/wp-content/demo/includes/assets/js/jquery-3.3.1.min.js"></script><script type="text/javascript" src="https://jagowebdev.com/wp-content/demo/includes/assets/js/html5.js"></script>
  <script type="text/javascript" src="https://jagowebdev.com/wp-content/demo/membuat-tabel-responsive-dengan-css/js/main.js?r=1612421743"></script>
  <link rel="shortcut icon" href="https://jagowebdev.com/wp-content/demo/includes/assets/img/favicon.png?hash=1612421743"/>
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
    @include('includes.headeratasan')
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
                      <th scope="col" class="column-primary">Nama Perusahaan</th>
                      <th scope="col">Catatan</th>
                      <th scope="col" class="column-primary">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="expanded">
                      <td data-header="Nama Perusahaan" class="title">PT. Maju Bersama<a href="#" class="more"><i class="fa fa-chevron-up fa-chevron-down">::before</i></a></td>
                      <td data-header="Catatan" class="title"></td>
                      <th scope="row">tes
                        <div>
                          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalSaya">Detail</button>
                        </div> 
                      </th>
                    </tr>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('a.more').click(function() {

    // Toggle Class
    $tr = $(this).parent().parent();
    $tr.toggleClass('expanded');
    
    // Tampilkan - sembunyikan baris
    $i = $(this).children('i');
    $i.removeClass('fa-chevron-down', 'fa-chevron-up');
    var arrow = $tr.hasClass('expanded') ? 'fa-chevron-up' : 'fa-chevron-down';
    $i.addClass(arrow);
    
    return false;
  });
  })
</script>
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