<?php
$title = 'Accueil - Catif';
$page = 'home';
require $_SERVER['DOCUMENT_ROOT']."/assets/components/header.php";
?>




<h2 class="title-large">Mes projets :</h2>

<div class="group-cards">
    <?php 
        createCard('project','/assets/img/project/ezhost.webp','eZHost',['/projects/eZHost', false]);
        createCard('project','/assets/img/project/ezhub.webp','eZHub',['/projects/eZHub', false]);
        createCard('project','/assets/img/project/me_vitrine.webp','Site vitrine',['/projects/me_vitrine', false]);
    ?>
</div>


<?php
$absolute = true;
require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/footer.php';
?>