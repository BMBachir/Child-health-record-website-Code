<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){

		$date_ = $_POST['date_'];
		$consultation_ = $_POST['consultation_'];
		$idenfant=$_POST['id_enfant'];
	
		

		$sql = "INSERT INTO consultation_enfant (date_, consultation_, idenfant) VALUES ('$date_','$consultation_','$idenfant')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php?id='.$idenfant.'&dateNaiss='.$dateNaiss);
?>