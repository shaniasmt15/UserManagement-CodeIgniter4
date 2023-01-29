<main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <?php if($session['role'] === 'admin')
            
            echo '<div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Karyawan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>'. $total_karyawan .'</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Total Admin</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-activity"></i>
                    </div>
                    <div class="ps-3">
                      <h6>' .$total_admin. '</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->';

            ?>

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Tentang Perusahaan</span></h5>
                  <p class="card-text justify-content-center">Lyrid Prima Indonesia didirikan pada tahun 2018. Tim kami terdiri dari para profesional yang memiliki pengalaman lebih dari 10 tahun di bidangnya masing-masing. 
                  Lyrid telah menghasilkan produk perangkat lunak yang sangat baik dan mengelola proyek perangkat lunak mulai dari awal ide, persyaratan, desain, pengkodean, pengujian, dan pemasaran. 
                  Kami telah bekerja dengan mitra kami di berbagai bidang seperti Konsultan IT, Pengembangan Sistem, Rekayasa Jaringan, Aplikasi Seluler, Sistem Absensi, Aplikasi Basis Data, Periklanan Digital, dan IoT (Internet Of Things).
                  Kami terinspirasi oleh ide-ide yang memberikan kenyamanan, kemudahan dan keamanan untuk Anda. Dan secara konsisten terus menyediakan produk dan layanan terkini yang dapat menjadi solusi bagi segala kebutuhan Anda.</p>
                  <!-- List group With Icons -->
                  <ul class="list-group">
                    <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i> Professional Specialist</li>
                    <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i> Brilliant Ideas</li>
                    <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i> Precise Builders</li>
                    <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i> 24/7 Assiatance</li>
                  </ul><!-- End List group With Icons -->
                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Visi & Misi</h5>
              <hr>
              <h5 class="card-subtitle">Visi</h5>
              <hr> 
              <p class="card-text justify-content-center">
                Menjadi konsultan teknologi terkemuka yang memberikan solusi teknologi bisnis terbaik. Dengan fokus pada layanan di bidang teknologi informasi, meliputi: integrasi sistem, manajemen teknologi informasi, dan pengembangan perangkat lunak dan perangkat keras.
              </p>

              <hr>
              <h5 class="card-subtitle">Misi</h5>
              <hr>
              <p class="card-text justify-content-center">
               Memberikan produk terintegrasi terbaik, solusi efisien, teknologi canggih, database aman, efektivitas biaya, dan layanan tingkat tinggi. Kami selalu berusaha untuk menghasilkan dan mengembangkan produk yang berkualitas dan dapat diintegrasikan sesuai dengan kebutuhan konsumen dengan memberikan solusi yang efektif dan efisien sebagai prioritas utama, kemajuan teknologi yang mendukung bisnis pelanggan, pemanfaatan database yang baik dan aman, harga yang berkualitas, terjangkau dan dapat disesuaikan dengan bisnis klien dengan memberikan layanan berkualitas baik kepada klien.
              </p>
            </div>
          </div><!-- End Recent Activity -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->