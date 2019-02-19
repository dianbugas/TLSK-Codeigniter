<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Edit Instansi
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <input type="hidden"  name="id" value="<?= $tbl_instansi['id']; ?>">
                        <div class="form-group row">
                            <label for="institusi" class="col-sm-2 col-form-label">Institusi</label>
                            <div class="col-sm-7">
                            <input type="text" name="institusi" class="form-control" id="institusi" value="<?= $tbl_instansi['institusi']; ?>">
                            <small class="form-text text-danger"><?= form_error('institusi'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                            <input type="date" name="nama" class="form-control" value="<?= $tbl_instansi['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dari" class="col-sm-2 col-form-label">Dari</label>
                            <div class="col-sm-7">
                            <input type="text" name="dari" class="form-control" id="dari" placeholder="Dari" value="<?= $tbl_instansi['dari']; ?>">
                            <small class="form-text text-danger"><?= form_error('dari'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                            <div class="col-sm-7">
                            <input type="text" name="perihal" class="form-control" id="perihal" value="<?= $tbl_instansi['perihal']; ?>">
                            <small class="form-text text-danger"><?= form_error('perihal'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
                            <div class="col-sm-7">
                            <input type="text" name="lampiran" class="form-control" id="lampiran" value="<?= $tbl_instansi['lampiran']; ?>">
                            <small class="form-text text-danger"><?= form_error('lampiran'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-7">
                                <textarea class="form-control <?= form_error('keterangan') ? 'is-invalid' : '' ?>"
                                    name="keterangan"><?= $tbl_instansi['keterangan']; ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('keterangan') ?>
                                </div>
                            </div>
						</div>
                        <div class="form-group row">
                            <label for="surat" class="col-sm-2 col-form-label">Surat</label>
                            <div class="col-sm-7">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="surat" id="surat" value="<?= $tbl_instansi['surat']; ?>">
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