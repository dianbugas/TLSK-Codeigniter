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
            <a href="<?= base_url(); ?>suratmasuk/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Surat Masuk" name="keyword">
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
                <h3>Daftar Surat Masuk</h3>
                <?php if (empty($suratmasuk)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Mahasiswa tidak ditemukan
                    </div>
                <?php endif; ?>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col md-3" class="text-center">no</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Nomor Surat</th>
                            <th scope="col" class="text-center">Tanggal Surat</th>
                            <th scope="col" class="text-center">Dari</th>
                            <th scope="col" class="text-center">Prihal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($suratmasuk as $sm) : ?>
                        <tr>
                            <th class="text-center"><?= $no++; ?></th>
                            <th>
                                <a href="#" class="fa fa-download fa-lg" style="color:black"></a>
                                <a href="<?= base_url(); ?>suratmasuk/detail/<?= $sm['id']; ?>" class="fa fa-search-plus fa-lg"></a>
                                <a href="<?= base_url(); ?>suratmasuk/edit/<?= $sm['id']; ?>" class="fa fa-pencil-square-o fa-lg" style="color:Green"></a>
                                <a href="<?= base_url(); ?>suratmasuk/hapus/<?= $sm['id']; ?>" class="fa fa-trash fa-lg tombol-hapus" style="color:red"></a>
                            </th>
                            <th><?= $sm['nomor_surat']; ?></th> 
                            <th><?= $sm['tanggal_surat']; ?></th>
                            <th><?= $sm['dari']; ?></th>
                            <th><?= $sm['perihal']; ?></th>   
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

