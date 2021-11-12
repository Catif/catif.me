<?php
function createCard(
        string $card_class, // Name of the class needed to use
        string $card_routeImg, // route of the picture
        string $card_text, // text under the picture

        /* optionnel */
        array ...$card_url // [0] redirect to url AND [1] target true or false
    ): void{

    require  $_SERVER['DOCUMENT_ROOT'] . '/assets/components/models/card.php';
}



function createCard_School(
        string $card_class, // Name of the class needed to use
        string $card_routeImg, // Route of the picture
        string $card_schoolName, // School name under the picture
        string $card_filiere, // Filiere in the picture
        string $card_date, // Date in the picture
        
        /* optionnel */
        string ...$card_mention // mention of the diplome in the picture 
    ): void{

    require  $_SERVER['DOCUMENT_ROOT'] . '/assets/components/models/card.php';
}



function createElementFooter(
        string $footer_icon, // class of icon on https://icon-sets.iconify.design
        string $footer_name, // $footer_name : $footer_value
        string $footer_value,

        /* optionnel */
        string ...$footer_url // target blank to the url
    ): void{
    require  $_SERVER['DOCUMENT_ROOT'] . '/assets/components/models/elementFooter.php';
}



?>