<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/style/style_index.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/style/swiper-bundle.min.css">

  <title>Web Smart Home</title>
</head>

<body style="background-color: #D7E2E4;">

  <!-- Header -->
  <?php include('../components/header.php') ?>

  <!-- content -->
  <div class="page-content page-home">
    <!-- section1 -->
    <section class="section1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 w-100">
            <div class="content">
              <p class="mb-3 title-betterhome">We make your better home</p>
              <h2>The Next Levels</h2>
              <h1>Smart Gadget.</h1>
              <div class="d-flex button-lamp">
                <div class="button-arrow mb-0 d-flex align-items-center ">
                  <p class="mb-0 ps-2">Jelajahi Produk</p>
                  <img class="arrow-img " src="../assets/images/arrow-right.png" alt="" />
                </div>
              </div>
              <div class="icon d-flex mt-4">
                <img src="../assets/images/Whatsapp.svg" alt="" />
                <img src="../assets/images/Instagram.svg" alt="" />
                <img src="../assets/images/Facebook.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section2">
      <div class="container">
        <div class="content">
          <div class="row">
            <div class="img-wrapper">
              <img src="../assets/images/laptop-lengkap.png" class="laptop" />
              <img src="../assets/images/bola-biji.png" alt="" class="left-img" />
              <img src="../assets/images/Group 1530.png" alt="" class="right-img" />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h1>Better Home<br />Better Life</h1>
            </div>
            <div class="col-lg-6">
              <p class="mt-2 mb-4"> Buat hidupmu meajadi lebih<br />indah dengan Smart Home </p>
              <a href="#">Buat Ruangan Baru</a>
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
            <div class="col-lg-12 mb-5">
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
                <h2>Penggunaan listrik yang lebih hemat</h2>
                <p> Anda dapat mengatur kapan perangkat Smart Home dinyalakan dan dimatikan secara smart online. </p>
              </div>
              <div class="content-benefit benefit-2">
                <h2>Kontrol yang mudah</h2>
                <p> Anda dapat mengatur perangkat Smart Home sesuka hati anda mulai dari menyalakan, mematikan, penjadwal, dsb. </p>
              </div>
              <div class="content-benefit benefit-3">
                <h2>Integrasi & automisasi</h2>
                <p> Anda dapat mengatur Input yang terjadi secara otomatis berdasarkan waktu, peristiwa, atau kondisi tertentu </p>
              </div>
            </div>
            <div class="col-lg-5">
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
          <div class="col-lg-7">
            <div class="card black-card">
              <p>promo terbatas!</p>
              <h2>15% Pre-order Discount</h2>
            </div>
            <img src="../assets/images/img-about.png" alt="" class="img-about" />
          </div>
          <div class="col-lg-5 mt-5 col-text">
            <p>Produk Terbaru!</p>
            <h1>HomePed Gen 2<br />+ Smart Lamp (Free)</h1>
            <p class="mt-4">
              Buat ruangan menjadi lebih interaktif dengan fitur yang lebih
              banyak seperti pengaturan lewat suara dan masih banyak lagi.
              Promo terbatas!
            </p>
            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="card">
                  <img src="../assets/images/image 1_thumbnail 1.png" alt="" class="img-ball" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card ml-auto">
                  <img src="../assets/images/lampu.png" alt="" class="img-lamp" />
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
    <section class="section5 overflow-hidden">
      <div class="container">
        <div class="title d-flex">
          <h1>Apa kata mereka?</h1>
          <div class="line"></div>
          <a href="#">Scroll to view all</a>
        </div>
      </div>
      <div class="container swiper mt-5">
        <div class="slide-container">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-box">
                <p>HomePod dari Smart Life memiliki desain yang minimalis dan elegan. Material yang digunakan terasa kokoh dan berkualitas tinggi.</p>
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
                <p> Ukurannya yang kecil memudahkan saya untuk menempatkannya di berbagai ruangan. Saya sangat merekomendasikan.</p>
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
                <p>Recomended banget, kualitas ngga perlu diragukan & untuk ukuran Smart Home dengan kualitas seperti ini udah termasuk worth it dengan harganya</p>
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
                <p>Pelayanannya baik, respon dari costumer service cepat, dan tampilannya juga keren enak dan praktis digunakan</p>
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
                <p>Website ini sangat membantu untuk kegiatan sehari hari keluarga saya. Aktivias kami jadi lebih praktis dan terbantu</p>
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
                  <div class="search">
                    <div class="input-group">
                      <input type="search" class="form-control " id="search" placeholder="Masukan Pertanyaanmu">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 border-silver-bawah"></div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="row">
                <div class="col-lg-12 border-silver-atas"></div>
                <div class="col-lg-12 column-kanan d-flex justify-content-center ">
                  <div class="row ml-5">
                    <div class="col-lg-12 mt-5">
                      <p class="title">Tulis pertanyaan, costumer <br>
                        service kami siap menjawab <br>
                        keraguan anda <br>
                      </p>
                    </div>
                    <div class="col-lg-12 ">
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
  <script src="../assets/script/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/script/script.js"></script>
  <script src="../assets/script/index.js?v=<?php echo time(); ?>"></script>
</body>

</html>