<?php
    if(!isset($_COOKIE['login'])){
        die(header('HTTP/1.1 403 access interdit'));
        exit();
    }
    require('../script/connexion_bd.php');
    try{
        if(isset($_POST['eq'])){
            if($_POST['eq']==1){
                $query=$bdd->query('SELECT * FROM `action` ORDER BY idAction DESC');
                $existe=false;
                while($res=$query->fetch()){
                    $existe=true;
                    $response[]=array(
                        "contenue"=>$res['contenue'],
                        "date"=>$res['date'],
                    );
                }
                if($existe){
                    header('HTTP/1.1 200 Ok');
                    echo(json_encode($response));
                }
                else{
                    die(header('HTTP/1.1 404 Aucune modification'));
                }
            }
            elseif($_POST['eq']==2){
                $query=$bdd->query('SELECT COUNT(*) AS nombre FROM `action`');
                $nombreAction=$query->fetch();
                echo($nombreAction['nombre']);
                header('HTTP/1.1 200 Ok');
            }
            elseif($_POST['eq']==3){
                $query=$bdd->query('SELECT * FROM statistique ORDER BY idStatistique DESC');
                $res=$query->fetch();
                $response[] = array(
                    "nombreVisite"=>$res['nombreVisite'],
                    "nombreInteraction"=>$res['nombreInteraction'],
                );

                echo(json_encode($response));
                header('HTTP/1.1 200 Ok');
            }
            elseif($_POST['eq']==4){
                $query=$bdd->query('SELECT COUNT(*) AS nombre FROM `message`');
                $nombreAction=$query->fetch();
                echo($nombreAction['nombre']);
                header('HTTP/1.1 200 Ok');
            }
            elseif($_POST['eq']==5){
                $query=$bdd->query('SELECT COUNT(*) AS nombre FROM `messageSender` ');
                $res=$query->fetch();
                echo($res['nombre']);
                header('HTTP/1.1 200 Ok');
            }
            elseif($_POST['eq']==5){
                $query=$bdd->query('SELECT COUNT(*) AS nombre FROM `user` ');
                $res=$query->fetch();
                echo($res['nombre']);
                header('HTTP/1.1 200 Ok');
            }
        }
        else{
            die(header('HTTP/1.1 403 parametre non fournie'));
        }
    }
    catch(Exception $e){
        die(header('HTTP/1.1 500 Une erreur est survenue'));
        exit();
    }
?>