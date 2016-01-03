<script>
function triggerAudio(abc) {
    var playid = abc.id.substring(4);
    document.getElementById("audio"+playid).play();
}
</script>

<?php
	if (isset($_SESSION['UID']) && isset($_GET['bh'])) {		
		$userId = $_SESSION['UID'];
		$bhId = $_GET['bh'];
		// Check history exists
		$lichSuBaiHocModel = DataProvider::GetOneRow("select * from lichsubaihoc where lsbh_TaiKhoan=$userId AND lsbh_BaiHoc=$bhId");
		if ($lichSuBaiHocModel) {
			// If exist, update counter
			$result = DataProvider::ExecuteQuery("update lichsubaihoc set lsbh_SoLanHoc=lsbh_SoLanHoc+1 where lsbh_ID={$lichSuBaiHocModel['lsbh_ID']}");
			//var_dump($result);
			//echo 'count';exit;
		} else {
			// If not exist, insert
			$result = DataProvider::ExecuteQuery("insert into lichsubaihoc(`lsbh_TaiKhoan`, `lsbh_BaiHoc`, `lsbh_ThoiGian`, `lsbh_SoLanHoc`) values ($userId, $bhId, now(), 1)");
			//var_dump($result);
			//echo 'insert';exit;
		}
	}
	$idBaiHoc = $_GET["bh"];
	$idLoaiBaiHoc = $_GET["lbh"];
	$sql = "select * from hinhanh where ha_BaiHoc = $idBaiHoc";
	$result = DataProvider::GetRows($sql);
	foreach ($result as $value) 
			{
				?>	
				<div class="container switch-box" align="center" >
                   
					<p style="margin-bottom:0px;" id="play<?php echo $value[0];?>" onclick="triggerAudio(this)"><img src="<?php echo $value[2]; ?>"/></p>  
                    <p style="font-weight:bold; font-size:24px;color:#0F3"><?php echo $value[1];?></p>
                </div>			
				<audio id="audio<?php echo $value[0];?>">
					<source src="<?php echo $value[3];?>" type="audio/mpeg" />
				</audio>
			<?php
			}
?>
<div class="decoration"></div>
<div class="container">
                    <h4>Những bài khác</h4>
                    <em class="small-heading">Bé có thể chọn những bài khác bên dưới nhé!</em>
</div>
<?php
					$sql_goiy = 'SELECT bh.bh_ID, bh.bh_LoaiBaiHoc, bh.bh_HinhDaiDien,bh_TenBaiHoc
								FROM baihoc bh					
								WHERE bh.bh_LoaiBaiHoc = '.$idLoaiBaiHoc.'';
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