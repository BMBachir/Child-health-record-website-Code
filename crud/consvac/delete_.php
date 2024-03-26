<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$idenfant = $_GET['idEnfant'];
		
		$sql = "DELETE FROM consultation_enfant WHERE id_ = '".$_GET['id']."' ";
		
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

	header('location: index.php?id='.$idenfant.'&dateNaiss='.$dateNaiss);
?>