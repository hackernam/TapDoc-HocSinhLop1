<?php
	session_start();
	if(!($_SESSION['DaDangNhap'] == 1))
	{
		header("Location: dangnhap.php");
	}
?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<link rel="icon" type="image/png" href="images/splash/android-chrome-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" sizes="196x196" href="images/splash/apple-touch-icon-196x196.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/splash/apple-touch-icon-180x180.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/splash/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/splash/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/splash/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/splash/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/splash/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/splash/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/splash/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="57x57" href="images/splash/apple-touch-icon-57x57.png">  
<link rel="icon" type="image/png" href="images/splash/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="images/splash/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/splash/favicon-16x16.png" sizes="16x16">
<link rel="shortcut icon" href="images/splash/favicon.ico" type="image/x-icon" /> 
    
<title>Bé tập đọc</title>

<link href="styles/style.css"           rel="stylesheet" type="text/css">
<link href="styles/framework.css"       rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"    rel="stylesheet" type="text/css">
<link href="styles/animate.css"         rel="stylesheet" type="text/css">
<link href="styles/custom.css"         rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/framework-plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</head>

<body class="dual-sidebar"> 

<?php 
	include('include/inc-loading.php');
?>
    
<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->
    
<div id="header-fixed">
    <a class="open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="index.php"><img src="images/logo-light.png" alt="img"></a>
</div>    
            
<div class="all-elements">
    <div class="snap-drawers">      
<?php 
	include('include/inc-leftside.php');
?>        
        
        <div id="content" class="snap-content">
            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
                
                <div class="container heading-style-5">
                    <h4 class="heading-title">Xin chào bạn</h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                        Bạn hãy chức chọn một trong những chức năng dưới đây nhé !
                    </p>
                </div> 
                
                <div class="decoration"></div>
                
                <div class="thumbnail-menu">
				
					<!-- ===============================================================-->
					
					
					
					
					<!-- ===============================================================-->
                    <a href="danhsachbaihoc.php?lsid=1&page=1">
                        <i class="bg-green-dark bg-hover-green-dark fa border-radius-img"><img src="images/pictures/phatam.png" class="responsive-image" alt="img"></i>
                        <em>Đọc âm</em>
                    </a>                    
                    <a href="danhsachbaihoc.php?lsid=2&page=1">
                        <i class="bg-green-dark bg-hover-green-dark fa border-radius-img"><img src="images/pictures/phattu.png" class="responsive-image" alt="img"></i>
                        <em>Đọc từ</em>
                    </a>
					<a href="danhsachbaihoc.php?lsid=3&page=1">
                        <i class="bg-green-dark bg-hover-green-dark fa border-radius-img"><img src="images/pictures/doccau.png" class="responsive-image" alt="img"></i>
                        <em>Đọc câu</em>
                    </a>
					<a href="danhsachbaihoc.php?lsid=4&page=1">
                        <i class="bg-green-dark bg-hover-green-dark fa border-radius-img"><img src="images/pictures/hinhanh.png" class="responsive-image" alt="img"></i>
                        <em>Hình ảnh</em>
                    </a>
					<a href="danhsachbaitap.php?page=1">
                        <i class="bg-green-dark bg-hover-green-dark fa border-radius-img"><img src="images/pictures/baitap.png" class="responsive-image" alt="img"></i>
                        <em>Bài tập</em>
                    </a>
					<a href="danhsachmangtc.php?page=1">
                        <i class="bg-green-dark bg-hover-green-dark fa border-radius-img"><img src="images/pictures/game.png" class="responsive-image" alt="img"></i>
                        <em>Trò chơi</em>
                    </a>
                </div>
                
                <div class="decoration">

                </div>
                					<?php 
                        include('include/inc-top.php');
                    ?>
                
                <?php 
	include('include/inc-footer.php');
?>
                                
                
                
            <!-- End of entire page content-->
            </div> 
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>
</div>
    
    
<!--Fly up share box and notifications go here -->
<!--These are the only features that should be placed outside the all-elements class-->
    
<div class="share-bottom">
    <h3>Share Page</h3>
    <div class="share-socials-bottom">
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.themeforest.net/">
            <i class="fa fa-facebook facebook-color"></i>
            Facebook
        </a>
        <a href="https://twitter.com/home?status=Check%20out%20ThemeForest%20http://www.themeforest.net">
            <i class="fa fa-twitter twitter-color"></i>
            Twitter
        </a>
        <a href="https://plus.google.com/share?url=http://www.themeforest.net">
            <i class="fa fa-google-plus google-color"></i>
            Google
        </a>

        <a href="https://pinterest.com/pin/create/button/?url=http://www.themeforest.net/&media=https://0.s3.envato.com/files/63790821/profile-image.jpg&description=Themes%20and%20Templates">
            <i class="fa fa-pinterest-p pinterest-color"></i>
            Pinterest
        </a>
        <a href="sms:">
            <i class="fa fa-comment-o sms-color"></i>
            Text
        </a>
        <a href="mailto:?&subject=Check this page out!&body=http://www.themeforest.net">
            <i class="fa fa-envelope-o mail-color"></i>
            Email
        </a>
        <div class="clear"></div>
    </div>
    <a href="#" class="close-share-bottom">Close</a>
</div>
    
<div class="top-notification-1 top-notification bg-blue-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-top-notification"><i class="fa fa-times"></i></a>
</div>
<div class="bottom-notification-1 bottom-notification bg-green-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-bottom-notification"><i class="fa fa-times"></i></a>
</div> 
<div class="bottom-notification-2 bottom-notification bg-orange-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>
<div class="top-notification-2 top-notification bg-red-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>
    
</body>






























