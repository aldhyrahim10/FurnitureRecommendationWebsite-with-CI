    <main>
        <section class="section-guest-heading">
            <div class="container">
                <div class="text-center">
                    <h1 class="guest-heading-title">
                        Feedbacks
                    </h1>
                    <p class="guest-heading-desc">
                        Terima kasih telah 
                        <br>
                        memberikan saran dan masukan kepada kami
                    </p>
                </div>
            </div>
        </section>
        <section class="section-list-guest">
            <div class="container">
                <div class="card col-md-8">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="text-center">Daftar-daftar feedback</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>feedback</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($feedback as $item) :?>
                                <tr>
                                    <td><?= $item['id'] ;?></td>
                                    <td><?= $item['name'] ;?></td>
                                    <td><?= $item['isi'] ;?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>