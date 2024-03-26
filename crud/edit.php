<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$date = $_POST['date'];
		$sexe = $_POST['sexe'];
		$commune = $_POST['commune'];
		$wilaya = $_POST['wilaya'];
		$rh = $_POST['rh'];
		

		$sql = "UPDATE enfant SET firstname = '$firstname', lastname = '$lastname', address = '$address', date = '$date', sexe = '$sexe', commune = '$commune', wilaya = '$wilaya', rh = '$rh' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>