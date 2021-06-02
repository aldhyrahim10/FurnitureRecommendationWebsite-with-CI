    <main>
        <div class="text-center header-blog">
            <div class="container">
                <h1>
                    <b>Blog/Artikel</b>    
                </h1>
                <p>
                    Kami menyediakan Blog/Artikel
                    <br>
                    sebagai referensi anda dalam mencari furniture
                </p>
            </div>
        </div>

        <section class="section-blog">
            <div class="container">
                <div class="row justify-content-center">
                    <?php foreach($content as $item): ?>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card-blog">
                            <div class="card-content-image">
                                <img src="<?= base_url('upload_folder/'.$item['image']) ;?>" alt="" width="350px">
                            </div>
                            <div class="card-blog-title">
                                <h4>
                                    <?= $item['judul']; ?>
                                </h4>
                            </div>
                            <div class="card-blog-content">
                                <p>
                                    <?= $item['shortdesc']; ?>
                                </p>
                            </div>
                            <div class="card-blog-date">
                                <p><?= $item['date']; ?></p>
                            </div>
                            <div class="card-blog-detail">
                                <a class="blog-link" href="<?= base_url('blog/blogdetail/'.$item['id']);?>">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>                
            </div>
        </section>
    </main>