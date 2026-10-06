<?php
require_once __DIR__ . "/inc/header.php";
?>
<main>
    <div class="container">
<section class="recipe-description">
    <div class="recipe-grid">
        <div class="recipe-info">
            <h2 class="recipe-title">
                <?= htmlspecialchars($recetteDetails->getTitle())?>
            </h2>
            <img
                class="recipe-inside-img"
                src="images/cards/<?= htmlspecialchars($recetteDetails->getMainImage())?>"
                alt="<?= htmlspecialchars($recetteDetails->getTitle()) ?>">
        </div>
        <div class="recipe-content">
            <p class="recipe-text">
            <?= htmlspecialchars($recetteDetails->getDescription())?>
            
            </p>
            <img
                class="recipe-chocolate-img"
                src="images/choco_melt.jpg"
                alt="Préparation du chocolat">
        </div>
        <div class="recipe-main">
        <img
                class="recipe-img"
                src="images/main-recipe-img/<?= htmlspecialchars($recetteDetails->getMainImage())?>"
                alt="<?= htmlspecialchars($recetteDetails->getTitle()) ?>">
        </div>
        <!-- <?= htmlspecialchars($recetteDetails->getPrepTimeMinutes())?> -->
    </div>

</section>

<section class="recipe-description ">
    
        <div class="line">
<h2 class="section-title">Les Ingrédients</h2>
<img class="bowl-svg" src="images/bowl.svg" alt="">
</div>
<div class="ingredients">
<?php foreach ($ingredients as $ingredient): ?>
    <div class="card">
       <img src="images/ingridients/<?= htmlspecialchars($ingredient->getImgIngredient() )?>" alt="">
<p> <?= htmlspecialchars($ingredient->getName() )?> <?= htmlspecialchars($ingredient->getQuantity() )?> <?= htmlspecialchars($ingredient->getUnit())?>
</div>
<?php endforeach; ?>
</div>
</section>
<section class="recipe-description">
<div class="line">
<h2 class="section-title">La Préparation</h2>
<img class="svg" src="images/whisk.svg" alt="">
</div>
<div class="preparation">
<?php foreach ($steps as $step): ?>
    <div class="steps"><p class="step-num"><?= htmlspecialchars($step->getStepNumber())?> <?= htmlspecialchars($step->getTitle())?></p>
        <p class="step-desc"><?= htmlspecialchars($step->getDescription())?></p>
        <img src="images/steps/<?= $step->getImage()?>" alt="<?= htmlspecialchars($step->getTitle())?>">
       
    </div>
<?php endforeach; ?>
<p><?= htmlspecialchars($recetteDetails->getDifficulty())?></p>
<p><?= htmlspecialchars($recetteDetails->formatCookingTime($recetteDetails->getCookTimeMinutes()))?></p>
</div>
</section>
</div>
</main>
<?php
require_once __DIR__ . "/inc/footer.php";
?>