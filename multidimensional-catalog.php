<?php

$name = string;
$price = int;
$photo = string;
$description = string;

$products = array(
    $Souris = [
        $name = 'Souris',
        $price = '8',
        $photo = 'https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg',
        $description = 'Cette magnifique souris est, en plus, très ergonomique.',
    ];
    $Tour = [
        $name = 'Tour',
        "price" => "560",
        "photo" => "https://www.ordi2-0.fr/wp-content/uploads/2021/02/Meilleur-ordinateur-tour-Sedatech-253x300.jpg",
        "description" => "Cette magnifique tour est, en plus, très fonctionnelle.",
    ];

    $Clavier = [
        "name" => "Clavier",
        "price" => "270",
        "photo" => "https://i0.wp.com/sesamepc.com/wp-content/uploads/2021/05/Clavier-US-HP-840-G1-G2-850-G1-G2-dessus.jpg?fit=1200%2C800&ssl=1",
        "description" => "Ce magnifique clavier est, en plus, très pratique.",
    ];

    $Ecran = [
        "name" => "Ecran",
        "price" => "167",
        "photo" => "https://www.cdiscount.com/pdt2/x/e/n/1/700x700/ls24a336nhuxen/rw/ecran-pc-samsung-s24a336nhu-24-fhd-dalle.jpg",
        "description" => "Ce magnifique écran est, en plus, très lumineux.",
    );

?>



Exemple du kit apprenant:
<?php
$products = [
"iphone" => [
"name" => "iPhone",
"price" => 450,
"weight" => 200,
"discount" => 10,
"picture_url" => "https://cdn-apple.com/iphone-12.jpg"
],
"ipad" => [
"name" => "iPad",
"price" => 450,
"weight" => 400,
"discount" => null,
"picture_url" => "https://cdn-apple.com/ipad.jpg"
],
];