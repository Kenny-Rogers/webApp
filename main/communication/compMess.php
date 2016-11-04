<?php 
	$code=$_GET['code'];
	if($code==1){
		echo "Message Sent successfully";
	}else{
		echo "Message Sending Unsuccessfully";
	}

	include("main/dbConnect.php"); 
	$id= $_SESSION['MemberId'];
	$sql ="SELECT FirstName, LastName, MemberId FROM Member WHERE AccountStatus='Active' AND MemberId !='$id'";
	$data = mysqli_query($connection,$sql);
	//$result = mysqli_fetch_assoc($data);
	//echo $sql;
?>

<form method="post" action="main/communication/compMessAction.php">
	<select name="recieverId"><?php while ($result=mysqli_fetch_assoc($data)) {
		 $receiptId=$result['MemberId'];
		 	$name=$result['FirstName']." ".$result['LastName'];
		echo "<option value='$receiptId'>$name</option>";
	}
	?>
	</select>
	<br>
	<input type="text" name="title" placeholder="Title" style="width:600px" />
	<br>
	<textarea name="message" placeholder="Type message" style="height: 400px; width: 600px;"></textarea>
	<br>
	<input type="submit" value="Send" />
</form>

