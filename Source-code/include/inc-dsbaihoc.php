            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
                
                <div class="container heading-style-5">
                    <h4 class="heading-title">Phát âm theo câu</h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                        Bạn hãy chọn một trong những bài học dưới đây để học nhé !
                    </p>
                </div> 
                
                <div class="decoration"></div>
                
                <div class="thumbnail-menu">
				
					<!-- ===============================================================-->
					<?php
						include_once("dataconfig/dataprovider.php");
						$lessonid = $_GET['lsid'];
						if($lessonid == null || $lessonid > 6)
						{
							$lessonid = 0;
						}
						$sql = "SELECT bh_ID, bh_TenBaiHoc, bh_HinhDaiDien FROM baihoc WHERE bh_LoaiBaiHoc = $lessonid";
						$result = DataProvider::GetRows($sql);
						if($result != null)
						{
							foreach ($result as $value) {
					?>
					<!-- ===============================================================-->
                    <a href="#">
                        <i class="bg-green-dark bg-hover-green-dark fa border-radius-img">
							<img class="img-responsive img-circle" src="<?php echo $value['bh_HinhDaiDien']; ?>">
						</i>
                        <em><?php echo $value['bh_TenBaiHoc'];?></em>
                    </a>                    
                    <?php
							}
						}
					?> 
                </div>
                
                <div class="decoration"></div>
                
                <div class="footer">
                    <p class="center-text">Copyright 2015. All rights reserved.</p>
                    <div class="footer-icons">
                        <a href="#" class="scale-hover facebook-color social-ball"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="scale-hover twitter-color social-ball"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="scale-hover google-color social-ball"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="scale-hover back-to-top bg-green-dark social-ball"><i class="fa fa-angle-up"></i></a>
                        <a href="#" class="scale-hover show-share-bottom bg-magenta-dark social-ball"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
                                
                
                
            <!-- End of entire page content-->
            </div> 
