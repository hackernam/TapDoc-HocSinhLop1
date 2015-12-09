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
    
<title>Bài học</title>

<link href="styles/style.css"           rel="stylesheet" type="text/css">
<link href="styles/framework.css"       rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"    rel="stylesheet" type="text/css">
<link href="styles/animate.css"         rel="stylesheet" type="text/css">

<link rel="stylesheet" href="player/css/reset.css" />
<link rel="stylesheet" href="player/css/demo.css" />
<link rel="stylesheet" href="player/css/audioplayer.css" />

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/framework-plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


</head>

<body class="dual-sidebar"> 

<div id="preloader">
	<div id="status">
        <div class="preloader-logo"></div>
        <h3 class="center-text">Welcome</h3>
        <p class="center-text smaller-text">
            We're loading the content, give us a second. This won't take long!
        </p>
    </div>
</div>
    
<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->
    
<div id="header-fixed">
    <a class="open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="index.php"><img src="images/logo-light.png" alt="img"></a>
    <a class="open-right-sidebar" href="#"><i class="fa fa-envelope-o"></i></a>
</div>    
            
<div class="all-elements">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">        
            <div class="sidebar-header">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-phone"></i></a>
                <a href="#"><i class="fa fa-comment-o"></i></a>
                <a class="close-sidebar" href="#"><i class="fa fa-times"></i></a>
            </div>   
            <?php include("menu.html") ?>
            
        
        <!--Right Sidebar -->
        
        <div class="snap-drawer snap-drawer-right">
            <div class="sidebar-header">
                <a class="close-sidebar" href="#"><i class="fa fa-times"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-phone"></i></a>
                <a href="#"><i class="fa fa-comment-o"></i></a>
            </div>   
            
            <div class="sidebar-logo">
                <img src="images/logo-sidebar.png" alt="img">
            </div>
            
            <p class="sidebar-divider">Let's get social</p>
            
            <div class="sidebar-menu">
                <a class="menu-item" href="#">
                    <i class="fa fa-facebook"></i>
                    <em>Facebook</em>
                </a>                   
                <a class="menu-item" href="#">
                    <i class="fa fa-twitter"></i>
                    <em>Twitter</em>
                </a>                 
                <a class="menu-item" href="#">
                    <i class="fa fa-google-plus"></i>
                    <em>Google Plus</em>
                </a>                    
                <a class="menu-item" href="#">
                    <i class="fa fa-youtube-play"></i>
                    <em>YouTube</em>
                </a>    
            </div>
                        
            <p class="sidebar-divider">Send an email</p>
            
            <div class="container no-bottom">
                <div class="sidebar-form contact-form no-bottom"> 
                    
                    <em>
                        Your message is important to us and we reply to all of them in less than 48 hours.
                    </em>
                    
                    <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                        Awesome! We'll get back to you!
                    </div>

                    <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                        <fieldset>
                            <div class="formValidationError" id="contactNameFieldError">Name is required!</div>             
                            <div class="formValidationError" id="contactEmailFieldError">Mail address required!</div> 
                            <div class="formValidationError" id="contactEmailFieldError2">Mail address must be valid!</div> 
                            <div class="formValidationError" id="contactMessageTextareaError">Message field is empty!</div>   
                            <div class="formFieldWrap">
                                <input onfocus="if (this.value=='Name') this.value = ''" onblur="if (this.value=='') this.value = 'Name'" type="text" name="contactNameField" value="Name" class="contactField requiredField" id="contactNameField"/>
                            </div>
                            <div class="formFieldWrap">
                                <input onfocus="if (this.value=='Email') this.value = ''" onblur="if (this.value=='') this.value = 'Email'" type="text" name="contactEmailField" value="Email" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                            </div>
                            <div class="formTextareaWrap">
                                <textarea onfocus="if (this.value=='Message') this.value = ''" onblur="if (this.value=='') this.value = 'Message'" name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea">Message</textarea>
                            </div>
                            <div class="formSubmitButtonErrorsWrap">
                                <input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                            </div>
                        </fieldset>
                    </form>       
                </div>
            </div>
            
            <p class="sidebar-divider">Contact Us</p>
            
            <div class="sidebar-menu">
                <a class="menu-item" href="tel:+123 456 7890">
                    <i class="fa fa-phone"></i>
                    <em>Call Us</em>
                </a>                   
                <a class="menu-item" href="sms:+123 456 7890">
                    <i class="fa fa-comment-o"></i>
                    <em>Text Us</em>
                </a>                 
                <a class="menu-item" href="mailto:someone@yoursite.com?subject=Message from ThemeForest">
                    <i class="fa fa-envelope-o"></i>
                    <em>Mail Us</em>
                </a>                     
            </div>
            
            <p class="sidebar-footer">Copyright 2015. All rights reserved</p>
        </div>

		</div>
        
        <div id="content" class="snap-content">
            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
                 <?php
					include_once 'dataconfig/dataprovider.php';
				?>
                <?php $id_BaiHoc = $_GET["bh"];
					$id_LoaiBaiHoc = $_GET["lbh"];
					$sql_tieude = "select bh_TenBaiHoc from baihoc where bh_ID = $id_BaiHoc and bh_LoaiBaiHoc = $id_LoaiBaiHoc";
					$result = DataProvider::GetRows($sql_tieude);
					$tieude;
					foreach ($result as $value) 
					{
						$tieude = $value;
					}
				?>
                <div class="container heading-style-5">
                    <h4 class="heading-title"><?php echo $tieude[0]; ?></h4>
                    <i class="fa fa-bolt heading-icon"></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                        Chọn hình cái loa để phát âm nhé !
                    </p>
                </div>  

<?php 
if($id_LoaiBaiHoc == 2)
	include('include/inc-baihoc-tungu.php');
else if($id_LoaiBaiHoc == 1)
	include('include/inc-baihoc-am.php');
else if($id_LoaiBaiHoc == 4)
	include('include/inc-baihoc-hinhanh.php');
?>

                
             
                
                <div class="decoration"></div>
                
                <div class="footer">
                    <p class="center-text">Copyright 2015. All rights reserved.</p>
                    <div class="footer-icons">
                        <a href="#" class="scale-hover facebook-color social-ball"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="scale-hover twitter-color social-ball"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="scale-hover google-color social-ball"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                                
                
                
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






























