<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Divisi
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <div class="form-group row">
                            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                            <div class="col-sm-7">
                            <input type="text" name="divisi" class="form-control" id="divisi" placeholder="Divisi" width="260">
                            <small class="form-text text-danger"><?= form_error('divisi'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                            <input type="text" name="nama" class="form-control" id="nama" width="260" placeholder="Nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>