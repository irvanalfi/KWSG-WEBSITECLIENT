<div class="background">
    <img src="<?= base_url() ?>assets/img/bgpinjaman.png" alt="" style="display: none;">
</div>
<div class="container mt-4 mb-3 text-center">
    <h2 class="text-white mb-1" style="text-shadow: 2px 2px 3px #000000">PEMBIAYAAN</h2>
    <h6 class="text-white mb-3" style="text-shadow: 2px 2px 3px #000000">KOPERASI WARGA SEMEN GRESIK</h6>
    <div class="card border-0 mb-3 mt-3">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-2">
                    <div class="avatar avatar-40 border-0 bg-success-light rounded-circle text-success">
                        <i class="material-icons vm text-template">support_agent</i>
                    </div>
                </div>
                <div class="col-10">
                    <h6 class="mb-0"><?= $username ?></h6>
                    <p class="text-secondary">
                        <?php if ($status == 'pegawai') {
                            echo "$nopeg";
                        } else {
                            echo "$noang";
                        } ?>
                    </p>
                </div>
            </div>
            <div class="container">
                <hr>
            </div>
        </div>
        <div class="card-body">
            <p class=" text-center mb-1">Sisa Plafon Pinjaman</p>
            <h5 class=" text-center mb-3"><?= indo_currency($pinjaman->sisa_plafon) ?></h5>
            <h6 class=" text-center mb-1">Jumlah Pinjaman</h6>
            <h3 class=" text-center mb-0"><?= indo_currency($pinjaman->jml_pinjam) ?></h3>
        </div>
        <div class="card-footer">
            <div class="container">
                <hr>
            </div>
            <div class="row align-items-center">
                <div class="col ml-2">
                    <p class="mb-0">Angsuran Per Bulan</p>
                    <p class="text-secondary"><?= indo_currency($pinjaman->angsuran) ?></p>
                </div>
                <div class="col align-self-center">
                    <p class="mb-1 text-secondary">Sisa Masa Angsuran</p>
                    <p class="text-default"><?= $pinjaman->tempo_bln ?> Bulan</p>
                </div>
            </div>
        </div>
    </div>
</div>