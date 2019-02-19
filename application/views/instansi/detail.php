<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Detail Instansi</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col" width="200px">Institusi</th>
                    <th scope="col"><?= $tbl_instansi['institusi']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col"><?= $tbl_instansi['nama']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col"><?= $tbl_instansi['status']; ?></th>
                </tr>
            </table>
            <a href="<?= base_url(); ?>instansi/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
