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
        @include('includes.headersales')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <!-- table row starts here -->
                    <!-- doughnut chart row starts -->
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <button type="kembali" class="btn-primary"><a style="text-decoration:none" class="text-white" href="kunjungan"><i class="mdi mdi-arrow-left-bold"></i></a></button>
                            </div>
                            <br>
                            <h4 class="card-title"></h4>
                            <form action="#" class="forms-sample" method="post">
                                {{ csrf_field() }}
                                <input type="radio" name="kunjungan" id="radio1" value="sudah" class="detail"> <label>Telah Melakukan Kunjungan</label><br>
                                <input type="radio" name="kunjungan" id="radio2" value="belum" class="detail"> <label>Belum Melakukan Kunjungan</label>
                                <br><br>
                                <div id="sudah" class="form-group" style="display: none">
                                    <center><h4>Feedback Kunjungan</h4></center><br>
                                    <label for="nama_pic">Nama PIC yang ditemui</label>
                                    <input type="text" class="form-control" id="nama_pic"><br>
                                    <label for="contact_no_pic">Kontak PIC yang ditemui</label>
                                    <input type="text" class="form-control" id="contact_no_pic"><br>
                                    <label for="produk">Produk yang akan dibeli</label>
                                    <textarea class="form-control" id="produk"></textarea><br>
                                    <label for="harga">Kisaran Harga</label>
                                    <input type="text" class="form-control" id="harga"><br>
                                    <label for="waktu_pembelian">Perkiraan Waktu Pembelian</label>
                                    <input type="text" class="form-control" id="waktu_pembelian"><br>
                                    <label for="lainlain">Lain - Lain</label>
                                    <textarea type="text" class="form-control" id="lainlain"></textarea><br>
                                    <label for="foto">Foto saat kunjungan</label><br>
                                    <input type="file" name="img[]" class="form-control" />
                                    
                                    <br>
                                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                                    <button class="btn btn-light">Clear</button>
                                </div>
                                <div id="belum" class="form-group" style="display: none">
                                    <center><h4>Feedback Kunjungan</h4></center>
                                    <label for="nama_pic">Alasan:</label>
                                    <textarea class="form-control" id="produk"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                                    <button class="btn btn-light">Clear</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- last row starts here -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
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
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript">

            $(function(){
                $(":radio.detail").click(function(){
                    $("#sudah, #belum").hide()
                    if($(this).val() == "sudah"){
                        $("#sudah").show();
                    }else{
                        $("#belum").show();
                    }
                });
            });
        </script>
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
        <script src="../../../assets/js/file-upload.js"></script>
        <!-- End custom js for this page -->
    </body>
    </html>