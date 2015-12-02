<?php 
	define("HOSTNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DATABASE", "tapdoc");

class DataProvider  
{ 

	
  public static function ExecuteQuery($sql) 
  { 
    $connection = mysql_connect(HOSTNAME,USERNAME,PASSWORD) or 
      	die ("couldn't connect to localhost"); 
 
    	mysql_select_db(DATABASE,$connection); 
         
    mysql_query("set names 'utf8'"); 
     
    $result = mysql_query($sql,$connection); 
     
    mysql_close($connection); 
     
    return $result; 
  }
  
  public static function ExecuteQueryArray($sql) 
  { 
    $connection = mysql_connect(HOSTNAME,USERNAME,PASSWORD) or 
      	die ("couldn't connect to localhost"); 
 
    	mysql_select_db(DATABASE,$connection); 
         
    mysql_query("set names 'utf8'"); 
	
	$kq = mysql_fetch_array($sql);
     
    mysql_close($connection); 
     
    return $kq; 
  }  
  
  public static function GetOneRow($sql)
  {
    $connection = mysql_connect(HOSTNAME,USERNAME,PASSWORD) or 
      	die ("couldn't connect to localhost"); 
 
    	mysql_select_db(DATABASE,$connection); 
         
    mysql_query("set names 'utf8'"); 
     
    $result = mysql_query($sql,$connection); 
	$row = mysql_fetch_array($result);
     
    mysql_close($connection); 
     
    return $row; 
  }
  
  public static function GetRows($sql)
  {
	      $connection = mysql_connect(HOSTNAME,USERNAME,PASSWORD) or 
      die ("couldn't connect to localhost"); 
 
    mysql_select_db(DATABASE,$connection); 
         
    mysql_query("set names 'utf8'"); 
    
    $result = mysql_query($sql,$connection);
	$i = 0;
	while ($row = mysql_fetch_array($result))
	{
		$returnresult[$i++] = $row;
	}
    mysql_close($connection); 
    return $returnresult; 
	}
		
} 
?> 