<?php
require 'db.php';

// header
require './Layout/header.php'
?>



<div class="row row-cols-3">

    <?php
    foreach ($products as $product) {
    ?>
        <div class="col d-flex justify-content-center">
            <div class="card border border-0">
                <img src="<?= $product->image ?>" class="card-img-top">
                <div class="card-body">
                    <h5><?= $product->name ?></h5>

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