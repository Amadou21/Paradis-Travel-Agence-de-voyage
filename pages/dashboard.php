<?php
    if(!isset($_COOKIE['login'])){
        header('Location:connexion.php');
        exit();
    }
    require('../script/connexion_bd.php');

    $query=$bdd->prepare('SELECT * FROM user WHERE `login`=?');
    $query->execute(array($_COOKIE['login']));
    if(!($currentUser=$query->fetch())){
        header('Location:connexion.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="../style/css/dashboard.css">
    <script src="../lib/js/jquery-3.6.0.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="main">
        <header class="first_header">
            <a href="../index.php">
                <img src="../res/images/logo.jpg" alt="">
            </a>
            <h2><?php echo($currentUser['nom']. ' '. $currentUser['prenom']) ?></h2>
            <a href="connexion.php">
                <i class="fa fa-sign-out-alt"></i>
            </a>
        </header>

        <div>
            <?php 
            $query=$bdd->query('SELECT * FROM infoSystem');
            $res=$query->fetch();

            $instagram='';
            $facebook='';
            $snapchat='';
            $whatsapp='';
            if(isset($res['instagram']) && ! is_null($res['instagram'])){
                $instagram=$res['instagram'];
            }
            if(isset($res['facebook']) && ! is_null($res['facebook'])){
                $facebook=$res['facebook'];
            }
            if(isset($res['snapchat']) && ! is_null($res['snapchat'])){
                $snapchat=$res['snapchat'];
            }
            if(isset($res['whatsapp']) && ! is_null($res['whatsapp'])){
                $whatsapp=$res['whatsapp'];
            }
            ?>
            <h3 style="color:white">
                Telephone: <span><?php echo($res['tel']) ?></span>
                <br>
                email: <span><?php echo($res['email'])?></span> 
            </h3>

            <div class="icone_main_zone">
                <div class="icone_zone">
                    <a href="<?php echo($res['facebook']) ?>"> <i class=" fab fa-facebook-messenger"></i></a>
                    <a href="<?php echo($res['instagram']) ?>"> <i class=" fab fa-instagram"></i></a>
                    <a href="<?php echo($res['snapchat']) ?>"> <i class=" fab fa-snapchat-ghost"></i></a>       
                    <a href="<?php echo($res['whatsapp']) ?>"> <i class=" fab fa-whatsapp"></i></a>       
                </div>  
            </div>

            <p style="margin-top: 20px;">
                <a href="modifierInfo.php" id="btn_modifier">modifier <i class="fa fa-pen"></i></a>
            </p>
        </div>

        <div class="information_main_zone">
            <div class="information_zone nombreVisite">
                <i class="fa fa-eye"></i>
                <p class="value"></p>
                <p class="nom_statistique">Visite</p>
            </div>

            <div class="information_zone nombreInteraction">
                <i class="fa fa-hand-pointer"></i>
                <p class="value"></p>
                <p class="nom_statistique">Interaction</p>
            </div>

            <div class="information_zone nombreMail">
                <i class="fa fa-envelope"></i>
                <p class="value"></p>
                <p class="nom_statistique">Mails recus</p>
            </div>

            <div class="information_zone nombreEmailSender">
                <i class="fab fa-telegram"></i>
                <p class="value"></p>
                <p class="nom_statistique">Email pour newsletter</p>
            </div>

            <div class="information_zone">
                <i class="fa fa-pen"></i>
                <p class="nombreAction">--</p>
                <p class="nom_statistique">Nombre modifications</p>
            </div>
            
            <div class="information_zone nombreUser">
                <i class="fa fa-user"></i>
                <p class="value"></p>
                <p class="nom_statistique">Nombre utilisateurs</p>
            </div>
        </div>

        <div class="statistique_visite">

            <h3>Nombre visite par pages</h3>

            <?php
            $query=$bdd->query('SELECT *  FROM `visite` ');
            $existe=0;
            while($res=$query->fetch()){
                $existe=1;
            ?>
                <div class="visite_main_zone">
                    <i class="fa fa-file"></i>
                    <div>
                        <h4 class="nom_page"><?php echo($res['nomPage']) ?></h4>
                        <h5>Last visite:  <span class="date_visite"><?php echo($res['date']) ?></span></h5>
                        <h3><?php echo($res['nombreVisite']) ?></h3>
                    </div>
                </div>
            <?php
            }
            if($existe==0){
                echo('<h3>Aucune visite effectuee pour le moment</h3>');
            }
            ?>

        </div>
        
        <div class="statistique_visite statistique_message">
            
            <h3>Vos messages recues</h3>

            <?php
            $query=$bdd->query('SELECT *  FROM `message`, messageSender WHERE `message`.id_messageSender=messageSender.idMessageSender ORDER BY idMessage DESC');
            $existe=0;
            while($res=$query->fetch()){
                $existe=1;
                $nom='';
                $tel='';
                $email='';
                if(isset($res['nom'])){
                    $nom=$res['nom'];
                }
                if(isset($res['tel'])){
                    $tel=$res['tel'];
                }
                if(isset($res['email'])){
                    $email=$res['email'];
                }
            ?>
                <div class="visite_main_zone">
                    <div>
                        
                        <h4 class="nom_page">Message de: <?php echo($nom) ?></h4>
                        <h5>Email:  <span class="date_visite"><?php echo($tel) ?></span></h5>
                        <h5>Tel:  <span class="date_visite"><?php echo($email) ?></span></h5>
                        <h3>The message:</h3>
                        <p class="date_visite">
                        <?php echo(nl2br($res['contenue'])); ?>
                        </p>
                        <p align="right">
                        <?php echo($res['date']) ?>
                        </p>
                    </div>
                </div>

            <?php
            }
            if($existe==0){
                echo('<h3>Aucun mail de recu pour le moment</h3>');
            }
            ?>

        </div>
        
        <div class="statistique_visite statistique_modification">
            <h3>Vos modifications effectuees</h3>
        </div>
        
    </div>
    <script src="../style/js/dashboard.js"></script>
</body>
</html>