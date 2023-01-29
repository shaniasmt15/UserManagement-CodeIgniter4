<main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Karyawan</li>
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
                <div class="com-sm">
                <a href="<?= route_to('karyawan/tambah')?>" type="button" class="btn btn-sm btn-success mt-4 me-4 float-end"><i class="bi bi-plus me-1"></i> Tambah</a>
                </div>

                <div class="card-body">

                <?php if(!empty(session()->getFlashdata('success'))){ ?>
                  <div class="alert alert-success alert-dismissible fade show mt-4" role="alert"> 
                      <i class="bi bi-check-circle me-1"></i> <?=  session()->getFlashdata('success') ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

                <?php } ?>
                
              
                  <h5 class="card-title">Data Karyawan </h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level Login</th>
                        <th scope="col">Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach ($karyawan as $data) : ?>
                      <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <th scope="row">
                        <img src="<?=base_url('uploads/karyawan/' . $data['picture'])?>" alt="Profile" height="55px" width="55px" class="rounded-circle ">
                        </th>
                        <th><?= $data['nip'] ?></th>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><span class="badge <?= ($data['role'] == "karyawan") ? "bg-primary": "bg-danger"?>"><?= $data['role'] ?></span></td>
                        <td>
                          <a href="<?= base_url("karyawan/detail/".$data['id']);?>" class="btn btn-warning"><i class="bi bi-eye"></i></a>
                          <a href="<?= base_url("karyawan/hapus/".$data['id']);?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                      </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->