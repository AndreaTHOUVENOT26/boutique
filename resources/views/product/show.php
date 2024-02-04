<?php
// Inclusion des fichiers nécessaires
include("../app/persistences/product.php");  // Inclusion du fichier contenant les fonctions relatives aux produits

global $pdo;  // Déclaration d'une variable globale pour la connexion à la base de données

// Récupération de l'action depuis la requête GET
$action = filter_input(INPUT_GET, 'action');

// Vérification de l'action demandée
if ($action === 'show') {
    // Récupération de l'ID du produit depuis la requête GET
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Vérification de la validité de l'ID
    if ($id !== null && $id !== false && $id !== 0) {
        // Appel de la fonction getProductByID pour obtenir les détails du produit
        $produit = getProductByID($pdo, $id);

        // Affichage des détails du produit s'il existe
        if (!empty($produit)) {
            ?>
            <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Détail du Produit</title>
            </head>
            <body>

            <h1>Détail du Produit</h1>

            <!-- Affichage des détails du produit -->
            <?php foreach ($produit as $detailsProduit) : ?>
                <p>Nom : <?= $detailsProduit['title']; ?></p>
                <p>Description : <?= $detailsProduit['description']; ?></p>
                <p>Prix TTC : <?= $detailsProduit['priceTTC']; ?> €</p>
            <?php endforeach; ?>

            <!-- Ajout du formulaire pour ajouter au panier -->
            <form action='/?action=cart' method='post'>
                <label for='quantite'>Quantité :</label>
                <?php
                // Récupération de la quantité maximale du produit depuis la base de données
                $quantiteMax = isset($produit[0]['stock']) ? $produit[0]['stock'] : 1; // Valeur par défaut à 1 si la quantité maximale n'est pas définie


                ?>
<!--                // Utilisation de l'attribut "max" pour définir la quantité maximale dans le formulaire-->
                <input type='number' id='quantite' name='quantite' min='1' max='<?php echo $quantiteMax; ?>' value='1'>
                <input type='hidden' name='id_produit' value='<?= $id; ?>'>
                <input type='submit' value='Ajouter au panier'>
            </form>

            </body>
            </html>
            <?php
        } else {
            echo "<p>Aucun Article trouvé</p>";
        }
    } else {
        die("ID invalide. ID récupéré : " . $_GET['id']);
    }
} else {
    die("Action non valide");
}
?>
