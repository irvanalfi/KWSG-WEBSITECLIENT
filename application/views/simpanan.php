<div class="container mt-3 mb-4 text-center">
    <h2 class="text-white">
        <?= $username ?>
    </h2>
    <p class="text-white mb-4">No Pegawai / ID Anggota :
        <?php if ($status == 'pegawai') {
            echo "$nopeg";
        } else {
            echo "$noang";
        } ?>
    </p>
</div>

<div class="main-container">
    <!-- page content start -->
    <div class="container mb-4 text-center">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 pr-0">
                                <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm text-template">local_atm</i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center">
                                <p>Simpanan Sukarela</p>
                            </div>
                            <div class="col-4 align-self-center border-left">
                                <h6 class="mb-1"><?= indo_currency($simpananSukarela->saldo_akhir) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 pr-0">
                                <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm text-template">local_atm</i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center">
                                <p>Simpanan Pokok</p>
                            </div>
                            <div class="col-4 align-self-center border-left">
                                <h6 class="mb-1"><?= indo_currency($simpananPokok->saldo_akhir) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 pr-0">
                                <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm text-template">local_atm</i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center">
                                <p>Simpanan Wajib</p>
                            </div>
                            <div class="col-4 align-self-center border-left">
                                <h6 class="mb-1"><?= indo_currency($simpananWajib->saldo_akhir) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 pr-0">
                                <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm text-template">local_atm</i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center">
                                <p>Simpanan Khusus Permanen</p>
                            </div>
                            <div class="col-4 align-self-center border-left">
                                <h6 class="mb-1"><?= indo_currency($simpananKPermanen->saldo_akhir) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 pr-0">
                                <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm text-template">local_atm</i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center">
                                <p>Simpanan Khusus Berjangka</p>
                            </div>
                            <div class="col-4 align-self-center border-left">
                                <h6 class="mb-1"><?= indo_currency($simpananKBerjangka->saldo_akhir) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 pr-0">
                                <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm text-template">local_atm</i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center">
                                <p>Simpanan Deposito</p>
                            </div>
                            <div class="col-4 align-self-center border-left">
                                <h6 class="mb-1"><?= indo_currency($simpananDeposito->saldo_akhir) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>