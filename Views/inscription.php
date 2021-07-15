
<?php $title = "Connexion et inscription"; ?>
<?php ob_start(); ?>
    <script src= "ASSET.'Deco.js'"></script> 
    <div class="insConn">
        <?php include "connexion.php" ?>
        <div class="insc">
            <h1>Inscription</h1>
            <h2>C'est gratuit (et ça le restera toujours) <h2>
            <form action="index.php?action=createUser" method="post">
                
                <div class="chmp">
                    <input type="text" class="prenom" name="prenom" placeholder="Prénom" />
                    
                    <input type="text" class="nom" name="nom" placeholder="Nom de famille" required />
                   
                </div>
                <div class="champ">
                    <input type="email" class="pseudo" name="mail" placeholder="Numéro de mobile ou email" required />
                </div>
                <div class="champ">
                    <input type="email" class="pseudo" name="mail2" placeholder="Confirmer numéro de mobile ou email" required />
                </div>
                <div class="champ">
                    <input type="password" class="mdp" name="mdp" placeholder="Nouveau mot de passe" required/>
                </div>
                <div>
                    <p>Date de naissance</p>
                    <div class='dat'>
                        <p>pourquoi indiquer ma date de naissance?</p>
                        <input type="date" placeholder="jour"  name="dateNaiss"/> 
                    </div>
                </div>
                <div style="margin-top: 20px;">
                    <input type="radio" class="femme" name="sexe" value="oui" id="femme"/>
                    <label for="femme" >Femme</label>
                    <input type="radio" class="homme" name="sexe" value="non" id="homme" checked/>
                    <label for="homme" >Homme</label>
                </div>
                <button type="submit" class="submit" name="submit"id="submit" onclick="changeColor()">inscription</button>
            </form>
            
    <div>
    <script>
        function changeColor() {
        document.getElementById("submit").style.backgroundColor = "lightblue";
        }
    </script>
<?php $content =  ob_get_clean(); ?>
<?php require(VIEW.'template.php'); ?>