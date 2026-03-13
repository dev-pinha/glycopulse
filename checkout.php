<?php
// Checkout Redirect Logic

$package = $_GET['pkg'] ?? '';

// Map packages to checkout URLs (DS24 checkout)
$products = [
    '6' => 'https://www.checkout-ds24.com/product/667690?aff=ouroffertoday',
    '3' => 'https://www.checkout-ds24.com/product/667689?aff=ouroffertoday',
    '2' => 'https://www.checkout-ds24.com/product/667688?aff=ouroffertoday'
];

if (array_key_exists($package, $products)) {
    $url = $products[$package];
    header("Location: $url", true, 302);
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
