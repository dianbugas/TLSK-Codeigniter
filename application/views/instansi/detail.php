<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Data Instansi</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col" width="200px">Institusi</th>
                    <th scope="col"><?= $instansi['institusi']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col"><?= $instansi['nama']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col"><?= $instansi['status']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Alamat</th>
                    <th scope="col"><?= $instansi['alamat']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Kepsek</th>
                    <th scope="col"><?= $instansi['kepsek']; ?></th>
                </tr>
                <tr>
                    <th scope="col">nip</th>
                    <th scope="col"><?= $instansi['nip']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Website</th>
                    <th scope="col"><?= $instansi['website']; ?></th>
                </tr>
                <tr>
                    <th scope="col">email</th>
                    <th scope="col"><?= $instansi['email']; ?></th>
                </tr>
                <tr>
                    <th scope="col">logo</th>
                    <th scope="col"><?= $instansi['logo']; ?></th>
                </tr>
            </table>
            <a href="<?= base_url(); ?>instansi/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
