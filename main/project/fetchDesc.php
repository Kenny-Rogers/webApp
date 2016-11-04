<?php  
	session_start();
	$id=$_GET['q']; 

	if($id>0){
			//fetching PROJECTNAME, TYPENAME, DEADLINE 
			//based on the selected ProjectRequestId  
			include('../dbConnect.php');
			$sql="SELECT ProjectName FROM Project WHERE ProjectRequestId=$id";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pName = $result['ProjectName'];


			$sql ="SELECT TypeName FROM ProjectType WHERE PTypeId=(SELECT pTypeID FROM ProjectRequest WHERE ProjectRequestId=$id)";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pType= $result['TypeName'];

			$sql = "SELECT Deadline FROM ProjectRequest WHERE ProjectRequestId =$id";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pDead = $result['Deadline'];

		?>
		<section id="introduction">
  			<h2 class="page-header"><a href="#introduction">Project Information</a></h2>
			  <p class="lead">
			    <b>Project Name: </b><?php echo $pName; ?><br>
			    <b>Project Type: </b><?php echo $pType; ?><br>
			    <b>Project Deadline: </b><?php echo $pDead; ?><br>
			  </p>
		</section><!-- /#introduction -->
		<?php 
			//Fetching the descriptions based on the account type
			$accType=$_SESSION['accType'];
			$sql ="SELECT Description, Date FROM ProjectDescription WHERE ProjectRequestId=$id ";

			 if($accType== "associate"){
			  	$sql .= "ORDER BY DescriptionID DESC LIMIT 1";
			  }
			 
			$data = mysqli_query($connection, $sql);
			//ERROR:$result = mysqli_fetch_assoc($data) had being called already 
		 	while($result = mysqli_fetch_assoc($data)){
	 	 ?>
			<section id="introduction">
	  			<h2 class="page-header"><a href="#introduction">Description</a></h2>
	  			<?php if($accType!="associate"){?>
	  				<br><p class="lead"><b>Date Specified: </b><?php echo $result['Date']; ?><br></p>
	  			<?php } ?>
				  <p class="lead"> <?php echo $result['Description']; ?> </p>
			</section>
		<?php } ?>

		<?php 
			if($accType== "associate"){
			  	$sql ="SELECT FirstName,Lastname,Email,Contact FROM Client WHERE ClientID= (SELECT CreatorID FROM ProjectRequest WHERE ProjectRequestId= $id) ";
			  	$data = mysqli_query($connection, $sql);
			  	$result =mysqli_fetch_assoc($data);
				$name = $result['FirstName'] ." ".$result['Lastname'];
				$contact = $result['Contact'];
				$email = $result['Email'];			  
		?>
		<!-- /#introduction -->
		<section id="introduction">
  			<h2 class="page-header"><a href="#introduction">Client Information</a></h2>
			  <p class="lead">
			   <b>Name: </b><?php echo $name; ?><br>
			    <b>Contact : </b><?php echo $contact; ?><br>
			    <b>Email: </b><?php echo $email; ?><br>
			  </p>
		</section><!-- /#introduction --><?php } ?>
<?php }else{ echo " <br><big><b>Please Choose A Project</b></big>"; } ?>
