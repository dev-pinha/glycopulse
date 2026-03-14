<?php
session_start();

$package = $_GET['pkg'] ?? '';

// Map packages to checkout URLs (DS24 checkout)
$products = [
    '6' => 'https://www.checkout-ds24.com/product/667690?aff=ouroffertoday',
    '3' => 'https://www.checkout-ds24.com/product/667689?aff=ouroffertoday',
    '2' => 'https://www.checkout-ds24.com/product/667688?aff=ouroffertoday'
];

if (array_key_exists($package, $products)) {
    $url = $products[$package];

    // Forward incoming traffic params as DS24 campaign key
    if (!empty($_SESSION['cam'])) {
        // Sanitize: only alphanumeric, underscores, hyphens allowed
        $cam = str_replace(['=', '&'], ['_', '-'], $_SESSION['cam']);
        $cam = preg_replace('/[^A-Za-z0-9_\-]/', '', $cam);
        $cam = substr($cam, 0, 127);
        if ($cam !== '') {
            $url .= '&cam=' . $cam;
        }
    }

    header("Location: $url", true, 302);
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
