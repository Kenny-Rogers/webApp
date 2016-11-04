<?php 
	session_start();
	$projectID=$_GET['q'];
	include('../dbConnect.php');
	$sql = "SELECT Link,ResourceName,ResourceType,ResourceDescription FROM ProjectResource WHERE ProjectID = $projectID ";
	$data = mysqli_query($connection, $sql);
	while($result = mysqli_fetch_assoc($data)){ 
			$link = $result['Link'];
			$rName = $result['ResourceName'];
			$rType = $result['ResourceType'];
			$rDesc = $result['ResourceDescription'];
		?>

		<!-- /#introduction -->
		<section id="introduction">
  			<h2 class="page-header"><a href="#introduction">Resource Links</a></h2>
			  <p class="lead">
			   <b>Name: </b><?php echo $rName; ?><br>
			    <b>Type : </b><?php echo $rType; ?><br>
			    <b>Description: </b><?php echo $rDesc; ?><br>
			    <b>Link: </b><?php echo "<a href='$link'> $link</a>" ; ?><b>

			  </p>
		</section><!-- /#introduction -->

	<?php } ?>

