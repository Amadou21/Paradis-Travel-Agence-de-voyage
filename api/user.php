<?php
    require('../class/User.php');
    require('../script/connexion_bd.php');

    try{
        if(isset($_POST['eq'])){
            if($_POST['eq']==1){
                if(isset($_POST['login'])){
                    $user=new User($_COOKIE['login'], $bdd);
                    if($user->existe){
                        $response[] = array(
                            "idUser"=>$user->idUser,
                            "nom"=>$user->nom,
                            "prenom"=>$user->prenom,
                            "login"=>$user->login,
                            "motDePasse"=>$user->motDePasse,
                            "role"=>$user->role
                        );
                        echo(json_encode($response));
                        header('HTTP/1.1 200 Ok');
                    }
                    else{
                        header('HTTP/1.1 404 User introuvable');
                    }
                }
                else{
                    header('HTTP/1.1 404 Inconnue');
                }
            }
            else{
                header('HTTP/1.1 Action non reconnue');
            }   
        }
        else{
            die(header('HTTP/1.1 404 parametre non saisie'));
        }
    }
    catch(Exception $e){
        die(header('HTTP/1.1 500 Erreur survenue'));
    }
?>