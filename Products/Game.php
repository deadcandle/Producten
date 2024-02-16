<?php

namespace Products;

class Game extends Product {
    
    private string $genre;
    private array $requirements; 

    public function __construct(string $name, float $purchasePrice, int $tax, string $description, float $profit, string $category) {
        $this->setName($name);
        $this->setPurchasePrice($purchasePrice);
        $this->setTax($tax);
        $this->setProfit($profit);
        $this->setDescription($description);
        $this->category = $category;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function addRequirements($requirement) {
        array_push($requirement, $requirement);
    }

    public function getInfo() {
        return;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}

?>