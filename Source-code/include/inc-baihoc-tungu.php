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
                        <audio preload="auto" controls>
				<source src="audio/test.wav">
			</audio>
                    </a>
                </div>
				
				
			<script src="player/js/jquery.js"></script>
			<script src="player/js/audioplayer.js"></script>
			<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
			<?php
			}
?>