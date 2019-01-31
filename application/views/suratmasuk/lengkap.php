<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $suratmasuk['nomor_surat']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $suratmasuk['tanggal_surat']; ?></h6>
                    <p class="card-text"><?= $suratmasuk['tanggal_terima']; ?></p>
                    <p class="card-text"><?= $suratmasuk['dari']; ?></p>
                    <a href="<?= base_url(); ?>suratmasuk/" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>