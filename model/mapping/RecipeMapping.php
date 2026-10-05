<?php
// model/mapping/RecipeMapping.php

declare(strict_types=1);
namespace model\mapping;
use Exception;
use model\abstract\AbstractMapping;

class RecipeMapping extends AbstractMapping
{
    private ?int $id = null;
    private string $title = '';
    private string $slug = '';
    private string $description = '';
    private string $main_image = '';
    private string $prepare = '';
    private string $cooking = '';
    private string $difficulty = '';
    
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
    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $title = htmlspecialchars(strip_tags(trim($title)));
        if(strlen($title)<3 || strlen($title)>120){
            throw new Exception("Le titre de la recette doit faire entre 3 et 120 caractères");
        }
        $this->title = $title;
    }
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    public function setSlug(string $slug): void
    {
        $slug = htmlspecialchars(strip_tags(trim($slug)));
        if(strlen($slug)<3 || strlen($slug)>124){
            throw new Exception("Le slug de l'article doit faire entre 3 et 120 caractères");
        }
        $this->slug = $slug;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $title): void
    {
     $this->description= $title;
    }
    public function getMainImage(): string
{
    return $this->main_image;
}

public function setMainImage(string $main_image): void
{
    $this->main_image = $main_image;
}



}
