<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Surat Masuk
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <input type="hidden"  name="id" value="<?= $suratmasuk['id']; ?>">
                        <div class="form-group row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-7">
                            <input type="text" name="nomor_surat" class="form-control" id="nomor_surat" value="<?= $suratmasuk['nomor_surat']; ?>">
                            <small class="form-text text-danger"><?= form_error('nomor_surat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_surat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-7">
                            <input type="text" name="tanggal_surat" class="form-control" id="datepicker4" width="260" value="<?= $suratmasuk['tanggal_surat']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_surat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_terima" class="col-sm-2 col-form-label">Tanggal Terima</label>
                            <div class="col-sm-7">
                            <input type="text" name="tanggal_terima" class="form-control" id="datepicker3" width="260" value="<?= $suratmasuk['tanggal_terima']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_terima'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dari" class="col-sm-2 col-form-label">Dari</label>
                            <div class="col-sm-7">
                            <input type="text" name="dari" class="form-control" id="dari" placeholder="Dari" value="<?= $suratmasuk['dari']; ?>">
                            <small class="form-text text-danger"><?= form_error('dari'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                            <div class="col-sm-7">
                            <input type="text" name="perihal" class="form-control" id="perihal" value="<?= $suratmasuk['perihal']; ?>">
                            <small class="form-text text-danger"><?= form_error('perihal'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
                            <div class="col-sm-7">
                            <input type="text" name="lampiran" class="form-control" id="lampiran" value="<?= $suratmasuk['lampiran']; ?>">
                            <small class="form-text text-danger"><?= form_error('lampiran'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="surat" class="col-sm-2 col-form-label">Surat</label>
                                <div class="col-sm-7">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="surat" id="surat" value="<?= $suratmasuk['surat']; ?>">
                                <small class="form-text text-danger"><?= form_error('surat'); ?></small>
                                </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>