<script>
var xong = false;
var next_id = -1;
var next_lvl = -1;
var da;
function triggerAudio(abc) {
    var playid = abc.id.substring(4);
    document.getElementById("audio"+playid).play();
}
function done() {
	if(!xong){
		xong = !xong;		
		var inner = document.getElementById("dtraloi").innerHTML;
		var tx = inner.replace(/<[^>]*>/g, "").toUpperCase();
		document.getElementById("cautraloi").innerHTML = da; 
		if(da.localeCompare(tx) == 0){
			document.getElementById("btnXong").innerHTML = "Đúng";
			if(next_id > 0)
				$('#dSubmit').append("<a id=\"btnXong\" class=\"button button-xl button-teal button-round\" href=\"xepchu.php?id="+next_id+"&lvl="+next_lvl+"\">Tiếp theo</a>");
		}else{
			document.getElementById("btnXong").innerHTML = "Sai";
			$('#dSubmit').append("<a id=\"btnXong\" class=\"button button-xl button-red button-round\" onclick=\"reload()\">Chơi lại</a>");
		}
	}
}
function reload(){
	location.reload();
}

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

function answer(a){
	if(!xong){
		var txt = document.getElementById(a.id).innerHTML;
		$('#dtraloi').append("<a id=\"z"+a.id.substring(1)+"\"  style=\"width: 50px; height: 40px;\" class=\"buttonx-center buttonx-flat buttonx-white\" onclick=\"clean(this)\">"+txt+"</a>");
		document.getElementById(a.id).remove();
	}
}

function clean(a){
	if(!xong){
		var txt = document.getElementById(a.id).innerHTML;
		$('#dLuaChon').append("<a id=\"a"+a.id.substring(1)+"\"  style=\"width: 50px; height: 40px;\" class=\"buttonx-center buttonx-flat buttonx-white\" onclick=\"answer(this)\">"+txt+"</a>");
		document.getElementById(a.id).remove();
	}
}

</script>



                <?php $id = $_GET["id"];
					$sql = "select xc_ID, xc_level, xc_DuongDanHinhAnh, xc_DuongDanGhiAm, xc_NoiDung, xc_Khoa
							from xepchu where xc_ID >= $id";
					$result = DataProvider::GetRows($sql);
						$xc_nd = "";
					if($result != null){
						$xc_next_id = -1;
						$xc_next_lvl = -1;
						$xc_id;
						$xc_ha;
						$xc_ga;
						$xc_kh;
						$num = 0;
						?>
					
				<div class="container-fullscreen" data-snap-ignore="true">
						<?php
						foreach ($result as $value) 
						{
							if($num == 0){
								$xc_kh = $value['xc_Khoa'];
								if($xc_kh == 1){
									//break;
								}
								$xc_id = $value['xc_ID'];
								$xc_ha = $value['xc_DuongDanHinhAnh'];
								$xc_ga = $value['xc_DuongDanGhiAm'];
								$xc_nd = $value['xc_NoiDung'];
								
								?>	<!-- 
										<div class="thumbnail-menu" style="padding-bottom: 350px;">
											<!-- ===============================================================->
										</div>
									-->
										
									<div class="thumbnail-menu" style="padding-bottom: 50px;">
										<div class="container switch-box" align="center">
											
											<p style="margin-bottom:0px;" id="play<?php echo $xc_id;?>" onclick="triggerAudio(this)">
												<img src="<?php echo $xc_ha; ?>"/>
											</p>
											<p id="cautraloi" style="font-weight:bold; font-size:24px;color:darkblue; text-shadow: 0 0 3px #ff33b1;">Hãy điền đáp án</p>
											
										
										</div>			
										<audio id="audio<?php echo $xc_id;?>">
											<source src="<?php echo $xc_ga;?>" type="audio/mpeg" />
										</audio>
										<div id="dtraloi" ></div>
										
										<div id="dLuaChon" ></div>
										
									</div>
								<?php
							}
							else if($num == 1){
								$xc_next_id = $value['xc_ID'];
								$xc_next_lvl = $value['xc_level'];
							}
							else if($num == 2){
								break;
							}
							$num++;
						}
					?>				
					</div>
					<?php

					if($xc_kh == 1){
						?>
						<div id="dSubmit" align="center" style="padding-left: 15px;">
							<a id="btnXong" class="button button-xl button-teal button-round" onclick="done()">Xong</a>
						</div>
						<?php
					}
					else{					
						?>
						<div id="dSubmit" align="center" style="padding-left: 15px;">
							<a id="btnXong" class="button button-xl button-teal button-round" onclick="done()">Xong</a>
						</div>
						<?php
					}
				
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
							<a href="danhsachtrochoi.php" class="button button-xl button-green button-round">Không có trò chơi</a>
						</div>
						<?php
					}
					?>

		<script language="javascript">
            function runxz(){
				$(document).ready( function() {
					da = "<?php echo $xc_nd;?>".toUpperCase();
					next_id = <?php echo $xc_next_id;?>;
					next_lvl = <?php echo $xc_next_lvl;?>;
					var n = da.split('');
					n = shuffle(n);//draggable=\"true\" ondragstart=\"drag(event)\"
					for(var iz = 0; iz < n.length; iz++){
						$('#dLuaChon').append("<a id=\"a"+iz+"\"  style=\"width: 50px; height: 40px;\" class=\"buttonx-center buttonx-flat buttonx-white\" onclick=\"answer(this)\">"+n[iz]+"</a>");
					}
					
					var xn = $(window).width() < 420 ? 5 : 7;
					var a = Math.ceil(n.length / xn);
					a = a * 60;
	
					document.getElementById('dLuaChon').setAttribute("style","height:"+a+"px; border: 2px solid #aaa; background-color:#efefef; display: block;");
					document.getElementById('dtraloi').setAttribute("style","height:"+a+"px; border: 2px solid #aaa; background-color:#fff294 ; display: block; margin: 30px 0;");
				}); 
            }
           <?php
               echo "runxz();";
           ?>
			
       </script>






						