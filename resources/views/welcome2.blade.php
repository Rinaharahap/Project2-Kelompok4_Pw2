<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>landing page - Campus Vehicle Parking Service</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/assets/assets/img/logo-parkir.png')}}" rel="icon">
  <link href="{{asset('landing/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('landing/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{asset{('landing/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('landing/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h3 class="sitename">Campus Vehicle Parking</h3>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Menu</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Facilitiess</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          @if (Route::has('login'))
          @auth
          <li><a href="{{ url('/dashboard') }}" class="auth-link">Dashboard</a></li>
          @else
          <li><a href="http://127.0.0.1:8000/area_parkir" class="auth-link">Log in</a></li>
          @if (Route::has('register'))
          <li><a href="{{ route('register') }}" class="auth-link">Register</a></li>
          @endif
          @endauth
          @endif
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h4><b>Welcome to the Campus Vehicle Parking</b></h4>
            <p>Tentunya Pelayanan parkir kampus kami yang Terbaik di Indonesia</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Mulai Sekarang</a>
              <a href="https://youtu.be/eZk9rvx9JAI?si=8pdP7jD3s9mVulK2"
                class=" btn-watch-video d-flex align-items-center"><i
                  class="bi bi-play-circle"></i><span>Tayangan</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('landing/img/animation-1.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Selamat datang di Layanan Campus Vehicle Parking, solusi Anda untuk parkir yang nyaman dan aman di
              universitas kami.
              Kami memahami pentingnya fasilitas parkir yang andal bagi mahasiswa, dosen, staf, dan pengunjung.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Penyediaan Layanan Parkir Terpercaya.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Solusi Parkir yang Nyaman dan Aman.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Dedikasi untuk Meningkatkan Kehidupan Kampus.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Di Layanan Campus Vehicle Parking, kami berdedikasi untuk terus meningkatkan fasilitas dan layanan kami.
              Kami menyambut umpan balik dari komunitas kampus untuk membantu kami meningkatkan pengalaman parkir Anda.
            </p>
            <a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h4><strong>Layanan Utama Campus Vehicle Parking</strong></h4>
              <p>
                Selamat datang di Layanan Campus Vehicle Parking. Kami menyediakan booking online, keamanan 24/7,
                dan perizinan parkir fleksibel untuk memastikan pengalaman parkir yang nyaman dan aman.
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>1</span>Booking Online Blok Area Parkir yang Mudah</h3>
                <div class="faq-content">
                  <p>Layanan Booking Online Blok Area Parkir untuk memastikan ketersediaan tempat saat kedatangan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>2</span> Keamanan 24/7</h3>
                <div class="faq-content">
                  <p>Pengawasan dan patroli keamanan yang Beroperasi Sepanjang Waktu Untuk Melindungi Kendaraan Pengguna
                    Tentunya dilengkapi CCTV 24 Jam.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>3</span>Pilihan Fleksibel Perizinan</h3>
                <div class="faq-content">
                  <p>Opsi perizinan parkir yang beragam, termasuk harian, mingguan, dan bulanan untuk memenuhi kebutuhan
                    mahasiswa, dosen dan, staf.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3><span>4</span>Lokasi Parkir Strategis</h3>
                <div class="faq-content">
                  <p>Penempatan Blok Area Parkir yang Strategis di Sekitar Kampus Untuk Memudahkan Akses ke
                    Gedung-Gedung Utama dan Fasilitas Kampus Lainnya.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3><span>5</span>Layanan Bantuan Darurat</h3>
                <div class="faq-content">
                  <p>Ketersediaan layanan bantuan darurat seperti bantuan penguncian kunci, jumper battery, dan bantuan
                    ban bocor
                    untuk memberikan rasa aman dan kenyamanan ekstra bagi pengguna parkir.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="{{asset('landing/img/animation-2.png')}}" class="img-fluid" alt="" data-aos="zoom-in"
              data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fasilitas</h2>
        <p>Tentunya Kami Menyediakan Fasilitas Parkir Demi Kenyamanan Pengguna</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-geo-alt icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Outdoor & Basement</a></h4>
              <p>Penyediaan area parkir terbuka dan tertutup untuk kendaraan</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-shield-check icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Keamanan CCTV</a></h4>
              <p>Pengawasan CCTV 24/7 untuk keamanan Kendaraan Anda</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-battery-charging icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Cas Batre</a></h4>
              <p>Fasilitas ini dikhususkan untuk cas batre kendaraan listrik</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-info-circle icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Informasi Parkir</a></h4>
              <p>Papan informasi digital yang memberikan petunjuk langsung kepada pengguna parkir kendaraan</p>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section>
    <!-- /Services Section -->
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
      <img src="{{asset('landing/img/scroller-1.webp')}}" alt="">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Booking Online Campus Vehicle Parking</h3>
            <br>
            <p>Booking Online Campus Vehicle Parking memudahkan pengguna, mahasiswa, dosen,</p>
            <p>dan staf untuk memesan tempat parkir secara praktis dan efisien melalui platform online</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="http://127.0.0.1:8000/area_parkir">Booking Online</a>
          </div>
        </div> 
      </div>
    </section><!-- /Call To Action Section -->
    <!-- Portfolio Section -->
    <!-- Team Section -->
    <section id="team" class="team section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team Campus Vehicle Parking</h2>
        <p>Kami berkomitmen untuk menyediakan kenyamanan parkir yang efisien bagi seluruh pengguna kampus.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{asset('landing/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Fakhrizal</h4>
                <span>Team 1 (SI05)</span>
                <p>Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri Angkatan 2023</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{asset('landing/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Ifan</h4>
                <span>Team 2 (SI05)</span>
                <p>Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri Angkatan 2023</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{asset('landing/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Raffi</h4>
                <span>Team 3 (SI05)</span>
                <p>Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri Angkatan 2023</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{asset('landing/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Monica Azzahra</h4>
                <span>Team 4 (SI05)</span>
                <p>Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri Angkatan 2023</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{asset('landing/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rina Harahap</h4>
                <span>Team 5 (SI05)</span>
                <p>Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri Angkatan 2023</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>
      </div>
    </section>
    <!-- End Team Member -->
    </div>
    </div>
    </section>

    <!-- /Team Section -->
    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan yang Sering Diajukan </h2>
        <p>Pertanyaan yang Sering Diajukan kami hadirkan untuk memberikan informasi lengkap tentang layanan kami</p>
      </div>
      <!-- End Section Title -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="faq-container">
              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Apa yang dimaksud dengan "Booking Online Campus Vehicle Parking"?</h3>
                <div class="faq-content">
                  <p>Booking Online Campus Vehicle Parking adalah layanan yang memungkinkan mahasiswa, dosen, dan staf
                    untuk memesan tempat parkir
                    secara praktis melalui platform online, memastikan ketersediaan tempat parkir saat kedatangan di
                    kampus.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana cara menggunakan sistem Booking Online Campus Vehicle Parking?</h3>
                <div class="faq-content">
                  <p>Anda dapat mengakses platform kami melalui website resmi parkir kampus. Pilih tanggal dan waktu
                    kedatangan Anda,
                    lalu pilih area parkir yang tersedia sesuai kebutuhan Anda. Setelah pembayaran selesai,
                    Anda akan menerima konfirmasi booking melalui email atau SMS.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apa keuntungan menggunakan layanan Booking Online Campus Vehicle Parking?</h3>
                <div class="faq-content">
                  <p>Keuntungan utama menggunakan layanan ini adalah Anda dapat memastikan ketersediaan tempat parkir
                    sebelum kedatangan,
                    menghemat waktu pencarian parkir, dan meningkatkan pengalaman pengguna dengan proses yang efisien
                    dan terjamin.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana keamanan parkir di kampus dijamin?</h3>
                <div class="faq-content">
                  <p>Setiap area parkir dilengkapi dengan sistem keamanan CCTV 24/7 dan petugas keamanan
                    yang siap membantu untuk memastikan kendaraan Anda tetap aman selama berada di kampus.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah ada fasilitas tambahan yang tersedia di area parkir kampus?</h3>
                <div class="faq-content">
                  <p>Kami menyediakan fasilitas seperti pengisian baterai untuk kendaraan listrik dan papan informasi
                    digital
                    yang memberikan petunjuk langsung tentang ketersediaan tempat parkir di berbagai area kampus.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Faq 2 Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi Call Center kami untuk informasi lebih lanjut tentang "Campus Vehicle Parking"</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa, Kota
                    Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telepon</h3>
                  <p>(021) 7863191</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>STTNF@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207723284!2d106.83004331061731!3d-6.352924493610442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1719428736262!5m2!1sid!2sid"
                width="390" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="/hasilform.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">
                <h3 style="text-align: center;">Form Laporan atau Pengaduan</h3>
                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nama Lengkap</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>
                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>
                <div class="col-md-12">
                  <label for="laporan-field" class="pb-2">Laporan</label>
                  <input type="text" class="form-control" name="laporan" id="subject-field" required="">
                </div>
                <div class="col-md-12">
                  <label for="pesan-field" class="pb-2">Pesan</label>
                  <textarea class="form-control" name="pesan" rows="10" id="pesan-field" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">



    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Campus Vehicle Parking</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl Lenteng Agung Raya No.20 RT.5/RW.1, </p>
            <p>Srengseng Sawah, Kec. Jagakarsa,</p>
            <p>Kota Jakarta Selatan,DKI Jakarta 12640</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>(021) 7863191</span></p>
            <p><strong>Email:</strong> <span>STTNF@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Facilities</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Team</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Faslitas</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Outdoor & Basement Areas</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Keamanan CCTV</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Cas Batre</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Informasi Parkir</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti kami</h4>
          <p>Mari Follow Sosial Media Kami Agar Anda Mendapatkan Informasi Terbaru dari Campus Vehicle Parking!!</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Campus Vehicle Parking</strong> <span>All Rights
          Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a
          href="https://www.instagram.com/sttnf_official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Mahasiswa
          STT-NF Angkatan 2023</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landing/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('landing/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('landing/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('landing/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('landing/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('landing/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('landing/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('landing/js/main.js')}}"></script>

</body>

</html>