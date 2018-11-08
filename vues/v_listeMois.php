      <h2>Mes fiches de frais</h2>
      <form class="form-inline" action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">   
      <div class="corpsForm">
      <fieldset>	 
        <legend>Mois à sélectionner: </legend>
        <div class="form-group">
        <label for="lstMois">Mois :</label> 
        <select id="lstMois" name="lstMois" class="form-control">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
        <button type="submit" class="btn btn-primary">Rechercher</button>        
       </div>
      </fieldset>	 
      </div>       
      </form>
      