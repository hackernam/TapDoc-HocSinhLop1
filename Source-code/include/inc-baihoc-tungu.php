<script>
function triggerAudio(abc) {
    var playid = abc.id.substring(4);
    document.getElementById("audio"+playid).play();
}
</script>

<?php
	$idBaiHoc = $_GET["bh"];
	$idLoaiBaiHoc = $_GET["lbh"];
	$sql = "select * from tu where t_BaiHoc = $idBaiHoc";
	$result = DataProvider::GetRows($sql);
	foreach ($result as $value) 
			{
				?>	
				<div class="container switch-box">
                    <h4><?php echo $value[1];?></h4>
                    <a href="#" class="switch-icon">
					<p id="play<?php echo $value[0];?>" onclick="triggerAudio(this)"><img style="width: 50px;height: 50px;" src="images\loa.png"/></p> 
                    </a>
                </div>
				
				<audio id="audio<?php echo $value[0];?>">
					<source src="<?php echo $value[2];?>" type="audio/mpeg" />
				</audio>
			<?php
			}
?>