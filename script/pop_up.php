<?php
    if(isset($_GET['e'])){
        if($_GET['e']==1){
?>
            <h1 class="pop_up">ancien mot de passe incorrecte</h1>
<?php
        }
        elseif($_GET['e']==2){
?>
            <h1 class="pop_up">Veuillez remplir le formulaire</h1>
<?php
        }
        elseif($_GET['e']==3){
?>
            <h1 class="pop_up">Mot de passe ou login incorrecte</h1>
<?php
        }
        elseif($_GET['e']==4){
?>
            <h1 class="pop_up">Une erreur est survenue</h1>
<?php
        }elseif($_GET['e']==5){
?>
            <h1 class="pop_up">E-mail incorrecte.Il se peut que vous n'avez pas enregistrer d'adresse e-mail en tant que login pour votre compte. Si c'est le cas, contactez notre service client pour regler ce probleme.</h1>
<?php
        }
        elseif($_GET['e']==6){
?>
            <h1 class="pop_up">Un code a 6 chiffres a ete envoyer a votre email <?php echo($_COOKIE['email']); ?> . Saisissez le. N'hesitez pas a verifier vos spams.</h1>
<?php
        }
        elseif($_GET['e']==7){
?>
            <h1 class="pop_up">Code incorrecte. le code a ete envoyer a votre email <?php echo($_COOKIE['email']); ?></h1>
<?php
        }
        elseif($_GET['e']==8){
?>
            <h1 class="pop_up">Saisissez votre nouveau mot de passe</h1>
<?php
        }
        elseif($_GET['e']==9){
?>
            <h1 class="pop_up">Aucun produit n'a ete selectionner</h1>
<?php
        }
        elseif($_GET['e']==10){
?>
            <h1 class="pop_up">Produit modifier avec succes</h1>
<?php
        }
        elseif($_GET['e']==11){
?>
            <h1 class="pop_up">Format de fichier incorrecte</h1>
<?php
        }elseif($_GET['e']==12){
?>
            <h1 class="pop_up">Produit ajouter avec succes</h1>
<?php
        }elseif($_GET['e']==13){
?>
            <h1 class="pop_up">Vous avez atteint votre limite de publication. Pensez a renouveller votre abonnement pour beneficier du plus de publications.</h1>
<?php
        }elseif($_GET['e']==14){
?>
            <h1 class="pop_up">Magasin modifier avec succes</h1>
<?php
        }elseif($_GET['e']==15){
?>
            <h1 class="pop_up">Abonnement renouveller</h1>
<?php
        }elseif($_GET['e']==16){
?>
            <h1 class="pop_up">Login incorrecte</h1>
<?php
        }elseif($_GET['e']==17){
?>
            <h1 class="pop_up">Merci. Nous avons bien recu votre message</h1>
<?php
        }elseif($_GET['e']==18){
?>
            <h1 class="pop_up">Magasin ajouter avec succes</h1>
<?php
        }elseif($_GET['e']==19){
?>
            <h1 class="pop_up">Les 2 codes ne sont pas les meme. Veuillez reprendre</h1>
<?php
        }elseif($_GET['e']==20){
?>
            <h1 class="pop_up">Cet utilisateur existe deja. Connectez vous</h1>
<?php
        }elseif($_GET['e']==21){
?>
                <h1 class="pop_up">Un code a 6 chiffres a ete envoyer a votre email <?php echo($_COOKIE['email_inscription']); ?> . Saisissez le. . Saisissez le. N'hesitez pas a verifier vos spams.</h1>
<?php
        }elseif($_GET['e']==22){
?>
                <h1 class="pop_up">Code incorrecte. le code a ete envoyer a votre email <?php echo($_COOKIE['email_inscription']); ?></h1>
<?php
        }elseif($_GET['e']==23){
?>
                <h1 class="pop_up">Envoyer</h1>
<?php
        }elseif($_GET['e']==24){
?>
                <h1 class="pop_up">Le login du vendeur est incorrecte. Suppression impossible!</h1>
<?php
        }elseif($_GET['e']==25){
?>
                <h1 class="pop_up">Demandez dabord au vendeur de se connecter et de supprimer les produits de ce magasin.</h1>
<?php
        }elseif($_GET['e']==26){
?>
                <h1 class="pop_up">Magasin supprimer avec succes.</h1>
<?php
        }elseif($_GET['e']==27){
?>
                <h1 class="pop_up">Categorie incorrecte.</h1>
<?php
        }
    }
?>