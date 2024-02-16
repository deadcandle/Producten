<?php
require_once __DIR__ . '/vendor/autoload.php';

use Products\Game;
use Products\ProductList;

// Generate things
$terraria = new Game("Terraria", 9.99, 21, "Terraria is a 2D sandbox game with gameplay that revolves around exploration, building, crafting, combat, survival, and mining, playable in both single-player and multiplayer modes.", 100, "Game", "Sandbox");
$noita = new Game("Noita", 14.99, 21, "Frustrerende game.", 100, "Game", "Rogue");

// Give them requirements
$noita->addRequirement("512gb geheugen");

// Add them to the products list
$productList = new ProductList();
$productList -> addProduct($terraria);
$productList -> addProduct($noita);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
    <style>
        th, td {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <table border=1>
        <tr>
            <th>Category</th>
            <th>Productnaam</th>
            <th>Verkoopprijs</th>
            <th>Info</th>
        </tr>
        
        <?php foreach ($productList -> getProducts() as $product) : ?>

            <tr>
                <td><?php echo $product->getCategory(); ?></td>
                <td><?php echo $product->getName(); ?></td>
                <td><?php echo $product->getPurchasePrice(); ?></td>
                <td><?php echo $product->getInfo(); ?></td>
            </tr>
        
        <?php endforeach ?>
            
    </table>
</body>
</html>