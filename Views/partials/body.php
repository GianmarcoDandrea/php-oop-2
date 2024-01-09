<div class="container d-flex flex-wrap justify-content-between my-3">
    <?php foreach ($products as $product) { ?>
        <div class="card m-4" style="width: 25%">
            <img src="<?php echo $product->getImg() ?>" class="card-img-top p-5" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <?php echo $product->getName() ?>
                </h5>
            </div>
            <ul class="list-group list-group-flush">

                <!-- PRICE LIST ITEM -->
                <li class="list-group-item">
                    <span class="fw-bold">
                        Price:
                    </span>
                    <?php echo $product->getPrice() . ' ' . '$' ?>
                </li>


                <!--LIST ITE FOR WHAT PET IS THE PRODUCT  -->
                <li class="list-group-item">
                    <span class="fw-bold">
                        For:
                    </span>

                </li>


                <!--ITEM LIST FOR THE DIFFERENT ATTRIBUTES OF THE PRODUCT  -->
                <li class="list-group-item">

                    <?php if (property_exists($product , 'expire')) { ?>

                        <span class="fw-bold">
                            Expire:
                        </span>
                        <?php echo $product->getExpire() ?>

                    <?php } else if (property_exists($product , 'type' )) { ?>

                        <span class="fw-bold">
                            Type:
                        </span>

                        <?php echo $product->getType() ?>

                    <?php } else if (property_exists($product , 'material' )) { ?>

                        <span class="fw-bold">
                            Material:
                        </span>

                        <?php echo $product->getMaterial() ?>
                    <?php } ?>
                </li>
            </ul>
        </div>
    <?php } ?>

</div>