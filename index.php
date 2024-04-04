<?php
require 'db.php';

echo '<pre>', var_dump($products), '</pre>';

// header
require './Layout/header.php'
?>



<div class="row row-cols-3 row-gap-4">

    <?php
    foreach ($products as $product) {
    ?>
        <div class="col d-flex justify-content-center">
            <div class="card border border-0">
                <img src="<?= $product->image ?>" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title d-flex gap-2">
                        <span><i class="fa-solid <?= $product->category->icon ?>"></i></span>
                        <span><?= $product->name ?></span>
                    </h5>
                    <p>€ <?= $product->price ?></p>

                    <!-- more info -->




                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<!-- footer -->
<?php
require './Layout/footer.php'
?>