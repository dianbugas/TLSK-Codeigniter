<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Data Surat Masuk</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col"><?= $suratmasuk['nomor_surat']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col"><?= $suratmasuk['tanggal_surat']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Tanggal Terima</th>
                    <th scope="col"><?= $suratmasuk['tanggal_terima']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Dari</th>
                    <th scope="col"><?= $suratmasuk['dari']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Prihal</th>
                    <th scope="col"><?= $suratmasuk['perihal']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Lampiran</th>
                    <th scope="col"><?= $suratmasuk['lampiran']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col"><?= $suratmasuk['keterangan']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Surat</th>
                    <th scope="col"><?= $suratmasuk['surat']; ?></th>
                </tr>
            </table>
            <a href="<?= base_url(); ?>suratmasuk/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
