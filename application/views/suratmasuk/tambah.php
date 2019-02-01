<div class="container">
    <div class="row mt-3">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <div class="col-sm-8">
                            <input type="text" name="nomor_surat" class="form-control" id="nomor_surat">
                            <small class="form-text text-danger"><?= form_error('nomor_surat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_surat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-8">
                            <input type="text" name="tanggal_surat" class="form-control" id="datepicker4" width="276">
                            <small class="form-text text-danger"><?= form_error('tanggal_surat'); ?></small>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
