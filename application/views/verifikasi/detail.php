<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Data Detail Verifikasi</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col">Persetujuan</th>
                    <th scope="col"><?= $verifikasi['persetujuan']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col"><?= $verifikasi['keterangan']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Surat Keluar</th>
                    <th scope="col"><?= $verifikasi['idsuratkeluar']; ?></th>
                </tr>
            </table>
            <a href="<?= base_url(); ?>verifikasi/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
