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

    // DS24 campaign key: "gs" prefix for branded page, with traffic params appended
    $cam = 'gs';
    if (!empty($_SESSION['cam'])) {
        $extra = str_replace(['=', '&'], ['_', '-'], $_SESSION['cam']);
        $extra = preg_replace('/[^A-Za-z0-9_\-]/', '', $extra);
        if ($extra !== '') {
            $cam .= '-' . $extra;
        }
    }
    $url .= '&cam=' . substr($cam, 0, 127);

    header("Location: $url", true, 302);
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
