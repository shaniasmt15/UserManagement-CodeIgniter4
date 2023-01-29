<main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Karyawan</a></li>
          <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg">
          <div class="row">
             <!-- Recent Sales -->
             <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Tambah Data Karyawan </h5>
                     <!-- Profile Edit Form -->
                    <form action="<?= base_url('karyawan/tambah') ?>" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <img src="<?= base_url('assets/img/profile-img.jpg')?>" width="100px" height="100px" alt="Profile" id="preview-img" name="preview-img" class="preview-img">
                            <div class="pt-2">
                                <input class="form-control picture" type="file" id="picture" name="picture"> 
                            </div>
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nama" type="text" class="form-control" id="nama">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="nip" class="col-md-4 col-lg-3 col-form-label">NIP</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nip" type="text" class="form-control" id="nip">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="jabatan" type="text" class="form-control" id="jabatan">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="password" class="col-md-4 col-lg-3 col-form-label">Kata Sandi</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="role" class="col-md-4 col-lg-3 col-form-label">Level Login</label>
                        <div class="col-md-8 col-lg-9">
                            <select class="form-select" id="role" name="role">
                                <option selected="">Pilih Level Login</option>
                                <option value="admin">Admin</option>
                                <option value="karyawan">Karyawan</option>
                            </select> 
                        </div>
                        </div>

                        <div class="text-end">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </form><!-- End Profile Edit Form -->

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->