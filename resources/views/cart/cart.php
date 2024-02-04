<?php
//echo'coucou';


include("../app/persistences/product.php");

global $pdo;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $quantite = filter_input(INPUT_POST, 'quantite', FILTER_SANITIZE_NUMBER_INT);
    $id_produit = filter_input(INPUT_POST, 'id_produit', FILTER_SANITIZE_NUMBER_INT);

    // Récupération des détails du produit depuis la base de données
    $produit = getProductByID($pdo, $id_produit);

    // Vérification si le produit existe
    if (!empty($produit)) {
        // Récupération du prix initial du produit
        $prix_initial = $produit[0]['priceTTC'];

        // Calcul du prix final
        $prix_final = $prix_initial * $quantite;

        // Affichage à des fins de démonstration
        echo "<p>Quantité : $quantite</p>";
        echo "<p>Nom du produit : {$produit[0]['title']}</p>";
        echo "<p>Prix unitaire : $prix_initial €</p>";
        echo "<p>Total: $prix_final €</p>";

        // Ajoutez ici le code nécessaire pour ajouter le produit au panier avec le prix final
    } else {
        echo "<p>Produit non trouvé</p>";
    }
} else {
    // Si la page est accédée directement sans soumission de formulaire, redirigez ou affichez un message d'erreur.
    header("Location: /"); // Vous pouvez rediriger vers la page d'accueil par exemple.
    exit();
}

