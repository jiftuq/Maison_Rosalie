<?php
// model/mapping/IngredientsMapping.php

declare(strict_types=1);
namespace model\mapping;
use Exception;
use model\abstract\AbstractMapping;

class IngredientsMapping extends AbstractMapping
{
    private ?int $id = null;
    private string $name = '';
    private string $img_ingrigient = '';
    private string $quantity= '';
    private string $unit= '';
    // getters and setters
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        if($id<=0) throw new Exception("id doit être un entier positif");
        $this->id = $id;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $title): void
    {
        $name = htmlspecialchars(strip_tags(trim($title)));
        if(strlen($name)<3 || strlen($name)>120){
            throw new Exception("Le titre de la recette doit faire entre 3 et 120 caractères");
        }
        $this->name = $name;
    }
        public function getImgIngrigient(): string
{
    return $this->img_ingrigient;
}

public function setImgIngrigient (string $img_ingrigient): void
{
    $this->img_ingrigient = $img_ingrigient;
}


public function getQuantity(): string
{
    return $this->quantity;
}

public function setQuantity(string $quantity): void
{
    $this->quantity = $quantity;
}
public function getUnit(): string
{
    return $this->unit;
}
public function setUnit(string $unit): void
{
    $this->unit = $unit;
}

}
