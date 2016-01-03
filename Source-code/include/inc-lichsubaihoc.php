<?php 
	//session_start();
	if(!($_SESSION['DaDangNhap'] == 1))
	{
		header("Location: dangnhap.php");
		//$id_tk = $_SESSION['UID'];
		
	}
	
?>            
			
            <div class="content">
			
			<div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
                
                <div class="container heading-style-5">
                    <h4 class="heading-title"><i class="fa fa-history"></i> Lịch sử bài học</h4>
                    <i class="fa fa-list heading-icon"></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                        Bé có thể xem danh sách các bài học mình đã học ở đây nhé !
                    </p>
                </div>
                
                <div class="decoration"></div>
				
			<div class="one-half-responsive">
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
						
						$uiduser = $_SESSION['UID'];
						$sql = "SELECT bh_ID, bh_TenBaiHoc, bh_HinhDaiDien, lsbh_SoLanHoc, lsbh_ThoiGian, lsbh_BaiHoc, bh_LoaiBaiHoc,lbh_LoaiBaiHoc
								FROM baihoc, lichsubaihoc, loaibaihoc, taikhoan 
								where tk_ID = lsbh_TaiKhoan and  lsbh_BaiHoc = bh_ID and bh_LoaiBaiHoc = lbh_ID and lsbh_TaiKhoan = $uiduser LIMIT $from, $max_results";
						$result = DataProvider::GetRows($sql);
						if($result != null)
						{
							foreach ($result as $value) {
					?>
                    <div class="activity-item container">
                        <a href="baihoc.php?bh=<?php echo $value['bh_ID']; ?>&lbh=<?php echo $value['bh_LoaiBaiHoc']; ?>"><img class="activity-item-image" src="<?php echo $value['bh_HinhDaiDien']; ?>" alt="img"></a>
                        <h5>Bé đã học <strong class="color-blue-dark"><?php echo $value['bh_TenBaiHoc'];?></strong> thuộc phần <strong class="color-red-dark"><?php echo $value['lbh_LoaiBaiHoc'];?></strong></h5>
                        <em><i class="fa fa-retweet"></i><?php $date = date_create($value['lsbh_ThoiGian']);echo date_format($date, 'd/m/Y');?></em>

                        <a href="#" class="activity-item-toggle"><i class="fa fa-plus"></i></a>
                        <div class="activity-item-detail">
                            Chọn hình ảnh để học lại bài học đó nhé !
                        </div>
                    </div>                

                    <div class="decoration"></div>
					<?php
							}
						}else{
							echo 'Bạn chưa học bài nào.';
						}
					?>

<div class="col-md-12 text-center">
<ul class="pagination pagination-lg pager" ><?php
$total_results = DataProvider::NumRows("SELECT COUNT(*) as Num FROM lichsubaihoc where lsbh_TaiKhoan = $uiduser");  
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
                </div>					
                </div> 
</div>
			
			