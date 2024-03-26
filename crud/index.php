<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste D'enfant </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
		body{
			background-image: url(img/19366.jpg);
			background-position: center;
            background-size: cover;
            padding-right:450px;
			
		}
		.page-header {
			color: #2c4964;
            padding-top:50px;
			font-family: "Raleway", sans-serif;
            text-align: center;            
            display: block;
            text-transform: capitalize;
	
			
			
		}
		.container{
			padding-top:50px;
			font-family: "Poppins", sans-serif;
		}
	
		.btn:hover{
			background: #3fbbc0;
		}
		.btn{
			background: #1977cc;
			padding: 10px 20px;
			border: none;
			text-align: center;
			border-radius: 20px;
			color:white;
			font-size:13px;
		
		}

		.row{
			padding-top:10px;
			
		}
		
		#myTable{
			width: 170%;
			font-size:16px
			
		}
		
		tr:nth-child(even) {
  background-color: #edf3fc;
}
	   .glyphicon{
		   color:white;
	   }
	   	
	  
/********************************** */
.topnav.header-scrolled {
  top: 0;
}
.topnav {
  overflow: hidden;
  background: #fff;
  width: 1875px;
  padding: 5px;
  box-shadow: 0px 2px 15px rgba(25, 119, 204, 0.1);
}

.topnav a {
  float: left;
  background: #fff;
  text-align: center;
  padding: 20px 16px  ;
  color: #2c4964;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
	background: #fff;
	color: #2c4964;
}

.topnav a.active {
	background: #fff;
	font-size: 29px;
    letter-spacing: 0.5px;
    text-align: center;
    font-weight: 700;
	padding-left:277px;
	font-family: "Poppins", sans-serif;
}

.topnav a.logout_btn{
  margin-left: 865px;
  margin-top: 25px;
  letter-spacing: 0.3px;
  font-family: "Poppins", sans-serif;
  background: #1977cc;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 15px;
  display: inline-block;

  
}
.topnav a.logout_btn:hover{
	background: #3fbbc0;
  color: #fff;
}

</style>
</head>

<body>
	

<div class="topnav">
  <a class="active" href="http://localhost/carnet/login/welcome.php">CARNET DE SANTE</a>
  <a href="http://localhost/carnet/login/logout.php" class="logout_btn" >Se déconnecter </a>
</div>
	<!--/////////////////////////////////////////////////////-->
<div class="container">
	<h1 class="page-header text-center" style="padding-left:350px"> <b> Liste D'enfant</b></h1>
	<div class="row" >
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			
			</div>

			<div class="row" style="padding-left:15px;" >
			<a href="#addnew" data-toggle="modal" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Ajouter</a>
				
			</div>

			<div class="height10" >
			</div>

			<div class="row1" > 
				<table id="myTable" class="table table-bordered  ">
					<thead>
						<th>ID</th>
						<th>Prénom</th>
						<th>Nom </th>						
						<th>Date</th>
						<th>Sexe</th>
						<th>Willaya</th>
						<th>Rh</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM enfant";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['firstname']."</td>
									<td>".$row['lastname']."</td>
								
									<td>".$row['date']."</td>
									<td>".$row['sexe']."</td>
									
									<td>".$row['wilaya']."</td>
									<td>".$row['rh']."</td>
									<td >
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
										<a href='consvac/index.php?id=".$row['id']."&dateNaiss=".$row['date']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-check'></span> Detail</a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
								
							

							}
					

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div style="padding-left:200px;" class="btn1">
	<a href="http://localhost/carnet/login/welcome.php"  class="btn btn-primary"> <span class="glyphicon glyphicon-chevron-left"></span></a>
				</div>
			
</div>

<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

});
</script>
</body>
</html>