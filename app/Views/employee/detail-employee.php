<main id="main" class="main">

<div class="pagetitle">
  <h1>Profil Karyawan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Karyawan</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="<?= base_url('uploads/karyawan/' .$session['picture'])?>" width="120px" height="120px" alt="Profile" class="rounded-circle">
          <h2><?= $session['nama'];?></h2>
          <h3><?= $session['jabatan'];?></h3>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Ringkasan</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>
          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">

              <h5 class="card-title">Data Profil</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                <div class="col-lg-9 col-md-8"><?= $karyawan['nama'];?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">NIP</div>
                <div class="col-lg-9 col-md-8"><?= $karyawan['nip'];?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Jabatan</div>
                <div class="col-lg-9 col-md-8"><?= $karyawan['jabatan'];?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?= $karyawan['email'];?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form  action="<?= base_url('karyawan/update/'. $karyawan['id']) ?>" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="<?= base_url('uploads/karyawan/' . $karyawan['picture'])?>" alt="Profile" width="100px" height="100px" alt="Profile" id="preview-img" name="preview-img" class="preview-img">
                    <div class="pt-2">
                        <input class="form-control picture" type="file" id="picture" name="picture"> 
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nama" type="text" class="form-control" id="nama" value="<?= $karyawan['nama'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="nip" class="col-md-4 col-lg-3 col-form-label">NIP</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nip" type="text" class="form-control" id="nip" value="<?= $karyawan['nip'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="jabatan" type="text" class="form-control" id="jabatan" value="<?= $karyawan['jabatan'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="email" value="<?= $karyawan['email'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Level Login</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" id="role" name="role">
                        <option >Pilih Level Login</option>
                        <option <?= ($karyawan['role'] == 'admin' ? "selected=''" : "") ?>value="admin">Admin</option>
                        <option <?= ($karyawan['role'] == 'karyawan' ? "selected=''" : "") ?>value="karyawan">Karyawan</option>
                    </select> 
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-success float-end">Simpan</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->