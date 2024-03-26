<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$date = $_POST['date'];
		$sexe = $_POST['sexe'];
		$commune = $_POST['commune'];
		$wilaya = $_POST['wilaya'];
		$rh = $_POST['rh'];
		

		$sql = "INSERT INTO enfant (firstname, lastname, address, date, sexe, commune, wilaya, rh) VALUES ('$firstname', '$lastname', '$address', '$date','$sexe','$commune','$wilaya','$rh')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Membre ajouté avec succès';
		}
		else{
			$_SESSION['error'] = 'Une erreur sest produite lors de lajout';
		}
	}
	else{
		$_SESSION['error'] = 'Remplissez dabord le formulaire dajout';
	}

	header('location: index.php');
?>