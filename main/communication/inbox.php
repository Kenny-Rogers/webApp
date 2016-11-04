<?php
	include('main/dbConnect.php');
	$id=$_SESSION['MemberId'];

	$sql="SELECT m.FirstName, m.LastName, c.title, c.message, c.commDate, c.commTime 
		 FROM Member m 
		 JOIN Communication c 
		 ON c.senderId = m.MemberID 
		 WHERE receiverId='$id'";

	$data=mysqli_query($connection,$sql);
	while($result=mysqli_fetch_assoc($data)){
?>
	<label ><?php echo "Senders Name: ".$result['FirstName']." ".$result['LastName']; ?></label><br>
	<label ><?php echo "Title: ".$result['title'] ?></label><br>
	<label ><?php echo "Message:".$result['message']; ?></label><br>
	<label ><?php echo "Date: ".$result['commDate']; ?></label><br>
	<label ><?php echo "Time:".$result['commTime']; ?></label><br><br>
<?php
	}
?>