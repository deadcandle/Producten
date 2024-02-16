<?php
require_once __DIR__ . '/vendor/autoload.php';

use Products\Game;
use Products\ProductList;

// Generate things
$terraria = new Game("Terraria", 9.99, 21, "Terraria is a 2D sandbox game with gameplay that revolves around exploration, building, crafting, combat, survival, and mining, playable in both single-player and multiplayer modes.", 100, "Platform game");

// Add them to the products list
$productList = new ProductList();
$productList -> addProduct($terraria);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Category</th>
            <th>Productnaam</th>
            <th>Verkoopprijs</th>
            <th>Info</th>
        </tr>
        <?php

        var_dump($productList -> getProducts());
        
        ?>
    </table>
</body>
</html>