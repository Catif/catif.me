<?php
$title = 'Accueil - Catif';
$page = 'home';
require "./assets/components/header.php";
?>




<h2 class="title-large">Mes projets :</h2>

<div class="group-cards">
    <?php 
        createCard('project','/assets/img/project/stage_ezhost.webp','eZHost',[HTML_ROOT .'/projects/stage_eZHost', false]);
        createCard('project','/assets/img/project/stage_ezhub.webp','eZHub',[HTML_ROOT .'/projects/stage_eZHub', false]);
        createCard('project','/assets/img/project/me_vitrine.webp','Site vitrine',[HTML_ROOT .'/projects/me_vitrine', false]);
        createCard('project','/assets/img/project/etud_Parc-Informatique.webp','Parc Informatique',[HTML_ROOT .'/projects/etud_Parc-Informatique', false]);
    ?>
</div>


<?php
$absolute = true;
require PHP_ROOT . '/assets/components/footer.php';
?>