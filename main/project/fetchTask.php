<?php 
	session_start();
	$projectID=$_GET['q'];
	$memberID = $_SESSION['MemberId'];
	include('../dbConnect.php');
	$sql = "SELECT Role,Deadline,RoleDescription FROM ProjectMember WHERE ProjectID=$projectID AND MemberId= $memberID";
	$data = mysqli_query($connection, $sql);
	$result = mysqli_fetch_assoc($data);

	$role = $result['Role'];
	$deadline = $result['Deadline'];
	$description = $result['RoleDescription'];

?>

	<!-- /#introduction -->
		<section id="introduction">
  			<h2 class="page-header"><a href="#introduction">Task Breakdown</a></h2>
			  <p class="lead">
			   <b>Role: </b><?php echo $role; ?><br>
			    <b>Deadline : </b><?php echo $deadline; ?><br>
			    <b>Role Description: </b><?php echo $description; ?><br>
			  </p>
		</section><!-- /#introduction -->