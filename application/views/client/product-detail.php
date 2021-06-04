    <main>

<?php foreach($product as $item) : ?>
    <?php if($item->id == $info) :?>
        <!-- <?php
            var_dump($item);
        ?> -->


        <nav aria-label="breadcrumb" class="navbar-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <i class="fas fa-home"></i>
                    <a href="<?= base_url('home');?>">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= base_url('product');?>">Product</a>
                </li>

                <li class="breadcrumb-item">
                    <a href="#"><?= $item->nama ;?></a>
                </li>
            </ol>
        </nav>

        <div class="container">
            <a href="https://www.ikea.co.id/in/layanan-pelanggan/solusi-pembiayaan">
                <img alt="" class="img-fluid" src="https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/uploader/image/1552617230_889.png">
            </a>
        </div>

        <section class="section-product-detail">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-5">
                        <div class="card-image-product">
                            <center>
                                <img src="<?= $item->image ;?>" width="450px" alt="">
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-5">
                        <div class="card-product-detail text-center">
                            <div class="card-product-title">
                                <h2>
                                    <?= $item->nama ;?>
                                </h2>
                            </div>
                            <div class="card-product-resume">
                                <p class="title-description">Deskripsi Singkat</p>
                                <p class="description">
                                    <?= $item->desc1 ;?> 
                                </p>
                            </div>
                            <div class="card-product-title">
                                <h2>
                                    Rp <?= $item->harga ;?>
                                </h2>
                            </div>
                            <div class="product-button">
                                <a href="<?= $item->url ;?>" class="btn btn-product" target="_blank">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-product-description-full">
            <div class="container">
                <div class="card-description">
                    <div class="product-description-title text-center">
                        <h2>
                            Deskripsi Product
                        </h2>
                    </div>
                    <div class="product-description-content">
                       <?= $item->desc2 ;?>
                       <br><br>
                       <p>Panjang : <?= $item->panjang ;?></p>
                       <p>Lebar : <?= $item->lebar ;?></p>
                       <p>Kategori : <?= $item->kategori ;?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php endif ; ?>
<?php endforeach ;?>