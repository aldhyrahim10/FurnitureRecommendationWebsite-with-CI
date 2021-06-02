    <main>
        <div class="header-product text-center mt-5">
            <div class="container">
                <h1>
                    <b>Product</b>    
                </h1>
                <p>
                    Jelajahi dan Dapatkan
                    <br>
                    Furniture yang kamu inginkan
                </p>
            </div>
        </div>

        <section class="section-product">
            <div class="container">
                <div class="row justify-content-center">

                    <?php foreach($products as $item):?>

                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <div class="card-product text-center">
                            <div class="product-image">
                                <img src="<?= $item->images; ?>" width="250px" alt="">
                            </div>
                            <div class="product-name"><?= $item->description; ?></div>
                            <div class="product-price"><?= $item->price; ?></div>
                            <div class="product-button-detail">
                                <a href="<?= base_url('product/productdetail/'.$item->id); ?>" class="btn btn-product-detail">
                                    Lihat Product
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>                
            </div>  
        </section>
    </main>