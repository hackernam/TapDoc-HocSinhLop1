<?PHP
require_once("process/xuly_dangnhap.php");

$xx = new xuLyDangNhap();
if(!$xx->CheckLogin())
{
    $xx->RedirectToURL("dangnhap.php");
}
?>