<?php

    $name = 'Souris noire';
    $price = '52';
    $photo = 'https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg';
?>

   <!DOCTYPE html>
    <html lang="fr">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
      <title>Fiche produit</title>
    </head>
    
    <body>
          <header>
          </header>
    
          <div class="details_prod">
              <section class="nom">
              <?php echo $name ?>
              </section>

              <section class="prix">
              <?php echo 'Prix : ' . $price . ' €' ?>
              </section>

              <section class="photo">
              <img class="photo_prod" src="<?php echo $photo ?>" alt="photo du produit">
              </section>
          </div>         
    
          <footer>
          </footer>
    </body>
    
    </html>



