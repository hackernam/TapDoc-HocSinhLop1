<?php
include_once '../dataconfig/dataprovider.php';
/* Title : Ajax Pagination with jQuery & PHP
Example URL : http://www.sanwebe.com/2013/03/ajax-pagination-with-jquery-php */

//continue only if $_POST is set and it is a Ajax request
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	
	$db_username 		= 'root'; //database username
	$db_password 		= ''; //dataabse password
	$db_name 			= 'tapdoc'; //database name
	$db_host 			= 'localhost'; //hostname or IP
	$item_per_page 		= 1; //item to display per page
	
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	//Get page number from Ajax POST
	if(isset($_POST["page"])){
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
		if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
	}else{
		$page_number = 1; //if there's no page number, set it to 1
	}
	
	//get total number of records from database for pagination
	$results = $mysqli->query("SELECT COUNT(*) FROM am");
	$get_total_rows = $results->fetch_row(); //hold total records in variable
	//break records into pages
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	
	//get starting position to fetch the records
	$page_position = (($page_number-1) * $item_per_page);
	

	//Limit our results within a specified range. 
	$results = $mysqli->prepare("SELECT a_ID, a_NoiDung, a_DuongDanGhiAm, a_Hinh1, a_NoiDungHinh1, a_GhiAmHinh1, a_Hinh2, a_NoiDungHinh2, a_GhiAmHinh2, a_Hinh3, a_NoiDungHinh3, a_GhiAmHinh3, a_BaiHoc FROM am ORDER BY a_ID ASC LIMIT $page_position, $item_per_page");
	$results->execute(); //Execute prepared Query
	$results->bind_result($a_ID, $a_NoiDung, $a_DuongDanGhiAm, $a_Hinh1, $a_NoiDungHinh1, $a_GhiAmHinh1, $a_Hinh2, $a_NoiDungHinh2, $a_GhiAmHinh2, $a_Hinh3, $a_NoiDungHinh3, $a_GhiAmHinh3, $a_BaiHoc ); //bind variables to prepared statement
	//Display records fetched from database.
	//echo '<ul class="contents">';
	while($results->fetch()){ //fetch values
	
	//$sql_tieude = "select bh_TenBaiHoc from baihoc where bh_LoaiBaiHoc = 1 and bh_ID = ".$a_BaiHoc;
//	$result = DataProvider::GetRows($sql_tieude);
//	$tieude;
//	foreach ($result as $value) 
//	{
//		$tieude = $value;
//	}
//
//    echo '<div class="container heading-style-5">';
//    echo '<h4 class="heading-title">'.$tieude[0].'</h4>';
//    echo '<i class="fa fa-bolt heading-icon"></i>';
//    echo '<div class="line bg-black"></div>';
//    echo '<p class="heading-subtitle">';
//    echo 'Chọn hình cái loa để phát âm nhé !</p></div>';
	
	echo '<div class="container switch-box">';
    echo '<h4><img src="'.$a_NoiDung.'"/></h4>';
    echo '<a href="#" class="switch-icon">';
	echo '<p id="playh'.$a_ID.'" onclick="triggerAudio(this)"><img style="width: 50px;height: 50px;" src="images\loa.png"/></p>';
    echo '</a></div><audio id="audioh'.$a_ID.'">';
	echo '<source src="'.$a_DuongDanGhiAm.'"type="audio/mpeg"/>';
	echo '</audio><div><div style="float:left">';
	
    echo '<p style="margin:0px;" id="playh1'.$a_ID.'" onclick="triggerAudio(this)"><img src="'.$a_Hinh1.'"/></p>'; 
    echo '<p style="text-align:center; font-weight:bold">'.$a_NoiDungHinh1.'</p>';
    echo '<audio id="audioh1'.$a_ID.'">';
	echo '<source src="'.$a_GhiAmHinh1.'" type="audio/mpeg" />';
	echo '</audio></div><div style="float:left">';
	
    echo '<p style="margin:0px;" id="playh2'.$a_ID.'" onclick="triggerAudio(this)"><img src="'.$a_Hinh2.'"/></p>'; 
    echo '<p style="text-align:center; font-weight:bold">'.$a_NoiDungHinh2.'</p>';
    echo '<audio id="audioh2'.$a_ID.'">';
	echo '<source src="'.$a_GhiAmHinh2.'" type="audio/mpeg" />';
	echo '</audio></div><div style="float:left">';

    echo '<p style="margin:0px;" id="playh3'.$a_ID.'" onclick="triggerAudio(this)"><img src="'.$a_Hinh3.'"/></p>'; 
    echo '<p style="text-align:center; font-weight:bold">'.$a_NoiDungHinh3.'</p>';
    echo '<audio id="audioh3'.$a_ID.'">';
	echo '<source src="'.$a_GhiAmHinh3.'" type="audio/mpeg" />';
	echo '</audio></div></div>';
	}
	echo '</ul>';

	echo '<div align="center" style="clear:both">';
	/* We call the pagination function here to generate Pagination link for us. 
	As you can see I have passed several parameters to the function. */
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
	echo '</div>';
	
	exit;
}
################ pagination function #########################################
function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        //$right_links    = $current_page + 1; 
        $previous       = $current_page - 1; //previous link 
        $next           = $current_page + 1; //next link
        if($current_page > 1){
			$previous_link =  $current_page - 1;
			echo '<ul class="pagination"><li style="float:left;list-style:none;"><a href="#" data-page="'.$previous_link.'"><img src="images/back.png" width="50%"/></a></li></ul>';//previous link
        }
        if($current_page < $total_pages){ 
				$next_link =  $current_page + 1;
				echo '<ul class="pagination"><li style="float:right;list-style:none;"><a href="#" data-page="'.$next_link.'"><img src="images/forward.png" width="50%"/></a></li></ul>'; //next link
				
        }
	}
    return $pagination; //return pagination links
}

?>