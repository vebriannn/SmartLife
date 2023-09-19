<?php $title = "Product" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../components/style/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../assets/style/product.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../components/style/footer.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title><?= $title ?> | SmartLife</title>
</head>

<body>

    <!-- Header -->
    <?php include('../components/header.php'); ?>

    <!-- Modal -->
    <div class="modal fade" id="modalRL">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content ">
                <div class="modal-body p-0">
                    <div class="row m-0">
                        <!-- form daftar -->
                        <div class="col-xl-8 form-register" id="modal-register">
                            <button type="button" class="close p-3 btn-closeMobile" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="bi bi-x px-1 rounded-circle"></i></span>
                            </button>
                            <div class="container">
                                <div class="col-xl-12 d-flex justify-content-between align-items-center have">
                                    <div class="text">
                                        <p class="font-weight-bolder mb-0">Hello, Good Morning👋!</p>
                                        <h3 class="font-weight-bolder"><u>Sign Up</u> Account</h3>
                                    </div>
                                    <div class="have-account">
                                        <p class="pt-1 pb-1 px-2 text-center">have account?</p>
                                        <img src="../assets/images/arrow-daftar.png" alt="" srcset="">
                                        <button class="btn Btnlogin pb-1 pt-1 px-3" id="loginBtn1">Login >></button>
                                    </div>
                                </div>
                                <div class="form-reg mt-2">
                                    <div class="col-xl-12 nameuser">
                                        <div class="row">
                                            <div class="col pt-2 pb-2 px-0">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text border-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control border-0" placeholder="Nama depan" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col pt-2 pb-2 px-0">
                                                <div class="input-group mb-3 ">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text border-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control border-0" placeholder="Nama belakang" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 p-0 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                                        </div>
                                        <input type="text" class="form-control border-0" placeholder="Masukan email anda" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 p-0 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                                        </div>
                                        <input type="password" class="form-control border-0" placeholder="Masukan password anda" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 p-0 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                                        </div>
                                        <input type="password" class="form-control border-0" placeholder="Masukan konfirmasi password anda" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="btn-group d-flex justify-content-center">
                                        <a href="control.php" class="btn">
                                            Registered
                                        </a>
                                    </div>
                                    <p class="text-center mt-2">already have an account?? <button class="btn p-0 font-weight-bolder shadow-none" id="loginBtn2"><u>Login</u></button> here!</p>
                                </div>
                            </div>
                        </div>
                        <!-- form login -->
                        <div class="col-xl-8 form-login col-md-12" id="modal-login">
                            <button type="button" class="close p-3 btn-closeMobile" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="bi bi-x px-1 rounded-circle"></i></span>
                            </button>
                            <div class="container">
                                <div class="col-xl-12 d-flex justify-content-between align-items-center login">
                                    <div class="text">
                                        <p class="font-weight-bolder mb-0">Hello, Good Morning👋!</p>
                                        <h3 class="font-weight-bolder"><u>Sign In</u> Account</h3>
                                    </div>
                                    <div class="login-account">
                                        <p class="pt-1 pb-1 px-2 text-center">create</p>
                                        <img src="../assets/images/arrow-daftar.png" alt="" srcset="">
                                        <button class="btn Btnregistered pb-1 pt-1 px-3" id="regBtn1">Registered >></button>

                                    </div>
                                </div>
                                <div class="form-log mt-md-3 mt-xl-5">
                                    <div class="input-group mb-3 p-0 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0" id="basic-addon1"><i class="bi bi-person"></i></span>
                                        </div>
                                        <input type="text" class="form-control border-0" placeholder="Masukan email anda" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3 p-0 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0" id="basic-addon1"><i class="bi bi-shield-fill"></i></span>
                                        </div>
                                        <input type="password" class="form-control border-0" placeholder="Masukan password " aria-describedby="basic-addon1">
                                    </div>
                                    <div class="btn-group d-flex justify-content-center">
                                        <a href="control.php" class="btn">
                                            Login
                                        </a>
                                    </div>
                                    <p class="text-center mt-2">Don't have an account yet? <button class="btn p-0 font-weight-bolder shadow-none" id="regBtn2"><u>Registered</u></button> here!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 bg-exit p-0 d-xl-flex justify-content-end align-items-start d-sm-none">
                            <button type="button" class="close p-3" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="bi bi-x px-1 rounded-circle"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- content -->
    <div class="page-content page-product">
        <section class="section1" id="baris-section1">
            <div class="container">
                <div class="text-section1 ">
                    <p class="">We make your better home</p>
                </div>
            </div>
        </section>

        <section class="section2" id="baris-section2">
            <div class="container-fluid">
                <div class="row">
                    <div class="background-kiri col-md-2 d-flex justify-content-center">
                        <div class="img-lampu">
                            <img src="../assets/images/image 1_thumbnail 1.png" alt="">
                        </div>
                    </div>

                    <div class="background-tengah col-md-12 col-lg-8 col-xl-7">
                        <div class="row column-tengah">
                            <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 text-left ml-2 ml-sm-0">
                                <h1 class="">HomePod Gen 2</h1>
                                <p>Buat ruangan menjadi lebih interaktif dengan fitur
                                    yang lebih banyak seperti pengaturan lewat suara
                                    dan masih banyak lagi. Promo terbatas!</p>
                                <a href="#" class="btn btn-primary px-md-4 pt-md-2 pb-md-2">Beli Sekarang</a>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 profile-kanan">
                                <div class="profile-picture">
                                    <div class="img d-flex justify-content-center">
                                        <img src="../assets/images/product-pic-man.png" alt="">
                                        <img src="../assets/images/img-slide (2).png" alt="">
                                        <img src="../assets/images/product-pic-man2.png" alt="">
                                        <img src="../assets/images/img-slide (3).png" alt="">
                                    </div>
                                    <div class="tanda-panah">
                                        <img src="../assets/images/product-tandapanah.png" alt="">
                                    </div>
                                    <div class="bintang d-flex justify-content-center mt-md-2">
                                        <img src="../assets/images/product-bintang.png" alt="">
                                        <img src="../assets/images/product-bintang.png" alt="">
                                        <img src="../assets/images/product-bintang.png" alt="">
                                        <img src="../assets/images/product-bintang.png" alt="">
                                        <img src="../assets/images/product-bintang.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="background-kanan col-lg-2 col-xl-3">
                        <img src="../assets/images/product-tombol-play.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section3" id="baris-section3">
            <div class="container">
                <div class="button-control-items">
                    <div class="nav-category">
                        <button class="nav-sec4 nav-active all-filter">All</button>
                        <button class="nav-sec4 living-filter">Living Series</button>
                        <button class="nav-sec4 security-filter">Security Series</button>
                        <button class="nav-sec4 electrical-filter">Electrical Series</button>
                        <button class="nav-sec4 lighting-filter">Lighting Series</button>
                    </div>
                </div>
                <div class="content-button">
                    <div class="row">
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 living-item ">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#">
                                        <img src="../assets/images/image 1_thumbnail 1.png" class="img-fluid" alt="...">
                                    </a>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">HomePod Gen 2</h3>
                                    <p class="card-text">#Living Series</p>
                                    <p class="card-harga">Rp. 2.500.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 security-item">
                            <div class="card">
                                <div class="img-box">
                                    <a href="detail-product.php">
                                        <img src="../assets/images/proitems/Indoor-PTZ-Lite-Version 1.png" class="img-fluid" alt="...">
                                    </a>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">IP Camera (lite)</h3>
                                    <p class="card-text">#Security Series</p>
                                    <p class="card-harga">Rp. 560.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 security-item ">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#">
                                        <img src="../assets/images/proitems/Perspective-1-BARDI 1.png" class="img-fluid" alt="...">
                                    </a>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">IP Camera (Pro)</h3>
                                    <p class="card-text">#Security Series</p>
                                    <p class="card-harga">Rp. 670.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 electrical-item ">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#">
                                        <img src="../assets/images/proitems/Smart-Plug-BLE-Wi-Fi-Version 1.png" class="img-fluid" alt="...">
                                    </a>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Portable Plug</h3>
                                    <p class="card-text">#Electrical Series</p>
                                    <p class="card-harga">Rp. 75.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 living-item">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#">
                                        <img src="../assets/images/proitems/image 8.png" class="puriffer img-fluid" alt="...">
                                    </a>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Air Puriffier</h3>
                                    <p class="card-text">#Living Series</p>
                                    <p class="card-harga">Rp. 3.100.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 electrical-item">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#">
                                        <img src="../assets/images/proitems/Bluetooth-Gateway-2 1.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Bluetooth Gateway</h3>
                                    <p class="card-text">#Electrical Series</p>
                                    <p class="card-harga">Rp. 150.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 living-item">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#">
                                        <img src="../assets/images/proitems/Control-Panel-4-inch 1.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Smart Panel</h3>
                                    <p class="card-text">#Living Series</p>
                                    <p class="card-harga">Rp. 2.450.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="items col-sm-4 col-md-3 col-lg-3 col-xl-3 lighting-item">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#">
                                        <img src="../assets/images/proitems/image 9.png" class="lampp img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Smart Lamp</h3>
                                    <p class="card-text">#Lighting Series</p>
                                    <p class="card-harga">Rp. 86.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section4 brand">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-1 col-lg-1 col-xl-1 d-flex justify-content-center">
                        <img src="../assets/images/sponsor (3).png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex justify-content-center">
                        <img src="../assets/images/sponsor (4).png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 d-flex justify-content-center">
                        <img src="../assets/images/sponsor (1).png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 d-flex justify-content-center">
                        <img src="../assets/images/sponsor (2).png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="section5">
            <div class="container-fluid p-0">
                <div class="content-sec6 overflow-hidden">
                    <div class="row">
                        <div class="col-lg-7 p-0">
                            <div class="row">
                                <div class="column-kiri d-flex justify-content-center align-items-center" data-aos="fade-zoom-in" data-aos-duration="600">
                                    <div class="search ">
                                        <div class="input-group">
                                            <input type="search" class="form-control" id="search" data-aos="fade-up" data-aos-duration="1000" placeholder="Masukan Pertanyaanmu">
                                            <button class="btn " type="button" id="button-addon2"><span><img src="../assets/images/pesawat-kertas.png" alt="pesawat" class="img-fluid"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 border-silver-bawah"></div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-lg-12 border-silver-atas"></div>
                                <div class="col-lg-12 column-kanan d-flex justify-content-center" data-aos="fade-zoom-in" data-aos-duration="600">
                                    <div class="row ml-5">
                                        <div class="col-lg-12 mt-5" data-aos="fade-left" data-aos-duration="1000">
                                            <p class="title">Tulis pertanyaan, costumer <br>
                                                service kami siap menjawab <br>
                                                keraguan anda <br>
                                            </p>
                                        </div>
                                        <div class="col-lg-12" data-aos="fade-left" data-aos-duration="1000">
                                            <p class="text-secondary">
                                                << Tekan untuk mengirim pesan </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 bg-bawah"></div>
                            </div>
                            <div class="pesawat" data-aos="fade-zoom-in" data-aos-duration="1000">
                                <img src="../assets/images/pesawat-kertas.png" alt="pesawat" class="img-fluid">
                            </div>

                        </div>
                    </div>
        </section>
        <!-- Footer -->
        <?php include('../components/footer.php') ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="../components/javascript/header.js?=<?php echo time(); ?>"></script>
        <script src="../assets/script/product.js?v=<?php echo time(); ?>"></script>
</body>

</html>