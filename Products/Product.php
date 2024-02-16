<?php

namespace Products;

abstract class Product {
    private string $name;
    private float $purchasePrice;
    private int $tax;
    private string $description;
    private float $profit;
    protected string $category;

    public function __construct(string $name, float $purchasePrice, int $tax, string $description, float $profit, string $category) {
        $this->name = $name;
        $this->purchasePrice = $purchasePrice;
        $this->tax = $tax;
        $this->description = $description;
        $this->profit = $profit;
        $this->category = $category;
    }

    

    // Getters
    public function getName(): string {
        return $this->name;
    }

    public function getPurchasePrice(): float {
        return $this->purchasePrice;
    }

    public function getTax(): int {
        return $this->tax;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getProfit(): float {
        return $this->profit;
    }

    public function getCategory(): string {
        return $this->category;
    }

    // Setters
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPurchasePrice(float $purchasePrice): void {
        $this->purchasePrice = $purchasePrice;
    }

    public function setTax(int $tax): void {
        $this->tax = $tax;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setProfit(float $profit): void {
        $this->profit = $profit;
    }
    
}

?>