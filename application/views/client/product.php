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

        <section class="section-product" style="margin-bottom: 100px;">
            <div class="container">
                <div class="row justify-content-center">

                    <?php
                    $i =0;
                    foreach($products as $item):?>

                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <div class="card-product text-center" style="margin-top: 70px;">
                            <div class="product-image">
                                <img src="<?= $item->image; ?>" width="250px" alt="">
                            </div>
                            <div class="product-name"><?= $item->nama; ?></div>
                            <div class="product-price"><?= $item->harga; ?></div>
                            <div class="product-button-detail">
                                <a href="<?= base_url('product/productdetail/'. $i++ ); ?>" class="btn btn-product-detail">
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