<?php $title = "Detail" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../components/style/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../assets/style/detail-product.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../components/style/footer.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title><?= $title ?> | SmartLife </title>
</head>

<body>

    <!-- Header -->
    <?php include('../components/header.php'); ?>

    <!-- content -->
    <div class="page-content page-product">

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
        <!-- section1 -->
        <section class="section1">
            <div class="top">
                <div class="bg-black">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text">
                                <a href="#">#Security Series</a>
                                <h2 class="mt-4">IP Camera Indoor -<span> Lite gen</span></h2>
                                <h3>Rp. 560.000</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="images">
                                <img src="../assets/images/detail-product-cctv.png" alt="" class="cctv">
                            </div>
                        </div>
                        <div class="col-lg-4 buy-btn">
                            <p>Buat rumah mu menjadi lebih aman dengan IP Camera dari Smartlife! pantau rumah dan kontrol dari mana saja. Hati aman, pikiran pun tenang!</p>
                            <div class="button d-flex">
                                <div class="button-left">
                                    <i class="bi bi-arrow-down"></i>
                                    <button class="btn-number">01</button>
                                    <i class="bi bi-arrow-up"></i>
                                </div>
                                <div class="button-right d-flex align-items-center ">
                                    <a href="checkout.php">Beli Sekarang</a>
                                    <div class="arrow-right-column">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card card-top mt-5">
                                <div class="text">
                                    <h1>4.9</h1>
                                    <p>Bagus Sekali, 100.000+ Ulasan</P>
                                    <img src="../assets/images/detail-product-star.png" alt="">
                                    <div class="wrapper-btn">
                                        <a href="#">Reviews</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-bottom">
                                <div class="text">
                                    <h3>“Mudah untuk dikontrol, penggunaannya juga sangat mudah dan dapat dikontrol dari mana saja”</h3>
                                    <p>Bintang Azka</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-rectangle ">
                            <div class="images-right">
                                <img src="../assets/images/detail-product-rectangle.png" alt="">
                            </div>
                            <h1>Security Series</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <?php include('../components/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="../components/javascript/header.js"></script>
</body>

</html>