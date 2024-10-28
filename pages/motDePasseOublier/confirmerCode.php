<?php
    ob_start();
    if(!(isset($_COOKIE['email']))){
        header('Location: ../connexion.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../lib/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../style/css/authentification.css">
    <link rel="stylesheet" href="../../style/css/pop_up.css">
    <link rel="stylesheet" href="../../style/css/loader.css">

    <script src="../../lib/js/jquery-3.6.0.min.js"></script>
    <title>Mot de passe oublie</title>
</head>
<body>
    <div class="main_zone">
        <p align="center">
            <a href="../../index.php"> <i class="fa fa-window-close"></i></a>
            <img class="logo" src="../../res/images/logo.jpg" alt="logo de travel agency">
            <h1 align="center">Paradize Agency</h1>
        </p>

        <div class="authentification_form_zone">
            <form action="">

                <div class="input_zone">
                    <i class="fa fa-hashtag"></i>
                    <input type="text" placeholder="Confirmer le code" name="code" required>
                </div>

                <p align="center">
                    <button type="submit">Confirmer <i class="fa fa-spinner loader"></i></button>
                </p>

                <p align="center"><a href="../connexion.php">Se connecter?</a></p>
            </form>
        </div>
    </div>
    <footer>
        <h3 align="center">Powered by <a href="">Ml Script</a></h3>
    </footer>
    <div class="avion_main_zone">
        <img src="../../res/images/connexion/icone_avion.png" alt="">
        <img src="../../res/images/connexion/icone_avion.png" alt="">
        <img src="../../res/images/connexion/icone_avion.png" alt="">
        <img src="../../res/images/connexion/icone_avion.png" alt="">
    </div>
    <h1 class="pop_up">Un code vous ete envoyez sur votre mail. Veuillez confirmer le code.</h1>

    <script src="../../style/js/motDePasseOublier/confirmerCode.js"></script>
    <script src="../../style/js/pop_up.js"></script>
</body>
<?php
    ob_end_flush();
?>
</html>