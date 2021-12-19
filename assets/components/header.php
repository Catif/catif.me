<?php
require_once dirname(__DIR__,2) . '/config.php';

if(!isset($title)){
    $title='Error 404 - Catif';
}
if(!isset($page)){
    $page='error';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='<?= HTML_ROOT ?>/assets/css/style.css'>
    <title><?= $title ?></title>
</head>
<body>
    <nav>
        <div class="nav-left"><p class="nav-name">Bradley BARBIER</p></div>
        <div class="nav-right">
            <a class="nav-item <?= ($page === 'home')? 'active' : '' ?>" href="<?= HTML_ROOT ?>/">Projets</a>
            <a class="nav-item <?= ($page === 'me')? 'active' : '' ?>" href="<?= HTML_ROOT ?>/me">Moi</a>
            <a class="nav-item <?= ($page === 'contact')? 'active' : '' ?>" href="<?= HTML_ROOT ?>/contact">Contact</a>
        </div>
    </nav>

    <div id="<?= $page ?>" class="container"> <!-- this div end on footer component -->