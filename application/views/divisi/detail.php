<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Data Divisi</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col">Divisi</th>
                    <th scope="col"><?= $divisi['divisi']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col"><?= $nama['nama']; ?></th>
                </tr>
            </table>
            <a href="<?= base_url(); ?>divisi/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
