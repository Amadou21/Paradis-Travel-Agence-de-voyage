<?php
    ob_start();
    setcookie('login', '', 1, '/');
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
    <title>Connexion</title>
</head>
<body>
    <div class="main_zone">
        <p align="center">
            <a href="../index.php"> <i class="fa fa-window-close"></i></a>
            <img class="logo" src="../res/images/logo.jpg" alt="logo de travel agency">
            <h1 align="center">Paradize Agency</h1>
        </p>

        <div class="authentification_form_zone">
            <form action="">
                <div class="input_zone">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="email or username" name="login" required>
                </div>
                
                <div class="input_zone">
                    <i class="fa fa-key"></i>
                    <input type="password" placeholder="************" name="motDePasse" required>
                </div>

                <p align="center">
                    <button type="submit">Connexion <i class="fa fa-spinner loader"></i></button>
                </p>

                <p align="center"><a href="motDePasseOublier/motDePasseOublier.php">Mot de passe oublie?</a></p>
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
    
    <script src="../style/js/connexion.js"></script>
</body>
<?php
    ob_end_flush();
?>
</html>