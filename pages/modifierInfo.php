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

    $query=$bdd->query('SELECT * FROM infoSystem ORDER BY idInfoSystem DESC');
    if($res=$query->fetch()){
        $email='';
        if(isset($res['email'])){
            $email=$res['email'];
        }
        $tel='';
        if(isset($res['tel'])){
            $tel=$res['tel'];
        }
        $instagram='';
        if(isset($res['instagram'])){
            $instagram=$res['instagram'];
        }
        $facebook='';
        if(isset($res['facebook'])){
            $facebook=$res['facebook'];
        }
        $snapchat='';
        if(isset($res['snapchat'])){
            $snapchat=$res['snapchat'];
        }
        $whatsapp='';
        if(isset($res['whatsapp'])){
            $whatsapp=$res['whatsapp'];
        }
        $lieu='';
        if(isset($res['lieu'])){
            $lieu=$res['lieu'];
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="../style/css/authentification.css">
    <link rel="stylesheet" href="../style/css/loader.css">
    <script src="../lib/js/jquery-3.6.0.min.js"></script>
    <title>Modifier informartions</title>
</head>
<body>
    <div class="main_zone">

        <div class="authentification_form_zone">
            <form >
                <div class="input_zone">
                    <i class="fa fa-phone"></i>
                    <input type="text" placeholder="Telephone" name="tel" value="<?php echo($tel) ?>">
                </div>

                <div class="input_zone">
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" value="<?php echo($email) ?>">
                </div>
                
                <div class="input_zone">
                    <i class="fab fa-instagram"></i>
                    <input type="text" placeholder="Instagram" name="instagram" value="<?php echo($instagram) ?>">
                </div>
                
                <div class="input_zone">
                    <i class="fab fa-facebook-f"></i>
                    <input type="text" placeholder="Facebook" name="facebook" value="<?php echo($facebook) ?>">
                </div>
                
                <div class="input_zone">
                    <i class="fab fa-snapchat-ghost"></i>
                    <input type="text" placeholder="Snapchat" name="snapchat" value="<?php echo($snapchat) ?>">
                </div>

                <div class="input_zone">
                    <i class="fab fa-whatsapp"></i>
                    <input type="text" placeholder="Whatsapp" name="whatsapp" value="<?php echo($whatsapp) ?>">
                </div>
                
                <div class="input_zone">
                    <i class="fa fa-map-marker-alt"></i>
                    <input type="text" placeholder="Adresse" name="lieu" value="<?php echo($lieu) ?>">
                </div>

                <p align="center">
                    <button type="submit">Modifier <i class="fa fa-spinner loader"></i></button>
                </p>

            </form>
        </div>
    </div>
    <footer>
        <h3 align="center">Powered by <a href="">Ml Script</a></h3>
    </footer>
    <div class="avion_main_zone">
        <!-- <img src="../res/images/connexion/icone_avion.png" alt="">
        <img src="../res/images/connexion/icone_avion.png" alt="">
        <img src="../res/images/connexion/icone_avion.png" alt="">
        <img src="../res/images/connexion/icone_avion.png" alt=""> -->
    </div>
    
    <script src="../style/js/modifierInfo.js"></script>
</body>
<?php
    ob_end_flush();
?>
</html>