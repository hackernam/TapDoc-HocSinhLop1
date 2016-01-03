<div class="container heading-style-5">
                    <h4 class="heading-title">Các bài được học nhiều nhất !</h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                </div> 

<?php 
include_once 'dataconfig/dataprovider.php';
$result = DataProvider::GetRows("select bh_ID, bh_HinhDaiDien, bh_LoaiBaiHoc,bh_TenBaiHoc from baihoc order by bh_SoLanChon desc limit 5"); 
?>
<div class="staff-slider">
                    <div class="staff-slider-no-transition" data-snap-ignore="true">
					<?php	foreach ($result as $value) { ?>
                        <div class="staff-item">
                            <a href="baihoc.php?bh=<?php echo $value[0]; ?>&lbh=<?php echo $value[2];?>"><img src="<?php echo $value[1];?>" alt="img"></a>
                            <h3><?php echo $value['bh_TenBaiHoc']; ?></h3>
                        </div>
						<?php 
							} 
					?>
                    </div>
                    <a class="next-staff-slider" href="#"><i class="fa fa-angle-right"></i></a>
                    <a class="prev-staff-slider" href="#"><i class="fa fa-angle-left"></i></a>
                </div>