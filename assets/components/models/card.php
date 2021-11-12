<?php
if(!isset($card_class)){
    $class = 'none';
}
if(!isset($card_routeImg)){
    $routeImg = 'none';
}
if(!isset($card_routeImg)){
    $routeImg = 'none';
}
?>

<?php if($card_class !== 'none'): ?>

    <?php if($card_class !== 'school'): ?>
        <?php if(isset($card_url[0])):?>
            <a class="card-me card-<?= $card_class ?> card-url" 
            href="<?= $card_url[0][0] ?>" 
            <?php if($card_url[0][1]): ?> target="_blank" <?php endif ?>>
        <?php else: ?>
            <div class="card-me card-<?= $card_class ?>">
        <?php endif ?>

                <img class="card-image" src="<?= $card_routeImg ?>">
                <p class="card-text"><?= $card_text ?></p>

        <?php if(isset($card_url[0])):?>
            </a>
        <?php else: ?>
            </div>
        <?php endif ?>

    <?php endif ?>



    <?php if($card_class === 'school'): ?>
        <div class="card-me card-school">
            <div class="card-image-text">
                <div class="card-image-blur"></div>
                <img src="<?= $card_routeImg ?>">
                <div class="card-text-in-image">
                    <p class="card-fontFiliere"><?= $card_filiere ?></p>
                    <p class="card-fontDate"><?= $card_date ?></p>
                    <?php if(isset($card_mention[0])):?>
                        <p class="card-fontMention"><?= $card_mention[0] ?></p>
                    <?php endif ?>
                </div>
            </div>

            <div class="card-SchoolName"><?= $card_schoolName ?></div>
        </div>
    <?php endif ?>




<?php endif ?>