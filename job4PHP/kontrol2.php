<?php
$productPrice = 120000;
$discount = 0;

if ($productPrice > 100000) {
    $discount = 0.20 * $productPrice;
}

$finalPrice = $productPrice - $discount;

echo "The price to be paid after discount: Rp $finalPrice";
?>