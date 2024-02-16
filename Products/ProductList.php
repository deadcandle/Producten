<?php

namespace Products;

class ProductList {
    private array $products = array();   
    
    public function addProduct(product $product) {
        array_push($products, $product);
    }

    public function getProducts() {
        return $products;
    }
}

?>