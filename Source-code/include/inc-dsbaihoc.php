            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
                <?php
					include_once 'dataconfig/dataprovider.php';
					$id_LoaiBaiHoc = $_GET["lsid"];
					$sql_tieude = "select lbh_LoaiBaiHoc from loaibaihoc where lbh_ID = $id_LoaiBaiHoc";
					$result = DataProvider::GetRows($sql_tieude);
					$tieude;
					foreach ($result as $value) 
					{
						$tieude = $value;
					}
				?>
                <div class="container heading-style-5">
                    <h4 class="heading-title"><?php echo $tieude[0]; ?></h4>
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
                
<<<<<<< HEAD
				<div class="decoration"></div>
				
				<div class="thumbnail-menu">
					<h4 style="text-align: center;">Danh sách các bài bạn chưa học</h4>
				</div>
				<?php
					$id = $_SESSION['UID'];
					$sql_goiy = 'SELECT bh.bh_ID, bh.bh_LoaiBaiHoc, bh.bh_HinhDaiDien
								FROM baihoc bh					
								WHERE bh.bh_LoaiBaiHoc = '.$id_LoaiBaiHoc.' 
								AND bh.bh_ID NOT IN(
													SELECT ls.lsbh_BaiHoc
													FROM lichsubaihoc ls
													WHERE ls.lsbh_TaiKhoan = '.$id.')';
					$dsgoiy = DataProvider::GetRows($sql_goiy);
				?>
				<!-- Swiper -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<?php
						if($dsgoiy != null){
							foreach ($dsgoiy as $goiy) { 
					?>
							<div class="swiper-slide">
								<a href="baihoc.php?bh=<?php echo $goiy['bh_ID'] ?>&lbh=<?php echo $goiy['bh_LoaiBaiHoc']?>">
									<img src="<?php echo $goiy['bh_HinhDaiDien'];?>" width="100px;"/>
								</a>
							</div>
					<?php 
							} 
						}
					?>
					</div>
				</div>
				<!-- Swiper JS -->
				<script src="scripts/swiper.min.js"></script>

				<!-- Initialize Swiper -->
				<script>
					var swiper = new Swiper('.swiper-container', {
						pagination: '.swiper-pagination',
						slidesPerView: 3,
						paginationClickable: true,
						spaceBetween: 30,
						freeMode: true
					});
				</script>
=======
>>>>>>> refs/remotes/origin/Thinh-2091
                <div class="decoration"></div>
                
                <?php
				include_once("include/inc-footer.php");
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> refs/remotes/origin/Thinh-2091
			?> 
                                
                
                
<<<<<<< HEAD
=======
			?>     
>>>>>>> refs/remotes/origin/tien
=======
>>>>>>> refs/remotes/origin/Thinh-2091
            <!-- End of entire page content-->
            </div> 
