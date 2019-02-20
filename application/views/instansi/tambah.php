<div class="container">
    <div class="row mt-4"></div>
    <div class="card-header">
        <h2>Tambah Data Instansi</h2>
    </div>
    <div class="card-body">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="institusi">Institusi</label>
                <input type="text" name="institusi" class="form-control" id="institusi" placeholder="Institusi">
                <small class="form-text text-danger"><?= form_error('institusi'); ?></small>
            </div>
            <div class="form-group col-md-6">
                <label for="nip">Nip</label>
                <input type="text" name="nip" class="form-control" id="nip" placeholder="Nip">
                <small class="form-text text-danger"><?= form_error('nip'); ?></small>           
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small> 
            </div>
            <div class="form-group col-md-6">
                <label for="website">Website</label>
                <input type="text" name="website" class="form-control" id="website" placeholder="Website">
                <small class="form-text text-danger"><?= form_error('website'); ?></small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" id="status" placeholder="Status">
                <small class="form-text text-danger"><?= form_error('status'); ?></small> 
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                <small class="form-text text-danger"><?= form_error('email'); ?></small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Logo</label>
                <input type="text" class="form-control-file" id="exampleFormControlFile1" name="logo" id="logo">
                <small class="form-text text-danger"><?= form_error('logo'); ?></small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kepsek">Kepsek</label>
                <input type="text" name="kepsek" class="form-control" id="kepsek" placeholder="Kepsek">
                <small class="form-text text-danger"><?= form_error('kepsek'); ?></small>
            </div>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
    </form>
    </div>
</div>