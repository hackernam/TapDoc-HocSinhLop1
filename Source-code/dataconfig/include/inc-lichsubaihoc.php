<?php 
	session_start();
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
                    <h4 class="heading-title">Lịch sử bài học</h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                        Bạn hãy chọn một trong những bài học dưới đây để học nhé !
                    </p>
                </div> 
                
                <div class="decoration"></div>
                
                <div class="thumbnail-menu">
				
					<!-- ===============================================================-->
					<table id="travel" >
						<thead>    
							<tr>
								<th scope="col" rowspan="2">Hình ảnh</th>
							</tr>
							<tr>
								<th scope="col">Tên bài học</th>
								<th scope="col">Ngày học</th>
								<th scope="col">Số lần học</th>
							</tr>        
						</thead>
						
					
					<?php
						include_once("dataconfig/dataprovider.php");
						$uiduser = $_SESSION['UID'];
						$sql = "SELECT bh_ID, bh_TenBaiHoc, bh_HinhDaiDien, lsbh_SoLanHoc, lsbh_ThoiGian, lsbh_BaiHoc, bh_LoaiBaiHoc
								FROM baihoc, lichsubaihoc, loaibaihoc, taikhoan 
								where tk_ID = lsbh_TaiKhoan and  lsbh_BaiHoc = bh_ID and bh_LoaiBaiHoc = lbh_ID and lsbh_TaiKhoan = $uiduser";
						$result = DataProvider::GetRows($sql);
						if($result != null)
						{
							foreach ($result as $value) {
					?>
					<!-- ===============================================================-->
					<tbody>
							
							<tr>
								
								<th scope="row">
									<a style="margin-bottom:0px" href="baihoc.php?bh=<?php echo $value['bh_ID']; ?>&lbh=<?php echo $value['bh_LoaiBaiHoc']; ?>">
									<i class="bg-green-dark bg-hover-green-dark fa border-radius-img">
										<img style="width: 90px; margin-bottom:0px" class="img-responsive img-circle" src="<?php echo $value['bh_HinhDaiDien']; ?>">
									</i>
									</a>
								</th>
								<td><em><?php echo $value['bh_TenBaiHoc'];?></em></td>
								<td><em><?php $date = date_create($value['lsbh_ThoiGian']);echo date_format($date, 'd/m/Y');?></em></td>
								<td><em><?php echo $value['lsbh_SoLanHoc'];?></em></td>
								
							</tr>
						</tbody>
                    <?php
							}
						}else{
							echo 'Bạn chưa học bài nào.';
						}
					?> 
					</table>
                </div>
                
                <div class="decoration"></div>
                
                <?php
				include_once("include/inc-footer.php");
			?> 
                                
                
                
            <!-- End of entire page content-->
            </div> 
