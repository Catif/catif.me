<?php
$title = 'Projet : eZHost - Catif';
$page = 'projet';
require dirname(__DIR__, 2) . "/assets/components/header.php";
?>





<h2 class="title-large">Projet : <span class="font-purple">Parc Informatique</span></h2>
<p class="text-large mt-30">
    <span class="font-purple">Création d'un site web</span> qui permet la gestion d'un parc informatique pour lycée.<br>
</p>
<p class="text-large mt-30">Réalisation de la partie <span class="font-purple">Back end</span> et <span class="font-purple">Front End</span>.</p>
<p class="text-large mt-30">Projet fini en <span class="font-purple">Décembre 2021</span></p>

<img class="presentation-img mt-60" src="<?= HTML_ROOT ?>/assets/img/project/etud_Parc-Informatique.webp">

<h2 class="title-large mt-60">Technologies utilisées :</h2>
<div class="group-cards mt-40">
    <?php
        createCard('software', '/assets/img/project/technology/php.webp', 'PHP', ['https://www.php.net', true]);
        createCard('software', '/assets/img/project/technology/bootstrap.webp', 'Bootstrap', ['https://getbootstrap.com', true]);
        createCard('software','/assets/img/project/technology/mysql.webp','MySQL', ['https://www.mysql.com/fr/', true]);
    ?>
</div>

<a class="button-site mt-40 mb-30" href="https://projet.catif.me/etud_Parc-Informatique/" target="_blank"><p class="text-large">Voir le site</p></a>










<?php
$absolute = false;
require PHP_ROOT . '/assets/components/footer.php';
?>