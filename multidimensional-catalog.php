<?php
$products = [
"Souris" => [
    "name" => "Souris",
    "price" => "800",
    "photo" => "https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg",
    "description" => "Cette magnifique souris est, en plus, très ergonomique.",
],

"Tour" => [
    "name" => "Tour",
    "price" => "56000",
    "photo" => "https://www.ordi2-0.fr/wp-content/uploads/2021/02/Meilleur-ordinateur-tour-Sedatech-253x300.jpg",
    "description" => "Cette magnifique tour est, en plus, très fonctionnelle.",
],

"Clavier" => [
    "name" => "Clavier",
    "price" => "27000",
    "photo" => "https://i0.wp.com/sesamepc.com/wp-content/uploads/2021/05/Clavier-US-HP-840-G1-G2-850-G1-G2-dessus.jpg?fit=1200%2C800&ssl=1",
    "description" => "Ce magnifique clavier est, en plus, très pratique.",
],

"Ecran" => [
    "name" => "Ecran",
    "price" => "16700",
    "photo" => "https://www.cdiscount.com/pdt2/x/e/n/1/700x700/ls24a336nhuxen/rw/ecran-pc-samsung-s24a336nhu-24-fhd-dalle.jpg",
    "description" => "Ce magnifique écran est, en plus, très lumineux.",
],
];


include 'header.php'; ?>

    <div class="catalogue">

        <section class="souris">
            <section class="nom_prod">
                <h2><?php echo $products["Souris"]["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $products["Souris"]["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $products["Souris"]["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo $products["Souris"]["price"] ?> €
            </section>
        </section>

        <section class="tour">
            <section class="nom_prod">
                <h2><?php echo $products["Tour"]["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $products["Tour"]["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $products["Tour"]["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo $products["Tour"]["price"] ?> €
            </section>
        </section>

        <section class="clavier">
            <section class="nom_prod">
                <h2><?php echo $products["Clavier"]["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $products["Clavier"]["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $products["Clavier"]["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo $products["Clavier"]["price"] ?> €
            </section>
        </section>

        <section class="ecran">
            <section class="nom_prod">
                <h2><?php echo $products["Ecran"]["name"] ?></h2>
            </section>  
            <section class="description_prod">
                <?php echo $products["Ecran"]["description"] ?>
            </section>
            <section>
                <img class="photo_prod" src="<?php echo $products["Ecran"]["photo"] ?>" alt="photo du produit">
            </section>
            <section class="prix_prod">
                Prix : <?php echo $products["Ecran"]["price"] ?> €
            </section>
        </section>
    </div>

  <?php include 'footer.php'; ?>