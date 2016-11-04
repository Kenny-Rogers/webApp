<?php 
	session_start();
	include("../dbConnect.php");
	$email=$_POST['mail'];
	$pass=$_POST['password'];
	$membId=$_SESSION['MemberId'];

	if($email=='' && $pass==''){
		header("location:../../starter.php?page=accInfo");
	}elseif ($email!='' && $pass=='') {
		$sql="UPDATE Member SET Email='$email' WHERE MemberID=$membId";
	}elseif ($email=='' && $pass!='') {
		$sql="UPDATE Member SET Password='$pass' WHERE MemberID=$membId";
	}else {
		$sql="UPDATE Member SET Email='$email', Password='$pass' 
	    	WHERE MemberID=$membId";
	}
		$data=mysqli_query($connection, $sql);

	if($data){
		header("location: ../../starter.php?page=accInfo&code=1");
	}else{
		header("location: ../../starter.php?page=bestP&code=2");
	}
?>