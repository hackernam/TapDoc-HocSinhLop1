<script language="javascript">
	function kiemtratontai(){
		var xmlHttpRequest;
		if(window.XMLHttpRequest){
			xmlHttpRequest = new XMLHttpRequest();
		}
		else{
			xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlHttpRequest.onreadystatechange = function(){
			if(xmlHttpRequest.readyState == 4 && xmlHttpRequest.status == 200){
				document.getElementById("result").innerHTML = xmlHttpRequest.responseText;
			}
		}
		var taikhoan = document.getElementById("txttentaikhoan").value;
		xmlHttpRequest.open("get","process/kiemmailtontai.php?taikhoan="+taikhoan,true);
		xmlHttpRequest.send();
	}
	function kiemtrahople(){
		myFrmObj = document.DKUser;
		if(myFrmObj.txtmatkhau.value.length < 6){
			//alert("ton tai");
			document.getElementById('ktmatkhau').click();
			document.getElementById("result").innerHTML = "Mật khẩu phải hơn 6 kí tự";
			return false;
		}
		else if(myFrmObj.txtmatkhau.value.length >= 6){
			document.getElementById("result").innerHTML = "&nbsp;";
		}
		return true;
	}
	function kiemtranguoidung(){
		myFrmObj = document.DKUser;
		if(myFrmObj.txttentaikhoan.value.length < 6){
			//alert("ton tai");
			document.getElementById('ktnguoidung').click();
			document.getElementById("result").innerHTML = "Tên tài khoản phải hơn 6 kí tự";
			return false;
		}
		else if(myFrmObj.txttentaikhoan.value.length >= 6){
			document.getElementById("result").innerHTML = "&nbsp;";
		}
		kiemtratontai();
		return true;
	}
	function Kiemtralai(){
		myFrmObj = document.DKUser;
		if(myFrmObj.txtmatkhau.value.length < 6){
			document.getElementById("result").innerHTML = "Mật khẩu phải hơn 6 kí tự";
			return false;
		}
		if(myFrmObj.txttentaikhoan.value.length < 6){
			document.getElementById("result").innerHTML = "Tên tài khoản phải hơn 6 kí tự";
			return false;
		}
		var temp = document.getElementById("result").innerHTML;
		return true;
	}
</script>
<a id="ktnguoidung" class="show-top-notification-2 timer-notification" href="#">Fixed Top Notification With Timeout</a>
<div class="top-notification-2 top-notification bg-red-dark timeout-notification">
    <h4>Tên tài khoản phải hơn 6 kí tự</h4>
</div>

<a id="ktmatkhau" class="show-top-notification-2 timer-notification" href="#">Fixed Top Notification With Timeout</a>
<div class="top-notification-2 top-notification bg-red-dark timeout-notification">
    <h4>Mật khẩu phải hơn 6 kí tự</h4>
</div>
<div class="all-elements">
    <div class="snap-drawers">
        <div id="content" class="snap-content">
            <div class="content container-fullscreen no-bottom">
            <div class="pageapp-signup bg-5 cover-screen">    
                    <div class="pageapp-signup-content cover-center">
                    <form method="post" action="process/xuly_dangky.php" name="DKUser" onsubmit="return Kiemtralai()">
                        <div class="unboxed-layout">
                            <a class="pageapp-signup-logo" href="#"></a>
                            <div id="result" style="color:#F00; font-weight:bold">&nbsp;</div>                
                            <div class="pageapp-signup-field">
                                <i class="fa fa-user"></i>
                                <input onfocus="if (this.value=='Tên đăng nhập') this.value = ''" onblur="if (this.value=='') this.value = 'Tên đăng nhập'" type="text" value="Tên đăng nhập" name="txtUsername" id="txttentaikhoan" onkeyup="kiemtranguoidung()">
                            </div>  
							<div class="pageapp-signup-field">
                                <i class="fa fa-lock"></i>
                                <input onfocus="if (this.value=='password') this.value = ''" onblur="if (this.value=='') this.value = 'password'" type="password" value="password" name="txtPassword" id="txtmatkhau" onkeyup="kiemtrahople()">
                            </div>
							<div class="pageapp-signup-field">
                                <i class="fa fa-user"></i>
                                <input onfocus="if (this.value=='Họ và tên') this.value = ''" onblur="if (this.value=='') this.value = 'Họ và tên'" type="text" value="Họ và tên" name="txtHoTen" id="txthoten" onkeyup="kiemtranguoidung()">
                            </div> 							
                             <div class="pageapp-signup-field">
                                Giới tính:                                     									                                <select style="width:80%;" name="sltGioiTinh">
                                   <option value="Nam">Nam</option>
                                   <option value="Nữ">Nữ</option>
                                </select>
                            </div>  
                          <input type="submit" name="btnRegister" value="Register" class="pageapp-signup-button button button-small button-green button-fullscreen" />
                          <input type="reset" value="Reset" class="pageapp-signup-button button button-small button-green button-fullscreen"/>
                        </div>
                        </form>
                    </div>
                    <div class="overlay bg-black"></div>
                </div>
            <!-- End of entire page content-->
            </div> 
        </div>
    </div>  
</div>  