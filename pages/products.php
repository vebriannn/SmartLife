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
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
     <title><?= $title ?> | SmartHome</title>
 </head>

 <body>

     <!-- Header -->
     <?php include('../components/header.php'); ?>

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

                     <div class="background-tengah col-md-7 ">
                         <div class="row column-tengah">
                             <div class="col-md-5 text-left">
                                 <h1 class="">HomePod Gen 2</h1>
                                 <p>Buat ruangan menjadi lebih interaktif dengan fitur
                                     yang lebih banyak seperti pengaturan lewat suara
                                     dan masih banyak lagi. Promo terbatas!</p>
                                 <a href="#" class="btn btn-primary px-md-4 pt-md-2 pb-md-2">Beli Sekarang</a>
                             </div>
                             <div class="col-md-5 profile-kanan">
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
                     <div class="background-kanan col-md-3">
                         <img src="../assets/images/product-tombol-play.png" alt="">
                     </div>
                 </div>
             </div>
         </section>

         <section class="section3" id="baris-section3">
             <div class="container-fluid">
                 <h1 class="text-center">Produk Terpopuler</h1>
                 <div class="img-tengah">
                     <img src="../assets/images/image 1_thumbnail 1.png" alt="" srcset="">
                     <img src="../assets/images/product-items-1.png" alt="" srcset="">
                     <img src="../assets/images/product-items-2.png" alt="" srcset="">
                 </div>
                 <div class="img-blur">
                     <img src="../assets/images/product-perspective.png" alt="">
                     <img src="../assets/images/product-bluetooth.png" alt="">
                 </div>
             </div>
         </section>

         <section class="section4" id="baris-section4">
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
                         <div class="items col-md-3 living-item">
                             <div class="card">
                                 <div class="img-box">
                                     <img src="../assets/images/image 1_thumbnail 1.png" class="img-fluid" alt="...">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title">HomePod Gen 2</h3>
                                     <p class="card-text">#Living Series</p>
                                     <p class="card-harga">Rp. 2.500.000</p>
                                 </div>
                             </div>
                         </div>
                         <div class="items col-md-3 security-item">
                             <div class="card">
                                 <div class="img-box">
                                     <img src="../assets/images/proitems/Indoor-PTZ-Lite-Version 1.png" class="img-fluid" alt="...">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title">IP Camera (lite)</h3>
                                     <p class="card-text">#Security Series</p>
                                     <p class="card-harga">Rp. 560.000</p>
                                 </div>
                             </div>
                         </div>
                         <div class="items col-md-3 security-item ">
                             <div class="card">
                                 <div class="img-box">
                                     <img src="../assets/images/proitems/Perspective-1-BARDI 1.png" class="img-fluid" alt="...">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title">IP Camera (Pro)</h3>
                                     <p class="card-text">#Security Series</p>
                                     <p class="card-harga">Rp. 670.000</p>
                                 </div>
                             </div>
                         </div>
                         <div class="items col-md-3 electrical-item ">
                             <div class="card">
                                 <div class="img-box">
                                     <img src="../assets/images/proitems/Smart-Plug-BLE-Wi-Fi-Version 1.png" class="img-fluid" alt="...">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title">Portable Plug</h3>
                                     <p class="card-text">#Electrical Series</p>
                                     <p class="card-harga">Rp. 75.000</p>
                                 </div>
                             </div>
                         </div>
                         <div class="items col-md-3 living-item">
                             <div class="card">
                                 <div class="img-box">
                                     <img src="../assets/images/proitems/image 8.png" class="puriffer" alt="...">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title">Air Puriffier</h3>
                                     <p class="card-text">#Living Series</p>
                                     <p class="card-harga">Rp. 3.100.000</p>
                                 </div>
                             </div>
                         </div>
                         <div class="items col-md-3 electrical-item">
                             <div class="card">
                                 <div class="img-box">
                                     <img src="../assets/images/proitems/Bluetooth-Gateway-2 1.png" class="img-fluid" alt="...">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title">Bluetooth Gateway</h3>
                                     <p class="card-text">#Electrical Series</p>
                                     <p class="card-harga">Rp. 150.000</p>
                                 </div>
                             </div>
                         </div>
                         <div class="items col-md-3 living-item">
                             <div class="card">
                                 <div class="img-box">

                                     <img src="../assets/images/proitems/Control-Panel-4-inch 1.png" class="img-fluid" alt="...">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title">Smart Panel</h3>
                                     <p class="card-text">#Living Series</p>
                                     <p class="card-harga">Rp. 2.450.000</p>
                                 </div>
                             </div>
                         </div>
                         <div class="items col-md-3 lighting-item">
                             <div class="card">
                                 <div class="img-box">

                                     <img src="../assets/images/proitems/image 9.png" class="lampp" alt="...">
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

         <section class="section5 brand">
             <div class="container-fluid">
                 <div class="row justify-content-center">
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

         <section class="section6">
             <div class="container-fluid p-0">
                 <div class="content-sec6 overflow-hidden">
                     <div class="row">
                         <div class="col-lg-7 p-0">
                             <div class="row">
                                 <div class="column-kiri d-flex justify-content-center align-items-center" data-aos="fade-zoom-in" data-aos-duration="600">
                                     <div class="search ">
                                         <div class="input-group">
                                             <input type="search" class="form-control" id="search" data-aos="fade-up" data-aos-duration="1000">
                                             <!-- <button class="btn " type="button" id="button-addon2"><span><img src="../assets/images/pesawat-kertas.png" alt="pesawat" class="img-fluid"></span></button> -->
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
                 </div>
             </div>
             <!-- Footer -->
             <?php include('../components/footer.php') ?>
             <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
             <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
             </script>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
             </script>
             <script src="../components/javascript/header.js"></script>
             <script src="../assets/script/product.js?v=<?php echo time(); ?>"></script>
             <script>
                 AOS.init();
             </script>
 </body>

 </html>