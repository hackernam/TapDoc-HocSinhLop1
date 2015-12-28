<script>
var xong = false;
var dsDA = [
];
var dsTL = [
];
function triggerAudio(abc) {
    var playid = abc.id.substring(4);
    document.getElementById("audio"+playid).play();
}
function done() {
	if(!xong){
		var score = 0;
		for (var j = 0; j < dsDA.length; j++) {	
			for (var i = 0; i < dsTL.length; i++) {
				if(dsDA[j].id == dsTL[i].id){
					if(dsDA[j].va == dsTL[i].va){
						score++;
					}
					break;
				}
			}
			
				var users = document.getElementsByClassName("cautraloi"+dsDA[j].id);
				for (var i = 0; i < users.length; ++i) {
					var user = users[i];  
					user.innerHTML = "Đán án là " + dsDA[j].va;
				}
			//document.getElementById("cautraloi"+dsDA[j].id).innerHTML = "Đán án là " + dsDA[j].va;
		}
		document.getElementById("btnXong").innerHTML = "Điểm: " + score +"/"+ dsDA.length;
		xong = true;
		$("#dSubmit").append("<a class=\"button button-xl button-magenta button-round\" onclick=\"reload()\">Làm lại</a>");
		
		var formData = {idbt:<?php echo $_GET["bt"];?>, sr: score};
		$.ajax(
		{
			url : "process/xuly_luulichsubaitap.php",
			type: "POST",
			data : formData,
			success: function(data, textStatus, jqXHR)
			{
				//data: data from server 
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert("not ok");
			}
		});
	}
}
function answer(c,d){
	if(!xong){
		var flag = false;
		for (var i = 0; i < dsTL.length; i++) {
			if(dsTL[i].id == c) {
				dsTL[i].va = d;
				flag = true;
			}
		}
		if(!flag)
			dsTL.push({id: c,va:d});
		var users = document.getElementsByClassName("cautraloi"+c);
		for (var i = 0; i < users.length; ++i) {
			var user = users[i];  
			user.innerHTML = "Chọn đán án " + d;
		}
		//document.getElementsById("cautraloi"+c).innerHTML = "Chọn đán án " + d;
	}
}
function reload(){
	location.reload();
}
</script>



                <?php $id_BT = $_GET["bt"];
					$sql = "select ch_ID, ch_DuongDanHinhAnh, ch_DuongDanGhiAm, ch_LuaChon1,
							ch_LuaChon2, ch_LuaChon3, ch_LuaChon4, ch_DapAn
							from cauhoi where ch_BaiTap = $id_BT";
					$result = DataProvider::GetRows($sql);
					if($result != null){
						$ch_id;
						$ch_ha;
						$ch_ga;
						$ch_c1;
						$ch_c2;
						$ch_c3;
						$ch_c4;
						$ch_da;
						$num = 0;
						$idlist = array();
						$dalist = array();
						?>
					
				<div class="container-fullscreen coverpage-slider" data-snap-ignore="true">
						<?php
						foreach ($result as $value) 
						{
							$num++;
							$ch_id = $value['ch_ID'];
							$ch_ha = $value['ch_DuongDanHinhAnh'];
							$ch_ga = $value['ch_DuongDanGhiAm'];
							$ch_c1 = $value['ch_LuaChon1'];
							$ch_c2 = $value['ch_LuaChon2'];
							$ch_c3 = $value['ch_LuaChon3'];
							$ch_c4 = $value['ch_LuaChon4'];
							$ch_da = $value['ch_DapAn'];
							
							array_push($idlist, $ch_id);
							array_push($dalist, $ch_da);
							?>	
							
					
								<div class="cover-slide" >	
								<!-- 
									<div class="thumbnail-menu" style="padding-bottom: 350px;">
										<!-- ===============================================================->
									</div>
								-->
									
								<div class="thumbnail-menu" style="padding-bottom: 50px;">
									<div class="container switch-box" align="center">
										
										<p style="margin-bottom:0px;" id="play<?php echo $ch_id;?>" onclick="triggerAudio(this)">
											<img src="<?php echo $ch_ha; ?>"/>
										</p>
										
										<p style="font-weight:bold; font-size:36px; color:darkgreen; text-shadow: 0 0 3px #FF0000; margin-top:15px; ">
											Câu <?php echo $num;?>
										</p>
										
										<p class="cautraloi<?php echo $ch_id; ?>" style="font-weight:bold; font-size:24px;color:darkblue; text-shadow: 0 0 3px #ff33b1;">Hãy chọn đáp án</p>
										
									
									
									</div>			
									<audio id="audio<?php echo $ch_id;?>">
										<source src="<?php echo $ch_ga;?>" type="audio/mpeg" />
									</audio>
									
									<div class="portfolio-adaptive portfolio-adaptive-two" style="margin-right: 8%;">
										<div class="portfolio-item">
											<a class="button button-fullscreen button-green button-round" style="color: white;" onclick="answer(<?php echo $ch_id;?>, 1)"><?php echo $ch_c1;?></a>
										</div>
										<div class="portfolio-item">
											<a class="button button-fullscreen button-blue button-round" style="color: white;" onclick="answer(<?php echo $ch_id;?>, 2)"><?php echo $ch_c2;?></a>
										</div>
										<div class="portfolio-item">
											<a class="button button-fullscreen button-red button-round" style="color: white;" onclick="answer(<?php echo $ch_id;?>, 3)"><?php echo $ch_c3;?></a>
										</div>
										<div class="portfolio-item">
											<a class="button button-fullscreen button-orange button-round" style="color: white;" onclick="answer(<?php echo $ch_id;?>, 4)"><?php echo $ch_c4;?></a>
										</div>
									</div>
									
								</div>
								
									
									
								</div>
							<?php
						}
						?>
				</div>
				
			
				
				<div id="dSubmit" align="center" style="padding-left: 15px;">                       
					<a id="btnXong" class="button button-xl button-teal button-round" onclick="done()">Xong</a>
                </div>
					<?php
					}
					else{
						
						?>
						<script>
						var users = document.getElementsByClassName("heading-subtitle");
						for (var i = 0; i < users.length; ++i) {
							var user = users[i];  
							user.innerHTML = "";
						}
						</script>
						<div align="center" style="padding-left: 15px;">                       
							<a href="danhsachbaitap.php" class="button button-xl button-green button-round">Không có bài tập</a>
						</div>
						<?php
					}
					?>

		<script language="javascript">
            function runxz(){
				$(document).ready( function() {
					var id_array = [<?php echo '"'.implode('","', $idlist).'"' ?>];
					var da_array = [<?php echo '"'.implode('","', $dalist).'"' ?>];
					for (var x = 0; x < id_array.length; x++) {
						dsDA.push({id:id_array[x], va:da_array[x]});
					}
				}); 
            }
           <?php
               echo "runxz();";
           ?>		   
       </script>






						