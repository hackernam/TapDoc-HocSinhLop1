
<?PHP
require_once("process/xuly_dangnhap.php");

$xx = new xuLyDangNhap();
if(isset($_POST['btnLogin']))
{	

	//document.getElementById("result").innerHTML =''; // Variable To Store Error Message
	$xx->HandleError('');
	if($xx->CheckLoginInDB($_POST['txtUsername'], $_POST['txtPassword']))
	{
		
	}
}

?>
         
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
            
            <div class="sidebar-logo">
                <img src="images/logo-sidebar.png" alt="img">
            </div>
        
            <p class="sidebar-divider">Navigation</p>
            
            <div class="sidebar-menu">
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="fa fa-home"></i>
                        <em>Homepages</em>
                        <strong>5</strong>
                    </a> 
                    <div class="submenu">
                        <a class="submenu-item" href="index.html">    <i class="fa fa-angle-right"></i><em>   Classic    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index2.html">        <i class="fa fa-angle-right"></i><em>   Round     </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index3.html">        <i class="fa fa-angle-right"></i><em>   Fullscreen    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index4.html">       <i class="fa fa-angle-right"></i><em>   No Slider    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index5.html">       <i class="fa fa-angle-right"></i><em>   Thumbnails    </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>                 
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="fa fa-cog"></i>
                        <em>Features</em>
                        <strong>5</strong>
                    </a> 
                    <div class="submenu">
                        <a class="submenu-item" href="features-typography.html">    <i class="fa fa-angle-right"></i><em>   Typography    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-jquery.html">        <i class="fa fa-angle-right"></i><em>   jQuery    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-others.html">        <i class="fa fa-angle-right"></i><em>   Others    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-sliders.html">       <i class="fa fa-angle-right"></i><em>   Sliders    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-interactive.html">   <i class="fa fa-angle-right"></i><em>   Interactive    </em><i class="fa fa-circle"></i></a>                    
                    </div>
                </div>               
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="fa fa-navicon"></i>
                        <em>Menus</em>
                        <strong>5</strong>
                    </a> 
                    <div class="submenu">
                        <a class="submenu-item" href="index-left.html">     <i class="fa fa-angle-right"></i><em>   Left Sidebar    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index-right.html">    <i class="fa fa-angle-right"></i><em>   Right Sidebar    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index-dual.html">     <i class="fa fa-angle-right"></i><em>   Dual Sidebar    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="index-thumbs.html">     <i class="fa fa-angle-right"></i><em>   Thumbnails    </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>              
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="fa fa-camera-retro"></i>
                        <em>Galleries</em>
                        <strong>5</strong>
                    </a> 
                    <div class="submenu">
                        <a class="submenu-item" href="gallery-round.html">          <i class="fa fa-angle-right"></i><em>   Round    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-square.html">         <i class="fa fa-angle-right"></i><em>   Square    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-adaptive.html">       <i class="fa fa-angle-right"></i><em>   Adaptive    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-masonry.html">        <i class="fa fa-angle-right"></i><em>   Masonry    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="gallery-filter.html">         <i class="fa fa-angle-right"></i><em>   Filterable    </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>                
                <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="fa fa-picture-o"></i>
                        <em>Portfolios</em>
                        <strong>5</strong>
                    </a>
                    <div class="submenu">
                        <a class="submenu-item" href="portfolio-one.html">      <i class="fa fa-angle-right"></i><em>   One Item       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-two.html">      <i class="fa fa-angle-right"></i><em>   Two Items       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-filter.html">   <i class="fa fa-angle-right"></i><em>   Filterable    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-wide.html">     <i class="fa fa-angle-right"></i><em>   Widescreen      </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="portfolio-adaptive.html"> <i class="fa fa-angle-right"></i><em>   Adaptive    </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div>
                    <a class="menu-item show-submenu" href="#">
                        <i class="fa fa-file-o"></i>
                        <em>Pages</em>
                        <strong>8</strong>
                    </a> 
                    <div class="submenu">
                        <a class="submenu-item" href="page-activity.html">  <i class="fa fa-angle-right"></i><em>   Activity    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-calendar.html">  <i class="fa fa-angle-right"></i><em>   Calendar    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-charts.html">    <i class="fa fa-angle-right"></i><em>   Charts    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-404.html">       <i class="fa fa-angle-right"></i><em>   404 Error    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-soon.html">      <i class="fa fa-angle-right"></i><em>   Coming Soon    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-profile.html">   <i class="fa fa-angle-right"></i><em>   User Profile    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-signup.html">    <i class="fa fa-angle-right"></i><em>   Signup    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-login.html">     <i class="fa fa-angle-right"></i><em>   User Login    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="page-uses.html">      <i class="fa fa-angle-right"></i><em>   Userlist    </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
                <div class="has-submenu">
                    <a class="menu-item show-submenu submenu-active" href="#">
                        <i class="fa fa-power-off"></i>
                        <em>App Styled</em>
                        <strong>9</strong>
                    </a> 
                    <div class="submenu submenu-active">
                        <a class="submenu-item" href="pageapp-bubbles.html"><i class="fa fa-angle-right"></i><em>   Chat Bubbles       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-tasklist.html"><i class="fa fa-angle-right"></i><em>   Tasklists       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-checklist.html"><i class="fa fa-angle-right"></i><em>   Checklists       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-reminders.html"><i class="fa fa-angle-right"></i><em>   Reminders       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-signup.html"><i class="fa fa-angle-right"></i><em>   Signup Screen       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item submenu-item-active" href="pageapp-login.html"><i class="fa fa-angle-right"></i><em>   Login Screen       </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-coverpage.html"><i class="fa fa-angle-right"></i><em>   Coverpage      </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-timeline.html"><i class="fa fa-angle-right"></i><em>   Timeline Left      </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="pageapp-timeline2.html"><i class="fa fa-angle-right"></i><em>   Timeline Center      </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>                 
                <a class="menu-item" href="page-video.html">
                    <i class="fa fa-youtube-play"></i>
                    <em>Videos</em>
                    <i class="fa fa-circle"></i>
                </a>                     
                <a class="menu-item" href="page-blog.html">
                    <i class="fa fa-pencil"></i>
                    <em>Blog</em>
                    <i class="fa fa-circle"></i>
                </a>                 
                <a class="menu-item" href="page-map.html">
                    <i class="fa fa-map-marker"></i>
                    <em>Map</em>
                    <i class="fa fa-circle"></i>
                </a>                
                <a class="menu-item" href="contact.html">
                    <i class="fa fa-envelope-o"></i>
                    <em>Contact</em>
                    <i class="fa fa-circle"></i>
                </a>                
                <a class="menu-item close-sidebar" href="#">
                    <i class="fa fa-times"></i>
                    <em>Close</em>
                    <i class="fa fa-circle"></i>
                </a>
            </div>
            
            <p class="sidebar-divider">Let's get social</p>
            
            <div class="sidebar-menu">
                <a class="menu-item" href="https://www.facebook.com/enabled.labs">
                    <i class="fa fa-facebook"></i>
                    <em>Facebook</em>
                </a>                   
                <a class="menu-item" href="https://twitter.com/iEnabled">
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
        
        
        
        <div id="content" class="snap-content">
            <div class="content container-fullscreen no-bottom">
            <!--Page content goes here, fixed elements go above the all elements class-->
                            
                <div class="pageapp-login bg-5 cover-screen">    
                    <div class="pageapp-login-content cover-center">
					
						<!--Form Dang Nhap Start -->
						<form method="post" action='<?php $_SERVER['PHP_SELF'] ?>' name="DNUser" >
							<div class="unboxed-layout">
								<a class="pageapp-login-logo" href="#"></a>
								<div class="pageapp-login-field">
									<i class="fa fa-user"></i>
									<input type="text" value="" onfocus="if (this.value=='Username') this.value = ''" onblur="if (this.value=='') this.value = 'Username'" id="txtUsername" name="txtUsername">
								</div>
								<div class="pageapp-login-field">
									<i class="fa fa-lock"></i>
									<input type="password" value="" onfocus="if (this.value=='password') this.value = ''" onblur="if (this.value=='') this.value = 'password'" id="txtPassword" name="txtPassword">
								</div>
								<input type="submit" name="btnLogin" value="Đăng nhập" class="pageapp-login-button button button-m button-green button-fullscreen" />
								<div class="decoration"></div>
								<div id="result" style="color:#F00; font-weight:bold"><?php echo $xx->GetErrorMessage(); ?></div>
								<!--a href="#" class="pageapp-login-button button button-small button-green button-fullscreen">Đăng nhập</a>
								<div class="decoration"></div-->
								<a href="#" class="facebook-login facebook-color"><i class="fa fa-facebook"></i>Đăng nhập bằng Facebook</a>
								<a href="#" class="twitter-login twitter-color no-bottom"><i class="fa fa-twitter"></i>Đăng nhập bằng Twitter</a>                    
							</div>
                        </form>
						<!--Form Dang Nhap END-->
						
                    </div>
                    <div class="overlay bg-black"></div>
                   
                </div>        
                
            <!-- End of entire page content-->
            </div> 
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>
</div>
    
  