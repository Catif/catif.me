<?php
$title = 'Projet : eZHub - Catif';
$page = 'projet';
require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/header.php';
?>





<h2 class="title-large">Projet : <span class="font-purple">eZHub</span></h2>
<p class="text-large mt-30"><span class="font-purple">Création d'une interface</span> qui permet de se rediriger sur les différents sites web utilisés par l'entreprise en s'occupent de la partie <span class="font-purple">Back end</span> et <span class="font-purple">Front End</span>.</p>
<p class="text-large mt-30">Projet fini en <span class="font-purple">Juin 2021</span></p>

<img class="presentation-img mt-60" src="/assets/img/project/ezhub.webp">

<h2 class="title-large mt-60">Technologies utilisées :</h2>
<div class="group-cards mt-40">
    <?php
        createCard('software', '/assets/img/project/technology/html.webp', 'HTML5');
        createCard('software', '/assets/img/project/technology/sass.webp', 'SASS', ['https://sass-lang.com', true]);
        createCard('software', '/assets/img/project/technology/bootstrap.webp', 'Bootstrap', ['https://getbootstrap.com', true]);
        createCard('software', '/assets/img/project/technology/vuejs.webp', 'VueJS', ['https://vuejs.org', true]);
        createCard('software', '/assets/img/project/technology/mockapi.webp', 'mockAPI', ['https://mockapi.io', true]);
    ?>
</div>

<a class="button-site mt-40 mb-30" href="https://hub.ezcorp.io" target="_blank"><p class="text-large">Voir le site</p></a>












<?php
$absolute = false;
require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/footer.php';
?>