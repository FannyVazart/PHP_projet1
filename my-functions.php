<?php

function formatPrice($price) {
 echo number_format((float)$price/100, 2, ',', ' ') . '€';
}

function priceExcludingVAT($price, $rate = 5.5) {
  echo number_format((float)(($price/100)/(1 + $rate/100)), 2, ',', ' ') . '€';  
} 
?>

