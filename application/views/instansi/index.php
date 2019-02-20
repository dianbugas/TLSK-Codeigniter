<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data mahasiswa
                <strong>berhasil</strong><?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?> 
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>instansi/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Instansi" name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col md-6">
            <div class="table-responsive-sm">
                <h3>Daftar Instansi</h3>
                <?php if (empty($instansi)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Instansi tidak ditemukan
                    </div>
                <?php endif; ?>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col md-3" class="text-center" width="50px">no</th>
                            <th scope="col" class="text-center" width="100px">Status</th>
                            <th scope="col" class="text-center">Institusi</th>
                            <th scope="col" class="text-center">Nama</th>
                            <th scope="col" class="text-center">Kepsek</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($instansi as $ins) : ?>
                        <tr>
                            <th class="text-center"><?= $no++; ?></th>
                            <th>
                            <a href="<?= base_url(); ?>instansi/detail/<?= $ins['id']; ?>" class="fa fa-search-plus fa-lg"></a>
                            <a href="<?= base_url(); ?>instansi/edit/<?= $ins['id']; ?>" class="fa fa-pencil-square-o fa-lg" style="color:Green"></a>
                            <a href="<?= base_url(); ?>instansi/hapus/<?= $ins['id']; ?>" class="fa fa-trash fa-lg tombol-hapus" style="color:red"></a>
                            </th>
                            <th><?= $ins['institusi']; ?></th>
                            <th><?= $ins['nama']; ?></th>
                            <th><?= $ins['kepsek']; ?></th>   
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

