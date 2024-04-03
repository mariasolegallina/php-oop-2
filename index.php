<?php
require 'db.php';
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
</div>




<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>