<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>KWSG</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/lgputih33.png" sizes="180x180">
    <link rel="icon" href="<?= base_url() ?>assets/img/lgicon.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url() ?>assets/img/lgicon.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="<?= base_url() ?>assets/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles-->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="<?= base_url() ?>assets/img/lgbiru.png" alt="" class="w-100">
                    </div>
                    <h4 class="text-default">KWSG App</h4>
                    <p class="text-secondary">Mensejahterakan Anggota</p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <div class="background">
            <img src="<?= base_url() ?>assets/img/bgkwsg1.png" alt="" style="display: none;">
        </div>
        <!-- form login -->
        <form action="<?= site_url('auth_c/process'); ?>" method="post">
            <div class="container h-100 text-white">
                <div class="row h-100">
                    <div class="col-12 align-self-center mb-4">
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4 mt-4">
                                <img src="<?= base_url() ?>assets/img/lgputih.png" alt="" style="width: 90px; height: 50px;">
                                <h4 class="font-weight-normal mt-3">Selamat Datang</h4>
                                <h5 class="font-weight-normal">Di KWSG Mobile</h5>
                                <p class="mb-5 mt-4">Silahkan Login Menggunakan Akun Anda</p>
                                <div class="form-group float-label position-relative">
                                    <input type="text" name="no_ang" id="no_ang" class="form-control text-white" required>
                                    <label class="form-control-label text-white">No Anggota</label>
                                </div>
                                <div class="form-group float-label position-relative">
                                    <input type="password" name="pin" id="pin" class="form-control text-white " required>
                                    <label class="form-control-label text-white">PIN Kartu Sipintar</label>
                                </div>
                                <button type="submit" name="login" class="mb-2 mt-3 btn btn-primary rounded btn-block shadow">Login</button>
                                <!-- <p class="text-right"><a href="forgot_password.html" class="text-white">Forgot Password?</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end form -->
    </main>
    <!-- Required jquery and libraries -->
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="<?= base_url() ?>assets/js/jquery.cookie.js"></script>

    <!-- Swiper slider  js-->
    <script src="<?= base_url() ?>assets/vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="<?= base_url() ?>assets/js/color-scheme-demo.js"></script>


    <!-- page level custom script -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>

</body>

</html>