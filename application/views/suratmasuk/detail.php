<div class="container">
    <div class="row mt-4">
        <div class="col md-6">
            <h3>Data Surat Masuk</h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col"><?= $suratmasuk['nomor_surat']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col"><?= $suratmasuk['tanggal_surat']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Tanggal Terima</th>
                    <th scope="col"><?= $suratmasuk['tanggal_terima']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Dari</th>
                    <th scope="col"><?= $suratmasuk['dari']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Prihal</th>
                    <th scope="col"><?= $suratmasuk['perihal']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Lampiran</th>
                    <th scope="col"><?= $suratmasuk['lampiran']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col"><?= $suratmasuk['keterangan']; ?></th>
                </tr>
                <tr>
                    <th scope="col">Surat</th>
                    <th scope="col"><?= $suratmasuk['surat']; ?></th>
                </tr>
                <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                <label>Tgl Awal</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
                </div>
                </div>
                <div class="form-group">
                <label>Tgl Akhir</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <input placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir">
                </div>
                </div>
                </div>
</div>
            </table>
            <a href="<?= base_url(); ?>suratmasuk/" class="card-link btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>