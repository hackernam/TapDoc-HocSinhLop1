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
	$result = DataProvider::GetRows("select * from am where a_BaiHoc = $idBaiHoc");
	foreach ($result as $value) 
			{
				$chon = rand(1, 5);
				if($chon == 1)
				{
					$mau = "blue";
				}
				if($chon == 2)
				{
					$mau = "green";
				}
				if($chon == 3)
				{
					$mau = "red";
				}
				if($chon == 4)
				{
					$mau = "orange";
				}
				if($chon == 5)
				{
					$mau = "black";
				}
				?>
				
			
				<div class="container switch-box">
                    <h2 style="color: <?php echo $mau ?>;text-shadow: 0 0 3px #FF0000;"><?php echo $value['a_NoiDung'];?></h2>
                    <a href="#" class="switch-icon">
					<p id="play<?php echo $value['a_ID'];?>" onclick="triggerAudio(this)"><img style="width: 50px;height: 50px;" src="images/loa.png"/></p> 
                    </a>
                </div>
				
				<audio id="audio<?php echo $value['a_ID'];?>">
					<source src="<?php echo $value['a_DuongDanGhiAm'];?>" type="audio/mpeg" />
				</audio>
			<?php
			}
?>