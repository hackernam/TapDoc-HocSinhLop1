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
                    <h4 class="heading-title">Bài tập</h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                        Bạn hãy chọn một trong những bài học dưới đây để học nhé !
                    </p>
                </div> 
                
                <div class="decoration"></div>
				<!-- ===============================================================-->
                <div class="thumbnail-menu">
					
					<?php
						include_once("dataconfig/dataprovider.php");
						if(!isset($_GET['page']))
						{  
							$page = 1;  
						} 
						else 
						{  
							$page = $_GET['page'];  
						}
						$max_results = 9;
						$from = (($page * $max_results) - $max_results);
						
						$sql = "SELECT bt_ID, bt_TieuDe FROM baitap LIMIT $from, $max_results";
						$result = DataProvider::GetRows($sql);
						if($result != null)
						{
							foreach ($result as $value) {
								?>
								<!-- ===============================================================
								baihoc.php?bh=?php echo $value['bh_ID']; ?>&lbh=?php echo $lessonid; ?>
								-->
								<a href="baitap.php?bt=<?php echo $value['bt_ID']; ?>&td=<?php echo $value['bt_TieuDe']; ?>">
									<i class="bg-green-dark bg-hover-green-dark fa border-radius-img">
										<img class="img-responsive img-circle" src="images/pictures/sachbaitap.png">
										<!--?php echo $value['bh_HinhDaiDien']; ?-->
									</i>
									<!--<em style="position: absolute; top: 50%; left: 0; width: 100%; color: Bisque;">
										5/10
									</em>-->
									<em style="position: absolute; top: 85%; left: 0; width: 100%; font-weight: bold;">
										<?php echo $value['bt_TieuDe'];?>
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
<ul class="pagination pagination-lg pager" ><?php
$total_results = DataProvider::NumRows("SELECT COUNT(*) as Num FROM baitap");  
$total_pages = ceil($total_results / $max_results);   
for($i = 1; $i <= $total_pages; $i++){  
?>

<?php
if($i == $_GET['page'])
{
	?>
								<li class="active">
								<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $i; ?>" class="page_link active">
									<?php echo $i; ?>
								</a>
								</li>
								<?php
}
else{
	?>
	<li class="">
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $i; ?>" class="">
									<?php echo $i; ?>
								</a>
								</li>
	<?php
}
?>
							
<?php
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