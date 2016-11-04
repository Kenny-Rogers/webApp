<div class="content body">
<?php
	include('main/dbConnect.php');
	$membId=$_SESSION['MemberId'];
	
	
	//$value=0;
	//fetching projectId from ProjectMember Based on memberId
	$sql="SELECT ProjectId FROM ProjectMember WHERE memberId=$membId";
	$data=mysqli_query($connection, $sql);
	
	//IF the number of rows returned is more or equal to 1
	//use the each projectId to verify the status of the project
	//and display the name of the project
	//ELSE  display no data found
	if(mysqli_num_rows($data)>=1){ ?>
		<select onchange="ajaxFunction1(this.value,'main/project/fetchDesc.php','desc')">
			<option value="-1">------Choose A Project--------</option>
		<?php while ($result=mysqli_fetch_assoc($data)) {
				$id=$result['ProjectId'];
				 $query="SELECT * FROM Project WHERE ProjectId=$id AND ProjectStatus LIKE '%Active%'";
				$data1=mysqli_query($connection, $query);
					if(mysqli_num_rows($data1)>=1){		
?>
							<?php while ($result=mysqli_fetch_assoc($data1)) {?>
								<option value="<?php echo $result['ProjectRequestID']; ?>"><?php echo $result['ProjectName']; ?></option>
							<?php } ?>
<?php 				}
		}
	echo "</select>";
	}else{ ?>
		<big> No Data Found</big>
<?php } ?>
<div id="desc">
</div>
</div>
