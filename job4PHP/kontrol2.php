<?php
// product price
$productPrice = 120000;
$discount = 0;

// check if the product price qualifies for a discount
if ($productPrice > 100000) {
    $discount = 0.20 * $productPrice;
}

// calculate the final price after applying the discount
$finalPrice = $productPrice - $discount;

// output the result
echo "The price to be paid after discount: Rp $finalPrice";
?>