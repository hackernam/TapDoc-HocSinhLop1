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