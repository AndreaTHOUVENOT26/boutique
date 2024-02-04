
<!-- /index.php?action=cart -->

<?php



/**
 * Initialise le panier s'il n'existe pas déjà en session.
 */
function initCart() {
    session_start();

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}

/**
 * Peuple le panier avec des données de test.
 */
function fakeCart() {
    initCart();

    // Peupler le panier avec des données de test
    $_SESSION['cart'] = array(
        1 => 2, // Produit avec l'ID 1 et quantité 2
        3 => 1, // Produit avec l'ID 3 et quantité 1
        5 => 3  // Produit avec l'ID 5 et quantité 3
    );
}

/**
 * Calcule le total en € du panier et le nombre de produits.
 *
 * @return array Un tableau contenant le total en € du panier et le nombre de produits.
 */
function totalCart() {
    initCart();

    // Simuler des prix pour les produits (vous devez remplacer cela par des données de la base de données)
    $productPrices = array(
        1 => 10.99,
        3 => 5.99,
        5 => 8.49
    );

    $total = 0;
    $numProducts = 0;

    foreach ($_SESSION['cart'] as $productId => $quantity) {
        if (isset($productPrices[$productId])) {
            $total += $productPrices[$productId] * $quantity;
            $numProducts += $quantity;
        }
    }

    // Vous pouvez formater le total en euros selon vos besoins
    $formattedTotal = number_format($total, 2, ',', ' ');

    return array('total' => $formattedTotal, 'numProducts' => $numProducts);
}
?>
