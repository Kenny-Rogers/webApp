<?php 
	include("main/dbConnect.php");
	$memberID = $_SESSION['MemberId'];
	$sql = "SELECT FirstName, LastName, MiddleName, Email, Password, Speciality FROM Member WHERE MemberID= $memberID";
	// echo $sql;
	$data = mysqli_query($connection, $sql);
	$result = mysqli_fetch_assoc($data);
	 
	$code=$_GET['code'];
	if($code==1){
			$status="Update successfull";
	}elseif($code==2){
		$status="Update failed";
	}

?>
	<span><?php echo $status; ?></span>
	<form action="main/account/infoUpdate.php" method="POST">
	<ul>	
		<li>Full Name: </li><label name="name"><?php echo $result['FirstName']." ".$result['MiddleName'] ." ".$result['LastName']; ?></label>
		<br>
		<li>Email: </li><input type="text" name="mail" value="<?php echo $result['Email']; ?>"></input>
		<br>
		<li>Role</li><label name="name"><?php echo $result['Speciality']; ?></label>
		<br>
		<li>Password</li><input type="text" name="password" value="<?php echo $result['Password']; ?>"></input> 
	</ul>
	<input type="submit" value="Update Information"></input>
	</form>