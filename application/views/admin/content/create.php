<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Content</h3>
                        </div>
                    <div class="panel-body">
                        <form action="<?= site_url('admin/content/insert/') ;?>" method="POST" enctype="multipart/form-data">
                            <div class="row mb-2">
                                <label for="name" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-8">
                                <input type="text" name="judul" class="form-control" id="judul" value="<?= set_value('judul');?>"><br>
                                <?= form_error('judul', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                            </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Short Desc</label>
                            <div class="col-sm-10">
                                <input type="text" name="shortdesc" class="form-control" id="shortdesc" value="<?= set_value('shortdesc');?>"><br>
                                <?= form_error('shortdesc', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                            </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Deskripsi Content</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" class="ckeditor form-control" id="deskripsi" rows="4">
                                </textarea>
                                <?= form_error('deskripsi', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                <br>
                            </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="" id="image"><br>
                                <?= form_error('image', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                            </div>
                            </div>
                            <div class="row mb-3">
                                <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal" class="" id="tanggal" value="<?= set_value('tanggal');?>"><br>
                                <?= form_error('tanggal', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                            </div>
                            </div>
                            <br>
                            <input type="submit" value="submit" name="submit" class="btn btn-primary">
                        </form>

                        <?php if(!empty($response)):?>
	                        <?php echo $response ;?>
                        <?php endif ;?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>