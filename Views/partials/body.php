<div class="container d-flex flex-wrap justify-content-between">
    <?php foreach ($products as $product) { ?>
        <div class="card m-4" style="width: 25%">
            <img src="<?php echo $product->getImg() ?>" class="card-img-top p-5" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <?php echo $product->getName() ?>
                </h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span class="fw-bold">
                        Price:
                    </span>
                    <?php echo $product->getPrice() . ' ' . '$' ?>
                </li>
                <li class="list-group-item"><span class="fw-bold">
                        For:
                    </span>
                    <img src="" alt="">

                </li>
                <li class="list-group-item">A third item</li>
            </ul>
        </div>
    <?php } ?>

</div>