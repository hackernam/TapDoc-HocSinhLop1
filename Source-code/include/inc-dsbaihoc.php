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
			
						$lessonid = $_GET['lsid'];
						if($lessonid == null || $lessonid > 6)
						{
							$lessonid = 0;
						}
						$sql = "SELECT bh_ID, bh_TenBaiHoc, bh_HinhDaiDien FROM baihoc WHERE bh_LoaiBaiHoc = $lessonid LIMIT $from, $max_results";
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
                        <em style="font-weight: bold;"><?php echo $value['bh_TenBaiHoc'];?></em>
                    </a>                    
                    <?php
							}
						}
					?> 
                </div>
				
				<div class="decoration"></div>
				<div class="col-md-12 text-center">
<ul class="pagination pagination-lg pager" ><?php
$total_results = DataProvider::NumRows("SELECT COUNT(*) as Num FROM baihoc WHERE bh_LoaiBaiHoc = $lessonid");  
$total_pages = ceil($total_results / $max_results);   
for($i = 1; $i <= $total_pages; $i++){  
?>

<?php
if($i == $_GET['page'])
{
	?>
								<li class="active">
								<a href="<?php echo $_SERVER['PHP_SELF']; ?>?lsid=<?php echo $id_LoaiBaiHoc; ?>&page=<?php echo $i; ?>" class="page_link active">
									<?php echo $i; ?>
								</a>
								</li>
								<?php
}
else{
	?>
	<li class="">
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>?lsid=<?php echo $id_LoaiBaiHoc; ?>&page=<?php echo $i; ?>" class="">
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

				<div class="container">
                    <h4>Những bài bé chưa học</h4>
                    <em class="small-heading">Bé có thể chọn những bài chưa học bên dưới nhé!</em>
                </div>
				<?php
					$id = $_SESSION['UID'];
					$sql_goiy = 'SELECT bh.bh_ID, bh.bh_LoaiBaiHoc, bh.bh_HinhDaiDien,bh_TenBaiHoc
								FROM baihoc bh					
								WHERE bh.bh_LoaiBaiHoc = '.$id_LoaiBaiHoc.' 
								AND bh.bh_ID NOT IN(
													SELECT ls.lsbh_BaiHoc
													FROM lichsubaihoc ls
													WHERE ls.lsbh_TaiKhoan = '.$id.')';
					$dsgoiy = DataProvider::GetRows($sql_goiy);
				?>
				<div class="staff-slider">
                    <div class="staff-slider-no-transition" data-snap-ignore="true">
					<?php
						if($dsgoiy != null){
							foreach ($dsgoiy as $goiy) { 
					?>
                        <div class="staff-item">
                            <a href="baihoc.php?bh=<?php echo $goiy['bh_ID']; ?>&lbh=<?php echo $goiy['bh_LoaiBaiHoc'];?>"><img src="<?php echo $goiy['bh_HinhDaiDien'];?>" alt="img"></a>
                            <h3><?php echo $goiy['bh_TenBaiHoc']; ?></h3>
                        </div>
						<?php 
							} 
						}
					?>
                    </div>
                    <a class="next-staff-slider" href="#"><i class="fa fa-angle-right"></i></a>
                    <a class="prev-staff-slider" href="#"><i class="fa fa-angle-left"></i></a>
                </div>
                <div class="decoration"></div>
                
                <?php
				include_once("include/inc-footer.php");
			?> 


            <!-- End of entire page content-->
            </div> 
