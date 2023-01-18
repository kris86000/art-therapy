<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Verification des champs

if(isset($_POST['nomClient']) && (isset($_POST['emailClient'])) && (isset($_POST['body']))){
    $nomClient = htmlspecialchars($_POST['nomClient']); // nom du client rentré dans le formulaire
    $emailClient =  htmlspecialchars($_POST['emailClient']); // email du client rentré dans le formulaire
    $message =  htmlspecialchars($_POST['body']); // message du client rentré dans le formulaire
    

    require './vendor/phpmailer/phpmailer/src/Exception.php';
    require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require './vendor/phpmailer/phpmailer/src/SMTP.php';

    $mail = new PHPMailer();            // class PHPMailer
    $mail->IsSMTP();                        // protocole SMTP
    $mail->Host = 'smtp.gmail.com';         // Host SMTP      
    $mail->Port = 465;                       // Port SMTP
    $mail->SMTPAuth = 1;                       // Authentification
    $mail->CharSet = 'UTF-8';                    // charset 


   $mail->SMTPSecure = 'ssl';                       // securité SMTP
   $mail->Username   =  'art.therapy.poitiers@gmail.com';  // adresse mail d'envoi SMTP
   $mail->Password   =  'yvehewudtxcvwdaz';         //Mot de passe de l'app à utiliser


    $monEmail = 'art.therapy.poitiers@gmail.com';
    // structure reçu dans le contenu du Mail
    $mailContent =  '<h2>Demande de contact</h2><br>                                         
                <p><strong>Nom du client : </strong>' . $nomClient . '</p><br>
                <p><strong>Email du client : </strong>' . $emailClient . '</p><br>
                <p><strong>Message : </strong>' . $message . '</p>';  




    $mail->From = $emailClient;  
    $mail->FromName = $nomClient; 
    $mail->addAddress($monEmail);
    $mail->addReplyTo($emailClient);
    $mail->IsHTML(true);             
    $mail->WordWrap   = 50;
    $mail->Subject = 'Demande de contact'; 
    $mail->Body = $mailContent;

    $mail->MsgHTML($mailContent);          

    if (!$mail->send()) {
        // message en cas d'echec de l'envoi et retour au formulaire
        session_start();
        $_SESSION["envoiForm"] = "Désolé " . $_POST["nomClient"] . ", Un problème est survenu!";
        header("Location:index.php#contact");
        die;
    } else {
        // message si formulaire envoyé et retour au formulaire
        session_start();
        $_SESSION["envoiForm"] = "Merci " . $_POST["nomClient"] . ", Votre message a bien été envoyé!";
        header("Location:index.php#contact");
        die;
    }
}

