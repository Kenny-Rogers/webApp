<?php
	session_start();
	include("../dbConnect.php");
	$sendId=$_SESSION['MemberId'];
	$receiverId=$_POST['recieverId'];
	$title=$_POST['title'];
	$mess=$_POST['message'];
	date_default_timezone_set('Africa/Accra');
	$date=date('Y/m/d');
	$time=date('H:i:s', time());

	$sql="INSERT INTO Communication(title, message, receiverId, senderId, commDate, commTime) 
		VALUES('$title', '$mess', '$receiverId', '$sendId', '$date' , '$time')";
		//echo "$sql";
	$data=mysqli_query($connection, $sql);
	 if($data){
	 	header("location:../../starter.php?page=compMess&code=1");
	 }else{
	 	header("location:../../starter.php?page=compMess&code=2");
	 }
?>