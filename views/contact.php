<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$title = 'Contact - Catif';
$page = 'contact';
require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/header.php';

require_once $_SERVER['DOCUMENT_ROOT'] .'/lib/PHPMailer/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/lib/PHPMailer/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/lib/PHPMailer/SMTP.php';


// Variable de la page
$mailSend = 'none';

if(isset($_POST['email-user']) and isset($_POST['name-user']) and isset($_POST['object-mail']) and isset($_POST['message-mail']) ){
    if($_POST['email-user'] !== '' and $_POST['name-user'] !== '' and $_POST['object-mail'] !== '' and $_POST['message-mail'] !== ''){
    try{
        

                $mail = new PHPMailer(true);
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Informations de debug

                    // On configure le SMTP
                $mail->isSMTP();
                $mail->Host = 'ssl://celtic.o2switch.net';
                $mail->SMTPAuth = true;   
                $mail->Username = 'no-reply@catif.me';
                $mail->Password = 'hJZO(m?E;gBF';
                $mail->Port = 465;

                // Charset
                $mail->CharSet = 'utf-8';

                // Destinataire
                $mail->addAddress($_POST['email-user'], $_POST['name-user']);

                // Expéditeur
                $mail->setFrom('no-reply@catif.me', 'Ne pas répondre - Catif');

                // Contenu
                $mail->Subject = 'Message bien envoyé - Catif.me';
                $mail->Body = "Votre message sur le site https://catif.me à bien été reçu.
Le temps de réponse moyen est inférieur à 2 jours.


Voici le message que vous m'avez envoyé :

{$_POST['message-mail']}";

                // On envoie
                $mail->send();










                $mail2 = new PHPMailer(true);

                // On configure le SMTP
                $mail2->isSMTP();
                $mail2->Host = 'ssl://celtic.o2switch.net';
                $mail->SMTPAuth = true;   
                $mail2->Username = 'contact@catif.me';
                $mail2->Password = 'zTRCyC84srRd$m5s';
                $mail2->Port = 465;

                // Charset
                $mail2->CharSet = 'utf-8';

                // Destinataire
                $mail2->addAddress('bradley.barbier@outlook.fr');

                // Expéditeur
                $mail2->setFrom('contact@catif.me', 'Contact');

                // Contenu
                $mail2->Subject = 'Nouveau mail - Catif.me';
                $mail2->Body = "M. ou Mme : {$_POST['name-user']} 
Email : {$_POST['email-user']}
Objet: {$_POST['object-mail']}

Message : 
{$_POST['message-mail']}";

                // On envoie
                $mail2->send();
                $mailSend = 'envoye';


        }catch(Exception $e){
            $mailSend = 'error';
        }
    }
    elseif(isset($_POST['try'])){
        $mailSend= 'needInfo';
    }
}




?>
<?php if($mailSend === 'envoye'):?>
<div class="message messageSuccess">
    <p>Votre message a bien été envoyé avec succée.</p>
    <p>Vous allez recevoir un mail avec les informations de votre message.</p>
</div>

<?php elseif($mailSend === 'needInfo'):?>

<div class="message messageError">
    <p>Une information du formulaire est manquante ou mauvaise.</p>
</div>

<?php elseif($mailSend === 'error'):?>

<div class="message messageError">
    <p>Une erreur est survenue pendant l'envoie.</p>
    <p>Essayez de me contacter en passant par mon mail <a href="mailto:bradley.barbier@outlook.fr">bradley.barbier@outlook.fr</a> ou par mes réseaux en bas de chaque page.</p>
</div>

<?php endif ?>


<h2 class="title-large">Formulaire de contact :</h2>

<form id="form" action="contact" method="post" class="mt-10">
    <div class="group-input">
        <div class="input">
            <p class="input-text">Nom complet :</p>
            <input type="text" name="name-user" placeholder="John Doe">
        </div>
        <div class="input">
            <p class="input-text">Email :</p>
            <input type="email" name="email-user" placeholder="john.doe@example.com">
        </div>
    </div>

    <div class="input">
        <p class="input-text">Objet :</p>
        <select name="object-mail">
            <option value=""></option>
            <option value="stage">Proposition de stage</option>
            <option value="jobs">Proposition de travail</option>
            <option value="jobs">Proposition d'étude</option>
            <option value="more">Information supplémentaire</option>
            <option value="other">Autres...</option>
        </select>
    </div>

    <div class="input">
        <p class="input-text">Message :</p>
        <textarea name="message-mail" placeholder="Bonjour,
        
Je vous contact en rapport avec..."></textarea>
    </div>
    <div class="center">
        <input class="button-submit mt-30" type="submit" value="Envoyer">
    </div>

    <input type="hidden" name="try" value="1">
</form>


<?php
$absolute = true;
require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/footer.php';
?>

    
