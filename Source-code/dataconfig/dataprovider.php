<?php 
	define("HOSTNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DATABASE", "tapdoc");

class DataProvider  
{ 

	
  public static function ExecuteQuery($sql) 
  { 
    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) or 
      	die ("couldn't connect to localhost"); 
 
         
    mysqli_query($connection,"set names 'utf8'"); 
     
    $result = mysqli_query($connection,$sql); 
     
    mysqli_close($connection); 
     
    return $result; 
  }
  
  public static function ExecuteQueryArray($sql) 
  { 
    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) or 
      	die ("couldn't connect to localhost");
 
         
    mysqli_query($connection,"set names 'utf8'"); 
	
	$kq = mysqli_fetch_array($sql);
     
    mysqli_close($connection); 
     
    return $kq; 
  }  
  
  public static function GetOneRow($sql)
  {
    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) or 
      	die ("couldn't connect to localhost");
         
    mysqli_query($connection,"set names 'utf8'"); 
     
    $result = mysqli_query($connection,$sql); 
	$row = mysqli_fetch_array($result);
     
    mysqli_close($connection); 
     
    return $row; 
  }
  
  public static function GetRows($sql)
  {
	$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) or 
      	die ("couldn't connect to localhost"); 
         
    mysqli_query($connection,"set names 'utf8'"); 
    
    $result = mysqli_query($connection,$sql);
	$i = 0;
	$returnresult = NULL;
	while ($row = mysqli_fetch_array($result))
	{
		$returnresult[$i++] = $row;
	}
		mysqli_close($connection); 
		return $returnresult; 
	}

	public static function NumRows($sql)
	{
		$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) or 
      	die ("couldn't connect to localhost");
         
    mysqli_query($connection,"set names 'utf8'"); 
     
    $result = mysqli_query($connection,$sql); 
	$row = mysqli_num_rows($result);
     
    mysqli_close($connection); 
     
    return $row; 
	}	
} 
?> 