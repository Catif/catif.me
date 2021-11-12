













<li id="footer-<?= $footer_name ?>" class="footer-item">
    <i class="iconify" data-icon="<?= $footer_icon ?>"></i>
    <?php if(isset($footer_url[0])):?>
        <?= $footer_name ?> : <a class="font-purple" href="<?= $footer_url[0] ?>" target='_blank'><?= $footer_value ?></a>
    <?php else: ?>
        <?= $footer_name ?> : <span class="font-purple"><?= $footer_value ?></span>
    <?php endif ?>
</li> 