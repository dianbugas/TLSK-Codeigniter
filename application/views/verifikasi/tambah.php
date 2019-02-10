<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Verifikasi
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <div class="form-group row">
                            <div class="col-sm-2" for="persetujuan" name="persetujuan" id="persetujuan">
                                Persetujuan
                            </div>
                            <div class="col md-10">
                            <div class="form-check">
                                <div class="col md-6">
                                    <input class="form-check-input" type="checkbox" for="persetujuan" name="persetujuan" id="persetujuan">
                                    <label class="form-check-label" for="persetujuan" name="persetujuan" id="persetujuan">
                                    Setuju
                                    </label>
                                </div>
                                <div class="col md-4">
                                    <input class="form-check-input" type="checkbox" for="persetujuan" name="persetujuan" id="persetujuan">
                                    <label class="form-check-label" for="persetujuan" name="persetujuan" id="persetujuan">
                                    Tidak Setuju
                                    </label>
                                </div>
                            </div>
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
                            <label for="idsuratkeluar" class="col-sm-2 col-form-label">Surat Keluar</label>
                            <div class="col-sm-7">
                            <input type="text" name="idsuratkeluar" class="form-control" id="idsuratkeluar" width="260" placeholder="Surat Keluar">
                            <small class="form-text text-danger"><?= form_error('idsuratkeluar'); ?></small>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>