<?php
    ob_start();
    require('../script/connexion_bd.php');
    try{
        if(isset($_POST['login']) && isset($_POST['motDePasse'])){
            $login=$_POST['login'];
            $motDePasse=$_POST['motDePasse'];
            $query=$bdd->prepare('SELECT * FROM `user` WHERE `login`=? AND motDePasse=?');
            $query->execute(array($login, $motDePasse));
            if($res=$query->fetch()){
                setcookie('login', $login, time()+3600*24*365, '/');
                header('HTTP/1.1 200 Connexion reussie');
            }
            else{
                header('HTTP/1.1 404 Utilisateur introuvable');
            }
        }
        else{
            die(header('HTTP/1.1 403 Information non saisie'));
        }
    }
    catch(Exception $e){
        die(header("HTTP/1.0 500 Une erreur est survenue"));
    }
    ob_end_flush();
?>