<?php $title = "Contact" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../components/style/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../assets/style/contact.css?v=<?php echo time(); ?>" />
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
    <div class="page-content page-product overflow-hidden">
        <!-- section1 -->
        <section class="section1">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-1">
                            <img src="../assets/images/contact-line-1.png" alt="" class="line-img-1">
                        </div>
                        <div class="col-lg-10 head1">
                            <h1>Contact</h1>
                            <p>Ada keluhan? Costumer Service kami siap melayani!</p>
                            <div class="card">
                                <div class="wrapper d-flex">
                                    <div class="group-card d-flex">
                                        <div class="image">
                                            <img src="../assets/images/contact-envelope-fill.png" alt="">
                                        </div>
                                        <div class="text-group">
                                            <p>E-mail</p>
                                            <h4>@Smartlife.co.id</h4>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="group-card d-flex ml-md-auto mr-3">
                                        <div class="image">
                                            <img src="../assets/images/contact-envelope-fill (1).png" alt="">
                                        </div>
                                        <div class="text-group">
                                            <p>Telefon</p>
                                            <h4>0812 3456 7890</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 head2">
                            <img src="../assets/images/contact-line-2.png" alt="" class="line-img-2">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section2 -->
        <section class="section2">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12 mt-5">
                            <img src="../assets/images/contact-card.png" alt="" class="card-black">
                            <div class="card">
                                <div class="forum">
                                    <div class="input-group d-flex">
                                        <img src="../assets/images/contact-icon (4).png " alt="">
                                        <input type="text" placeholder="Masukan nama anda" id="namauser">
                                    </div>
                                    <div class="input-group d-flex">
                                        <img src="../assets/images/contact-icon (3).png " alt="">
                                        <input type="text" placeholder="Masukan alamat anda" id="alamatuser">
                                    </div>
                                    <div class="input-group d-flex">
                                        <img src="../assets/images/contact-icon (2).png " alt="">
                                        <input type="text" placeholder="Masukan nomor telepon" id="nomoruser">
                                    </div>
                                    <div class="input-group d-flex">
                                        <img src="../assets/images/contact-icon (1).png " alt="" class="textarea-icon">
                                        <textarea name="" id="pesanuser" cols="30" rows="10" placeholder="Masukan pesan yang ingin dikirim"></textarea>
                                    </div>
                                    <div class="button">
                                        <button class="btn">Kirim Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section3 -->
        <section class="section3">
            <div class="container">
                <div class="content">
                    <div class="card card-body d-flex">
                        <div class="row">
                            <div class="col-lg-7">
                                <p>Smarthome No. 1 di Indonesia</p>
                                <h1>Hidupkan rumah<br>menjadi lebih mudah.</h1>
                                <div class="wrapper d-flex">
                                    <img src="../assets/images/contact-icon (5).png" alt="">
                                    <input type="text" class="card-input input-placeholder" placeholder="Masukkan E-mail anda">
                                    <div class="button">
                                        <div class="btn" id="btnReg">Registered</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="images">
                                    <img src="../assets/images/contact-cctv.png" alt="">
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
    <script src="../assets/script/contact.js?v=<?php echo time(); ?>"></script>
</body>

</html>