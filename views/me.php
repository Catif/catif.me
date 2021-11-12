<?php
    $title = 'Moi - Catif';
    $page = 'me';
    require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/header.php';
?>




<h2 class="title-large">Mes études :</h2>
<div class="group-cards">
    <?php 
        createCard_School('school', '/assets/img/me/school/lycee_coubertin.webp', 'Lycée Pierre de Coubertin', 'BAC Pro SN', '2017 - 2018');
        createCard_School('school', '/assets/img/me/school/lycee_coubertin.webp', 'Lycée Pierre de Coubertin', 'BAC STI2D Option SIN', '2018 - 2020', 'Mention Bien');
        createCard_School('school', '/assets/img/me/school/lycee_chopin.webp', 'Lycée Frédéric Chopin', 'BTS SIO Option SLAM', '2020 - Actuellement');
    ?>
</div>



<h2 class="title-large">Mes centres d'intérêts :</h2>
<div class="group-cards">
    <?php 
        createCard('hobby', '/assets/img/me/hobby/dev.webp', 'Développement informatique');
        createCard('hobby', '/assets/img/me/hobby/game.webp', 'Jeux vidéo');
        createCard('hobby', '/assets/img/me/hobby/manga.webp', 'Manga / Animé');
    ?>
</div>



<h2 class="title-large">Mes logiciels :</h2>
<div class="group-cards">
    <?php 
        createCard('software', '/assets/img/me/software/microsoft-teams.webp', 'Teams');
        createCard('software', '/assets/img/me/software/discord.webp', 'Discord');
        createCard('software', '/assets/img/me/software/figma.webp', 'Figma');
        createCard('software', '/assets/img/me/software/visual-studio-code.webp', 'Visual Studio Code');
        createCard('software', '/assets/img/me/software/microsoft365.webp', 'Microsoft 365');
    ?>
</div>

<?php
    $absolute = false;
    require $_SERVER['DOCUMENT_ROOT'] .'/assets/components/footer.php';
?>
    
