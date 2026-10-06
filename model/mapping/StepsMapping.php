<?php
// model/mapping/RecipeMapping.php

declare(strict_types=1);
namespace model\mapping;
use Exception;
use model\abstract\AbstractMapping;

class StepsMapping extends AbstractMapping
{
    private ?int $id = null;
    private string $description = "";
    private string $title = "";
    private ?int $step_number = null;
    private string $image = "";
    // getters and setters
    public function getId():?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        if($id<=0) throw new Exception("id doit être un entier positif");
        $this->id = $id;
    }
    public function getDescription():string
    {
        return $this->description;
    }
    public function setDescription(?string $description): void
    {

        $this->description = $description;
    }
    public function getTitle():string
    {
        return $this->title;
    }
    public function setTitle(?string $title): void
    {

        $this->title = $title;
    }
    public function getStepNumber():int
    {
        return $this->step_number;
    }
    public function setStepNumber(?int $step_number): void
    {

        $this->step_number = $step_number;
    }
    public function getImage():string
    {
        return $this->image;
    }
    public function setImage(string $image): void
    {

        $this->image = $image;
    }

}
