<div class="container">
    <div class="row-mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <div class="form-group">
                            <label for="nomor_surat">Nomor Surat</label>
                            <input type="text" name="nomor_surat" class="form-control" id="nomor_surat">
                            <small class="form-text text-danger"><?= form_error('nomor_surat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_surat">Tanggal Surat</label>
                            <div>
                            <input type="text" name="tanggal_surat" class="form-control" id="datepicker4" width="300">
                            <small class="form-text text-danger"><?= form_error('tanggal_surat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_terima">Tanggal Terima</label>
                            <input type="text" name="tanggal_terima" class="form-control" id="datepicker3" width="300">
                            <small class="form-text text-danger"><?= form_error('tanggal_terima'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="dari">Dari</label>
                            <input type="text" name="dari" class="form-control" id="dari">
                            <small class="form-text text-danger"><?= form_error('dari'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input type="text" name="perihal" class="form-control" id="perihal">
                            <small class="form-text text-danger"><?= form_error('perihal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="lampiran">Lampiran</label>
                            <input type="text" name="lampiran" class="form-control" id="lampiran">
                            <small class="form-text text-danger"><?= form_error('lampiran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="surat">Surat</label>
                            <input type="file" name="surat" class="form-control" id="surat">
                            <small class="form-text text-danger"><?= form_error('surat'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>