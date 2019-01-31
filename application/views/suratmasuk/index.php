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
            <a href="<?= base_url(); ?>suratmasuk/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
        <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari data mahasiswa" name="keyword">
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
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <tr>
                        <th scope="col md-3">no</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nomor Surat</th>
                        <th scope="col">Tanggal Surat</th>
                        <th scope="col">Dari</th>
                        <th scope="col">Prihal</th>
                        <th scope="col">surat</th>
                        </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($suratmasuk as $sm) : ?>
                    <tr>
                        <th><?= $no++; ?></th>
                        <th>
                            <a href="#" class="badge badge-danger float-right ml-1 tombol-hapus">Hapus</a>
                            <a href="#" class="badge badge-success float-right ml-1">Ubah</a>
                            <a href="#" class="badge badge-primary float-right ml-1">Detail</a>
                            <a href="#" class="icon fa fa-search-plus bigger-120" data-rel="tooltip" title="View">
                                
												
											</a>
                        </th>
                        <th><?= $sm['nomor_surat']; ?></th> 
                        <th><?= $sm['tanggal_surat']; ?></th>
                        <th><?= $sm['dari']; ?></th>
                        <th><?= $sm['perihal']; ?></th>   
                        <th><?= $sm['surat']; ?></th>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

