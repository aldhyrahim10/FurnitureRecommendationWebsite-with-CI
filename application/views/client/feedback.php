        <main>
            <section class="section-suggestion">
                <div class="container">
                    <div class="section-suggestion-heading text-center">
                        <h2>Saran dan Masukan</h2>
                        <p>
                            Kami menerima saran dan Masukan
                            <br>
                            dari para pengguna untuk pengembangan
                            <br>
                            aplikasi kedepannya
                        </p>
                    </div>
                    <div class="section-suggestion-form">
                        <div class="card-form text-center">
                            <h3>Form Saran dan Masukan</h3>
                            <center>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nama" name="name" id="name" class="form-control col-sm-8 col-md-8 col-lg-8" >
                                        <?= form_error('name', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" name="email" id="email" class="form-control col-sm-8 col-md-8 col-lg-8">
                                        <?= form_error('email', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="suggestion" id="suggestion" cols="30" rows="10" class="form-control col-sm-8 col-md-8 col-lg-8" placeholder="Ketik Saran dan Masukan"></textarea>
                                        <?= form_error('suggestion', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
    
                                    <button class="btn btn-submit" type="submit" name="submit" value="submit">Submit</button>
    
                                </form>
                            </center>
                        </div>
                    </div>
                </div>
            </section>
</main>