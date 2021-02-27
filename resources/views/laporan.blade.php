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
    <style type="text/css">
        [aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
            display: none;
        }
    </style>
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
                            <h4 class="card-title">Laporan Bulanan Sales</h4>
                        </p>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">
                                        <span class="collapsed"><i class="fa fa-plus"></i></span> 
                                        <span class="expanded"><i class="fa fa-minus"></i></span> 
                                        Target
                                    </a>
                                </div>
                                <div id="menuone" class="collapse">
                                 <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                           <tr>
                                            <td>Nicholas Saputera</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>Dian Sastro</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>Reza Rahardian</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>Prilly Latuconsina</td>
                                            <td>90</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#menutwo" aria-expanded="false" aria-controls="menutwo">
                                <span class="collapsed"><i class="fa fa-plus"></i></span> 
                                <span class="expanded"><i class="fa fa-minus"></i></span> 
                                Tercapai
                            </a>
                        </div>
                        <div id="menutwo" class="collapse">
                         <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                   <tr>
                                    <td>Nicholas Saputera</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>Dian Sastro</td>
                                    <td>87</td>
                                </tr>
                                <tr>
                                    <td>Reza Rahardian</td>
                                    <td>85</td>
                                </tr>
                                <tr>
                                    <td>Prilly Latuconsina</td>
                                    <td>88</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#menuthree" aria-expanded="false" aria-controls="menuthree">
                        <span class="collapsed"><i class="fa fa-plus"></i></span> 
                        <span class="expanded"><i class="fa fa-minus"></i></span> 
                        Tidak Tercapai
                    </a>
                </div>
                <div id="menuthree" class="collapse">
                 <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                           <tr>
                            <td>Nicholas Saputera</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Dian Sastro</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Reza Rahardian</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Prilly Latuconsina</td>
                            <td>0</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#menufour" aria-expanded="false" aria-controls="menufour">
                <span class="collapsed"><i class="fa fa-plus"></i></span> 
                <span class="expanded"><i class="fa fa-minus"></i></span> 
                Ditolerir
            </a>
        </div>
        <div id="menufour" class="collapse">
         <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                   <tr>
                    <td>Nicholas Saputera</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Dian Sastro</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Reza Rahardian</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Prilly Latuconsina</td>
                    <td>2</td>
                </tr>
            </thead>
        </table>
    </div>
</div>
</div>
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