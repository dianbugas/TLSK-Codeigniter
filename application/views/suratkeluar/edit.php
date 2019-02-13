<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Surat Keluar
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <input type="hidden"  name="id" value="<?= $suratkeluar['id']; ?>">
                        <div class="form-group row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-7">
                            <input type="text" name="nomor_surat" class="form-control" id="nomor_surat" value="<?= $suratkeluar['nomor_surat']; ?>">
                            <small class="form-text text-danger"><?= form_error('nomor_surat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_surat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-7">
                            <input type="date" name="tanggal_surat" class="form-control" value="<?= $suratkeluar['tanggal_surat']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_surat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dari" class="col-sm-2 col-form-label">Dari</label>
                            <div class="col-sm-7">
                            <input type="text" name="dari" class="form-control" id="dari" placeholder="Dari" value="<?= $suratkeluar['dari']; ?>">
                            <small class="form-text text-danger"><?= form_error('dari'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                            <div class="col-sm-7">
                            <input type="text" name="perihal" class="form-control" id="perihal" value="<?= $suratkeluar['perihal']; ?>">
                            <small class="form-text text-danger"><?= form_error('perihal'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
                            <div class="col-sm-7">
                            <input type="text" name="lampiran" class="form-control" id="lampiran" value="<?= $suratkeluar['lampiran']; ?>">
                            <small class="form-text text-danger"><?= form_error('lampiran'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-7">
                                <textarea class="form-control <?= form_error('keterangan') ? 'is-invalid' : '' ?>"
                                    name="keterangan"><?= $suratkeluar['keterangan']; ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('keterangan') ?>
                                </div>
                            </div>
						</div>
                        <div class="form-group row">
                                <label for="surat" class="col-sm-2 col-form-label">Surat</label>
                                <div class="col-sm-7">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="surat" id="surat" value="<?= $suratkeluar['surat']; ?>">
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