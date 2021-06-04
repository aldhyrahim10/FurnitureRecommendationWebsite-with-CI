    <main>
        <section class="section-recommend">
            <div class="recommend-heading">
                <div class="text-center">
                    <h1>Rekomendasi</h1>
                    <p>
                        Gunakan fitur "Rekomendasi"
                        <br>
                        untuk memudahkan anda dalam mencari furniture
                        <br>
                        impian anda
                    </p>
                </div>
            </div>
        </section>

        <section class="section-recommend-form">
            <div class="container">
                <form action="<?= base_url('recommendation/result') ;?>" method="post">
                    <!-- <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="form-control col-lg-8" name="category" id="category">
                            <option value="">--Pilih Ruangan--</option>
                            <option value="Ruang Tamu">Ruang Tamu</option>
                            <option value="Ruang Keluarga">Ruang Keluarga</option>
                            <option value="Kamar Tidur">Ruang Tidur</option>
                            <option value="Ruang Dapur">Ruang Dapur</option>
                            <option value="Ruang Makan">Ruang Makan</option>
                            <option value="Kamar Mandi">Ruang Mandi</option>
                            <option value="Luar Ruang<">Luar Ruang</option>
                            <option value="Perkantoran">Kantor</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="">Panjang Furniture</label>
                        <input type="number" class="form-control col-lg-8" name="panjang" id="panjang" placeholder="Dalam Satuan CM">
                    </div>
                    <div class="form-group">
                        <label for="">Lebar Furniture</label>
                        <input type="number" class="form-control col-lg-8" name="lebar" id="lebar" placeholder="Dalam Satuan CM">
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control col-lg-8" name="harga" id="harga" placeholder="Dalam Satuan Rupiah (ex 500000)">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-recommend">Cari Furniture</button>
                    </div>
                </form>
            </div>
        </section>
    </main>