<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Content</h3>
                        </div>
                    <div class="panel-body">
                        <table class="table table-hover" id="table">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach( $content as $item) :?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['judul']; ?></td>
                                    <td><?= $item['deskripsi']; ?></td>
                                    <td><?= $item['date']; ?></td>
                                    <td class="">
                                        <a href="<?= base_url('admin/content/update/'.$item['id']) ;?>" class=" btn btn-warning rounded btn-sm">Edit</a>
                                        <a href="<?= base_url('admin/content/delete/'.$item['id']) ;?>" class=" btn btn-danger rounded btn-sm hapus" onClick="return confirm('Apakah anda yakin?')">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>