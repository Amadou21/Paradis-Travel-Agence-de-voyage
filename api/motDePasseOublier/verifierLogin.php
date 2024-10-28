<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    ob_start();

    if(isset($_POST['login'])){
        try{
            require('../../script/connexion_bd.php');
            require('../../script/truncator.php');
            $login=InjectionLogin($_POST['login']);

            $query=$bdd->prepare('SELECT * FROM `user` WHERE `login`=?');
            $query->execute(array($login));

            if($query->fetch()){
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
                $mail->Subject="Modifier votre code sur le site de Travel Agency";

                $mail->Body="<p>Votre code de cofirmation est: </p><h2>$code</h2> Ce code est valable que pour 24H.<br>Ne divulguez pas ce code.";
                $mail->send();

                setcookie('code', $code,time()+24*3600,'/');
                setcookie('email', $login,time()+24*3600,'/');
                header('HTTP/1.1 200 Ok');
            }

            else{
                die(header('HTTP/1.1 404 User introuvable'));
            }
        }
        catch(Exception $e){
            die(header('HTTP/1.1 500 Une erreur est survenue'));
            exit();
        }
    }
    else{
        die(header('HTTP/1.1 403 Information non saisie'));
    }
    
?>