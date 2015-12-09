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
                    <a href="baihoc.php?bh=<?php echo $value['bh_ID']; ?>&lbh=<?php echo $lessonid; ?>">
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
                
                <?php
				include_once("include/inc-footer.php");
			?> 
                                
                
                
            <!-- End of entire page content-->
            </div> 
