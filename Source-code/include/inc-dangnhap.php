<?PHP
require_once("process/xuly_dangnhap.php");
include_once("dataconfig/dataprovider.php");
$xx = new xuLyDangNhap();
if(isset($_POST['btnLogin']))
{	
	//document.getElementById("result").innerHTML =''; // Variable To Store Error Message
	$xx->HandleError('');
	$id = $xx->CheckLoginInDB($_POST['txtUsername'], $_POST['txtPassword']);
	
	$sql = "select * from taikhoan where tk_TenDangNhap = '".$_POST['txtUsername']."' and tk_MatKhau = '".$_POST['txtPassword']."'";
	$result = DataProvider::GetOneRow($sql);
	if($id > 0)
 	{
		if (session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		$_SESSION['UID'] = $id;
		$_SESSION["user_name"] = $_POST['txtUsername'];
		$_SESSION['DaDangNhap'] = 1;
		$_SESSION['LoaiNguoiDung'] = $result['tk_LoaiNguoiDung'];
		$xx->RedirectToURL("index.php");
	}
}
?>
  
<a id="thongbaoloi" class="show-top-notification-2 timer-notification" href="#"/>
<div class="top-notification-2 top-notification bg-red-dark timeout-notification">
    <h4>Thông báo</h4>
    <p>
        <?php echo $xx->GetErrorMessage(); ?>
    </p>
</div>

<?php
	if($xx->GetErrorMessage() != ''){
		?>
		<script language="javascript">
            function runxz(){
				$(document).ready( function() { 
					document.getElementById('thongbaoloi').click();
					document.getElementById("txtUsername").value = '<?php echo $_POST['txtUsername']?>' ;
					document.getElementById("txtPassword").value = '<?php echo $_POST['txtPassword']?>' ;
				}); 
            }
           <?php
               echo "runxz();";
           ?>
       </script>
	   <?php
	}
	
?>            
        
        <div id="content" class="snap-content">
            <div class="content container-fullscreen no-bottom">
            <!--Page content goes here, fixed elements go above the all elements class-->
                            
                <div class="pageapp-login bg-5 cover-screen">    
                    <div class="pageapp-login-content cover-center">
					
						<!--Form Dang Nhap Start -->
						<form method="post" action='<?php $_SERVER['PHP_SELF'] ?>' name="DNUser" >
							<div class="unboxed-layout">
								<a class="pageapp-login-logo" href="#"></a>
								<div class="pageapp-login-field">
									<i class="fa fa-user"></i>
									<input type="text" value="" placeholder="Tên đăng nhập" id="txtUsername" name="txtUsername">
								</div>
								<div class="pageapp-login-field">
									<i class="fa fa-lock"></i>
									<input type="password" value="" placeholder="Mật khẩu" id="txtPassword" name="txtPassword">
								</div>
								<input type="submit" name="btnLogin" value="Đăng nhập" class="pageapp-login-button button button-m button-green button-fullscreen" />
								<input onclick="window.location.href='dangky.php'" name="btnLogin" value="Đăng ký" class="pageapp-login-button button button-m button-red button-fullscreen" />
								<!--a href="#" class="pageapp-login-button button button-small button-green button-fullscreen">Đăng nhập</a>
								<div class="decoration"></div-->               
							</div>
                        </form>
						<!--Form Dang Nhap END-->
						
                    </div>
                    <div class="overlay bg-black"></div>
                   
                </div>        
                
            <!-- End of entire page content-->
            </div> 
        </div>
    </div>  
    
  