<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Verifikasi
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <input type="hidden"  name="id" value="<?= $verifikasi['id']; ?>">
                        <div class="form-group row">
                            <label for="persetujuan" class="col-sm-2 col-form-label">Persetujuan</label>
                            <div class="col-sm-7">
                            <input type="text" name="persetujuan" class="form-control" id="persetujuan" value="<?= $verifikasi['persetujuan']; ?>">
                            <small class="form-text text-danger"><?= form_error('persetujuan'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-7">
                            <input type="text" name="keterangan" class="form-control" id="keterangan" width="260" value="<?= $verifikasi['keterangan']; ?>">
                            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idsuratkeluar" class="col-sm-2 col-form-label">Surat Keluar</label>
                            <div class="col-sm-7">
                            <input type="text" name="idsuratkeluar" class="form-control" id="idsuratkeluar" width="260" value="<?= $verifikasi['idsuratkeluar']; ?>">
                            <small class="form-text text-danger"><?= form_error('idsuratkeluar'); ?></small>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>