<?php
try {
    $access = new pdo('mysql:host=boutique.local;dbname=boutique;charset=utf8', "Andrea", "");

    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) {

    $e->getMessage();
}
?>