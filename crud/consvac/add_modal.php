<?php
 	include_once('age.php'); 
	$age = calculAge($dateNaiss);

    $tabVaccin = [
        "1" => false,
        "2" => false,
        "3" => false,
        "4" => false,
        "5" => false,
        "6" => false,
        "7" => false,
    ];

    $sql = "SELECT vaccin FROM VACCIN_ENFANT WHERE idenfant= ".$idenfant ;
    $query = $conn->query($sql);
    while($row = $query->fetch_array()){
        $tabVaccin[$row['vaccin']] = true;
    }
?>

<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter </h4></center>
            </div>
            <div class="modal-body">
			  <div class="container-fluid">
			     <form method="POST" action="add.php" id="form">
                      
                 <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Date:</label>
					</div>

					<div class="col-sm-10">
					    <input type="date" class="form-control" name="date" id="date" required >
					</div>
                     
                    

                    <div class="col-sm-10">
					    <input type="hidden" class="form-control" name="id_enfant" value="<?php echo $idenfant; ?>" id="id_enfant" >
					</div>

                    <div class="col-sm-10">
					    <input type="hidden" class="form-control" name="dateNaiss" value="<?php echo $dateNaiss; ?>" id="dateNaiss" >
					</div>

			   </div>
               <br>
               <b><h3>Vaccination:</h3></b>
               <br>
               <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Age:</label>
					</div>
                    <div class="col-sm-2">
                    <label name="age" class="control-label modal-label"><?php if ($age ==0) {echo 'Nouveau Née';} else {echo $age.' Mois';} ?></label>
					</div>
					
			   </div>

               <div class="row form-group">
                 
			        <div class="col-sm-2">
						<label class="control-label modal-label">Vaccin:</label>
					</div>

					<div class="col-sm-10">
                        <select name="vaccin" id="vaccin" class="form-control" required>
                            <option>   </option>
                            <?php if($age<=1 || $age>=1  && !$tabVaccin["1"]) { ?> <option value ="1"> BCG-HVB</option> <?php }?>
                            <?php if($age>=2  && !$tabVaccin["2"]) { ?> <option value ="2"> DTC-HIB-HVB-VPO-PNEUMOCOQUE ( 2 MOIS )</option> <?php }?>
                            <?php if($age>=4  && !$tabVaccin["3"]) { ?> <option value ="3"> DTC-HIB-HVB-VPO-PNEUMOCOQUE ( 4 MOIS )</option> <?php }?>
                            <?php if($age>=6  && !$tabVaccin["4"]) { ?> <option value ="4"> DTC-VPO-PNEUMOCOQUE</option> <?php }?>
                            <?php if($age>=12 && !$tabVaccin["5"]) { ?> <option value ="5"> ROR</option> <?php }?>
                            <?php if($age>=18 && !$tabVaccin["6"]) { ?> <option value ="6"> DTC-HIB-VPO</option> <?php }?>
                            <?php if($age>=60 && !$tabVaccin["7"]) { ?> <option value ="7"> DTC-VPO</option> <?php }?>
                      </select> 
					</div>

			   </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" id="btn" name="add" class="btn btn-primary" ><span class="glyphicon glyphicon-floppy-disk "></span> Save</a>
			</form>
            </div>


        </div>
    </div>
    
</div>
