<?php

#votre FrontController avec les routes HTTP

//echo "Bienvenue dans la boutique";
session_start(); // Initialise la session
include('../config/database.php');

$routes = [ //lien vers les différentes pages
    'product' => "../app/controllers/productController.php",
    'show' => "../resources/views/product/show.php",
    'cart' => "../resources/views/cart/cart.php",
    'index' => "../resources/views/cart/index.php",
    'home' => "../resources/views/home.php",

];
$action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($action == 'product') {
    require $routes['product'];
}
if ($action == 'show') {
    require $routes['show'];
}
if ($action == 'cart') {
    require $routes['cart'];
}
if ($action == 'index') {
    require $routes['index'];
}
if ($action == 'home') {
    require $routes['home'];
}

