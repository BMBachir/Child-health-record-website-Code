
<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['id_']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer </h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sur que vous voulez supprimer</p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <a href="delete_.php?id=<?php echo $row['id_']; ?>&idEnfant=<?php echo $idEnfant; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
            </div>

        </div>
    </div>
</div>