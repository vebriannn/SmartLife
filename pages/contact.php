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
     <title><?= $title ?> | SmartHome</title>
 </head>

 <body>

     <!-- Header -->
     <?php include('../components/header.php'); ?>

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