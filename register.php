<?php 
error_reporting(0);
session_start();




include 'config.php';
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) 
		{
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
					$result = mysqli_query($conn, $sql);
					if ($result) 
					{
						echo "<script>alert('Enregistrement de l'utilisateur terminé.')</script>";
						$username = "";
						$email = "";
						$_POST['password'] = "";
						$_POST['cpassword'] = "";
					} 
					else 
					{
						echo "<script>alert('Something Wrong Went.')</script>";
					}
		} 
		else 
		{
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} 
	else 
	{
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>inscription </title>
</head>

<body style=" padding-top:5px ; ">

 <div class="container" >
		<form action="" method="POST" class="login-email" >
            <p class="login-text" style=" font-weight: 750; font-size: 1.65rem;">S'INSCRIRE</p>
			<div class="input-group">
				<input type="text" placeholder="Nom d'utilisateur" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Mot de passe " name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirmez le mot de passe" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">S'inscrire</button>
			</div>
			<p class="login-register-text"> Tu as un compte ?  <a href="index.php">Connectez-vous ici</a>.</p>
		</form>
	</div>
</body>
</html>