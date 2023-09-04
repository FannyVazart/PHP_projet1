<?php
    $name = 'Souris noire';
    $price = '8';
    $photo = 'https://www.grosbill.com/images_produits/fbab70f8-5842-4c66-9a8f-ac6d92543d64.jpg';
    $description = 'Cette magnifique souris est, en plus, très ergonomique.';
?>

   <!DOCTYPE html>
    <html lang="fr">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
      <title><?php echo 'Fiche produit ' . $name ?></title>
    </head>
    
    <body>
          <header>
          <?php include 'header.php';?>
          </header>
    
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
    
        <footer> 
        <?php include 'footer.php';?>
        </footer>
    </body>
    
    </html>



