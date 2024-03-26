<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter Un Enfant</h4></center>
            </div>
            <div class="modal-body">
			  <div class="container-fluid">
			     <form method="POST" action="add.php">

				 <div class="row form-group">

					<div class="col-sm-2">
						<label class="control-label modal-label">Prénom:</label>
					</div>

					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" required>
					</div>

				 </div>

				 <div class="row form-group">

					<div class="col-sm-2">
						<label class="control-label modal-label">Nom :</label>
					</div>

					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" required>
					</div>

			     </div>

				 <div class="row form-group">

					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>

					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" required>
					</div>

				</div>

               <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Date:</label>
					</div>

					<div class="col-sm-10">
					<input type="date" class="form-control" name="date" id="date"  >
					</div>

			   </div>
			  
			   <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Sexe:</label>
					</div>

					<div class="col-sm-10">
					  <select name="sexe" id="sexe" class="form-control">
                      <option></option>
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
					<input type="text" name="commune" class="form-control" id="commune" > 
					</div>

			   </div>

			   <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Willaya:</label>
					</div>

					<div class="col-sm-10">
					<input type="text" name="wilaya" class="form-control " id="wilaya" >
					</div>

			   </div>

			 <div class="row form-group">
                 
				 <div class="col-sm-2">
					 <label class="control-label modal-label">Rh:</label>
				 </div>

				 <div class="col-sm-10">
				  <select name="rh" id="sexe" class="form-control">
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
               
		
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk "></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>