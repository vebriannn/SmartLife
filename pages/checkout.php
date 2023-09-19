<?php $title = "Checkout" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../components/style/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../assets/style/checkout.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../components/style/footer.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title><?= $title ?> | SmartLife</title>
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
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-12 col-xl-7">
                            <div class="top">
                                <p class="text-center">
                                    < Back to product </p>
                                        <h1 class="text-center">Checkout 🛒</h1>
                                        <div class="images mt-4 text-center">
                                            <img src="../assets/images/checkout-line.png" alt="">
                                        </div>
                            </div>
                            <div class="bottom d-flex justify-content-center justify-content-xl-start mt-5">
                                <div class="left">
                                    <div class="images-line mt-2 d-none d-sm-block">
                                        <img src="../assets/images/checkout-line-group.png" alt="">
                                    </div>
                                </div>
                                <div class="right ml-4">
                                    <p class="p-number">1. Contact information</p>
                                    <div class="input-transaction d-flex">
                                        <div class="forum-wrapper ">
                                            <div class="forum-group d-flex mt-4">
                                                <div class="images-icon d-flex">
                                                    <div class="images-left">
                                                        <img src="../assets/images/checkout-solo-user.png" alt="">
                                                    </div>
                                                    <div class="images-center ml-2 ml-sm-3">
                                                        <img src="../assets/images/checkout-line-forum.png" alt="">
                                                    </div>
                                                    <p class="ml-2">First|Name</p>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text">
                                                </div>
                                            </div>

                                            <div class="forum-group d-flex mt-5">
                                                <div class="images-icon d-flex">
                                                    <div class="images-left d-flex">
                                                        <div class="images-flag">
                                                            <img src="../assets/images/checkout-indonesia.png" alt="">
                                                        </div>
                                                        <p class="ml-2 number-phone">+62</p>
                                                    </div>
                                                    <div class="images-center ml-2 ml-sm-3">
                                                        <img src="../assets/images/checkout-line-forum.png" alt="">
                                                    </div>
                                                    <p class="ml-2">Phone|Number</p>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" class="input-large">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="forum-wrapper ml-4">
                                            <div class="forum-group-down d-flex mt-4">
                                                <div class="images-icon d-flex">
                                                    <div class="images-left">
                                                        <img src="../assets/images/checkout-duo-user.png" alt="">
                                                    </div>
                                                    <div class="images-center ml-2 ml-sm-3">
                                                        <img src="../assets/images/checkout-line-forum.png" alt="">
                                                    </div>
                                                    <p class="ml-2">Last|Name</p>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text">
                                                </div>
                                            </div>

                                            <div class="forum-group-down d-flex mt-5">
                                                <div class="images-icon d-flex">
                                                    <div class="images-left d-flex">
                                                        <div class="images-flag">
                                                            <img src="../assets/images/checkout-location.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="images-center ml-2 ml-sm-3">
                                                        <img src="../assets/images/checkout-line-forum.png" alt="">
                                                    </div>
                                                    <p class="ml-2">Address</p>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" class="input-large">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-number p-number-2">2. Delivery</p>
                                    <div class="select d-sm-flex d-block">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">

                                                <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span><i class="bi bi-truck"></i> </span> Some-Day</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><span><i class="bi bi-box"></i> </span> Express</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button utton class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Normal</button>
                                            </li>
                                        </ul>
                                        <div class="input-message">
                                            <div class="images-icon d-flex">
                                                <div class="images-message">
                                                    <img src="../assets/images/checkout-message.png" alt="">
                                                </div>
                                                <div class="images-center ml-3">
                                                    <img src="../assets/images/checkout-line-forum.png" alt="">
                                                </div>
                                                <p class="ml-2 mb-0">PosCode</p>
                                            </div>
                                            <input type="text" class="message-input">
                                        </div>
                                    </div>
                                    <p class="p-number p-number-2">3. Payment</p>
                                    <div class="select d-flex">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">

                                                <button class="nav-link active d-flex" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                                    <div class="images-icon">
                                                        <img src="../assets/images/checkout-gopay-2.png" alt="">
                                                    </div>
                                                    Gopay
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link d-flex" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                    <div class="images-icon">
                                                        <img src="../assets/images/checkout-dana-icon.png" alt="">
                                                    </div>
                                                    Dana
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-xl-5">
                            <div class="wrapper">
                                <div class="card-input">
                                    <div class="card card-forum">
                                        <div class="text">
                                            <h2 class="mb-5">Payment Info</h2>
                                            <div class="payment-info">
                                                <p>Nama</p>
                                                <h4>Bintang Azka</h4>
                                            </div>
                                            <div class="payment-info">
                                                <p>Alamat</p>
                                                <h4>Purwokerto City</h4>
                                            </div>
                                            <div class="payment-info">
                                                <p>Payment method</p>
                                                <div class="button-wrapper d-flex">
                                                    <div class="images-icon">
                                                        <img src="../assets/images/checkout-gopay-2.png" alt="">
                                                    </div>
                                                    <a href="#" class="mt-1 pay-btn">Gopay</a>
                                                </div>
                                            </div>
                                            <div class="payment-info">
                                                <p>E - wallet number</p>
                                                <h4>**** **** **75</h4>
                                            </div>
                                            <div class="payment-info mt-4 justify-content-center align-items-center text- mt-5">
                                                <button class="bottom-btn">Checkout <span>Rp. 560.000</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-card">
                                    <div class="card card-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <!-- Footer -->
    <?php include('../components/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="../components/javascript/header.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>