<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bé tập đọc</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
</head>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <?php 
	include('include/inc-infouser-leftmenu.php');
?>
                    <!-- /menu prile quick info -->

                    <br />
                    <!-- sidebar menu -->
                     <?php include('include/inc-slidebarmenu.php') ?>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                     <?php include('include/inc-footerbutton.php') ?>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <?php include('include/inc-nav.php') ?>
            <!-- /top navigation -->
            
            <!-- page content -->
            <div class="right_col" role="main">
            <?php include('include/inc-quanlybaihoc.php') ?>
			</div>
                <!-- footer content -->
			<?php include('include/inc-footer.php'); ?>
                
</body>

</html>
