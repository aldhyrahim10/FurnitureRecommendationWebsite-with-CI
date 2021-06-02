<main>
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
                    <a href="#"><?= $product[$name] ;?></a>
                </li>
            </ol>
        </nav>

        <section class="section-product-detail">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-5">
                        <div class="card-image-product">
                            <center>
                                <img src="<?= $product[$image] ;?>" width="450px" alt="">
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-5">
                        <div class="card-product-detail text-center">
                            <div class="card-product-title">
                                <h2>
                                    <?= $product[$name] ;?>
                                </h2>
                            </div>
                            <div class="card-product-resume">
                                <p class="title-description">Deskripsi Singkat</p>
                                <p class="description">
                                    <?= $product[$description] ;?> 
                                </p>
                            </div>
                            <div class="product-button">
                                <a href="<?= $product[$url] ;?>" class="btn btn-product">Pesan</a>
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
                       <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien turpis purus nunc elementum diam augue ipsum, ac. Sed nec in eu rhoncus. In augue eget feugiat pellentesque sapien, eget facilisi malesuada. Fermentum nullam eget turpis at sit lectus leo duis facilisis. Scelerisque augue scelerisque aliquet vehicula cras. Placerat odio scelerisque euismod netus volutpat proin amet tempor. Est dignissim arcu, quis nunc. Elementum quis enim ipsum viverra. Ut non amet, elit amet, consequat euismod eget. Sit consectetur donec amet, placerat donec aliquam. Et libero habitasse nunc sed viverra ac eget quis mauris. Adipiscing ut sed suspendisse vel, pellentesque volutpat eget cras placerat.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien turpis purus nunc elementum diam augue ipsum, ac. Sed nec in eu rhoncus. In augue eget feugiat pellentesque sapien, eget facilisi malesuada. Fermentum nullam eget turpis at sit lectus leo duis facilisis. Scelerisque augue scelerisque aliquet vehicula cras. Placerat odio scelerisque euismod netus volutpat proin amet tempor. Est dignissim arcu, quis nunc. Elementum quis enim ipsum viverra. Ut non amet, elit amet, consequat euismod eget. Sit consectetur donec amet, placerat donec aliquam. Et libero habitasse nunc sed viverra ac eget quis mauris. Adipiscing ut sed suspendisse vel, pellentesque volutpat eget cras placerat.
                       </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-review">
            <div class="container">
                <div class="review-title text-center">
                    <h2>
                        Ulasan Produk
                </div>
                <div class="row justify-content-center">
                    <div class="card-review text-center">
                        <div class="card-review-name">
                            <h4>
                                Anonymous
                            </h4>
                        </div>
                        <div class="card-review-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum, facilisi venenatis, nec commodo. Nisl aliquam sagittis, lectus dictum quis gravida maecenas sed.
                            </p>
                        </div>    
                    </div>
                    <div class="card-review text-center">
                        <div class="card-review-name">
                            <h4>
                                Anonymous
                            </h4>
                        </div>
                        <div class="card-review-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum, facilisi venenatis, nec commodo. Nisl aliquam sagittis, lectus dictum quis gravida maecenas sed.
                            </p>
                        </div>    
                    </div>
                    <div class="card-review text-center">
                        <div class="card-review-name">
                            <h4>
                                Anonymous
                            </h4>
                        </div>
                        <div class="card-review-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum, facilisi venenatis, nec commodo. Nisl aliquam sagittis, lectus dictum quis gravida maecenas sed.
                            </p>
                        </div>    
                    </div>
                </div>

                <div class="row justify-content-center">
                    <a href="#" class="btn btn-other">Muat Lainnya</a>
                </div>
            </div>
        </section>


    </main>