<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Disposisi
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <div class="form-group row">
                            <label for="iddivisi" class="col-sm-2 col-form-label">Divisi</label>
                            <div class="col-sm-7">
                            <input type="text" name="iddivisi" class="form-control" id="iddivisi" placeholder="Divisi" width="260">
                            <small class="form-text text-danger"><?= form_error('iddivisi'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-7">
                            <input type="text" name="keterangan" class="form-control" id="keterangan" width="260" placeholder="Keterangan">
                            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idsuratmasuk" class="col-sm-2 col-form-label">Surat Masuk</label>
                            <div class="col-sm-7">
                            <input type="text" name="idsuratmasuk" class="form-control" id="idsuratmasuk" placeholder="Surat Masuk" width="260">
                            <small class="form-text text-danger"><?= form_error('idsuratmasuk'); ?></small>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>