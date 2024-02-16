<?php

namespace Products;

class Game extends Product {
    
    private string $genre;
    private $requirements = array(); 

    public function __construct(string $name, float $purchasePrice, int $tax, string $description, float $profit, string $category, string $genre) {
        $this->setName($name);
        $this->setPurchasePrice($purchasePrice);
        $this->setTax($tax);
        $this->setDescription($description);
        $this->setProfit($profit);
        $this->setCategory($category);
        $this->setGenre($genre);
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function addRequirement($requirement) {
        array_push($this->requirements, $requirement);
    }

    public function getRequirements() {
        $requirementsHTML = "";
        foreach ($this->requirements as $requirement) {
            $requirementsHTML = $requirementsHTML . "<li>" . $requirement . "</li>";
        }
        return $requirementsHTML;
    }

    public function getInfo() : string {
        return "
        <ul>
            <li>".$this->genre."</li>
            <li>Extra info</li>
            <ul>
                ".$this->getRequirements()."
            </ul>
        </ul>
        ";
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}

?>