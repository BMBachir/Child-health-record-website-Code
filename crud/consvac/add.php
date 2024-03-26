<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$vaccin = $_POST['vaccin'];
		$date = $_POST['date'];
		$id_enfant=$_POST['id_enfant'];
		$dateNaiss = $_POST['dateNaiss'];

		$sql = "INSERT INTO VACCIN_ENFANT (vaccin,idenfant,date) VALUES ('$vaccin','$id_enfant','$date') " ;
		

		//use for MySQLi OOP
		if($conn->query($sql)){
			
			$_SESSION['success'] = 'Member added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php?id='.$id_enfant.'&dateNaiss='.$dateNaiss);
?>