<?php
$title = 'Projet : Site vitrine - Catif';
$page = 'projet';
require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/header.php';
?>




<h2 class="title-large">Projet personnel : <span class="font-purple">Site vitrine</span></h2>
<p class="text-large mt-30"><span class="font-purple">Création d'un site vitrine</span> qui présente mes différentes compétences dans le <span class="font-purple">domaine de l'informatique</span> et le <span class="font-purple">développement en générale</span>.</p>
<p class="text-large mt-30">Réalisation de la partie <span class="font-purple">Back end</span> et <span class="font-purple">Front End</span>.</p>
<p class="text-large mt-30"><span class="font-purple">Projet en cours</span></p>

<img class="presentation-img mt-60" src="/assets/img/project/me_vitrine.webp">

<h2 class="title-large mt-60">Technologies utilisées :</h2>
<div class="group-cards mt-40">
    <?php
        createCard('software','/assets/img/project/technology/php.webp','PHP', ['https://www.php.net', true]);
        createCard('software','/assets/img/project/technology/css.webp','CSS');
        createCard('software','/assets/img/project/technology/phpmailer.webp','PHPMailer', ['https://github.com/PHPMailer/PHPMailer', true]);
    ?>
</div>

<a class="button-site mt-40 mb-30" href="https://catif.me" target="_blank"><p class="text-large">Voir le site</p></a>







<?php
$absolute = false;
require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/footer.php';
?>