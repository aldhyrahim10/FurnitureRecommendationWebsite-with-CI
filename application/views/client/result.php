    <main>
        <section class="section-recommend">
            <div class="recommend-heading">
                <div class="text-center">
                    <h1>Furniture Ditemukan!!</h1>
                    <p>
                        Berikut adalah furniture yang kami rekomendasikan
                        <br>
                        berdasarkan yang anda inginkan
                    </p>
                </div>
            </div>
        </section>
        
        <section class="section-list-result">
            <div class="container">
                <div class="row">
                    <?php foreach($product as $item):?>
    
                        <?php if($item->panjang <= $panjang):?>
    
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="card-product text-center" style="margin-top: 70px;">
                                <div class="product-image">
                                    <img src="<?= $item->image; ?>" width="250px" alt="">
                                </div>
                                <div class="product-name"><?= $item->nama; ?></div>
                                <div class="product-price"><?= $item->harga; ?></div>
                                <div class="product-button-detail">
                                    <a href="<?= base_url('product/productdetail/'. $item->id ); ?>" class="btn btn-product-detail">
                                        Lihat Product
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <?php endif; ?>

                        <?php if($item->lebar <= $lebar):?>
    
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="card-product text-center" style="margin-top: 70px;">
                                <div class="product-image">
                                    <img src="<?= $item->image; ?>" width="250px" alt="">
                                </div>
                                <div class="product-name"><?= $item->nama; ?></div>
                                <div class="product-price"><?= $item->harga; ?></div>
                                <div class="product-button-detail">
                                    <a href="<?= base_url('product/productdetail/'. $item->id ); ?>" class="btn btn-product-detail">
                                        Lihat Product
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php endif; ?>

                        <?php if($item->harga <= $harga):?>
    
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="card-product text-center" style="margin-top: 70px;">
                                <div class="product-image">
                                    <img src="<?= $item->image; ?>" width="250px" alt="">
                                </div>
                                <div class="product-name"><?= $item->nama; ?></div>
                                <div class="product-price">Rp <?= $item->harga; ?></div>
                                <div class="product-button-detail">
                                    <a href="<?= base_url('product/productdetail/'. $item->id ); ?>" class="btn btn-product-detail" target="_blank">
                                        Lihat Product
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php endif; ?>
    
                    <?php endforeach; ?>
                </div>   
            </div>
        </section>

        <section class="section-benefit">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-8 col-lg-5">
                        <div class="card-image-benefit">
                            <center>
                                <img src="<?= base_url('assets/frontend/images/review.png') ; ?>" width="350px" alt="">
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-5">
                        <div class="card-text-benefit">
                            <h2>Berikan Penilaian Untuk Fitur Kami
                            </h2>
                            <p>
                                Berikan masukan dan saran anda terhadap fitur Recommendation yang kami hadirkan untuk pengembangan fitur ke depannya agar membuat anda semakin nyaman 
                            </p>
                            <div class="text-center">
                                <a href="<?= base_url('feedback') ?>" class="btn btn-saran">Masukan dan Saran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>