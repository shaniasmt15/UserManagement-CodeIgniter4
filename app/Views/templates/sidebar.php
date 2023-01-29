<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">

      <a class="nav-link collapsed" href="/">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <?php if ($session['role'] === 'admin') {

      echo "<li class='nav-item'>
    <a class='nav-link collapsed' href='" . base_url('karyawan/kelola') . "'>
      <i class='bi bi-people'></i>
      <span>Data Karyawan</span>
    </a>
  </li>";
    }



    ?>


  </ul>

</aside><!-- End Sidebar-->