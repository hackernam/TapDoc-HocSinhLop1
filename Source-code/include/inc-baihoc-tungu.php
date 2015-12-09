<script>
function triggerAudio(abc) {
    var playid = abc.id.substring(4);
    document.getElementById("audio"+playid).play();
}
</script>

<?php
	$idBaiHoc = $_GET["bh"];
	$idLoaiBaiHoc = $_GET["lbh"];
	$result = DataProvider::GetRows("select * from tu where t_BaiHoc = $idBaiHoc");
	foreach ($result as $value) 
			{
				?>
				
			
				<div class="container switch-box">
                    <h4><?php echo $value['t_NoiDung'];?></h4>
                    <a href="#" class="switch-icon">
					<p id="play<?php echo $value['t_ID'];?>" onclick="triggerAudio(this)"><img style="width: 50px;height: 50px;" src="images\loa.png"/></p> 
                    </a>
                </div>
				
				<audio id="audio<?php echo $value['t_ID'];?>">
					<source src="<?php echo $value['t_DuongDanGhiAm'];?>" type="audio/mpeg" />
				</audio>
			<?php
			}
?>