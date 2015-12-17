<script>
function triggerAudio(abc) {
    var playid = abc.id.substring(4);
    document.getElementById("audio"+playid).play();
}
</script>

<?php
	$idBaiHoc = $_GET["bh"];
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