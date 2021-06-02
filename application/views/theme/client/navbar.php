    <div class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="navbar-brand">
                <!-- <img src="frontend/images/Logo_smartweb.png" alt="logo NOMADS"> -->
                <h3>FINDER</h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="<?= base_url('home');?>" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="<?= base_url('product');?>" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="<?= base_url('blog');?>" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="<?= base_url('recommendation');?>" class="nav-link">Rekomendasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dLabel" type="button" data-toggle="dropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" href="#" role="button" aria-expanded="false">Lainnya</a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a class="dropdown-item" href="<?= base_url('guestlist') ;?>">Buku Tamu</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('feedback/list') ;?>">Feedbacks</a></li>
                            <li><a class="dropdown-item" href="#">Manual Book</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>