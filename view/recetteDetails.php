<?php
require_once __DIR__ . "/inc/header.php";
?>
<main>
<section class="recipe-description">

    <div class="container recipe-grid">
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
                class="recipe-inside-img"
                src="images/main-recipe-img/<?= htmlspecialchars($recetteDetails->getMainImage())?>"
                alt="<?= htmlspecialchars($recetteDetails->getTitle()) ?>">
        </div>

    </div>

</section>
<section class="recipe-description comments">

</section>
<section class="recipe-description ">
    <div class="container">
<h2>Ingredients</h2>
<div class="ingredients">
<?php foreach ($ingredients as $ingredient): ?>
    <div class="card">
       <img src="images/ingridients/<?= htmlspecialchars($ingredient->getImgIngrigient() )?>" alt="">
<p> <?= htmlspecialchars($ingredient->getName() )?> <?= htmlspecialchars($ingredient->getQuantity() )?> <?= htmlspecialchars($ingredient->getUnit())?>
</div>
<?php endforeach; ?>
</div>
</div>
</section>

</main>
<?php
require_once __DIR__ . "/inc/footer.php";
?>