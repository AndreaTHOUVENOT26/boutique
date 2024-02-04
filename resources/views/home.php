<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include("../resources/views/layouts/head.php")
?>
<div class="text-center"><h1>MA BOUTIQUE</h1></div>
<?php
include("../resources/views/layouts/header.php");
?>
<body>
<main>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="img/Laptop.jpg" width="100%" height="100%">

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href = 'http://boutique.local/?action=show&id=1';">
                                        View
                                    </button>
                                </div>
                                <small class="text-body-secondary">1200 €</small>
                            </div>
                        </div>
                    </div>
                    <p align="center">PRODUIT</p>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/T-shirt.jpeg" width="100%" height="100%">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href = 'http://boutique.local/?action=show&id=2';">
                                        View
                                    </button>
                                </div>
                                <small class="text-body-secondary">20 € </small>
                            </div>
                        </div>
                    </div>
                    <p align="center">PRODUIT</p>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/Sofa.webp" width="100%" height="100%">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="window.location.href = 'http://boutique.local/?action=show&id=3';">
                                        View
                                    </button>
                                </div>
                                <small class="text-body-secondary">800 €</small>
                            </div>
                        </div>
                    </div>
                    <p align="center">PRODUIT</p>
                </div>
            </div>
        </div>
    </div>

</main>

</body>
</html>
