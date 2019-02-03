<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Data Surat Surat</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col"><?= $suratkeluar['nomor_surat']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col"><?= $suratkeluar['tanggal_surat']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Dari</th>
                    <th scope="col"><?= $suratkeluar['dari']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Prihal</th>
                    <th scope="col"><?= $suratkeluar['perihal']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Lampiran</th>
                    <th scope="col"><?= $suratkeluar['lampiran']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col"><?= $suratkeluar['keterangan']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Surat</th>
                    <th scope="col"><?= $suratkeluar['surat']; ?></th>
                </tr>
            </table>
            <a href="<?= base_url(); ?>suratkeluar/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
