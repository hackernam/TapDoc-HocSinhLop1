            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class
                ?php
					include_once 'dataconfig/dataprovider.php';
					$id_LoaiBaiHoc = $_GET["lsid"];
					$sql_tieude = "select lbh_LoaiBaiHoc from loaibaihoc where lbh_ID = $id_LoaiBaiHoc";
					$result = DataProvider::GetRows($sql_tieude);
					$tieude;
					foreach ($result as $value) 
					{
						$tieude = $value;
					}
				?>-->
                <div class="container heading-style-5">
                    <h4 class="heading-title">Trò chơi</h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                </div> 
                
                <div class="decoration"></div>
				<!-- ===============================================================-->
                <div class="thumbnail-menu">
					
					<?php
						include_once("dataconfig/dataprovider.php");
						$skip = 0;
						if(isset($_GET['skip'])) {
							$skip = $_GET['skip'];
						}
						
						if($skip == null)
						{
							$skip = 0;
						}
						$sql = "SELECT count(tc_ID) rows FROM trochoi";
						$result = DataProvider::GetRows($sql);
						$frow =  $result[0];
						
						$nRows = $frow['rows'];
						
						
						$sql = "SELECT tc_ID, tc_TieuDe FROM trochoi LIMIT $skip, 9";
						$result = DataProvider::GetRows($sql);
						if($result != null)
						{
							foreach ($result as $value) {
								?>
								<!-- ===============================================================
								baihoc.php?bh=?php echo $value['bh_ID']; ?>&lbh=?php echo $lessonid; ?>
								-->
								<a href="danhsachmangtc.php?id=<?php echo $value['tc_ID']; ?>&td=<?php echo $value['tc_TieuDe']; ?>">
									<i class="bg-green-dark bg-hover-green-dark fa border-radius-img">
										<img class="img-responsive img-circle" src="images/pictures/trochoi.png">
										<!--?php echo $value['bh_HinhDaiDien']; ?-->
									</i>
									<!--<em style="position: absolute; top: 50%; left: 0; width: 100%; color: Bisque;">
										5/10
									</em>-->
									<em style="position: absolute; top: 85%; left: 0; width: 100%; ">
										<?php echo $value['tc_TieuDe'];?>
									</em>
								</a>                    
								<?php
							}
						}
					?> 
                </div>
                <div class="decoration">
                </div>		
				<div class="col-md-12 text-center">
                    <!--p style="align=center;">
                       
					<?php echo $skip  / 9 + 1; echo '/'; echo ($nRows - $nRows % 9)  / 9 + 1;?>
					
                    </p-->
					<ul class="pagination pagination-lg pager" >
						<?php 
						$iPage = 0;
						$nPages = ($nRows - $nRows % 9)  / 9 + 1;
						while($iPage < $nPages){
							?>
							<li class="<?php echo (($iPage * 9) == $skip) ? "active" : ""; ?>">
								<a href="danhsachtrochoi.php?skip=<?php echo ($iPage * 9) ?>" class="page_link active">
									<?php echo $iPage + 1?>
								</a>
							</li>
							<?php 
							$iPage++;
						}
						?>
					</ul>
                </div>
				
                <div class="decoration"></div>
                
                <?php
				include_once("include/inc-footer.php");
			?> 
                                
                
                
            <!-- End of entire page content-->
            </div> 
