<?php
// chemin vers les dépendances
use model\manager\RecipeManager;
$recipeManager = new RecipeManager($connectPDO);
$page = $_GET['page']?? 'accueil';
if ($page === 'accueil') {

    require_once RACINE_PATH . '/view/accueil.php';

} elseif ($page === 'apropos') {
    require_once RACINE_PATH. '/view/apropos.php';
}
elseif ($page === 'contact') {
    require_once RACINE_PATH. '/view/contact.php';
}
elseif ($page === 'recettes') {

    $recipes = $recipeManager->getAllRecipes();
    require RACINE_PATH . '/view/recettes.php';
    exit;
}
 elseif($page==='recetteDetails'){
    if (!isset($_GET['slug'])) {
        http_response_code(404);
        require RACINE_PATH . '/view/404.php';
        exit;
    }
       if (isset($_GET['slug'])) {
        $recetteDetails = $recipeManager->getRecipeBySlug($_GET['slug']);
        if ($recetteDetails === null) {
            http_response_code(404);
            require RACINE_PATH . '/view/404.php';
            exit;
        }
   
        require RACINE_PATH . '/view/recetteDetails.php';
        exit;
    }
            }
                
