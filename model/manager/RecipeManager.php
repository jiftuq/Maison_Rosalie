<?php
//model/manager/RecipeManager.php
declare(strict_types=1);
namespace model\manager;
use PDO;
use model\abstract\AbstractManager;
use model\mapping\RecipeMapping;

class RecipeManager extends AbstractManager{

    public function getAllRecipes():array{
        $sql = "SELECT * FROM recipes";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $recipes = [];
        foreach ($rows as $row) {
            $recipes[] = new RecipeMapping($row);
        }
    
        return $recipes;
    }

    public function getRecipeById(int $id): ?RecipeMapping
    {
        $sql = 'SELECT * FROM recipes WHERE id = :id LIMIT 1';
    
        $query = $this->connect->prepare($sql);
        $query->execute(['id' => $id]);
    
        $row = $query->fetch();
    
        if ($row === false) {
            return null;
        }
    
        return new RecipeMapping($row);
    } 

    // Nous recherchons une recette via son slug
public function getRecipeBySlug(string $slug):?RecipeMapping{

    $sql = "SELECT *
            FROM recipes
            WHERE slug = ?";

    $stmt = $this->connect->prepare($sql);

    $stmt->execute([$slug]);

    $recipe = $stmt->fetch(PDO::FETCH_ASSOC);

    if (empty($recipe)) {
        return null;
    }

    return new RecipeMapping($recipe);
}




}
