<div class="row">
               
    <div class ="col-md-12 col-md-offset-2" id="contenu">
<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      <form class="form-vertical" method="POST" action="index.php?uc=connexion&action=valideConnexion">
         <fieldset>
             <legend>Veuillez vous identifier:</legend>
   	 <div class="form-group"> 	
         <label for="nom">Login*</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control"  id="login" type="text" name="login"  size="30" maxlength="45" placeholder="login">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="mdp">Mot de passe*</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="mdp"  type="password"  name="mdp" size="30" maxlength="45" placeholder="mot de passe">
            </div>
         </div>
         </div>
          <button type="submit" class="btn btn-primary">Valider</button>
          <button type="reset" class="btn btn-primary">annuler</button>
         </fieldset>
      </form>

    </div>
</div>