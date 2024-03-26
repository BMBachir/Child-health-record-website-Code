<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier l'enfant </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">

			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prénom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
					</div>
				</div>
				<!--***************************************************************************-->
				<div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Date:</label>
					</div>

					<div class="col-sm-10">
					<input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>" >
					</div>

			   </div>
			  
			   <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Sexe:</label>
					</div>

					<div class="col-sm-10">
					  <select name="sexe" id="sexe" class="form-control" value="<?php echo $row['sexe']; ?>">
                      <option value="">Sexe</option>
                      <option >Homme</option>
                      <option >Femme</option>
                      </select> 
					</div>

			   </div>

			   <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Commune:</label>
					</div>

					<div class="col-sm-10">
					<input type="text" name="commune" class="form-control" value="<?php echo $row['commune']; ?>" > 
					</div>

			   </div>

			   <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Willaya:</label>
					</div>

					<div class="col-sm-10">
					<input type="text" name="wilaya" class="form-control " value="<?php echo $row['wilaya']; ?>" >
					</div>

			   </div>

			 <div class="row form-group">
                 
				 <div class="col-sm-2">
					 <label class="control-label modal-label">Rh:</label>
				 </div>

				 <div class="col-sm-10">
				  <select name="rh" id="sexe" class="form-control" value="<?php echo $row['rh']; ?>">
				  <option ></option>  
                  <option >A+</option>
                  <option >B+</option>
				  <option >O+</option>
                  <option >AB+</option>
				  <option >A-</option>
                  <option >B-</option>
				  <option >O-</option>
                  <option >AB-</option>
                 </select>
				 </div>

			 </div>
               
			
				<!--***************************************************************************-->
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer l'enfant</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sûr que vous voulez supprimer</p>
				<h2 class="text-center"><?php echo $row['firstname'].' '.$row['lastname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
            </div>

        </div>
    </div>
</div>