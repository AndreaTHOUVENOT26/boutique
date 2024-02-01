<?php

function ajouter($name, $img, $price, $description)
{
    if (require("connection.php")) {
        $recuperer = $access->prepare("INSERT INTO products(name,img,price,description) 
    VALUES ($name,$img,$price,$description)");


        $recuperer->excecute(array($name, $img, $price, $description));
        $recuperer->closeCursor();
    }
}

function afficher()
{
    if (require("connection.php")) {

        $recuperer = $access->prepare("SELECT * FROM products ORDER BY id DESC ");
        $recuperer->excecute();

        $data = $recuperer->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $recuperer->closeCursor();
    }
}

function supprimer($id)
{
     if (require("connection.php")) {

         $recuperer = $access->prepare("DELETE  FROM products WHERE id=?");
         $recuperer->excecute(array($id));

     }
}
?>