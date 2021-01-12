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

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="img/favicon144.png" alt="" class="w-100">
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



    <!-- menu main -->
    <div class="main-menu">
        <div class="row mb-4 no-gutters">
            <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
            <div class="col-auto">
                <div class="avatar avatar-40 rounded-circle position-relative">
                    <figure class="background">
                        <img src="<?= base_url() ?>assets/img/user1.png" alt="">
                    </figure>
                </div>
            </div>
            <div class="col pl-3 text-left align-self-center">
                <h6 class="mb-1">Wahyu Maulana</h6>
                <p class="small text-default-secondary">Gresik, Indonesia</p>
            </div>
        </div>
        <div class="menu-container">
            <div class="row mb-4">
                <div class="col">
                    <h4 class="mb-1 font-weight-normal">Rp.154.800,00</h4>
                    <p class="text-default-secondary">Saldo Tabungan Saya</p>
                </div>
            </div>

            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <div>
                            <span class="material-icons icon">account_balance</span>
                            Home
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analytics.html">
                        <div>
                            <span class="material-icons icon">credit_card</span>
                            Sipintar
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analytics.html">
                        <div>
                            <span class="material-icons icon">recent_actors</span>
                            Info Anggota
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analytics.html">
                        <div>
                            <span class="material-icons icon">support_agent</span>
                            Pembiayaan
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gift_cards.html">
                        <div>
                            <span class="material-icons icon">card_giftcard</span>
                            Promo
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_orders.html">
                        <div>
                            <span class="material-icons icon">info</span>
                            About KWSG
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_orders.html">
                        <div>
                            <span class="material-icons icon">perm_device_information</span>
                            About App
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting.html">
                        <div>
                            <span class="material-icons icon">settings</span>
                            Settings
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <a href="login.html" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
            </div>
        </div>
    </div>
    <div class="backdrop"></div>


    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-40 btn-link" type="button">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="#">
                        <h5 class="mb-0">KWSGApp</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto pl-0">
                    <button type="button" class="btn btn-link btn-40 colorsettings">
                        <span class="material-icons">color_lens</span>
                    </button>
                    <a href="notification.html" class="menu-btn btn btn-40 btn-link">
                        <span class="material-icons">notifications_none</span>
                        <span class="counter"></span>
                    </a>
                    <a href="profile.html" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="<?= base_url() ?>assets/img/user1.png" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>

        <div class="container mt-3 mb-3 text-center">
            <h2 class="text-white">Rp.154.800,00</h2>
            <p class="text-white mb-2">List Sipintar SHU</p>
            <span class="arrow material-icons" style="color: white !important;">expand_more</span>
        </div>

        <div class="main-container">
            <!-- list -->
            <div class="container">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="list-group list-group-flush">
                            <a href="about.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-success rounded">add_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer Dana SP dan SHU 2019 dari KWSG</small>
                                        <small style="color: blue;">2020-03-31</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 215.200</p>
                                    </div>
                                </div>
                            </a>
                            <a href="wallet.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-danger rounded">indeterminate_check_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer SHU ke VMART-12</small>
                                        <small style="color: blue;">2020-03-28</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 41.000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="wallet.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-danger rounded">indeterminate_check_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer SHU ke VMART-12</small>
                                        <small style="color: blue;">2020-03-27</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 35.000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="about.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-success rounded">add_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer Dana SP dan SHU 2019 dari KWSG</small>
                                        <small style="color: blue;">2020-03-25</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 215.200</p>
                                    </div>
                                </div>
                            </a>
                            <a href="wallet.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-danger rounded">indeterminate_check_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer SHU ke VMART-12</small>
                                        <small style="color: blue;">2020-03-20</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 15.000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="about.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-success rounded">add_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer Dana SP dan SHU 2019 dari KWSG</small>
                                        <small style="color: blue;">2020-03-15</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 215.200</p>
                                    </div>
                                </div>
                            </a>
                            <a href="about.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-success rounded">add_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer Dana SP dan SHU 2019 dari KWSG</small>
                                        <small style="color: blue;">2020-03-10</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 215.200</p>
                                    </div>
                                </div>
                            </a>
                            <a href="wallet.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-danger rounded">indeterminate_check_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer SHU ke VMART-12</small>
                                        <small style="color: blue;">2020-03-01</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 72.000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="about.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-2">
                                        <span class="material-icons icon btn-success rounded">add_box</span>
                                    </div>
                                    <div class="col-7">
                                        <small>Transfer Dana SP dan SHU 2019 dari KWSG</small>
                                        <small style="color: blue;">2020-02-29</small>
                                    </div>
                                    <div class="col-3 pull-right">
                                        <p style="font-size: 10px; font-weight: bold;">Rp. 215.200</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- color settings style switcher -->
    <div class="color-picker">
        <div class="row">
            <div class="col text-left">
                <div class="selectoption">
                    <input type="checkbox" id="darklayout" name="darkmode">
                    <label for="darklayout">Dark</label>
                </div>
                <div class="selectoption mb-0">
                    <input type="checkbox" id="rtllayout" name="layoutrtl">
                    <label for="rtllayout">RTL</label>
                </div>
            </div>
            <div class="col-auto">
                <button class="btn btn-link text-secondary btn-round colorsettings2"><span class="material-icons">close</span></button>
            </div>
        </div>

        <hr class="mt-2">
        <div class="colorselect">
            <input type="radio" id="templatecolor1" name="sidebarcolorselect">
            <label for="templatecolor1" class="bg-dark-blue" data-title="dark-blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor2" name="sidebarcolorselect">
            <label for="templatecolor2" class="bg-dark-purple" data-title="dark-purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor4" name="sidebarcolorselect">
            <label for="templatecolor4" class="bg-dark-gray" data-title="dark-gray"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor6" name="sidebarcolorselect">
            <label for="templatecolor6" class="bg-dark-brown" data-title="dark-brown"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor3" name="sidebarcolorselect">
            <label for="templatecolor3" class="bg-maroon" data-title="maroon"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor5" name="sidebarcolorselect">
            <label for="templatecolor5" class="bg-dark-pink" data-title="dark-pink"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor8" name="sidebarcolorselect">
            <label for="templatecolor8" class="bg-red" data-title="red"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor13" name="sidebarcolorselect">
            <label for="templatecolor13" class="bg-amber" data-title="amber"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor7" name="sidebarcolorselect">
            <label for="templatecolor7" class="bg-dark-green" data-title="dark-green"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor11" name="sidebarcolorselect">
            <label for="templatecolor11" class="bg-teal" data-title="teal"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor12" name="sidebarcolorselect">
            <label for="templatecolor12" class="bg-skyblue" data-title="skyblue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor10" name="sidebarcolorselect">
            <label for="templatecolor10" class="bg-blue" data-title="blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor9" name="sidebarcolorselect">
            <label for="templatecolor9" class="bg-purple" data-title="purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor14" name="sidebarcolorselect">
            <label for="templatecolor14" class="bg-gray" data-title="gray"></label>
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

    <!-- PWA app service registration and works -->
    <script src="<?= base_url() ?>assets/js/pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>
</body>

</html>