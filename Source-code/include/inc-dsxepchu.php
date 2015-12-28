            <div class="content">
            <div class="header-clear-large"></div>
                <div class="container heading-style-5">
                    <h4 class="heading-title"><?php echo $_GET['td'];?></h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                </div> 
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
						$sql = "SELECT count(xc_ID) rows FROM xepchu";
						$result = DataProvider::GetRows($sql);
						$frow =  $result[0];
						
						$nRows = $frow['rows'];
						
						
						$sql = "SELECT xc_ID, xc_level, xc_Khoa FROM xepchu LIMIT $skip, 9";
						$result = DataProvider::GetRows($sql);
						if($result != null)
						{
							foreach ($result as $value) {
								?>
								<!-- ===============================================================
								baihoc.php?bh=?php echo $value['bh_ID']; ?>&lbh=?php echo $lessonid; ?>
								pointer-events: none;
								-->
								<a style="<?php echo $value['xc_Khoa'] == 1 ? "" : ""; ?>" 
									href="xepchu.php?id=<?php echo $value['xc_ID']; ?>&lvl=<?php echo $value['xc_level']; ?>">
									<i class="bg-green-dark bg-hover-green-dark fa border-radius-img">
										<img class="img-responsive img-circle" src="images/pictures/<?php echo $value['xc_Khoa'] == 1 ? "lvl_lock" : "lvl_unlock"; ?>.png">
										<!--?php echo $value['bh_HinhDaiDien']; ?-->
									</i>
									<!--<em style="position: absolute; top: 50%; left: 0; width: 100%; color: Bisque;">
										5/10
									</em>-->
									<em style="position: absolute; top: 85%; left: 0; width: 100%; ">
										Màng <?php echo $value['xc_level'];?>
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
                       
					<php echo $skip  / 9 + 1; echo '/'; echo ($nRows - $nRows % 9)  / 9 + 1;?>
					
                    </p-->
					<ul class="pagination pagination-lg pager" >
						<?php 
						$iPage = 0;
						$nPages = ($nRows - $nRows % 9)  / 9 + 1;
						while($iPage < $nPages){
							?>
							<li class="<?php echo (($iPage * 9) == $skip) ? "active" : ""; ?>">
								<a href="danhsachmangtc.php?id=<?php echo $_GET['id']; ?>&td=<?php echo $_GET['td']; ?>&skip=<?php echo ($iPage * 9) ?>" class="page_link active">
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
