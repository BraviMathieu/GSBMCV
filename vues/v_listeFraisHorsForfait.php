<?php  
if (!empty($lesFraisHorsForfait)) {
?>	
<table class="table table-bordered">
     <caption>Eléments hors forfait saisis :
      </caption>
      <thead>
             <tr>
                <th class="date">Date</th>
		<th class="libelle">Libellé</th>  
                <th class="montant">Montant</th>  
                <th class="action">&nbsp;</th>              
             </tr>
       </thead>  
       <tbody>
    <?php    
	    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
		{
			$libelle = $unFraisHorsForfait['libelle'];
			$date = $unFraisHorsForfait['date'];
			$montant=$unFraisHorsForfait['montant'];
			$id = $unFraisHorsForfait['id'];
	?>		
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');"><button type="button" class="btn btn-primary">Supprimer ce frais</button> </a></td>
             </tr>
	<?php		 
          
          }
	?>	  
     </tbody>                                     
    </table>
     <?php 
     }
     else {
         echo "<strong>Vous n'avez pas encore saisi d'élément hors forfait pour ce mois.</strong>";
     }
		?>
<br><br>
      <form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post">
      <div class="corpsForm">
         
          <fieldset>
            <legend>Ajouter un élément hors forfait
            </legend>
            <p>
              <label for="dateFrais">Date (jj/mm/aaaa): </label>
              <input type="text" id="dateFrais" name="dateFrais" size="10" maxlength="10" value=""  />
            </p>
            <p>
              <label for="libelle">Libellé</label>
              <input type="text" id="libelle" name="libelle" size="70" maxlength="256" value="" />
            </p>
            <p>
              <label for="montant">Montant : </label>
              <input type="text" id="montant" name="montant" size="10" maxlength="10" value="" />
            </p>
          </fieldset>
<?php 
    if (isset($_REQUEST['erreurs'])&& $_REQUEST['erreurForm']=="HorsForfait") 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      </div>
      <div class="piedForm">
      <p>          
         <button type="submit" class="btn btn-primary">Valider</button>
         <button type="reset" class="btn btn-primary">Annuler</button>
      </p> 
      </div>
        
      </form>
  </div>
  

