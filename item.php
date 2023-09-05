<?php
    $name = 'Souris noire';
    $price = '800';
    $photo = 'https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg';
    $description = 'Cette magnifique souris est, en plus, très ergonomique.';

include 'header.php';?>
    
          <div class="details_prod">

              <h1><?php echo $name ?></h1>

              <section class="description_prod">
              <?php echo $description ?>
              </section>

              <section>
              <img class="photo_prod" src="<?php echo $photo ?>" alt="photo du produit">
              </section>

              <section class="prix_prod">
              <?php echo 'Prix : ' . $price . ' €' ?>
              </section>

          </div>   
                
 <?php include 'footer.php';?>



