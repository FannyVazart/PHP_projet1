<?php
$Souris = [
    "name" => "Souris",
    "price" => "800",
    "discount" => "5",
    "photo" => "https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg",
    "description" => "Cette magnifique souris est, en plus, très ergonomique.",
];

$Tour = [
    "name" => "Tour",
    "price" => "56000",
    "discount" => "0",
    "photo" => "https://www.ordi2-0.fr/wp-content/uploads/2021/02/Meilleur-ordinateur-tour-Sedatech-253x300.jpg",
    "description" => "Cette magnifique tour est, en plus, très fonctionnelle.",
];

$Clavier = [
    "name" => "Clavier",
    "price" => "27000",
    "discount" => "10",
    "photo" => "https://i0.wp.com/sesamepc.com/wp-content/uploads/2021/05/Clavier-US-HP-840-G1-G2-850-G1-G2-dessus.jpg?fit=1200%2C800&ssl=1",
    "description" => "Ce magnifique clavier est, en plus, très pratique.",
];

$Ecran = [
    "name" => "Ecran",
    "price" => "16700",
    "discount" => "8",
    "photo" => "https://www.cdiscount.com/pdt2/x/e/n/1/700x700/ls24a336nhuxen/rw/ecran-pc-samsung-s24a336nhu-24-fhd-dalle.jpg",
    "description" => "Ce magnifique écran est, en plus, très lumineux.",
];

include 'header.php'; 
include 'my-functions.php';
?>

    <div class="catalogue">

        <section class="souris">
            <section class="nom_prod">
                <h2><?php echo $Souris['name'] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $Souris["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $Souris["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo formatPrice($Souris["price"]) ?>
                <p>Remise : <?php echo $Souris["discount"] . "%" ?></p>
                <p>Prix après réduction : <?php echo discountedPrice($Souris["price"], $Souris["discount"]) ?></p>
                <p>PrixHT : <?php echo priceExcludingVAT($Souris["price"]) ?></p> 
            </section>
        </section>

        <section class="tour">
            <section class="nom_prod">
                <h2><?php echo $Tour["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $Tour["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $Tour["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo formatPrice($Tour["price"]) ?>
                <p>Remise : <?php echo $Tour["discount"] . "%" ?></p>
                <p>Prix après réduction : <?php echo discountedPrice($Tour["price"], $Tour["discount"]) ?></p>
                <p>PrixHT : <?php echo priceExcludingVAT($Tour["price"]) ?></p>
            </section>
        </section>

        <section class="clavier">
            <section class="nom_prod">
                <h2><?php echo $Clavier["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $Clavier["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $Clavier["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo formatPrice($Clavier["price"]) ?>
                <p>Remise : <?php echo $Clavier["discount"] . "%" ?></p>
                <p>Prix après réduction : <?php echo discountedPrice($Clavier["price"], $Clavier["discount"]) ?></p>
                <p>PrixHT : <?php echo priceExcludingVAT($Clavier["price"]) ?></p>
            </section>
        </section>

        <section class="ecran">
            <section class="nom_prod">
                <h2><?php echo $Ecran["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $Ecran["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $Ecran["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo formatPrice($Ecran["price"]) ?>
                <p>Remise : <?php echo $Ecran["discount"] . "%" ?></p>
                <p>Prix après réduction : <?php echo discountedPrice($Ecran["price"], $Ecran["discount"]) ?></p>
                <p>PrixHT : <?php echo priceExcludingVAT($Ecran["price"]) ?></p>
            </section>
        </section>

    </div>

<?php include 'footer.php'; ?>
