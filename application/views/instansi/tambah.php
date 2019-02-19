<div class="container">
    <div class="row mt-4">
        <div class="col md-8">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="institusi">Institusi</label>
                <input type="text" name="institusi" class="form-control" id="institusi" placeholder="Institusi">
                <small class="form-text text-danger"><?= form_error('institusi'); ?></small>
            </div>
            <div class="form-group col-md-6">
             <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>           
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
    </form>
   
        </div>
    </div>
    <div class="row mt-4">
        <div class="col md-8">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Institusi
                </div>
                <div class="card-deck">
                    <form action="" method='post'>
                        
                        <div class="form-group row">
                           
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7">
                            <input type="text" name="status" class="form-control" id="status" width="260" placeholder="Status">
                            <small class="form-text text-danger"><?= form_error('status'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                            <input type="text" name="alamat" class="form-control" id="alamat" width="260" placeholder="Alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kepsek" class="col-sm-2 col-form-label">Kepsek</label>
                            <div class="col-sm-7">
                            <input type="text" name="kepsek" class="form-control" id="kepsek" width="260" placeholder="Kepsek">
                            <small class="form-text text-danger"><?= form_error('kepsek'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                            <div class="col-sm-7">
                            <input type="text" name="nip" class="form-control" id="nip" width="260" placeholder="Nip">
                            <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="website" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-7">
                            <input type="text" name="website" class="form-control" id="website" width="260" placeholder="Website">
                            <small class="form-text text-danger"><?= form_error('website'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                            <input type="text" name="email" class="form-control" id="email" width="260" placeholder="Email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-7">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="logo" id="logo">
                            <small class="form-text text-danger"><?= form_error('logo'); ?></small>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>