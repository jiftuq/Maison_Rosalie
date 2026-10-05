<?php
require_once __DIR__ . "/inc/header.php";
?>
<main>

<div class="container">
            <h1 class="apropos_title">Recettes de Maison Rosalie</h1>

<section class="recipes">


<?php foreach ($recipes as $recipe): ?>
    <div class="card-recipe">
        <h3 class="card-title" ><?= htmlspecialchars($recipe->getTitle()) ?></h3>
        <a href="?page=recetteDetails&slug=<?= urlencode($recipe->getSlug()) ?>">

<img class="card-img" src="images/cards/<?= htmlspecialchars($recipe->getMainImage())?>"

    alt="<?= htmlspecialchars($recipe->getTitle()) ?>"

>
</a>

</div>
<?php endforeach; ?>
</section>

        </div>
       
</main>
<?php
require_once __DIR__ . "/inc/footer.php";
?>