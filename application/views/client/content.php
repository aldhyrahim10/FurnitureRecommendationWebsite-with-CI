    <main>
        <nav aria-label="breadcrumb" class="navbar-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <i class="fas fa-home"></i>
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Blog</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#"><?= $content['judul'] ;?></a>
                </li>
            </ol>
        </nav>

        <header class="header-content-detail">

            <img class="image-content" src="<?= base_url('upload_folder/'. $content['image']) ;?>" alt="">

            <div class="heading-content">
                <h1><?= $content['judul'] ;?></h1>
                
                <p class="author">
                    by Admin, <span class="date"><?= $content['date'] ;?></span>
                </p>
            </div>
        </header>

        <div class="card-content">
            <div class="row">
                <div class="col-md-10" class="content-place">
                    <p class="content">
                    <?= $content['deskripsi'] ;?>
                    </p>
                </div>
                <div class="col-md-2">
                    
                </div>
            </div>
        </div>
    </main>