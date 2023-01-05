
<nav class="navbar navbar-expand-md bg-success navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand text-danger" href="<?= base_url('home'); ?>">MY-ATKULL</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <?php if($this->session->userdata('access')=='Administrator'){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('dosen'); ?>">Dosen</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('matkul'); ?>">Mata Kuliah</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">Mahasiswa</a>
        </li>
      <?php } if($this->session->userdata('access')=='Dosen'){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">Daftar Mahasiswa</a>
        </li>
      <?php } if($this->session->userdata('access')=='Mahasiswa'){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">Daftar Mata Kuliah</a>
        </li>
      <?php }; ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('login/logout');?>">Logout</a>
        </li>
   </ul>
  </div>
</nav>
