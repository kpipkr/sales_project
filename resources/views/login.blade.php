<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sales Project</title>
  <!-- Core CSS - Include with every page -->
  <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/main-style.css" rel="stylesheet" />
  
  <script src="csslogin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

  <!-- Custom jquery scripts -->
  <script src="csslogin/js/jquery/custom_jquery.js" type="text/javascript"></script>

  <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
  <!-- <script src="csslogin/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script> -->
  <script type="text/javascript">
    $(document).ready(function(){
        $(document).pngFix( );
    });
</script>

</head>

<body class="body-Login-back">

    <div class="container">
     
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <br><br><br><br><br>
                        <h3 class="panel-title"><center>Sales Project</center></h3><br>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" name="postform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary btn-block" name="login" value="Login"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>