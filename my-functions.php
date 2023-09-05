<?php

function formatPrice($price) {
 echo number_format((float)$price/100, 2, ',', '') . '€';
}

?>

