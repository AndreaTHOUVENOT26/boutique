<?php
echo 'coucou';

// Inclure le fichier de configuration ou toute autre logique nécessaire
// pour initialiser la connexion à la base de données, etc.

// Démarrer la session
session_start();

// Vérifier si le panier existe en session
if (!isset($_SESSION['cart'])) {
    // Initialiser le panier avec quelques produits de test
    $_SESSION['cart'] = array(
        1 => 2, // Produit avec l'ID 1 et quantité 2
        3 => 1, // Produit avec l'ID 3 et quantité 1
        5 => 3  // Produit avec l'ID 5 et quantité 3
    );
}

// Inclure l'en-tête de la page
include_once('../../includes/header.php');
?>

<h1>Votre Panier</h1>

<table>
    <thead>
    <tr>
        <th>ID </th>
        <th>Quantité</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Parcourir le panier et afficher les produits
    foreach ($_SESSION['cart'] as $productId => $quantity) {
        echo "<tr>
                    <td>{$productId}</td>
                    <td>{$quantity}</td>
                </tr>";
    }
    ?>
    </tbody>
</table>

<?php
// Inclure le pied de page ou toute autre logique nécessaire
include_once('../../includes/footer.php');
?>
