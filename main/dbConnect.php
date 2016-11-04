<?php  
	$dbhost = "localhost";
	$dbuser = "kenny";
	$dbpass = "password";
	$dbname = "webAppDb";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


	function freeResult($result){
		mysqli_free_result($result);
	}

	function closeConn(){
		mysqli_close($GLOBALS['$connection']);
	}

 ?>
