<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    ob_start();

    if(isset($_POST['motDePasse']) && isset($_COOKIE['email'])){
        try{
            require('../../script/connexion_bd.php');
            require('../../script/truncator.php');
            $motDePasse=InjectionLogin($_POST['motDePasse']);
            $login=$_COOKIE['email'];

            $query=$bdd->prepare('UPDATE user SET motDePasse=? WHERE `login`=?');
            $query->execute(array($motDePasse, $login));

            try{
                $code=rand(100000,999999);
                require '../../lib/php/PHPMailer/src/Exception.php';
                require '../../lib/php/PHPMailer/src/PHPMailer.php';
                require '../../lib/php/PHPMailer/src/SMTP.php';
                require '../../script/mail_info.php';

                $mail= new PHPMailer(true);
                $mail->SMTPDebug=SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host=$Host;
                $mail->SMTPAuth=$SMTPAuth;
                $mail->SMTPOptions=Array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed'=>true));
                $mail->Username=$Username;
                $mail->Password=$Password;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->$Port=$Port;
                $mail->setFrom($Username, $nom_du_site);
                $mail->addReplyTo($send_email, $nom_du_site);
                $mail->WordWrap   = $WordWrap;
                $mail->isHTML(true);
                $mail->addAddress($login);
                $mail->Subject="Code Mofier sur le site de Paradize Agency";

                $mail->Body="<p>Votre code de connexion a ete modifier sur le site Paradize Agency avec succes. </p><h3>Si ceci ne vient pas de vous, veuillez contactez les responsable de votre site pour une verification en profondeur.</h3>";
                $mail->send();

                setcookie('code', '',1,'/');
                setcookie('email', '',1,'/');
                
                setcookie('login', $login, time()+3600*24*365,'/');

                header('HTTP/1.1 200 Ok');
            }
            catch(Exception $e){
                die(header('HTTP/1.1 200 Mail non envoyer'));
            }
        }
        catch(Exception $e){
            die(header('HTTP/1.1 500 Une erreur est survenue'));
            exit();
        }
    }
    else{
        die(header('HTTP/1.1 403 Cookie expiree ou info incorrecte'));
    }
    
?>