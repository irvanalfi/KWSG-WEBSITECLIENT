<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Login</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="<?= base_url() ?>assets/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles-->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" id="style">
    
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="<?= base_url() ?>assets/img/favicon144.png" alt="" class="w-100">
                    </div>
                    <h4 class="text-default">Finwallapp</h4>
                    <p class="text-secondary">Mobile HTML template</p>
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
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-40 btn-link back-btn" type="button">
                        <span class="material-icons">keyboard_arrow_left</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                   
                </div>
                <!-- <div class="ml-auto col-auto align-self-center">
                    <a href="signup.html" class="text-white">
                        Sign up
                    </a>
                </div> -->
            </div>
        </header>
        
        
        <div class="container h-100 text-white">
            <div class="row h-100">
                <div class="col-12 align-self-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
                            <h2 class="font-weight-normal mb-5">Login ke<br>akun Anda</h2>
                            <div class="form-group float-label position-relative">
                                <input type="text" class="form-control text-white">
                                <label class="form-control-label text-white">No Anggota</label>
                            </div>
                            <div class="form-group float-label position-relative">
                                <input type="password" class="form-control text-white ">
                                <label class="form-control-label text-white">PIN Kartu Sipintar</label>
                            </div>  
                            <!-- <p class="text-right"><a href="forgot_password.html" class="text-white">Forgot Password?</a></p> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    <!-- footer-->
    <div class="footer no-bg-shadow py-3">
        <div class="row justify-content-center">
            <div class="col">
                <a href="<?= base_url() ?>Home_c" class="btn btn-default rounded btn-block">Login</a>
            </div>
        </div>
    </div>


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
