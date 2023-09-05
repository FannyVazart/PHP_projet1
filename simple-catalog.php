            
          <pre>
         <?php
            $products = ["Souris", "Tour", "Clavier", "Ecran"];
            sort($products);
            print_r($products);
             ?>
          </pre> 

          <?php 
          for ($i=0; $i<4; $i++) {
            echo $products[$i];
           }
          ?>

        

         
            
            
            
            
           