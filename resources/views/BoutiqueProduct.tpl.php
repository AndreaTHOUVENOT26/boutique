<?php
//
////include '../ressources/views/layouts/header.tpl.php';
//
//global $pdo;
//
//// Récupération de l'ID du produit depuis la requête GET
//
//// Vérifier si le paramètre 'action' est défini dans la requête GET
//if (!isset($_GET['action'])) {
//
//    // Filtrer et récupérer la valeur de 'action' depuis la requête GET
//    $action = filter_input(INPUT_GET, 'action');
//
//    // Si l'action est 'show', continuez avec le reste du code
//    if ($action === 'show') {
//
//        // Vérifier si le paramètre 'id' est défini dans la requête GET
//        if (isset($_GET['id'])) {
//
//            // Filtrer et récupérer la valeur de 'id' en tant qu'entier depuis la requête GET
//            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//
//            // Si l'ID est valide, continuez avec le reste du code
//            if ($id !== null && $id !== false && $id !== 0) {
//
//                // Appeler la fonction pour récupérer le produit par ID
//                $produit = getProductByID($pdo, $id);
//
//                // Si l'ID est invalide, afficher un message d'erreur et arrêter le script
//            } else {
//
//                die("ID invalide. ID récupéré : " . $_GET['id']);
//            }
//        }
//    }
//}