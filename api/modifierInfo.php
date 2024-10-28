<?php
    ob_start();
    require('../script/connexion_bd.php');

    $email='';
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    $tel='';
    if(isset($_POST['tel'])){
        $tel=$_POST['tel'];
    }
    $instagram='';
    if(isset($_POST['instagram'])){
        $instagram=$_POST['instagram'];
    }
    $facebook='';
    if(isset($_POST['facebook'])){
        $facebook=$_POST['facebook'];
    }
    $snapchat='';
    if(isset($_POST['snapchat'])){
        $snapchat=$_POST['snapchat'];
    }
    $whatsapp='';
    if(isset($_POST['whatsapp'])){
        $whatsapp=$_POST['whatsapp'];
    }
    $lieu='';
    if(isset($_POST['lieu'])){
        $lieu=$_POST['lieu'];
    }
    try{
        $query=$bdd->query('SELECT idInfoSystem FROM infoSystem ORDER BY idInfoSystem DESC');
        $res=$query->fetch();

        $query=$bdd->prepare('UPDATE infoSystem SET email=?, tel=?, instagram=?, facebook=?, snapchat=?, whatsapp=?, lieu=? WHERE idInfoSystem=?');
        $query->execute(array($email, $tel, $instagram, $facebook, $snapchat, $whatsapp, $lieu, $res['idInfoSystem']));

        $query=$bdd->prepare('INSERT INTO `action` (contenue) VALUES (?)');
        $contenue="Modification des informations de contact";
        $query->execute(array($contenue));

        header('HTTP/1.1 200 OK');
    }
    catch(Exception $e){
        die(header('HTTP/1.1 500 Une erreur est survenue'));
    }
?>