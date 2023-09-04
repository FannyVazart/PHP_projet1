<?php
$Souris = [
    "name" => "Souris",
    "price" => "8",
    "photo" => "https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg",
    "description" => "Cette magnifique souris est, en plus, très ergonomique.",
];

$Tour = [
    "name" => "Tour",
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
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Catalogue produits</title>
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <div class="catalogue">

        <section class="souris">
            <section class="nom_prod">
                <h2>Souris</h2>
            </section>  
            <section class="description_prod">
                Cette magnifique souris est, en plus, très ergonomique.
            </section>
            <section>
                <img class="photo_prod" src="https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : 8 €
            </section>
        </section>

        <section class="tour">
            <section class="nom_prod">
                <h2>Tour</h2>
            </section>  
            <section class="description_prod">
            Cette magnifique tour est, en plus, très fonctionnelle.
            </section>
            <section>
                <img class="photo_prod" src="https://www.ordi2-0.fr/wp-content/uploads/2021/02/Meilleur-ordinateur-tour-Sedatech-253x300.jpg" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : 560 €
            </section>
        </section>

        <section class="clavier">
            <section class="nom_prod">
                <h2>Clavier</h2>
            </section>  
            <section class="description_prod">
            Ce magnifique clavier est, en plus, très pratique.
            </section>
            <section>
                <img class="photo_prod" src="https://i0.wp.com/sesamepc.com/wp-content/uploads/2021/05/Clavier-US-HP-840-G1-G2-850-G1-G2-dessus.jpg?fit=1200%2C800&ssl=1" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : 270 €
            </section>
        </section>

        <section class="ecran">
            <section class="nom_prod">
                <h2>Ecran</h2>
            </section>  
            <section class="description_prod">
            Ce magnifique écran est, en plus, très lumineux.
            </section>
            <section>
                <img class="photo_prod" src="https://www.cdiscount.com/pdt2/x/e/n/1/700x700/ls24a336nhuxen/rw/ecran-pc-samsung-s24a336nhu-24-fhd-dalle.jpg" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : 167 €
            </section>
        </section>

    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>