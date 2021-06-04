<!-- <?php
    var_dump($products);
    ?>     -->
        
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
                <a href="https://www.ikea.co.id/in/layanan-pelanggan/solusi-pembiayaan">
                    <img alt="" class="img-fluid" src="https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/uploader/image/1552617230_889.png">
                </a>
                <br><br>
                <div class="row justify-content-center">
                    <?php $i = $this->uri->segment(2); ?>
                    <a href="<?= base_url('product') ?>" class="btn btn-category">Semua</a>
                    <a href="<?= base_url('product/ruangtamu') ?>" class="btn btn-category 
                    <?php if($i == 'ruangtamu'){
                        echo 'active';
                    } ;?>">Ruang Tamu</a>
                    <a href="<?= base_url('product/ruangmakan') ?>" class="btn btn-category 
                    <?php if($i == 'ruangmakan'){
                        echo 'active';
                    } ;?>">Ruang Makan</a>
                    <a href="<?= base_url('product/ruangtidur') ?>" class="btn btn-category
                    <?php if($i == 'ruangtidur'){
                        echo 'active';
                    } ;?>">Ruang Tidur</a>
                    <a href="<?= base_url('product/ruangdapur') ?>" class="btn btn-category 
                    <?php if($i == 'ruangdapur'){
                        echo 'active';
                    } ;?>">Ruang Dapur</a>
                    <a href="<?= base_url('product/ruangkeluarga') ?>" class="btn btn-category
                    <?php if($i == 'ruangkeluarga'){
                        echo 'active';
                    } ;?>">Ruang Keluarga</a>
                    <a href="<?= base_url('product/ruangmandi') ?>" class="btn btn-category 
                    <?php if($i == 'ruangmandi'){
                        echo 'active';
                    } ;?>">Ruang Mandi</a>
                    <a href="<?= base_url('product/luarruang') ?>" class="btn btn-category 
                    <?php if($i == 'luarruang'){
                        echo 'active';
                    } ;?>">Luar Ruang</a>
                    <a href="<?= base_url('product/perkantoran') ?>" class="btn btn-category
                    <?php if($i == 'perkantoran'){
                        echo 'active';
                    } ;?>">Kantor</a>
                </div>
                    <div class="row justify-content-center">
    
                        <?php
                        
                        foreach($products as $item):?>
    
                        <?php if($item->kategori == $kategori) :?>
    
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="card-product text-center" style="margin-top: 70px;">
                                <div class="product-image">
                                    <img src="<?= $item->image; ?>" width="250px" alt="">
                                </div>
                                <div class="product-name"><?= $item->nama; ?></div>
                                <div class="product-price">Rp <?= $item->harga; ?></div>
                                <div class="product-button-detail">
                                    <a href="<?= base_url('product/productdetail/'. $item->id ); ?>" class="btn btn-product-detail">
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
        </main>