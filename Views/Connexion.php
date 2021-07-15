
<?php ob_start(); ?>
    <form action="index.php?action=connexion" method="post" class="formConnect">
        <div class="champs">
            <div class="champ">
                <div><label for="nom">Adresse e-mail ou mobile</label></div>
                <input type="text" id="nom" name='mail' placeholder="votre login"/>
            </div>
            <div class="champ">
                <div><label for="mdp" >Mot de passe </label></div>
                <input type="password" id="mdp" name='mdp' placeholder="Votre mot de passe" />
                <p>Informations de compte oubliées ? <p>
            </div> 
            
            <div><input type="submit" class='butt' name='submit' value="connexion"></div>
        </div>
        
    </form>

<?php $content =  ob_get_clean(); ?>
<?php require(VIEW.'template.php'); ?>
