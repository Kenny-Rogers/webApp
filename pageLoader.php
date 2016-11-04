<?php 	session_start();
	$accType=$_SESSION['accType'];
	//$membId=$_SESSION['Memberid'];
	$accType='associate';
	$_SESSION['MemberId']=5;
	$_SESSION['accType']='associate';
	$menu="";
	switch ($accType) {
		case 'admin':
			# code...
			break;
		
		case 'partner':
			# code...
			break;

		case 'associate':
			include('components/pageLoader/assocLoader.php');
			$menu='components/menu/associateMenu.php';
			break;

		default:
			//TODO: take you back to login
			# code...
			break;
	}
?>
