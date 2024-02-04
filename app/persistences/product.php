<?php

// fonction pour un seul produit
function getProductByID($pdo, $id)
{
    $recovered = $pdo->prepare("SELECT id, title, description, priceTTC, weight, tva, stock, categories_id, tva_id, price_HTT FROM products WHERE id = :id");
    $recovered->bindParam(':id', $id, PDO::PARAM_INT);
    $recovered->execute();
    return $recovered->fetchAll();
}


// Fonction pour récupérer tous les produits de la base de données
function getAllProducts()
{
    // Remplacez les détails de connexion par les vôtres
    $host = 'localhost';
    $dbname = 'votre_bdd';
    $user = 'votre_utilisateur';
    $password = 'votre_mot_de_passe';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $query = $pdo->query('SELECT * FROM products');
        $products = $query->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données: " . $e->getMessage());
    }
}