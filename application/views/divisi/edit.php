<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Divisi
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <input type="hidden"  name="id" value="<?= $divisi['id']; ?>">
                        <div class="form-group row">
                            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                            <div class="col-sm-7">
                            <input type="text" name="divisi" class="form-control" id="divisi" value="<?= $divisi['divisi']; ?>">
                            <small class="form-text text-danger"><?= form_error('divisi'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-7">
                            <input type="text" name="nama" class="form-control" id="nama" width="260" value="<?= $divisi['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>