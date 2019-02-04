<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Detail Disposisi</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col"><?= $disposisi['iddivisi']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col"><?= $disposisi['keterangan']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Dari</th>
                    <th scope="col"><?= $disposisi['idsuratmasuk']; ?></th>
                </tr>
            </table>
            <a href="<?= base_url(); ?>disposisi/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
