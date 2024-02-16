<?php

namespace Products;

class ProductList {
    private $products = array();
    
    public function addProduct(Product $product) {
        array_push($this->products, $product);
    }

    public function getProducts() {
        return $this->products;
    }
}

?>