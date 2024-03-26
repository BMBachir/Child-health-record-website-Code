<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
	    $idVaccin = $_GET['id'];
		$id_enfant = $_GET['idEnfant'];
		$dateNaiss = $_GET['dateNaiss'];
		
		$sql = "DELETE FROM VACCIN_ENFANT  WHERE id = '".$idVaccin."'  ";
		////////////////////////////

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member deleted successfully';
		}		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php?id='.$id_enfant.'&dateNaiss='.$dateNaiss);
	
?>
