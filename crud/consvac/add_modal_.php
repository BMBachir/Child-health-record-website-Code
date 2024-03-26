<!-- Add New -->
<div class="modal fade" id="addnew_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter</h4></center>
            </div>
            <div class="modal-body">
			  <div class="container-fluid">
			     <form method="POST" action="add_.php" id="form">


               <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Date:</label>
					</div>

					<div class="col-sm-10">
					<input type="date" class="form-control" name="date_" id="date_"  >
					</div>

			   </div>
			  
			   <div class="row form-group">
                 
				 <div class="col-sm-2">
					 <label class="control-label modal-label">Consultation:</label>
				 </div>

				 <div class="col-sm-10">
				 <textarea class="form-control" name="consultation_" rows="7"  ></textarea>
				 </div>

			</div> 

			
			<div class="col-sm-10">
					    <input type="hidden" class="form-control" name="id_enfant" value="<?php echo $idenfant; ?>" id="id_enfant" >
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