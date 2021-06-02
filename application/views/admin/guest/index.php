<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Book Guest</h3>
                        </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach( $guest as $item) :?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['nama']; ?></td>
                                    <td><?= $item['email']; ?></td>
                                    <td><?= $item['phone']; ?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
