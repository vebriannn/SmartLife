 <?php $title = "Home" ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="../components/style/header.css?v=<?php echo time(); ?>" />
     <link rel="stylesheet" href="../assets/style/home.css?v=<?php echo time(); ?>" />
     <link rel="stylesheet" href="../components/style/footer.css?v=<?php echo time(); ?>" />
     <link rel="stylesheet" href="../assets/style/swiper-bundle.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <title><?php echo $title ?> | SmartHome</title>
 </head>

 <body>

     <!-- Header -->
     <?php include('../components/header.php'); ?>

     <!-- content -->
     <div class="page-content page-home overflow-hidden">


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
                 <div class="row">
                     <div class="col-lg-6 w-100">
                         <div class="content">
                             <p class="mb-3 title-betterhome">We make
                                 your better home</p>
                             <h2>The Next Levels</h2>
                             <h1>Smart Gadget.</h1>
                             <div class="d-flex button-lamp">
                                 <div class="button-arrow mb-0 d-flex align-items-center">
                                     <p class="mb-0 ps-2">Jelajahi Produk</p>
                                     <img class="arrow-img " src="../assets/images/arrow-right.png" alt="" />
                                 </div>
                             </div>
                             <div class="icon row d-flex mt-4" id="addrow">
                                 <img src="../assets/images/Whatsapp.svg" alt="" class="col-sm-2 col-md-2 col-lg-2 col-xl-2" id="addclash" />
                                 <img src="../assets/images/Instagram.svg" alt="" class="col-sm-2 col-md-2 col-lg-2 col-xl-2" id="addclash" />
                                 <img src="../assets/images/Facebook.svg" alt="" class="col-sm-2 col-md-2 col-lg-2 col-xl-2" id="addclash" />
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- section2 -->
         <section class="section2">
             <div class="container-xl">
                 <div class="column-images">
                     <div class="row">
                         <div class="col-xl-2 img-kiri">
                             <img src="../assets/images/gambar-blur-home-kiri.png" alt="">
                         </div>
                         <div class="col-xl-8 img-tengah">
                             <img src="../assets/images/apple-home.png" alt="" class="img-fluid">
                         </div>
                         <div class="col-xl-2 img-kanan">
                             <img src="../assets/images/gambar-blur-home-kanan.png" alt="">
                         </div>
                     </div>
                 </div>
                 <div class="column-text mt-sm-5">
                     <div class="row">
                         <div class="col-sm-6 text-kiri d-sm-flex justify-content-sm-end">
                             <h1 class="font-weight-bolder">
                                 Better Home<br> Better Life
                             </h1>
                         </div>
                         <div class="col-sm-6 text-kanan d-block mt-2">
                             <p class="font-weight-normal h4">Buat hidupmu menjadi lebih <br> indah dengan Smart Home</p>
                             <button class="btn shadow-none h5 text-white text-center">Buat Ruangan Baru</button>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- section3 -->
         <section class="section3 overflow-hidden">
             <div class="content">
                 <div class="card">
                     <div class="row">
                         <div class="col-lg-12 mb-5 pb-0 pb-sm-3">
                             <h1>Keuntungan Menggunakan<br />Smart Home</h1>
                         </div>
                         <div class="col-lg-1 text-center align-items-center justify-content-center">
                             <img src="../assets/images/Vector 4 (1).svg" alt="" />
                             <img src="../assets/images/plug-fill.png" alt="" class="img-icon1" />
                             <img src="../assets/images/server-fill.png" alt="" class="img-icon2" />
                             <img src="../assets/images/wifi (1).png" alt="" class="img-icon3" />
                         </div>
                         <div class="col-lg-6">
                             <div class="content-benefit benefit-1">
                                 <h2 class="text-benefit1">Penggunaan listrik yang lebih hemat</h2>
                                 <p class="p-benefit1"> Anda dapat mengatur kapan perangkat Smart Home dinyalakan dan
                                     dimatikan secara smart online. </p>
                             </div>
                             <div class="content-benefit benefit-2">
                                 <h2 class="text-benefit2">Kontrol yang mudah</h2>
                                 <p class="p-benefit2"> Anda dapat mengatur perangkat Smart Home sesuka hati anda mulai
                                     dari menyalakan, mematikan, penjadwal, dsb. </p>
                             </div>
                             <div class="content-benefit benefit-3">
                                 <h2 class="text-benefit3">Integrasi & automisasi</h2>
                                 <p class="p-benefit3"> Anda dapat mengatur Input yang terjadi secara otomatis
                                     berdasarkan waktu, peristiwa, atau kondisi tertentu </p>
                             </div>
                         </div>
                         <div class="col-lg-5 lampuku">
                             <img src="../assets/images/cahayaLampu.png" alt="" class="img-lamp-1 " id="light" />
                             <div class="button">
                                 <p>Nyalakan Lampu</p>
                                 <button type="button" onclick="toggleBtn()" id="btn">
                                     <span></span>
                                 </button>
                             </div>
                             <img src="../assets/images/lampu-gede.png" alt="" class="img-lamp-2" />
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- section4 -->
         <section class="section4">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-7 ">
                         <div class="card black-card">
                             <p>promo terbatas!</p>
                             <h2>15% Pre-order Discount</h2>
                         </div>
                         <img src="../assets/images/img-about.png" alt="" class="img-about" />
                     </div>
                     <div class="col-lg-5 mt-5 col-text">
                         <p>Produk Terbaru!</p>
                         <h1>HomePed Gen 2<br />+
                             Smart Lamp (Free)</h1>
                         <p class="mt-4">
                             Buat ruangan menjadi lebih interaktif dengan fitur yang lebih
                             banyak seperti pengaturan lewat suara dan masih banyak lagi.
                             Promo terbatas!
                         </p>

                         <div class="row mt-5">
                             <div class="col-lg-6">
                                 <div class="card card-animate" id="card-animate1">
                                     <div class="image-wrapper">
                                         <img src="../assets/images/image 1_thumbnail 1.png" alt="" class="img-ball" />
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="card card-animate card-2 ml-auto" id="card-animate2">
                                     <div class="image-wrapper">
                                         <img src="../assets/images/lampu.png" alt="" class="img-lamp" />
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="button">
                             <a href="#">Beli Sekarang</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- section5 -->
         <section class="section5 ">
             <div class="container">
                 <div class="title d-flex">
                     <h1 class="text-white">Apa kata mereka?</h1>
                     <div class="line"></div>
                     <a href="#" class="text-white">Scroll to
                         view all</a>
                 </div>
             </div>
             <div class="container swiper mt-5 carousel-web">
                 <div class="slide-container">
                     <div class="card-wrapper swiper-wrapper">
                         <div class="card swiper-slide">
                             <div class="image-box">
                                 <p>HomePod dari Smart Life memiliki desain yang minimalis dan elegan. Material yang
                                     digunakan terasa kokoh dan berkualitas tinggi.</p>
                             </div>
                             <div class="profile-details">
                                 <img src="../assets/images/img-slide (1).png" alt="" class="img-slide">
                                 <div class="name-job">
                                     <h3 class="name">Jessica Leia</h3>
                                     <img src="../assets/images/bintang.png" alt="" class="job">
                                 </div>
                             </div>
                         </div>
                         <div class="card swiper-slide">
                             <div class="image-box">
                                 <p> Ukurannya yang kecil memudahkan saya untuk menempatkannya di berbagai ruangan. Saya
                                     sangat merekomendasikan.</p>
                             </div>
                             <div class="profile-details">
                                 <img src="../assets/images/img-slide (2).png" alt="" class="img-slide">
                                 <div class="name-job">
                                     <h3 class="name">Siliana Ramis</h3>
                                     <img src="../assets/images/bintang.png" alt="" class="job">
                                 </div>
                             </div>
                         </div>
                         <div class="card swiper-slide">
                             <div class="image-box">
                                 <p>Recomended banget, kualitas ngga perlu diragukan & untuk ukuran Smart Home dengan
                                     kualitas seperti ini udah termasuk worth it dengan harganya</p>
                             </div>
                             <div class="profile-details">
                                 <img src="../assets/images/img-slide (3).png" alt="" class="img-slide">
                                 <div class="name-job">
                                     <h3 class="name">Richard Bond</h3>
                                     <img src="../assets/images/bintang.png" alt="" class="job">
                                 </div>
                             </div>
                         </div>
                         <div class="card swiper-slide">
                             <div class="image-box">
                                 <p>Pelayanannya baik, respon dari costumer service cepat, dan tampilannya juga keren
                                     enak dan praktis digunakan</p>
                             </div>
                             <div class="profile-details">
                                 <img src="../assets/images/img-slide (2).png" alt="" class="img-slide">
                                 <div class="name-job">
                                     <h3 class="name">Priase</h3>
                                     <img src="../assets/images/bintang.png" alt="" class="job">
                                 </div>
                             </div>
                         </div>
                         <div class="card swiper-slide">
                             <div class="image-box">
                                 <p>Website ini sangat membantu untuk kegiatan sehari hari keluarga saya. Aktivias kami
                                     jadi lebih praktis dan terbantu</p>
                             </div>
                             <div class="profile-details">
                                 <img src="../assets/images/img-slide (1).png" alt="" class="img-slide">
                                 <div class="name-job">
                                     <h3 class="name">James Laze</h3>
                                     <img src="../assets/images/bintang.png" alt="" class="job">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="swiper-button-next swiper-navBtn"></div>
                 <div class="swiper-button-prev swiper-navBtn"></div>
                 <div class="swiper-pagination"></div>
             </div>


         </section>

         <!-- section6 -->
         <section class="section6">
             <div class="container-fluid p-0">
                 <h1 class="title-sec6">
                     Membawa Kecerdasan<br>
                     ke Pintu Rumah Anda
                 </h1>
                 <div class="content-sec6 overflow-hidden">
                     <div class="row">
                         <div class="col-lg-7 p-0">
                             <div class="row">
                                 <div class="column-kiri d-flex justify-content-center align-items-center">
                                     <div class="search ">
                                         <div class="input-group">
                                             <input type="search" class="form-control" id="search">
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
                                         <div class="col-lg-12 mt-5">
                                             <p class="title">Tulis pertanyaan, costumer <br>
                                                 service kami siap menjawab <br>
                                                 keraguan anda <br>
                                             </p>
                                         </div>
                                         <div class="col-lg-12">
                                             <p class="text-secondary">
                                                 << Tekan untuk mengirim pesan </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="pesawat">
                                 <img src="../assets/images/pesawat-kertas.png" alt="pesawat" class="img-fluid">
                             </div>
                         </div>
                     </div>
         </section>

         <!-- section7 -->
         <section class="section7 brand">
             <div class="container-fluid">
                 <div class="row justify-content-center mt-5 mb-5">
                     <div class="col-lg-1 d-flex justify-content-center">
                         <img src="../assets/images/sponsor (3).png" alt="">
                     </div>
                     <div class="col-lg-3 d-flex justify-content-center">
                         <img src="../assets/images/sponsor (4).png" alt="">
                     </div>
                     <div class="col-lg-2 d-flex justify-content-center">
                         <img src="../assets/images/sponsor (1).png" alt="">
                     </div>
                     <div class="col-lg-3 d-flex justify-content-center">
                         <img src="../assets/images/sponsor (2).png" alt="">
                     </div>
                 </div>

             </div>
         </section>

         <!-- Footer -->
         <?php include('../components/footer.php') ?>

     </div>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
     </script>
     <script src="../assets/script/swiper-bundle.min.js"></script>
     <script src="../assets/script/home.js?v=<?php echo time(); ?>"></script>
     <script src="../components/javascript/header.js?=<?php echo time(); ?>"></script>
     <script type="text/javascript" src="../assets/script/raw.githubusercontent.com_micku7zu_vanilla-tilt.js_master_dist_vanilla-tilt.min.js">
     </script>
     <script>
         VanillaTilt.init(document.querySelectorAll(".card-animate"), {
             max: 50,
             speed: 400
         });
     </script>
     <script>
         AOS.init();
     </script>
 </body>

 </html>