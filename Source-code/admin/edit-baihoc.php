<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

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

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Anthony Fernando</h2>
                        </div>
                    </div>
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
            <?php 
			$lbh = $_GET['lbh'];
			if($lbh == 2)
				include('include/inc-editbaihoc.php');
			else if($lbh == 1){
				include('include/inc-addbaihoc.php');
			}
			else if($lbh == 3){
				include_once '../dataconfig/dataprovider.php';
				$id = $_GET['id'];
				$sql = "DELETE FROM baihoc WHERE bh_ID = $id";
      			DataProvider::ExecuteQuery($sql);
				echo '<meta http-equiv="refresh" content="0;quanlybaihoc.php">';
			}
			?>
			</div>
                <!-- footer content -->
			<?php include('include/inc-footer.php'); ?>
                
</body>

</html>
